<!DOCTYPE html>
<html lang="ja">
<head>
  <meta name="robots" content="noindex" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>日進製作所</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <!-- <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:card" content="summary" /> -->
  <!-- ファビコン -->
  <link rel="icon" href="#" />
  <!-- css -->
  <link rel="stylesheet" href="./css/style.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
  <!-- gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="./js/script.js"></script>
</head>
</body>
<header>
  <div class="l-top-header p-top-header">
    <div class="p-top-header__inner">
      <div class="p-top-header__left">
        <h1 class="p-top-header__logo">
          <a href="/"><img src="images/common/co-logo.png" alt=""></a>
        </h1>
        <div class="p-top-header__tel">
          <span>資料請求・お問合せ</span>
          <a href="tel:0772-62-8088">0772-62-8088 </a>
        </div>
      </div>
      <div class="p-top-header__right">
        <nav class="p-top-header__nav">
          <ul class="p-top-header__nav-items">
            <li class="p-top-header__nav-item"><a href="page-concept.html">コンセプト</a></li>
            <li class="p-top-header__nav-item"><a href="index.html#item">商品情報</a></li>
            <li class="p-top-header__nav-item">サービスメニュー <div class="p-header-nav__child">
                <ul>
                  <!-- <div class="c-header-nav__child-title">
                    <p>Sensible</p>
                  </div> -->
                  <div class="p-header-nav__child-items">
                    <li class="p-header-nav__child-sensible-item01"><a href="page-service.html#item01">導入支援「無償サービス」</a>
                    </li>
                    <li class="p-header-nav__child-sensible-item02"><a href="page-service.html#item02">運営支援「サポートサービス」</a>
                    </li>
                  </div>
                </ul>
              </div>
            </li>
            <li class="p-top-header__nav-item">事例とノウハウ <div class="p-header-nav__child">
                <ul>
                  <!-- <div class="p-header-nav__child-title">
                    <p>Service</p>
                  </div> -->
                  <div class="p-header-nav__child-items">
                    <li class="p-header-nav__child-service-item01"><a href="archive-post.html">記事で読む導入事例</a></li>
                    <li class="p-header-nav__child-service-item02"><a href="archive-movie.html">動画でみる活用事例</a></li>
                    <li class="p-header-nav__child-service-item03"><a href="archive-column.html">ノウハウ・コラム</a></li>
                  </div>
                </ul>
              </div>
            </li>
            <li class="p-top-header__nav-item"><a href="https://www.nissin-mfg.co.jp/company/history/#new_tab " target="_blank">企業情報</a>
            </li>
            <li class="p-top-header__nav-item"><a href="page-document-request.html">資料請求</a></li>
            <li class="p-top-header__nav-item"><a href="archive-new.html">お知らせ</a></li>
            <!-- <li class="p-top-header__nav-item logo-facebook"><a href="">
                <img src="/images/common/logo-facebook.png" alt="">
              </a></li> -->
            <li class="p-top-header__contact-btn"><a href="page-contact.html">お問合せ</a></li>
          </ul>
        </nav>
      </div>
      <!-- drawer_menu -->
      <!-- ハンバーガーアイコン -->
      <div class="p-header-drawer__icon js-header-drawer__icon">
        <div class="p-heder-drawer_icon-bars">
          <span class="icon__bar1"></span>
          <span class="icon__bar2"></span>
          <span class="icon__bar3"></span>
        </div>
      </div>
      <!-- TEL・メールアイコン -->
      <div class="p-header-drawer__contact-icon">
        <a href="tel:0772-62-8088" class="p-header-drawer__icon-tel">
          <img src="images/common/icon-tel.png" alt="">
        </a>
        <a href="page-contact.html" class="p-header-drawer__icon-mail">
          <img src="images/common/icon-mail.png" alt="">
        </a>
      </div>
      <!-- ドロワーメニュー -->
      <nav class="p-header-drawer__content js-header-drawer__content">
        <ul class="p-header-drawer__content_items js-header-drawer__content_items">
          <li class="drawer__content_item"><a href="/">TOP</a></li>
          <li class="drawer__content_item"><a href="page-concept.html">コンセプト</a></li>
          <li class="drawer__content_item"><a href="index.html#item">商品情報</a>
            <ul>
              <li><a href="page-scada.html">> SCADAパッケージソフト</a></li>
              <li><a href="page-tolesabi.html">> 品質トレサビシステム</a></li>
              <li><a href="page-automation.html">> 自動化関連装置</a></li>
            </ul>
          </li>
          <li class="drawer__content_item">サービス <ul>
              <li><a href="page-service.html#item01">> 導入支援「無償サービス」</a></li>
              <li><a href="page-service.html#item02">> 運営支援「サポートサービス」 </a></li>
            </ul>
          </li>
          <li class="drawer__content_item">事例とノウハウ <ul>
              <li><a href="archive-post.html">> 記事で読む導入事例</a></li>
              <li><a href="archive-movie.html">> 動画でみる活用事例</a></li>
              <li><a href="archive-column.html">> ノウハウ・コラム</a></li>
            </ul>
          </li>
          <li class="drawer__content_item"><a href="https://www.nissin-mfg.co.jp/company/history/#new_tab" target="_blank">企業情報</a></li>
          <li class="drawer__content_item"><a href="archive-news.html">お知らせ</a></li>
          <li class="drawer__content_item"><a href="page-contact.html">お問合せ</a></li>
          <li class="drawer__content_item"><a href="page-document-request.html">資料請求</a></li>
          <li class="drawer__content_item"><a href="page-policy.html">プライバシーポリシー</a></li>
        </ul>
        <div class="p-header-drawer__info">
          <div class="p-header-drawer__tel">
            <p> お問合せ</p>
            <a href="tel:0772-62-8088">TEL.0772-62-8088</a>
          </div>
        </div>
      </nav>
