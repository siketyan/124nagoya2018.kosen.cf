<?php
  include "inc/mysql.php";

  $result = $SQL->query("SELECT * FROM `participants`;");
  $participants = [];
  while ($participant = $result->fetch_assoc()) {
    $participants[$participant["id"]] = $participant;
  }

  $presentations = [
    [
      [
        "participant" => $participants[1393943],
        "is_lt" => true,
        "title" => "校歌Remixで始めるDTM入門"
      ],
      [
        "participant" => $participants[1409850],
        "is_lt" => true,
        "title" => "kosen solid / 今こそ高専生発のSNSを！"
      ],
      [
        "participant" => $participants[1393912],
        "is_lt" => true,
        "title" => "Androidアプリを作ったら(だいたい)2万ダウンロードになった話",
        "link" => "https://speakerdeck.com/sublimer/androidapuriwozuo-tutara-daitai-2mo-daunrodoninatutahua"
      ],
      [
        "participant" => $participants[1393865],
        "is_lt" => true,
        "title" => "他高専生になろう"
      ],
      [
        "participant" => $participants[1396441],
        "is_lt" => true,
        "title" => "フォントばっかり",
        "link" => "https://speakerdeck.com/chige/huontobatukari"
      ],
      [
        "participant" => $participants[1394181],
        "is_lt" => false,
        "title" => "高専教育リライト計画。"
      ]
    ],
    [
      [
        "participant" => $participants[1440008],
        "is_lt" => true,
        "title" => "高専ネットワークの場「KOSENメディアラボ」について"
      ],
      [
        "participant" => $participants[1398494],
        "is_lt" => true,
        "title" => "KOSENハッカソン"
      ],
      [
        "participant" => $participants[1445487],
        "is_lt" => true,
        "title" => "HackDay参加記録"
      ],
      [
        "participant" => $participants[1408079],
        "is_lt" => false,
        "title" => "技術同人誌を作った話",
        "link" => "https://speakerdeck.com/hsm_hx/lets-write-your-tech-book"
      ],
      [
        "participant" => $participants[1393857],
        "is_lt" => false,
        "title" => "ASP.NET Core ではじめる簡単Web開発",
        "link" => "https://speakerdeck.com/siketyan/gao-zhuan-kanhuarensu-in-ming-gu-wu-2018"
      ]
    ],
    [
      [
        "participant" => $participants[1393950],
        "is_lt" => true,
        "title" => "どろーんの本を作っちゃう話"
      ],
      [
        "participant" => $participants[1447448],
        "is_lt" => true,
        "title" => "ものづくりカフェ",
        "link" => "https://mono.cafe/@shukukei/101284784663400844"
      ],
      [
        "participant" => $participants[1409102],
        "is_lt" => true,
        "title" => "そのセ↑キュ↓リ↓ティ↑で大丈夫？？",
        "link" => "https://www.slideshare.net/Potyamaaaa/ss-126513390"
      ],
      [
        "participant" => $participants[1393858],
        "is_lt" => false,
        "title" => "ぼくの考えた最強のものづくり"
      ]
    ]
  ];

  include "inc/header.php";
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
              <p class="subtitle">
                <a class="button is-warning is-inverted is-outlined is-rounded little-top-margin"
                   href="https://connpass.com/event/105741/"
                   target="_blank">
                  <span class="icon is-small">
                    <i class="fas fa-external-link-alt"></i>
                  </span>
                  <span>connpass</span>
                </a>
                <a class="button is-info is-rounded little-top-margin"
                   href="/redirect/tweet"
                   target="_blank">
                  <span class="icon is-small">
                    <i class="fab fa-twitter"></i>
                  </span>
                  <span>ツイート</span>
                </a>
                <a class="button is-danger is-rounded little-top-margin"
                   href="/redirect/youtube"
                   target="_blank">
                  <span class="icon is-small">
                    <i class="fab fa-youtube"></i>
                  </span>
                  <span>YouTube</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="notification is-success">
          <i class="fas fa-check"></i>
          イベントは終了しました。多くの参加をいただきありがとうございました！
          <br>
          ライブ配信のアーカイブや、
          登壇された方の発表資料をいくつか掲載しておりますので、
          ぜひご覧ください。
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-book-open"></i>
            開催概要
          </h3>
          <p>
            「高専カンファレンス」は、高専に関係している人々が中心となり行う、勉強及び参加者同士の交流を目的とした会です。
          </p>
          <ul>
            <li>日時: 2018年12月22日（土）</li>
            <li>場所: 東カン名古屋キャステール2階 大会議室</li>
            <li>
              参加費用:
              <ul>
                <li>学生: 500円</li>
                <li>社会人: 1000円</li>
              </ul>
            </li>
            <li>定員: 80名</li>
            <li>
              テーマ: <strong>「ものづくり」</strong>
              <p class="is-size-7">
                思いを形にする「ものづくり」というものに着目し、このテーマに決定いたしました。
                <br>
                昔からものづくりで栄えてきたこの愛知県で様々なものを創るみなさん、また何かものを創ってみたいみなさんのご参加をお待ちしております。
              </p>
            </li>
          </ul>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-image"></i>
            ポスター
          </h3>
          <div class="columns">
            <div class="column is-3">
              <p class="image">
                <img src="/img/poster-thumbnail.png"
                     width="100%">
              </p>
            </div>
            <div class="column is-7">
              <a class="button is-warning is-rounded"
                 href="/img/poster.png"
                 target="_blank">
                 画像を拡大表示
              </a>
            </div>
          </div>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-chalkboard-teacher"></i>
            発表者募集
          </h3>
          <div class="content">
            <h4 class="title is-4 reduce-bottom-margin">発表形式</h4>
            <ul>
              <li>
                LT
                <span class="tag is-warning is-rounded">5分</span>
                <span class="tag is-danger is-rounded">11枠</span>
              </li>
              <li>
                一般発表（10分枠）
                <span class="tag is-warning is-rounded">10分</span>
                <span class="tag is-danger is-rounded">4枠</span>
              </li>
            </ul>
          </div>
          <div class="content">
            <h4 class="title is-4 reduce-bottom-margin">申し込み方法</h4>
            <p>
              募集は終了しました。
              多くのご応募ありがとうございました。
            </p>
          </div>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-comments"></i>
            懇親会
          </h3>
          <p>
            会場は同じです。
            参加者同士の交流を深めることを目的にしておりますので、名刺等用意しておくことをおすすめいたします。
          </p>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-video"></i>
            配信について
          </h3>
          <p>
            <s>
              発表のようすをライブ配信する予定です。
              撮影NGの場合は受付にてお申し出ください。
              よろしくお願いいたします。
            </s>
            <br>
            発表のようすをライブ配信しました。アーカイブが残っていますので、ぜひご覧ください。
          </p>
          <div class="youtube-embed">
            <iframe width="853" height="480"
                    src="https://www.youtube.com/embed/r2yzo0K-wi0"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>
          </div>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-clock"></i>
            タイムテーブル
          </h3>
          <ul>
            <li>
              <strong>12:00 ~</strong>
              <span class="little-left-margin">
                開場、受付開始
              </span>
            </li>
            <li>
              <strong>13:00 ~</strong>
              <span class="little-left-margin">
                オープニング
              </span>
            </li>
            <li>
              <strong>13:20 ~</strong>
              <span class="little-left-margin">
                発表 (1)
              </span>
              <br>
