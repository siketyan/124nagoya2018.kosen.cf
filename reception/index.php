<?php
  //error_reporting(~E_ALL);
  include "../inc/mysql.php";

  if (isset($_POST["submit"])) {
    $name = $_FILES["csv"]["tmp_name"];
    $file = fopen($name, "r");
    $is_header = true;

    while (($line = fgets($file)) !== false) {
      if ($is_header === true) {
        $is_header = false;
        continue;
      }

      $converted = mb_convert_encoding($line, "UTF-8", "SJIS");
      $array = explode(",", $converted);

      $id = $array[7];
      $name = $array[1];
      $display_name = $array[2];
      $comment = $array[3];
      $is_student = $array[0] === "学生参加";
      $is_canceled = $array[4] !== "参加";
      $is_received = false;
      $created_at = DateTime::createFromFormat("Y年m月d日 H時i分", $array[6])->format("Y-m-d H:i:s");

      if ($name !== "(退会ユーザー)") {
        $html = file_get_contents("https://connpass.com/user/$name/");
        if (preg_match("/\/thumbs\/([0-9a-f]{2}\/){2}([0-9a-f]{32}).png\" width=\"180\" height=\"180\"/", $html, $matches) === 1) {
          $icon = $matches[2];
        } else {
          $icon = null;
      	}
      } else {
        $icon = null;
      }

      $stmt = $SQL->prepare("INSERT INTO `participants` VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?);");
      $stmt->bind_param(
        "issssiiis",
        $id,
        $name,
        $display_name,
        $comment,
        $icon,
        $is_student,
        $is_canceled,
        $is_received,
        $created_at
      );
      $stmt->execute();
      $stmt->close();
    }
  }

  $result = $SQL->query("SELECT * FROM `participants`;");
  $participants = [];
  $received_participants = [];
  $canceled_participants = [];

  while ($participant = $result->fetch_assoc()) {
    if ($participant["is_canceled"]) {
      $canceled_participants[] = $participant;
    } else if ($participant["is_received"]) {
      $received_participants[] = $participant;
    } else {
      $participants[] = $participant;
    }
  }

  $num_participants = $result->num_rows;
  $num_received = count($received_participants);
  $num_canceled = count($canceled_participants);

  include "../inc/header.php";
?>
    <nav id="navbar" class="navbar is-warning is-fixed-top is-hidden">
      <div class="container">
        <div class="navbar-brand">
          <div class="navbar-item">
            <img src="/img/logo.png"
                 alt="高専カンファレンス in 名古屋 2018">
            <span class="little-left-margin">
              高専カンファレンス in 名古屋 2018
            </span>
          </div>
        </div>
      </div>
    </nav>
    <section id="header" class="hero is-warning">
      <div class="hero-body">
        <div class="container">
          <div class="media">
            <div class="media-left is-hidden-mobile">
              <p class="image is-128x128">
                <img src="/img/logo.png">
              </p>
            </div>
            <div class="media-content">
              <p class="image is-64x64 is-hidden-tablet">
                <img src="/img/logo.png">
              </p>
              <h1 class="title is-2 top-margin">
                高専カンファレンス
                <br class="is-hidden-tablet">
                in 名古屋 2018
              </h1>
              <h3 class="subtitle is-3">
                受付ダッシュボード
              </h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div>
          <h3 class="title is-3">
            <i class="fas fa-play"></i>
            現在の状況
            <small class="is-size-5">
              （キャンセルを含まない）
            </small>
          </h3>
          <div class="columns">
            <div class="column has-text-centered">
              <h5 class="is-size-5">出席者</h5>
              <h1 class="is-size-1">
                <?= $num_received; ?>
                <small class="is-size-3">人</small>
              </h1>
            </div>
            <div class="column has-text-centered">
              <h5 class="is-size-5">
                未受付者
              </h5>
              <h1 class="is-size-1">
                <?= $num_participants - $num_received - $num_canceled; ?>
                <small class="is-size-3">人</small>
              </h1>
            </div>
            <div class="column has-text-centered">
              <h5 class="is-size-5">出席率</h5>
              <h1 class="is-size-1">
                <?= number_format($num_received / ($num_participants - $num_canceled) * 100, 2); ?>
                <small class="is-size-3">%</small>
              </h1>
            </div>
          </div>
        </div>
        <br>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-plus"></i>
            新規受付
          </h3>
<?php render_participants($participants); ?>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-check"></i>
            受付済み
          </h3>
<?php render_participants($received_participants, false); ?>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-times"></i>
            キャンセル済み
          </h3>
<?php render_participants($canceled_participants, false, false); ?>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-upload"></i>
            インポート
          </h3>
          <form class="form" method="post" enctype="multipart/form-data">
            <input type="file"
                   name="csv">
            <br>
            <button class="button is-success is-rounded top-margin"
                    type="submit"
                    name="submit">
              <span class="icon is-small">
                <i class="fas fa-paper-plane"></i>
              </span>
              <span>送信</span>
            </button>
          </form>
        </div>
      </div>
    </section>
<?php
  include "../inc/footer.php";

  function render_participants($participants, $show_receive = true, $show_cancel = true) {
    foreach ($participants as $participant) {
      $id = $participant["id"];
      $icon = $participant["icon"];

      if ($icon !== null) {
        $icon_prefix_1 = substr($icon, 0, 2);
        $icon_prefix_2 = substr($icon, 2, 2);
        $icon_uri = "https://connpass-tokyo.s3.amazonaws.com/thumbs/$icon_prefix_1/$icon_prefix_2/$icon.png";
      } else {
        $icon_uri = "https://connpass.com/static/img/common/user_no_image.gif";
      }
?>
          <div class="media">
            <div class="media-left">
              <p class="image is-48x48">
                <img class="is-rounded"
                     src="<?= $icon_uri; ?>">
              </p>
            </div>
            <div class="media-content">
              <p>
                <strong><?= $participant["display_name"]; ?></strong>
<?php
      if ($participant["is_student"]) {
?>
                <span class="tag is-primary is-rounded">学生参加</span>
<?php
      } else {
?>
                <span class="tag is-info is-rounded">社会人参加</span>
<?php
      }
?>
                <br>
                <?= $participant["comment"]; ?>
                <br>
<?php
      if ($show_receive) {
?>
                <a class="button is-small is-warning is-rounded little-top-margin"
                   href="/reception/receive.php?id=<?= $id; ?>">
                  <span class="icon is-small">
                    <i class="fas fa-user-plus"></i>
                  </span>
                  <span>選択</span>
                </a>
<?php
      }

      if ($show_cancel) {
?>
                <a class="button is-small is-danger is-rounded little-top-margin"
                   href="/reception/cancel.php?id=<?= $id; ?>">
                  <span class="icon is-small">
                    <i class="fas fa-times"></i>
                  </span>
                  <span>キャンセル</span>
                </a>
<?php
      }
?>
              </p>
            </div>
          </div>
<?php
    }
  }
?>