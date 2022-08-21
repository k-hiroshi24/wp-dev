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
<!-- <div class="c-section-head">
      <h2>自動化関連装置</h2>
    </div> -->
<section class="section-head">
  <div class="section-head__inner l-inner">
    <div class="c-section-head">
      <h1>自動化関連装置</h1>
    </div>
  </div>
</section>
<!-- サブタイトル -->
<div class="c-sub-head">
  <div class="c-sub-head__inner l-inner">
    <div class="c-sub-head__logo">
      <img src="images/common/item-logo06.png" alt="">
    </div>
    <h2 class="c-sub-head__title">自動化関連装置（検査・計測・搬送・刻印）は<br class="pc"> 上位システム（SCADA・トレサビ）と連携する<br class="pc"> ことで真の価値を発揮する。</h2>
  </div>
</div>
<!-- sec01 -->
<section class="p-u-automation01 l-u-automation01">
  <div class="p-u-automation01__inner l-inner">
    <div class="p-u-automation01__wrap">
      <div class="p-u-automation01__text">
        <h3>「日進製作所の装置ビジネスは、ホーニング盤<br class="pc"> だけではありません」</h3>
        <p>製造業において深刻な問題である人手不足。スマートファクトリー構築の先にあるのは品質の向上、生産現場の効率化、省力化と同時に省人化が重要になります。 日進製作所は1946年の創業以来、製造業に身を置き、自動車部品事業と産業装置事業を中心事業として成長しつづけてまいりました。産業装置事業では主力のホーニング盤だけではなく、様々な自動化関連装置、専用装置を設計・製造しております。 上位システム（SCADA・トレサビ）と自動化関連装置（検査・計測・搬送・刻印）をセットでご提案させていただくことで高度な自律性と柔軟性を併せ持った異次元のスマートな生産ラインを実現いたします。</p>
      </div>
      <figure class="p-u-automation01__img">
        <img src="images/common/automation-img01.jpg" alt="">
      </figure>
    </div>
  </div>
</section>
<!-- sec2 -->
<section class="p-u-automation02 l-u-automation02">
  <div class="p-u-automation02__inner l-inner">
    <h3 class="p-u-automation02__title">現状に合わせて本当に必要とされる、無駄のない装置をご提案いたします。</h3>
    <div class="p-u-automation02__grid01">
      <span>刻印装置</span>
      <span>検査装置</span>
      <span>計測装置</span>
      <span>搬送装置</span>
      <span>ホーニング盤</span>
      <span>液晶パネル加工装置</span>
      <span>太陽光パネル加工装置</span> 　etc...
    </div>
    <!-- <div class="p-u-automation02__grid02">
          <span>ホーニング盤</span>
          <span>液晶パネル加工装置</span>
          <span>太陽光パネル加工装置</span>
          　etc...
        </div> -->
    <ul class="p-u-automation02__img">
      <li>
        <img src="images/common/automation-img05.jpg" alt="">
        <span>［刻印装置］</span>
      </li>
      <li>
        <img src="images/common/automation-img07.jpg" alt="">
        <span>［カメラ検査］</span>
      </li>
      <li>
        <img src="images/common/automation-img06.jpg" alt="">
        <span>［自動計測装置］</span>
      </li>
      <li>
        <img src="images/common/automation-img04.jpg" alt="">
        <span>［ガントリーローダ］</span>
      </li>
      <li>
        <img src="images/common/automation-img03.jpg" alt="">
        <span>［ロボット搬送］</span>
      </li>
      <li>
        <img src="images/common/automation-img02.jpg" alt="">
        <span>［AGV搬送］</span>
      </li>
    </ul>
  </div>
</section>
<!-- sec02 end -->
<!--sec03  -->
<section class="p-u-automation03">
  <div class="p-u-automation03__inner ">
    <div class="c-text-area--center">
      <h3>日進製作所が誇る、スマートエンジニアリング </h3>
      <p>超高精度ホーニング盤の総合メーカーとしての確かな技術、私たち自身の生産現場のDX化推進による豊富な経験と知識… スマートファクトリー構築は決して、IT技術だけで本当に必要とされ、本来の課題克服を実現できるものではありません。 今こそ、日進製作所が誇る、スマートエンジニアリングをフルに活かし、生産現場で活きる実践型スマートファクトリーに必要となる様々な自動化関連装置をご提案させていただきます。</p>
    </div>
    <div class="p-u-automation03__wrap">
      <div class="c-text-area  p-u-automation03__text-area">
        <h3>安心感を生む、トータルな工程設計で滑らかにつながる！</h3>
        <div class="c-text-area--num__title font-18" data-number="01">事案に合わせて設計し自社で製造を⾏うため、短納期での 設備提供が可能です。</div>
        <div class="c-text-area--num__title font-18" data-number="02">設備機器だけでなく、SCADAシステムや品質トレサビシス テムをセットでご導入いただければ、作業の自動化のみな らず、情報管理の⾃動化も含め、どちらもバランスよく⾃動 化レベルの⾼い⽣産システムを構築出来ます。 </div>
        <div class="c-text-area--num__title font-18" data-number="03">ホーニング盤で培った、グローバルな保守サービスネット ワークによって安心。</div>
      </div>
      <figure class="p-u-automation03__img">
        <img src="images/common/automation-img08.jpg" alt="">
      </figure>
    </div>
    <!-- automation-modal -->
    <div class="p-item__modal-inner--green">
      <p class="p-u-automation03__modal-title l-inner">自動化関連装置</p>
      <ul class="p-item__modal--automation02">
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
          <!-- <a href=""> -->
          <img src="images/common/item33.png" alt="">
          <img src="" alt="">
          <!-- </a> -->
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
</section>
<!--sec03 end -->
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