</header>
<!-- header end-->
<section class="section-head">
  <div class="section-head__inner l-inner">
    <div class="c-section-head">
      <h1>事例とノウハウ</h1>
      <p>導入事例のご紹介 </p>
    </div>
  </div>
</section>
<!-- サブタイトル -->
<div class="c-sub-head">
  <div class="c-sub-head__inner l-inner">
    <div class="c-sub-head__logo">
      <img src="/images/common/logo-title-black.png" alt="">
    </div>
    <h2 class="c-sub-head__title">導入事例・活用事例を通して<br> スマートファクトリー導入のヒントを探る！</h2>
  </div>
</div>
<!--タブ 復活？-->
<!-- <ul class="tab-group l-inner">
      <li class="tab is-active case01">記事で読む導入事例</li>
      <li class="tab case02">動画でみる活用事例</li>
      <li class="tab case03">ノウハウ・コラム</li>
    </ul> -->
<div class="p-service-tab p-service-content01" id="js-tab">
  <div class="p-service-tab__nav l-inner">
    <a href="archive-post.html" class="p-service-tab__nav-item  contents01" data-nav="0">記事で読む導入事例</a>
    <a href="archive-movie.html" class="p-service-tab__nav-item contents02" data-nav="1">動画でみる活用事例</a>
    <a href="archive-column.html" class="p-service-tab__nav-item is-active contents03" data-nav="2">ノウハウ・コラム</a>
  </div>
  <div class="p-service-tab__content" data-content="0">
    <!-- <div class="panel">復活？ -->
    <div class="panel__title" id="column">
      <figure class="panel__logo">
        <img src="images/common/logo-column02.png" alt="">
      </figure>
      <h3>ノウハウ・コラム</h3>
    </div>
    <!-- カード -->
    <div class="p-post-cards">
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card">
        <figure class="p-post-card__img">
          <img src="images/common/post-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__wrap">
            <div class="p-post-card__meta">
              <div class="p-post-card__date">2021年5月更新</div>
              <div class="p-post-card__customer">金属加工メーカーB社様</div>
            </div>
            <div class="p-post-card__tag">
              <a href=""><span class="tag01">SCADA</span></a>
              <a href=""><span class="tag02">トレサビ</span></a>
              <a href=""><span class="tag03">自動化装置</span></a>
            </div>
          </div>
          <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
          <p class="p-post-card__text"> エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。 </p>
          <div class="c-btn--news p-post-card__btn">
            <a href="">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
  </div>