<?php
  render_presentations($presentations[0]);
?>
            </li>
            <li>
              <strong>14:28 ~</strong>
              <span class="little-left-margin">
                発表 (2)
              </span>
              <br>
<?php
  render_presentations($presentations[1]);
?>
            </li>
            <li>
              <strong>15:33 ~</strong>
              <span class="little-left-margin">
                発表 (3)
              </span>
              <br>
<?php
  render_presentations($presentations[2]);
?>
            </li>
            <li>
              <strong>~ 16:30</strong>
              <span class="little-left-margin">
                クロージング
              </span>
            </li>
            <li>
              <strong>~ 18:00</strong>
              <span class="little-left-margin">
                懇親会
              </span>
            </li>
          </ul>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-map-marker-alt"></i>
            交通アクセス
          </h3>
          <p class="is-marginless">
            愛知県名古屋市東区東桜2丁目3番7号
          </p>
          <ul class="little-top-margin">
            <li>地下鉄桜通線 ⾼岳駅 3番出⼝から徒歩3分</li>
          </ul>
          <iframe src="/redirect/map"
                  class="is-borderless"
                  width="100%" height="256px" frameborder="0"
                  allowfullscreen>
          </iframe>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-user-shield"></i>
            スタッフ
          </h3>
          <div class="media">
            <div class="media-left">
              <p class="image is-48x48">
                <img class="is-rounded"
                     src="/img/Ymgn_Bass.jpg">
              </p>
            </div>
            <div class="media-content">
              <p>
                <strong>ﾔﾏｹﾞﾝ</strong>
                <span class="tag is-warning is-rounded">実行委員長</span>
                <br>
                ゆで卵が上手に剥けません。
              </p>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <p class="image is-48x48">
                <img class="is-rounded"
                     src="/img/Siketyan.jpg">
              </p>
            </div>
            <div class="media-content">
              <p>
                <strong>Siketyan</strong>
                <span class="tag is-primary is-rounded">受付・HP作成</span>
                <br>
                C#とかJavaとかできません。よろしくおねがいします。
              </p>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <p class="image is-48x48">
                <img class="is-rounded"
                     src="/img/nittc_tia.jpg">
              </p>
            </div>
            <div class="media-content">
              <p>
                <strong>てぃあ</strong>
                <span class="tag is-info is-rounded">懇親会</span>
                <br>
                DDRはじめました
              </p>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <p class="image is-48x48">
                <img class="is-rounded"
                     src="/img/asasigure.jpg">
              </p>
            </div>
            <div class="media-content">
              <p>
                <strong>asasigure</strong>
                <span class="tag is-success is-rounded">デザイン</span>
                <br>
                だれか僕の自己紹介考えて
              </p>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <p class="image is-48x48">
                <img class="is-rounded"
                     src="/img/Raffi.jpg">
              </p>
            </div>
            <div class="media-content">
              <p>
                <strong>らっふぃ</strong>
                <span class="tag is-danger is-rounded">司会・会計</span>
                <br>
                一言: 転んでも立ち上がるタイプ
              </p>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <p class="image is-48x48">
                <img class="is-rounded"
                     src="/img/onsd_.jpg">
            </div>
            <div class="media-content">
              <p>
                <strong>たか</strong>
                <span class="tag is-link is-rounded">プレゼン</span>
                <br>
                助っ人外国人です
              </p>
            </div>
          </div>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-tag"></i>
            公式タグ
          </h3>
          <div class="content">
            <h4 class="title is-4 reduce-bottom-margin">kosenconf-124nagoya2018</h4>
            <ul>
              <li>ブログ、Flickrなどの写真、ソーシャルブックマーク等には上記のタグを付与していただくようお願いします。</li>
              <li>Twitterでのハッシュタグ <strong>#kosenconf</strong> もご利用ください。</li>
            </ul>
          </div>
        </div>
        <br>
        <div class="content">
          <h3 class="title is-3">
            <i class="fas fa-envelope"></i>
            連絡先
          </h3>
          <p>
            高専カンファレンス in 名古屋 2018
            <br class="is-hidden-tablet">
            代表メールアドレス
            <br>
            <strong id="replace-at">kosenconf.nagoya2018[at]gmail.com</strong>
            <br class="is-hidden-tablet">
            <small>（<code>[at]</code> が表示されている場合は <code>@</code> に置換してください）</small>
          </p>
        </div>
      </div>
    </section>
