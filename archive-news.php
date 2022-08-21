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
  <!-- gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
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
          <span>資料請求・お問い合わせ</span>
          <a href="tel:0772-62-8088">0772-62-8088 </a>
        </div>
      </div>
      <div class="p-top-header__right">
        <nav class="p-top-header__nav">
          <ul class="p-top-header__nav-items">
            <li class="p-top-header__nav-item"><a href="page-concept.html">コンセプト</a></li>
            <li class="p-top-header__nav-item"><a href="index.html#item">商品情報</a>
              <!-- <div class="p-header-nav__child">
                <ul>
                  <div class="p-header-nav__child-title">
                    <p>Service</p>
                  </div>
                  <div class="p-header-nav__child-items">
                    <li class="p-header-nav__child-service-item01"><a href="service-page01.html"></a></li>
                    <li class="p-header-nav__child-service-item02"><a href="service-page02.html"></a></li>
                    <li class="p-header-nav__child-service-item03"><a href="service-page03.html"></a></li>
                  </div>
                </ul>
              </div> -->
            </li>
            <li class="p-top-header__nav-item"><a href="index.html#service">サービスメニュー</a>
              <!-- <div class="p-header-nav__child">
                <ul>
                  <div class="c-header-nav__child-title">
                    <p>Sensible</p>
                  </div>
                  <div class="p-header-nav__child-items">
                    <li class="p-header-nav__child-sensible-item01"><a href="sensible-page.html#sensible"></a>
                    </li>
                    <li class="p-header-nav__child-sensible-item02"><a href="sensible-page.html#sdgs"></a>
                    </li>
                  </div>
                </ul>
              </div> -->
            </li>
            <li class="p-top-header__nav-item"><a href="index.html#know-how">事例とノウハウ</a></li>
            <li class="p-top-header__nav-item"><a href="https://www.nissin-mfg.co.jp/company/history/#new_tab">企業情報</a>
            </li>
            <li class="p-top-header__nav-item"><a href="archive-new.html">お知らせ</a></li>
            <li class="p-top-header__nav-item logo-facebook"><a href="">
                <img src="/images/common/logo-facebook.png" alt="">
              </a></li>
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
        <!-- <div class="p-header-drawer__logo-wrap">
          <h1 class="p-top-header__logo">
            <a href="/"><img src="images/common/logo-white.png" alt=""></a>
          </h1>
          <div class="p-top-header__company-name">
            <a href="/">
              <img src="images/common/co-logo.png" alt="">
            </a>
          </div>
        </div> -->
        <ul class="p-header-drawer__content_items js-header-drawer__content_items">
          <li class="drawer__content_item"><a href="/">TOP</a></li>
          <li class="drawer__content_item"><a href="page-concept.html">コンセプト</a></li>
          <li class="drawer__content_item"><a href="index.html#item">商品情報</a></li>
          <li class="drawer__content_item"><a href="#">商品情報</a>
            <ul>
              <li><a href="page-service.html#01">> 導入支援「無償サービス」</a></li>
              <li><a href="page-service.html#02">> 運営支援「サポートサービス」 </a></li>
            </ul>
          </li>
          <li class="drawer__content_item"><a href="#">事例とノウハウ</a>
            <ul>
              <li><a href="archive-post.html">> 記事で読む導入事例</a></li>
              <li><a href="archive-movie.html">> 動画でみる活用事例</a></li>
              <li><a href="archive-column.html">> ノウハウ・コラム</a></li>
            </ul>
          </li>
          <li class="drawer__content_item"><a href="works-archive.html">企業情報</a></li>
          <li class="drawer__content_item"><a href="archive-news.html">お知らせ</a></li>
          <li class="drawer__content_item"><a href="page-document-request.html">資料請求</a></li>
          <li class="drawer__content_item"><a href="page-policy.html">プライバシーポリシー</a></li>
        </ul>
        <div class="p-header-drawer__info">
          <p class="p-header-drawer__tel"><span>お問い合わせ</span> TEL.0772-62-8088</p>
        </div>
      </nav>
</header>
<!-- header end-->
<section class="section-head">
  <div class="section-head__inner l-inner">
    <div class="c-section-head">
      <h1>お知らせ</h1>
      <p>新着情報</p>
    </div>
  </div>