</div>
<!--タブを切り替えて表示するコンテンツ復活？-->
<!-- <div class="panel-group l-inner"> -->
<!-- 動画でみる活用事例 -->
<!-- <div class="panel is-show" id="movie">
        <div class="panel__title">
          <figure class="panel__logo">
            <img src="images/common/logo-movie02.png" alt="">
          </figure>
          <h3>動画でみる活用事例</h3>
        </div> -->
<!-- カード -->
<!-- <div class="p-post-cards">
          <div class="p-post-card">
            <figure class="p-post-card__img">
              <img src="images/common/post-img.jpg" alt="">
            </figure>
            <div class="p-post-card__body">
              <div class="p-post-card__wrap">
                <div class="p-post-card__meta">
                  <div class="p-post-card__date">2021年5月更新</div>
                  <div class="p-post-card__customer">金属加工メーカーB社様</div>
                </div>
                <div class="p-post-card__tag">
                  <a href=""><span class="tag01">SCADA</span></a>
                  <a href=""><span class="tag02">トレサビ</span></a>
                  <a href=""><span class="tag03">自動化装置</span></a>
                </div>
              </div>
              <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
              <div class="c-btn--news p-post-card__btn">
                <a href="">
                  <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
              </div>
            </div>
          </div>
          <div class="p-post-card">
            <figure class="p-post-card__img">
              <img src="images/common/post-img.jpg" alt="">
            </figure>
            <div class="p-post-card__body">
              <div class="p-post-card__wrap">
                <div class="p-post-card__meta">
                  <div class="p-post-card__date">2021年5月更新</div>
                  <div class="p-post-card__customer">金属加工メーカーB社様</div>
                </div>
                <div class="p-post-card__tag">
                  <a href=""><span class="tag01">SCADA</span></a>
                  <a href=""><span class="tag02">トレサビ</span></a>
                  <a href=""><span class="tag03">自動化装置</span></a>
                </div>
              </div>
              <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
              <div class="c-btn--news p-post-card__btn">
                <a href="">
                  <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
              </div>
            </div>
          </div>
          <div class="p-post-card">
            <figure class="p-post-card__img">
              <img src="images/common/post-img.jpg" alt="">
            </figure>
            <div class="p-post-card__body">
              <div class="p-post-card__wrap">
                <div class="p-post-card__meta">
                  <div class="p-post-card__date">2021年5月更新</div>
                  <div class="p-post-card__customer">金属加工メーカーB社様</div>
                </div>
                <div class="p-post-card__tag">
                  <a href=""><span class="tag01">SCADA</span></a>
                  <a href=""><span class="tag02">トレサビ</span></a>
                  <a href=""><span class="tag03">自動化装置</span></a>
                </div>
              </div>
              <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
              <div class="c-btn--news p-post-card__btn">
                <a href="">
                  <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
              </div>
            </div>
          </div>
          <div class="p-post-card">
            <figure class="p-post-card__img">
              <img src="images/common/post-img.jpg" alt="">
            </figure>
            <div class="p-post-card__body">
              <div class="p-post-card__wrap">
                <div class="p-post-card__meta">
                  <div class="p-post-card__date">2021年5月更新</div>
                  <div class="p-post-card__customer">金属加工メーカーB社様</div>
                </div>
                <div class="p-post-card__tag">
                  <a href=""><span class="tag01">SCADA</span></a>
                  <a href=""><span class="tag02">トレサビ</span></a>
                  <a href=""><span class="tag03">自動化装置</span></a>
                </div>
              </div>
              <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
              <div class="c-btn--news p-post-card__btn">
                <a href="">
                  <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
              </div>
            </div>
          </div>
        </div> -->
<!-- </div> -->
<!-- ノウハウ・コラム -->
<!-- <div class="panel" id="column">
        <div class="panel__title">
          <figure class="panel__logo">
            <img src="images/common/logo-column02.png" alt="">
          </figure>
          <h3>ノウハウ・コラム</h3>
        </div> -->