<?php
  include "inc/footer.php";

  function render_presentations($presentations) {
    foreach ($presentations as $presentation) {
      $participant = $presentation["participant"];
      $icon = $participant["icon"];

      if ($icon !== null) {
        $icon_prefix_1 = substr($icon, 0, 2);
        $icon_prefix_2 = substr($icon, 2, 2);
        $icon_uri = "https://connpass-tokyo.s3.amazonaws.com/thumbs/$icon_prefix_1/$icon_prefix_2/$icon.png";
      } else {
        $icon_uri = "https://connpass.com/static/img/common/user_no_image.gif";
      }
?>
              <div class="media is-compact">
                <div class="media-left">
                  <p class="image is-24x24">
                    <img class="is-rounded"
                         src="<?= $icon_uri; ?>">
                  </p>
                </div>
                <div class="media-content">
                  <p>
                    <strong><?= $participant["display_name"]; ?></strong>
<?php
      if ($presentation["is_lt"] === true) {
?>
                    <span class="tag is-warning is-rounded">LT</span>
<?php
      } else {
?>
                    <span class="tag is-info is-rounded">一般</span>
<?php
      }
?>
                    <br class="is-hidden-tablet">
                    <span class="little-left-margin is-hidden-mobile"></span>
                    「<?= $presentation["title"]; ?>」
<?php
      if (isset($presentation["link"])) {
?>
                    <br class="is-hidden-tablet">
                    <span class="little-left-margin is-hidden-mobile"></span>
                    <a href="<?= $presentation['link']; ?>"
                       target="_blank">
                      <i class="fas fa-external-link-alt"></i>
                      発表資料
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