</section>
<!-- サブタイトル -->
<div class="c-sub-head">
  <div class="c-sub-head__inner l-inner">
    <div class="c-sub-head__logo">
      <img src="/images/common/logo-title-black.png" alt="">
    </div>
    <h2 class="c-sub-head__title">新着情報</h2>
  </div>
</div>
<section class="p-u-news l-u-news ">
  <div class="p-u-news__inner">
    <div class="p-post-cards">
      <div class="p-post-card__news">
        <figure class="p-post-card__img">
          <img src="images/common/post-news-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__news-date">2022年5月22日</div>
          <h4 class="p-post-card__news-title">ホームページリニューアルしました</h4>
          <div class="c-btn--news p-post-card__news-btn">
            <a href="single.html">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card__news">
        <figure class="p-post-card__img">
          <img src="images/common/post-news-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__news-date">2022年5月22日</div>
          <h4 class="p-post-card__news-title">ホームページリニューアルしました</h4>
          <div class="c-btn--news p-post-card__news-btn">
            <a href="single.html">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card__news">
        <figure class="p-post-card__img">
          <img src="images/common/post-news-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__news-date">2022年5月22日</div>
          <h4 class="p-post-card__news-title">ホームページリニューアルしました</h4>
          <div class="c-btn--news p-post-card__news-btn">
            <a href="single.html">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card__news">
        <figure class="p-post-card__img">
          <img src="images/common/post-news-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__news-date">2022年5月22日</div>
          <h4 class="p-post-card__news-title">ホームページリニューアルしました</h4>
          <div class="c-btn--news p-post-card__news-btn">
            <a href="single.html">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card__news">
        <figure class="p-post-card__img">
          <img src="images/common/post-news-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__news-date">2022年5月22日</div>
          <h4 class="p-post-card__news-title">ホームページリニューアルしました</h4>
          <div class="c-btn--news p-post-card__news-btn">
            <a href="single.html">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
      <div class="p-post-card__news">
        <figure class="p-post-card__img">
          <img src="images/common/post-news-img.jpg" alt="">
        </figure>
        <div class="p-post-card__body">
          <div class="p-post-card__news-date">2022年5月22日</div>
          <h4 class="p-post-card__news-title">ホームページリニューアルしました</h4>
          <div class="c-btn--news p-post-card__news-btn">
            <a href="single.html">
              <img src="images/common/post-btn02.jpg" alt="ボタン画像２" />
              <img src="images/common/post-btn01.jpg" alt="ボタン画像２" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- pagenation -->
    <ul class="c-pagenation p-post-card__pagenation">
      <li><span>1</span></li>
      <li><a href="">2</a></li>
      <li><a href="">3</a></li>
      <li><a href="">4</a></li>
      <li><a href="">5</a></li>
    </ul>
  </div>
</section>
<!-- footer -->
<footer class="l-footer">
  <!-- バナー -->
  <div class="p-banner">
    <a href="page-document-request.html" class="p-banner__wrap ">
      <img src="images/common/banner01.jpg" alt="">
      <p>資料請求</p>
    </a>
    <a href="https://www.nissin-mfg.co.jp/company/history/#new_tab" class="p-banner__wrap ">
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
            <p><span>〒627- 0006</span>京都府京丹後市峰山町赤坂85番地</p>
          </div>
          <!-- Google マップ -->
          <div class="p-footer__googlmap">
            <a href="https://goo.gl/maps/Mkdx4BiYjff3WjZh7" class="">Google Map >>></a>
          </div>
          <!-- TEL -->
          <div class="p-footer__tel">
            <p><span>お問い合せ</span>TEL.0772-62-8088</p>
          </div>
          <!-- メールアドレス-->
          <div class="p-footer__mail">
            <p><span>［mail］</span>sales-iot@nissin-mfg.co.jp</p>
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
              <li><a href="https://www.nissin-mfg.co.jp/company/history/#new_tab"><span>企業情報</span> </a></li>
              <li><a href="page-document-request.html"><span>資料請求</span> </a></li>
              <li><a href="page-contact.html"><span>お問い合わせ</span> </a></li>
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
      <p><span>copyright</span><span>2022</span><span> NISSIN　MANUFACTURING　CO.,　LTD.</span><span>All　Right　Reserved</span></p>
    </div>
  </div>
  <!-- トップに戻るボタン -->
  <button class="c-to-top-btn js-to_top">
    <img src="images/common/to-top-btn.png" alt="">
  </button>
</footer>
</body>
</html>
</div>
<body>
  </html>