<!-- カード -->
<!-- <div class="p-post-cards">
          <div class="p-post-card">
            <figure class="p-post-card__img">
              <img src="images/common/post-img.jpg" alt="">
            </figure>
            <div class="p-post-card__body">
              <div class="p-post-card__wrap">
                <div class="p-post-card__meta">
                  <div class="p-post-card__date">2021年5月更新</div>
                  <div class="p-post-card__customer">金属加工メーカーB社様</div>
                </div>
                <div class="p-post-card__tag">
                  <a href=""><span class="tag01">SCADA</span></a>
                  <a href=""><span class="tag02">トレサビ</span></a>
                  <a href=""><span class="tag03">自動化装置</span></a>
                </div>
              </div>
              <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
              <div class="c-btn--news p-post-card__btn">
                <a href="">
                  <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
              </div>
            </div>
          </div>
          <div class="p-post-card">
            <figure class="p-post-card__img">
              <img src="images/common/post-img.jpg" alt="">
            </figure>
            <div class="p-post-card__body">
              <div class="p-post-card__wrap">
                <div class="p-post-card__meta">
                  <div class="p-post-card__date">2021年5月更新</div>
                  <div class="p-post-card__customer">金属加工メーカーB社様</div>
                </div>
                <div class="p-post-card__tag">
                  <a href=""><span class="tag01">SCADA</span></a>
                  <a href=""><span class="tag02">トレサビ</span></a>
                  <a href=""><span class="tag03">自動化装置</span></a>
                </div>
              </div>
              <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
              <div class="c-btn--news p-post-card__btn">
                <a href="">
                  <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
              </div>
            </div>
          </div>
          <div class="p-post-card">
            <figure class="p-post-card__img">
              <img src="images/common/post-img.jpg" alt="">
            </figure>
            <div class="p-post-card__body">
              <div class="p-post-card__wrap">
                <div class="p-post-card__meta">
                  <div class="p-post-card__date">2021年5月更新</div>
                  <div class="p-post-card__customer">金属加工メーカーB社様</div>
                </div>
                <div class="p-post-card__tag">
                  <a href=""><span class="tag01">SCADA</span></a>
                  <a href=""><span class="tag02">トレサビ</span></a>
                  <a href=""><span class="tag03">自動化装置</span></a>
                </div>
              </div>
              <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
              <div class="c-btn--news p-post-card__btn">
                <a href="">
                  <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
              </div>
            </div>
          </div>
          <div class="p-post-card">
            <figure class="p-post-card__img">
              <img src="images/common/post-img.jpg" alt="">
            </figure>
            <div class="p-post-card__body">
              <div class="p-post-card__wrap">
                <div class="p-post-card__meta">
                  <div class="p-post-card__date">2021年5月更新</div>
                  <div class="p-post-card__customer">金属加工メーカーB社様</div>
                </div>
                <div class="p-post-card__tag">
                  <a href=""><span class="tag01">SCADA</span></a>
                  <a href=""><span class="tag02">トレサビ</span></a>
                  <a href=""><span class="tag03">自動化装置</span></a>
                </div>
              </div>
              <h4 class="p-post-card__title">流量センサを取り付け可視化し、コスト削減に繋げた</h4>
              <p class="p-post-card__text">
                エネルギー使用量を計測するセンサデータをSCADAシステムに集約、生産記録日報と連携し、ラインごと品種ごとのエネルギー原価を可視化する。
              </p>
              <div class="c-btn--news p-post-card__btn">
                <a href="">
                  <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
                  <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
                </a>
              </div>
            </div>
          </div>
        </div> -->
<!-- </div> -->
<!-- ページネーション  -->
<ul class="c-pagenation p-post-card__pagenation">
  <li><span>1</span></li>
  <li><a href="">2</a></li>
  <li><a href="">3</a></li>
  <li><a href="">4</a></li>
  <li><a href="">5</a></li>
