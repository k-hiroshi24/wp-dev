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
    <div class="c-section-head--40">
      <h1>SCADA<br class="sp"> パッケージソフト</h1>
      <p>サガネ係長のIoT</p>
    </div>
  </div>
</section>
<!-- サブタイトル -->
<div class="c-sub-head">
  <div class="c-sub-head__inner l-inner">
    <div class="c-sub-head__logo">
      <img src="images/common/item-logo04.png" alt="">
    </div>
    <h2 class="c-sub-head__title">SCADAパッケージソフト「サガネ係長のIoT」で<br class="pc"> 現場の情報管理業務をすべてまとめて自動化。</h2>
    <p>品質マネジメントシステム対応可能<span> <br class="sp">• ISO9001</span><span>• IATF16949</span></p>
  </div>
</div>
<!-- sec1 -->
<section class="l-u-scada01 p-u-scada01">
  <div class="p-u-scada01__inner ">
    <div class="p-u-scada01__wrap">
      <figure class="p-u-scada01__img">
        <img src="images/common/scada-img.jpg" alt="">
      </figure>
      <div class="c-text-area">
        <h3>情報集約だけではなく、<br> ラインや装置の協調制御にも対応</h3>
        <p> 日進製作所が独自に開発したSCADAパッケージソフト「サガネ係長のIoT」は古い設備、特殊な設備、多彩なセンサーをつなぎ、生産ラインのすべての装置・設備から得られる様々なリアルタイムの情報を、ネットワークを通してサーバやクラウドに集約して監視・可視化・制御を行います。<br> 実際に運用実績がある様々な標準パッケージアプリがあり、品質トレサビアプリと合わせてご利用いただくと、現場の情報管理業務のほぼすべてを自動化・デジタル化することができます。紙帳票から、自動化・デジタル化への運用切替に不安がある方には、現場管理の経験豊富なアフターサポート担当が、運用切替の手厚いサポートをご提供します。<br> 　また、お客様ご自身でセットアップの追加や変更が可能です。さらに、お客様ご自身で独自のIoTアプリケーションを開発していただくことも可能です。<br> つまり、サガネ係長のIoTは、標準パッケージアプリと運用切替サポートにより、すぐに運用開始できるスピードと、徐々に設定変更や追加開発をしていただける柔軟性を併せ持つ、他にはないSCADAプラットフォームです。日進製作所が独自に開発したSCADAパッケージソフト「サガネ係長のIoT」は古い設備、特殊な設備、多彩なセンサーをつなぎ、生産ラインのすべての装置・設備から得られる様々なリアルタイムの情報を、ネットワークを通してサーバやクラウドに集約して監視・可視化・制御を行います。 </p>
      </div>
    </div>
    <!-- ポイント！ -->
    <div class="c-text-area--num p-u-scada01__num">
      <h3>「サガネ係長のIoT」ココがポイント！</h3>
      <div class="c-text-area--num__title p-u-scada01__num-title" data-number="01">実際に運用実績がある現場管理用のパッケージアプリを多数用意</div>
      <div class="c-text-area--num__title p-u-scada01__num-title" data-number="02">現場に存在する様々な設備と接続可能なドライバソフトが内蔵</div>
      <div class="c-text-area--num__title p-u-scada01__num-title top-40" data-number="03">お客様⾃⾝によるセットアップで、⽣産ラインの変化や新しい要望に柔軟に 対応できるプラットフォームとしても利⽤可能</div>
      <!-- <span>01</span>
          <h3>実際に運用実績がある現場管理用のパッケージアプリを多数用意</h3>
          <span>02</span>
          <h3>現場に存在する様々な設備と接続可能なドライバソフトが内蔵</h3>
          <span>03</span>
          <h3>お客様⾃⾝によるセットアップで、⽣産ラインの変化や新しい要望に柔軟に
            対応できるプラットフォームとしても利⽤可能</h3> -->
    </div>
    <!-- 無限ループ -->
    <!-- <div class="slider-wrap">
          <ul class="p-u-scada01__imgs loopSlide">
            <li class="p-u-scada01__item ">
              <img src="images/common/loop01.jpg" alt="">
            </li>
            <li class="p-u-scada01__item">
              <img src="images/common/loop02.jpg" alt="">
            </li>
            <li class="p-u-scada01__item ">
              <img src="images/common/loop03.jpg" alt="">
            </li>
            <li class="p-u-scada01__item ">
              <img src="images/common/loop04.jpg" alt="">
            </li>
            <li class="p-u-scada01__item">
              <img src="images/common/loop05.jpg" alt="">
            </li>
            <li class="p-u-scada01__item ">
              <img src="images/common/loop01.jpg" alt="">
            </li>
            <li class="p-u-scada01__item">
              <img src="images/common/loop02.jpg" alt="">
            </li>
            <li class="p-u-scada01__item ">
              <img src="images/common/loop03.jpg" alt="">
            </li>
            <li class="p-u-scada01__item ">
              <img src="images/common/loop04.jpg" alt="">
            </li>
            <li class="p-u-scada01__item">
              <img src="images/common/loop05.jpg" alt="">
            </li>
          </ul>
        </div> -->
    <div class="swiper js-mv-slider ">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper js-loop-slider loop-sliders">
        <!-- Slides -->
        <div class="swiper-slide ">
          <div class="loop-slider__img">
            <img src="images/common/loop01.jpg" alt="">
          </div>
        </div>
        <div class="swiper-slide ">
          <div class="loop-slider___img">
            <img src="images/common/loop02.jpg" alt="">
          </div>
        </div>
        <div class="swiper-slide ">
          <div class="loop-slider__img">
            <img src="images/common/loop03.jpg" alt="">
          </div>
        </div>
        <div class="swiper-slide ">
          <div class="loop-slider__img">
            <img src="images/common/loop04.jpg" alt="">
          </div>
        </div>
        <div class="swiper-slide ">
          <div class="loop-slider__img">
            <img src="images/common/loop05.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="p-u-scada01__example-wrap">
      <div class="p-u-scada01__example-body">
        <p class="p-u-scada01__example-title">データ取得可能な機器・設備一例</p>
        <p class="p-u-scada01__example-text">〈PLC〉</p>
        <span>●三菱電機Qシリーズ・Rシリーズ ●キーエンスKVシリーズ ●オムロン ●シーメンス　他</span>
        <p class="p-u-scada01__example-text">〈CNC〉</p>
        <span>●FANUC Iシリーズ　他</span>
        <span>・各種センサーゲートウェイ、各種IOデータ取得センサー、 　各種計測装置 他</span>
      </div>
      <figure class="p-u-scada01__example-img">
        <img src="images/common/iot-example-img.jpg" alt="">
      </figure>
    </div>
  </div>
