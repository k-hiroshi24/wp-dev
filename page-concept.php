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
<!-- タイトル -->
<section class="section-head">
  <div class="section-head__inner l-inner">
    <div class="c-section-head">
      <h1>コンセプト</h1>
      <p>特徴とポイント</p>
    </div>
  </div>
</section>
<!-- サブタイトル -->
<div class="c-sub-head">
  <div class="c-sub-head__inner l-inner">
    <div class="c-sub-head__logo">
      <img src="images/common/logo-title-black.png" alt="">
    </div>
    <h2 class="c-sub-head__title">SCADAを中心とした作業と情報管理の<br class="pc"> 総合的自動化・省人化</h2>
  </div>
</div>
<!-- scada -->
<section class="p-u-concept__scada ">
  <div class="p-u-concept__scada-inner l-inner">
    <div class="p-u-concept__scada-img">
      <img class="pc" src="images/common/concept-img01.jpg" alt="">
      <img src="images/common/concept-img02.jpg" alt="">
      <img class="pc" src="images/common/concept-img03.jpg" alt="">
    </div>
    <div class="c-text-area--center">
      <h3>ITに偏った取り組みでは、競争⼒の⾼い<br class="pc"> スマートファクトリーは構築はできない!?</h3>
      <p>⽇進製作所は、Tier1⾃動⾞部品メーカー、⽼舗⼯作機械メーカー、IoTシステムベンダーとして、時代の変化に応じて求められてきた様々な課題に直面しながらスマートファクトリー構築と向き合ってきました。 点在する様々な設備や多様な製造ラインをネットワークを通してつなぎ、SCADAパッケージソフト「サガネ係長のIoT」を中枢に、あらゆるデジタルデータを集約する「情報管理の自動化」、併せて計測・検査・搬送・投入など、これまで人の手によって、膨大な時間をかけられてきた「作業工程の自動化」。 開発過程で私たちが気付かされたのは、デジタルデータだけに頼るのではなく、この2つの自動化をバランス良く連携して進めてこそ、品質・コスト両⾯で競争⼒に直結する、真のスマートファクトリー構築が実現されるということです。 </p>
    </div>
    <!--スマホのみ表示画像 -->
    <div class="p-u-concept__img-sp">
      <img class="sp" src="images/common/concept-img01.jpg" alt="">
    </div>
    <div class="p-u-concept__img-sp">
      <img class="sp" src="images/common/concept-img03.jpg" alt="">
    </div>
    <div class="p-u-concept__scada-illustrated">
      <h3>SCADAを中心に据えたラインを構築することの価値とは？</h3>
      <p><span>価値</span>品質向上と省人化を同時に実現できること</p>
      <ul class="p-u-concept__scada-illustrated-imgs">
        <li><img src="images/common/scada01.png" alt=""></li>
        <li><img src="images/common/scada02.png" alt=""></li>
        <li><img src="images/common/scada03.png" alt=""></li>
        <li><img src="images/common/scada04.png" alt=""></li>
        <li><img src="images/common/scada05.png" alt=""></li>
        <li><img src="images/common/scada06.png" alt=""></li>
      </ul>
    </div>
  </div>
