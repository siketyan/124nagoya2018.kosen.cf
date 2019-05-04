<?php
  include "../inc/mysql.php";

  $id = $_GET["id"];

  $stmt = $SQL->prepare("SELECT * FROM `participants` WHERE `id` = ?;");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $stmt->bind_result($id, $name, $display_name, $comment, $icon, $is_student, $is_canceled, $is_received, $created_at);
  $stmt->fetch();
  $stmt->close();

  if (isset($_POST["submit"])) {
      $stmt = $SQL->prepare("UPDATE `participants` SET `is_received` = TRUE WHERE `id` = ?;");
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $stmt->close();

      header("Location: /reception/");
      exit();
  }

  if ($icon !== null) {
    $icon_prefix_1 = substr($icon, 0, 2);
    $icon_prefix_2 = substr($icon, 2, 2);
    $icon_uri = "https://connpass-tokyo.s3.amazonaws.com/thumbs/$icon_prefix_1/$icon_prefix_2/$icon.png";
  } else {
    $icon_uri = "https://connpass.com/static/img/common/user_no_image.gif";
  }

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
                受付
              </h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="media">
          <div class="media-left">
            <p class="image is-48x48">
              <img class="is-rounded"
                   src="<?= $icon_uri; ?>">
            </p>
          </div>
          <div class="media-content">
            <p>
              <strong><?= $display_name; ?></strong>
<?php
    if ($is_student) {
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
              <?= $comment; ?>
              <br>
              <div class="content is-size-7">
                <ul>
                  <li>ユーザ名: <?= $name; ?></li>
                  <li>受付番号: <?= $id; ?></li>
                  <li>受付日時: <?= $created_at; ?></li>
                  <li>受付済み: <?= $is_received ? "はい" : "いいえ"; ?></li>
                  <li>キャンセル済み: <?= $is_canceled ? "はい" : "いいえ"; ?></li>
                </ul>
              </div>
            </p>
          </div>
        </div>
        <br>
        <br>
        <p class="has-text-centered">
          上記ユーザの受付をします。
          よろしいですか？

          <form class="has-text-centered" method="post">
            <a class="button is-danger is-rounded top-margin"
               href="/reception/">
              <span class="icon is-small">
                <i class="fas fa-backward"></i>
              </span>
              <span>戻る</span>
            </a>
            <button class="button is-success is-rounded top-margin"
                    type="submit"
                    name="submit">
              <span class="icon is-small">
                <i class="fas fa-paper-plane"></i>
              </span>
              <span>確定</span>
            </button>
          </form>
        </p>
      </div>
    </section>
<?php include "../inc/footer.php"; ?>