</section>
<!-- sec1 end -->
<!-- sec2-->
<section class="p-u-scada02">
  <div class="p-ssada02__inner l-inner">
    <div class="c-text-area--center">
      <h3>様々な欠点と課題が可視化されると、<br> 改善点が浮き彫りになる</h3>
      <p class="tac"> ご紹介のもの以外にも、インストール可能なアプリを多数ご用意しております。 また、消費エネルギー分析、加工条件分析、加工トルク分析など、柔軟なカスタム事例にも対応します。 </p>
    </div>
    <!-- アプリ -->
    <p class="p-u-scada02__title">標準パッケージアプリ</p>
    <ul class="p-item__modal grid--modal ">
      <!-- 稼働装置 -->
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
        <!-- <a href=""> -->
        <img src="images/common/item05.png" alt="">
        <img src="" alt="">
        <!-- </a> -->
      </li>
      <!-- 設備点検 -->
      <li class="item01">
        <a href="" class="js-open-btn" data-target=".target-modal02">
          <img src="images/common/item02-2.png" alt="">
          <img src="images/common/item02.png" alt="">
        </a>
      </li>
      <!-- モーダルアイテム -->
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
      <!-- 不良計測 -->
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
        <!-- <a href=""> -->
        <img src="images/common/item07.png" alt="">
        <img src="" alt="">
        <!-- </a> -->
      </li>
      <li class="item01">
        <!-- <a href=""> -->
        <img src="images/common/item04.png" alt="">
        <img src="" alt="">
        <!-- </a> -->
      </li>
    </ul>
    <p class="p-u-scada02__title mt-0">アプリケーション画面例</p>
    <figure class="p-u-scada02__imgs">
      <ul>
        <li>
          <img src="images/common/iot-ex-img01.png" alt="">
          <span>［稼働実績ガントチャート］</span>
        </li>
        <li>
          <img src="images/common/iot-ex-img02.png" alt="">
          <span>［特性要因別の不良実績］</span>
        </li>
        <li>
          <img src="images/common/iot-ex-img03.png" alt="">
          <span>［あんどん画面例］</span>
        </li>
      </ul>
    </figure>
    <!-- <figure class="p-u-scada02__imgs02">
          <img src="images/common/iot-ex-img04.png" alt="">
        </figure> -->
    <picture class="p-u-scada02__imgs02">
      <source media="(min-width: 601px)" srcset="images/common/iot-ex-img04.png">
      <img src="images/common/scada-img-sp.png" alt="">
    </picture>
  </div>
</section>
<!-- sec2 end-->
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