</section>
<!-- iot -->
<section class="p-u-concept__iot">
  <div class="page-concept__iot-inner l-inner">
    <div class="c-text-area--center">
      <h3>システム・装置・運用の全方面から<br class="pc"> 現場に価値を提供する</h3>
      <p>SCADAパッケージソフト「サガネ係長のIoT」、「品質トレサビシステム」、 「自動化関連装置」の導入サービスを主軸に、私たちが培ってきたスマートファクトリー運用の ノウハウもプラスした運用サポートを通じて、世界に誇る⽇本の製造業の競争⼒を、これからも 維持・向上することに貢献していきます。 </p>
    </div>
    <!--  -->
    <div class="p-u-concept__iot-wrap ">
      <div class="c-item-text">
        <figure class="c-itme-text__logo">
          <img src="images/common/item-logo04.png" alt="">
        </figure>
        <h3> <span>SCADAパッケージソフト</span>「サガネ係⻑のIoT&reg;」</h3>
        <p class="item-text"> 独自に開発したSCADAパッケージソフトで古い設備、特殊な設備、多彩なセンサーをつなぎ、生産ラインの様々なリアルタイムの情報を、ネットワークを通してサーバやクラウドに集約して監視・可視化・制御を行います。 </p>
        <div class="c-btn c-item-text__more-btn">
          <a href="page-scada.html">
            <img src="images/common/item-btn01.png" alt="" />
            <img src="images/common/item-btn02.png" alt="" />
          </a>
        </div>
      </div>
      <figure class="p-u-concept__iot-img">
        <img src="images/common/iot.jpg" alt="">
      </figure>
    </div>
    <!-- iot-modal -->
    <div class="p-item__modal-inner">
      <ul class="p-item__modal grid--modal ">
        <!-- 稼働監視 -->
        <li class="item01">
          <a href="" class="js-open-btn" data-target=".target-modal01">
            <img src="images/common/item01-2.png" alt="">
            <img src="images/common/item01.png" alt="">
          </a>
        </li>
        <!-- モーダルアイテム -->
        <div class="p-modal-item target-modal01">
          <figure class="p-modal-item__content">
            <img src="images/common/modal-item01.png" alt="">
            <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal01"><img src="images/common/modal-batsu-icon.png" alt=""></a>
          </figure>
        </div>
        <!--モーダル背景 -->
        <div class="p-modal-item__bg target-modal01" data-target=".target-modal01"></div>
        <li class="item01">
          <img src="images/common/item05.png" alt="">
          <img src="" alt="">
        </li>
        <!-- 設備点検 -->
        <li class="item01">
          <a href="" class="js-open-btn" data-target=".target-modal02">
            <img src="images/common/item02-2.png" alt="">
            <img src="images/common/item02.png" alt="">
          </a>
        </li> <!-- モーダルアイテム -->
        <div class="p-modal-item target-modal02">
          <figure class="p-modal-item__content">
            <img src="images/common/modal-item02.png" alt="">
            <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal02"><img src="images/common/modal-batsu-icon.png" alt=""></a>
          </figure>
        </div>
        <!--モーダル背景 -->
        <div class="p-modal-item__bg target-modal02" data-target=".target-modal02"></div>
        <!-- 計測データ管理 -->
        <li class="item01">
          <a href="" class="js-open-btn" data-target=".target-modal03">
            <img src="images/common/item06-2.png" alt="">
            <img src="images/common/item06.png" alt="">
          </a>
        </li>
        <!-- モーダルアイテム -->
        <div class="p-modal-item target-modal03">
          <figure class="p-modal-item__content">
            <img src="images/common/modal-item03.png" alt="">
            <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal03"><img src="images/common/modal-batsu-icon.png" alt=""></a>
          </figure>
        </div>
        <!--モーダル背景 -->
        <div class="p-modal-item__bg target-modal03" data-target=".target-modal03"></div>
        <!-- 不良集計 -->
        <li class="item01">
          <a href="" class="js-open-btn" data-target=".target-modal04">
            <img src="images/common/item03-3.png" alt="">
            <img src="images/common/item03.png" alt="">
          </a>
        </li>
        <!-- モーダルアイテム -->
        <div class="p-modal-item target-modal04">
          <figure class="p-modal-item__content">
            <img src="images/common/modal-item04.png" alt="">
            <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal04"><img src="images/common/modal-batsu-icon.png" alt=""></a>
          </figure>
        </div>
        <!--モーダル背景 -->
        <div class="p-modal-item__bg target-modal04" data-target=".target-modal04"></div>
        <li class="item01">
          <img src="images/common/item07.png" alt="">
          <img src="" alt="">
        </li>
        <li class="item01">
          <img src="images/common/item04.png" alt="">
          <img src="" alt="">
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- scada end -->
<!-- tolesabi -->
<section class="p-u-concept__tolesabi">
  <div class="p-u-concept__tolesabi-inner l-inner">
    <div class="p-u-concept__tolesabi-wrap">
      <div class="c-item-text--reverse">
        <figure class="c-itme-text__logo">
          <img src="images/common/item-logo05.png" alt="">
        </figure>
        <h3>品質トレサビシステム</h3>
        <p>今や品質管理の中心にあるトレーサビリティシステム。 単品やロットの通過記録を残すだけでなく、 SCADAシステムと連携することで情報管理の⾃動化レベルは一気に向上します。 </p>
        <div class="c-btn c-item-text__more-btn">
          <a href="page-tolesabi.html">
            <img src="images/common/item-btn02.png" alt="" />
            <img src="images/common/item-btn01.png" alt="" />
          </a>
        </div>
      </div>
      <figure class="p-u-concept__tolesabi-img">
        <img src="images/common/tolesabi.jpg" alt="">
      </figure>
    </div>
    <!-- tolesabi-modal -->
    <div class="p-item__modal-inner--green">
      <ul class="p-item__modal--long ">
        <li class="item02">
          <img src="images/common/item22.png" alt="">
          <img src="" alt="">
        </li>
        <li class="item02">
          <img src="images/common/itme23.png" alt="">
          <img src="" alt="">
        </li>
        <!-- ゲートチェック -->
        <li class="item02">
          <a href="" class="js-open-btn" data-target=".target-modal05">
            <img src="images/common/item23-2.png" alt="">
            <img src="images/common/item21.png" alt="">
          </a>
        </li>
        <!-- モーダルアイテム -->
        <div class="p-modal-item target-modal05">
          <figure class="p-modal-item__content">
            <img src="images/common/modal-item05.png" alt="">
            <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal05"><img src="images/common/modal-batsu-icon.png" alt=""></a>
          </figure>
        </div>
        <!--モーダル背景 -->
        <div class="p-modal-item__bg target-modal05" data-target=".target-modal05"></div>
        <li class="item02">
          <img src="images/common/item24.png" alt="">
          <img src="" alt="">
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- tolesabi end -->
<!-- automation -->
<section class="p-u-concept__automation">
  <div class="p-u-concept__automation-inner l-inner">
    <div class="p-u-concept__automation-wrap">
      <div class="c-item-text">
        <figure class="c-itme-text__logo">
          <img src="images/common/item-logo06.png" alt="">
        </figure>
        <h3>自動化関連装置</h3>
        <p>上位システム（SCADA・トレサビ）と自動化関連装置（検査・計測・搬送・刻印）をセットでご提案させていただくことで 高度な自律性と柔軟性を持った異次元のスマートな生産ラインを実現致します。 </p>
        <div class="c-btn c-item-text__more-btn">
          <a href="page-automation.html">
            <img src="images/common/item-btn01.png" alt="" />
            <img src="images/common/item-btn02.png" alt="" />
          </a>
        </div>
      </div>
      <figure class="p-u-concept__automation-img">
        <img src="images/common/automation-img.png" alt="">
      </figure>
    </div>
    <!-- automation-modal -->
    <div class="p-item__modal-inner">
      <ul class="p-item__modal--automation ">
        <!-- 刻印装置 -->
        <li class="item03">
          <a href="" class="js-open-btn" data-target=".target-modal06">
            <img src="images/common/item31-2.png" alt="">
            <img src="images/common/item31.png" alt="">
          </a>
        </li>
        <!-- モーダルアイテム -->
        <div class="p-modal-item target-modal06">
          <figure class="p-modal-item__content">
            <img src="images/common/modal-item06.png" alt="">
            <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal06"><img src="images/common/modal-batsu-icon.png" alt=""></a>
          </figure>
        </div>
        <!--モーダル背景 -->
        <div class="p-modal-item__bg target-modal06" data-target=".target-modal06"></div>
        <!-- 搬送装置 -->
        <li class="item03">
          <a href="" class="js-open-btn" data-target=".target-modal07">
            <img src="images/common/item32-3.png" alt="">
            <img src="images/common/item32.png" alt="">
          </a>
        </li>
        <!-- モーダルアイテム -->
        <div class="p-modal-item target-modal07">
          <figure class="p-modal-item__content">
            <img src="images/common/modal-item07.png" alt="">
            <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal07"><img src="images/common/modal-batsu-icon.png" alt=""></a>
          </figure>
        </div>
        <!--モーダル背景 -->
        <div class="p-modal-item__bg target-modal07" data-target=".target-modal07"></div>
        <li class="item03">
          <img src="images/common/item33.png" alt="">
          <img src="" alt="">
        </li>
        <!-- 検査装置 -->
        <li class="item03">
          <a href="" class="js-open-btn" data-target=".target-modal08">
            <img src="images/common/item34-2.png" alt="">
            <img src="images/common/item34.png" alt="">
          </a>
        </li>
        <!-- モーダルアイテム -->
        <div class="p-modal-item target-modal08">
          <figure class="p-modal-item__content">
            <img src="images/common/modal-item08.png" alt="">
            <a class="p-modal-item__icon js-close-btn" href="" data-target=".target-modal08"><img src="images/common/modal-batsu-icon.png" alt=""></a>
          </figure>
        </div>
        <!--モーダル背景 -->
        <div class="p-modal-item__bg target-modal08" data-target=".target-modal08"></div>
      </ul>
    </div>
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