</ul>
<!-- </div>復活？ -->
<!-- footer -->
<footer class="l-footer">
  <!-- バナー -->
  <div class="p-banner">
    <a href="page-document-request.html" class="p-banner__wrap ">
      <img src="images/common/banner01.jpg" alt="">
      <p>資料請求</p>
    </a>
    <a href="https://www.nissin-mfg.co.jp/company/history/#new_tab" target="_blank" class="p-banner__wrap ">
      <img src="images/common/banner02.jpg" alt="">
      <p>企業情報</p>
    </a>
  </div>
  <div class="p-footer">
    <div class="p-footer__content">
      <!-- 左側 -->
      <div class="p-footer__left">
        <div class="p-footer__info">
          <!--  ロゴ -->
          <div class="p-footer__logo">
            <img src="images/common/sagane-logo-white.png" alt="">
          </div>
          <!-- アドレス -->
          <div class="p-footer__adress">
            <p>株式会社 日進製作所（赤坂工場）生産システム営業部</p>
            <p><span>〒627-0006</span>京都府京丹後市峰山町赤坂85番地</p>
          </div>
          <!-- Google マップ -->
          <div class="p-footer__googlmap">
            <a href="https://goo.gl/maps/Mkdx4BiYjff3WjZh7" class="">Google Map >>></a>
          </div>
          <!-- TEL -->
          <div class="p-footer__tel">
            <p><span>お問い合せ</span><a href="tel:0772-62-8088">TEL.0772-62-8088</a> </p>
          </div>
          <!-- メールアドレス-->
          <div class="p-footer__mail">
            <p><span>[mail]</span>sales-iot@nissin-mfg.co.jp</p>
          </div>
        </div>
      </div>
      <!-- 右側 -->
      <div class="p-footer__right">
        <div class="p-footer__sitemap">
          <div class="p-footer__sitemap-title">
            <p>Site Map</p>
          </div>
          <div class="p-footer__sitemap-wrap">
            <ul class="p-footer__sitemap-left">
              <li><a href="/"><span>ホーム</span></a></li>
              <li><a href="page-concept.html"><span>コンセプト</span>特徴とポイント</a></li>
              <li><a href="index.html#item"><span>商品情報</span>商品・ソリューション</a>
                <ul class="p-footer__sitemap-service-contents">
                  <li><a href="page-scada.html">SCADA システム「サガネ係長の IoT」</a></li>
                  <li><a href="page-tolesabi.html">品質トレサビシステム</a></li>
                  <li><a href="page-automation.html">自動化関連装置</a></li>
                </ul>
              </li>
              <li><a href="index.html#service"><span>サービス</span>サービス & サポートメニュー</a>
                <ul class="p-footer__sitemap-service-contents">
                  <li><a href="page-service.html#item01">導入支援無償サポート</a></li>
                  <li><a href="page-service.html#item02">運営支援サポートサービス</a></li>
                </ul>
              </li>
            </ul>
            <ul class="p-footer__sitemap-right">
              <li><a href="archive-post.html#post"><span>事例とノウハウ</span>導入事例のご紹介</a>
                <ul class="p-footer__sitemap-service-contents">
                  <li><a href="archive-post.html#post">記事で読む導入事例</a></li>
                  <li><a href="archive-movei.html#movei">動画でみる活用事例</a></li>
                  <li><a href="archive-column.html#column">ノウハウ・コラム</a></li>
                </ul>
              </li>
              <li><a href="https://www.nissin-mfg.co.jp/company/history/#new_tab" target="_blank"><span>企業情報</span> </a></li>
              <li><a href="page-document-request.html"><span>資料請求</span> </a></li>
              <li><a href="archive-news.html"><span>お知らせ</span> </a></li>
              <li><a href="page-contact.html"><span>お問合せ</span> </a></li>
              <li><a href="page-policy.html"><span>プライバシーポリシー</span>個人情報保護方針</a></li>
            </ul>
            <a href="" class="facebook">
              <img src="" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- コピーライト -->
    <div class="p-footer__copyright">
      <p>copyright 2022 Nissin Manufacturing Co., Ltd. All Right Reserved</p>
    </div>
  </div>
  <!-- トップに戻るボタン -->
  <!-- <button class="c-to-top-btn js-to_top">
    <img src="images/common/to-top-btn.png" alt="">
</button> -->
  <div class="js-to_top page_top"><a href="#"></a><span>TOP PAGE</span></div>
</footer>
</body>
</html>
</div>
<body>
  </html>