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
      <h2>品質トレサビシステム</h2>
    </div> -->
<section class="section-head">
  <div class="section-head__inner l-inner">
    <div class="c-section-head">
      <h1>品質トレサビ<br class="sp">システム</h1>
    </div>
  </div>
</section>
<!-- サブタイトル -->
<div class="c-sub-head">
  <div class="c-sub-head__inner l-inner">
    <div class="c-sub-head__logo">
      <img src="images/common/item-logo05.png" alt="">
    </div>
    <h2 class="c-sub-head__title">「トレサビシステム」×「ゲートチェック」で<br class="pc"> 品質向上と効率化を両立する。</h2>
  </div>
</div>
<section class="p-u-tolesabi01">
  <div class="p-u-tolesabe01__inner l-inner">
    <!-- 1 -->
    <div class="p-u-tolesabi01__wrap">
      <figure class="p-u-tolesabi01__img">
        <img src="images/common/tolesabi-img01.jpg" alt="">
      </figure>
      <div class="p-u-tolesabi01__text c-text-area">
        <h3>「トレサビシステム導入の真の目的は問題を早期に解消し、 社内リソースの消費を最小限に抑えることです」 </h3>
        <p>今や品質管理の中心にあるトレーサビリティの確立に必要な“いつ、どこで、誰が、どうやって、何をしたのか”などの履歴情報をデジタル化して、システム上で一元管理することは必須です。<br> 単品やロットの通過記録を残すだけでなく、「サガネ係長のIoT 」パッケージアプリに含まれる、稼働監視、計測データ管理、設備点検、不良集計などを同一サーバにインストールし、計測データや検査結果、不良記録、点検結果など様々なデータを紐づければ、情報管理の自動化レベルは一気に向上します。br これこそが、SCADAを中心に据えたラインを構築することの価値、すなわち、品質向上と省人化を同時に実現するということです。</p>
      </div>
    </div>
    <div class="p-u-tolesabi01__wrap--reverse">
      <figure class="p-u-tolesabi01__img--reverse">
        <img src="images/common/tolesabi-img02.jpg" alt="">
      </figure>
      <div class="p-u-tolesabi01__text--reverse c-text-area">
        <h3>日進製作所独自の強み </h3>
        <div class="c-text-area--num__title font-18" data-number="01">「Tier1部品メーカー」ならではの視点</div>
        <p class="c-text-area--num__text"> ⼯程⾶ばし、⼆度加⼯、データ⽋損、データ重複を検出してアラートするゲートチェックの仕組みがあります。また、システムメンテナンスやシステム障害などが発⽣した際の運⽤フローまで含めてご提案致します。</p>
        <div class="c-text-area--num__title font-18" data-number="02">「⽼舗設備メーカー」ならではの視点</div>
        <p class="c-text-area--num__text"> トレサビシステムを刻印装置、計測・検査装置、搬送装置などとセットでご提供することにより、お客様によるメーカー間の仕様整合は不要となり、連携テスト済みの高度な生産システムを提供いたします。</p>
        <div class="c-text-area--num__title font-18" data-number="03">実績豊富な 「IoTベンダー」の視点</div>
        <p class="c-text-area--num__text"> ⾒やすい、使いやすい検索画⾯で、⽇々の⽣産管理のストレスを最⼩限におさえす。また、お客様ご⾃⾝でセットアップの追加や変更が可能なため、品種の追加や品質管理項⽬の追加などに柔軟に対応可能です。</p>
      </div>
    </div>
    <!-- 2 -->
    <!-- <div class="p-u-tolesabi01__wrap02">
          <div class="p-u-tolesabi01__text02 ">
            <h3 class="c-text-area--num mt-0 font">「トレサビシステム導入の真の目的は問題を早期に解消し、
              社内リソースの消費を最小限に抑えることです」</h3>
              <div class="c-text-area--num__title font-18" data-number="01">「Tier1部品メーカー」ならではの視点</div>
              <p class="c-text-area--num__text">⼯程⾶ばし、⼆度加⼯、データ⽋損、データ重複を検出してアラートするゲーチェックの仕組みがあります。また、システムメンテナンスやシステム障害などが発⽣した際の運⽤フローまで含めてご提案致します。</p>
              <div class="c-text-area--num__title font-18" data-number="02">「⽼舗設備メーカー」ならではの視点</div>
              <p class="c-text-area--num__text">トレサビシステムを刻印装置、計測・検査装置、搬送装置などとセットでご提供することにより、お客様によるメーカー間の仕様整合は不要となり、連携テスト済みの高度な生産システムを提供いたします。</p>
              <div class="c-text-area--num__title font-18" data-number="03">実績豊富な 「IoTベンダー」の視点</div>
              <p class="c-text-area--num__text">⾒やすい、使いやすい検索画⾯で、⽇々の⽣産管理のストレスを最⼩限におさえす。また、お客様ご⾃⾝でセットアップの追加や変更が可能なため、品種の追加や品質管理項⽬の追加などに柔軟に対応可能です。</p>
          </div>
          <figure class="p-u-tolesabi01__img02">
            <img src="/images/common/tolesabi-img02.jpg" alt="">
          </figure>
        </div> -->
  </div>
</section>
<section class="p-u-tolesabi02 l-u-tolesabi02">
  <div class="p-u-tolesabi02__inner l-inner">
    <h3 class="p-u-tolesabi02__title"> 運用の簡便さと、データの信頼性を両立するバランスの良い<br class="pc"> 「トレサビ管理」で現状の様々な課題を解消します。 </h3>
    <!-- icon -->
    <div class="p-u-tolesabi02__icons">
      <figure class="p-u-tolesabi02__icon">
        <img class="pt10" src="images/common/tolesabi-icon01.png" alt="">
        <img src="images/common/tolesabi-icon02.png" alt="">
        <img src="images/common/tolesabi-icon03.png" alt="">
        <img class="pt20" src="images/common/tolesabi-icon04.png" alt="">
        <img class="pt25" src="images/common/tolesabi-icon05.png" alt="">
        <img src="images/common/tolesabi-icon06.png" alt="">
      </figure>
    </div>
    <!-- tolesabi-modal -->
    <div class="p-item__modal-inner--green02">
      <p class="p-u-tolesabi02__modal-title l-inner">トレサビシステム</p>
      <ul class="p-item__modal--automation02 ">
        <li class="item02">
          <!-- <a href=""> -->
          <img src="images/common/item22.png" alt="">
          <img src="" alt="">
          <!-- </a> -->
        </li>
        <li class="item02">
          <!-- <a href=""> -->
          <img src="images/common/itme23.png" alt="">
          <img src="" alt="">
          <!-- </a> -->
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
          <!-- <a href=""> -->
          <img src="images/common/item24.png" alt="">
          <img src="" alt="">
          <!-- </a> -->
        </li>
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