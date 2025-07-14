<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" />
  <title>MERITMEDICAL</title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php if (is_front_page()) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/top-new.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css">
  <?php elseif (is_singular('product_item_cate')) : ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/product_detail.css">
  <?php elseif (is_page('product_search')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/products.css">
  <?php elseif (is_tax('ccs_pro') || is_tax('ccs_pro_cat')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/products.css">
  <?php elseif (is_tax('intervention') || is_tax('intervention_cat')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/products.css">
    <style media="screen">
      .category_list_item_label1 {
        background-color: #426AB3;
      }
    </style>
  <?php elseif (is_post_type_archive('documents')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/documents.css">
  <?php elseif (is_page('documents_search')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/documents.css">
  <?php elseif (is_post_type_archive('catalog')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/catalog.css">
  <?php elseif (is_page('catalog_search')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/catalog.css">
  <?php elseif (is_post_type_archive('pdf')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pdf.css">
  <?php elseif (is_page('pdf_search')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pdf.css">
  <?php elseif (is_page('contact-us') || is_page('contact-us-2') || is_page('contact-us-3') || is_page('contact-hepasphere-embosphere')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css">
  <?php elseif (is_page('oem')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/oem.css">
  <?php elseif (is_page('oem-product')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/oem.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/oem-list.css">
  <?php elseif (is_page('careers')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/careers.css">
  <?php elseif (is_page('recruit-info')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/careers.css">
  <?php elseif (is_page('system')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/careers.css">
  <?php elseif (is_page('message')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/careers.css">
  <?php elseif (is_page('faq')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/careers.css">
  <?php elseif (is_home() || is_date() || is_category()) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css">
  <?php elseif (is_singular('post')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/news-detail.css">
  <?php elseif (is_page('careers')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/.css">
  <?php elseif (is_page('dealer') || is_page('login') || is_page('password') || is_page('password-complete') || is_page('product-master')): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/dealer.css">
  <?php elseif (is_page('form') || is_page('confirm') || is_page('complete') || is_page('form-update') || is_page('confirm-update') || is_page('complete-update')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/form.css">
  <?php else : ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
  <?php endif; ?>
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-105637932-1', 'auto');
    ga('send', 'pageview');
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-MQHRJZ1GJ4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-MQHRJZ1GJ4');
  </script>
  <meta name="google-site-verification" content="ntU-bCUyLvWBLKfcaSFxE9mfXRE07CBkSJbj9wiA77U" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="newHeader">

    <!-- PC -->
    <div class="newHeader__contentPC">
      <div class="newHeader__contentLinks">

        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="logo" class="newHeader__logo" />
        </a>

        <div class="newHeader__navMiniItem">
          <div class="newHeader__linksItemWithContent">
            <div class="newHeader__linksItemParent">
              <a href="<?php echo home_url(); ?>/news" class="newHeader__links">お知らせ</a>

              <div class="newHeader__iconArrow"></div>
            </div>

            <!-- addtional navigation -->
            <div class="newHeader__linksNewNav">
              <div class="newHeader__newNavContent">
                <p class="newHeader__newNavTitle">お知らせ</p>

                <div class="newHeader__navNewLists">
                  <a href="<?php echo get_category_link(get_category_by_slug('argon-news')); ?>" class="newHeader__navNewItem">会社情報</a>
                  <a href="<?php echo get_category_link(get_category_by_slug('product-news')); ?>" class="newHeader__navNewItem">製品情報のお知らせ</a>
                  <a href="<?php echo home_url(); ?>/upcoming-meetings" class="newHeader__navNewItem">学術集会出展予定</a>
                  <a href="<?php echo get_post_type_archive_link('pdf'); ?>" class="newHeader__navNewItem">レターPDF</a>
                </div>
              </div>
            </div>

          </div>

          <div class="newHeader__linksItemWithContent">
            <div class="newHeader__linksItemParent">
              <a href="<?php echo home_url(); ?>/product_item_cate" class="newHeader__links">取扱い製品</a>

              <div class="newHeader__iconArrow"></div>
            </div>

            <!-- addtional navigation -->
            <div class="newHeader__linksNewNav">
              <div class="newHeader__newNavContent">
                <p class="newHeader__newNavTitle">取扱い製品</p>

                <div class="newHeader__navNewLists">
                  <a href="<?php echo get_term_link('ccs_pro', 'ccs_pro_cat'); ?>" class="newHeader__navNewItem">クリティカルケア関連製品</a>
                  <a href="<?php echo get_term_link('intervention', 'intervention_cat'); ?>" class="newHeader__navNewItem">インターベンション関連製品</a>
                  <a href="<?php echo get_post_type_archive_link('documents'); ?>" class="newHeader__navNewItem">添付文書</a>
                  <a href="<?php echo get_post_type_archive_link('catalog'); ?>" class="newHeader__navNewItem">カタログ・動画・ケースレポート</a>
                </div>
              </div>
            </div>

          </div>

          <div class="newHeader__linksItemWithContent">
            <div class="newHeader__linksItemParent">
              <a href="<?php echo home_url(); ?>/oem" class="newHeader__links">OEM</a>

              <div class="newHeader__iconArrow"></div>
            </div>

            <!-- addtional navigation -->
            <div class="newHeader__linksNewNav">
              <div class="newHeader__newNavContent">
                <p class="newHeader__newNavTitle">OEM</p>

                <div class="newHeader__navNewLists">
                  <a href="<?php echo home_url(); ?>/oem/oem-business-overview" class="newHeader__navNewItem">OEM Business Overview</a>
                  <a href="<?php echo home_url(); ?>/oem/oem-product" class="newHeader__navNewItem">OEM 製品一覧</a>
                  <a href="https://meritoem.com/about/iso-80369-small-bore-connector-standard/" class="newHeader__navNewItem">ISO80369</a>
                  <a href="<?php echo home_url(); ?>/oem/oem-centrosflo" class="newHeader__navNewItem">CentrosFLO™ 総販売元について</a>
                  <a href="<?php echo home_url(); ?>/oem/oem-petit-access-kit-nk/" class="newHeader__navNewItem">プチアクセスキット　NK<br>販売元について</a>
                  
                  <a href="<?php echo home_url(); ?>/oem/oem-safe-guard-focus/" class="newHeader__navNewItem">メリット　セーフガードFOCUS　<br>取扱い販売店について</a>
                </div>
              </div>
            </div>

          </div>

          <div class="newHeader__linksItemWithContent">
            <div class="newHeader__linksItemParent">
              <a href="<?php echo home_url(); ?>/about-merit" class="newHeader__links">会社概要</a>

              <div class="newHeader__iconArrow"></div>
            </div>

            <!-- addtional navigation -->
            <div class="newHeader__linksNewNav">
              <div class="newHeader__newNavContent">
                <p class="newHeader__newNavTitle">会社概要</p>

                <div class="newHeader__navNewLists">
                  <a href="<?php echo home_url(); ?>/about-merit/top-message" class="newHeader__navNewItem">代表の挨拶</a>
                  <a href="<?php echo home_url(); ?>/about-merit/culture" class="newHeader__navNewItem">ミッション・ビジョン&バリュー</a>
                  <a href="<?php echo home_url(); ?>/about-merit/transparency-guidelines" class="newHeader__navNewItem">透明性に関する指針</a>
                  <a href="<?php echo home_url(); ?>/about-merit/privacy-policy" class="newHeader__navNewItem">個人情報保護方針</a>
                  <a href="<?php echo home_url(); ?>/about-merit/bases" class="newHeader__navNewItem">拠点</a>
                  <a href="<?php echo home_url(); ?>/about-merit/history" class="newHeader__navNewItem">沿革</a>
                  <a href="https://www.merit.com/investors/" target="_blank" class="newHeader__navNewItem">IR情報<p></p></a>
                </div>
              </div>
            </div>

          </div>

          <div class="newHeader__linksItemWithContent">
            <div class="newHeader__linksItemParent">
              <a href="<?php echo home_url(); ?>/dealer/" class="newHeader__links">販売代理店様</a>
            </div>
          </div>

          <div class="newHeader__linksItemWithContent">
            <div class="newHeader__linksItemParent">
              <a href="<?php echo home_url(); ?>/careers" class="newHeader__links">採用情報</a>

              <div class="newHeader__iconArrow"></div>
            </div>

            <!-- addtional navigation -->
            <div class="newHeader__linksNewNav">
              <div class="newHeader__newNavContent">
                <p class="newHeader__newNavTitle">採用情報</p>

                <div class="newHeader__navNewLists">
                  <a href="<?php echo home_url(); ?>/careers/recruit-info" class="newHeader__navNewItem">募集情報</a>
                  <a href="<?php echo home_url(); ?>/careers/system" class="newHeader__navNewItem">制度について</a>
                  <a href="<?php echo home_url(); ?>/careers/message" class="newHeader__navNewItem">人事総務本部長メッセージ</a>
                  <a href="<?php echo home_url(); ?>/careers/faq" class="newHeader__navNewItem">よくある質問</a>
                </div>
              </div>
            </div>

          </div>

          <div class="newHeader__linksItemWithContent">
            <div class="newHeader__linksItemParent">
              <a href="<?php echo home_url(); ?>/contact-us" class="newHeader__links">お問い合わせ</a>
            </div>
          </div>
        </div>

        <a href="https://www.merit.com/" target="_blank" rel="noopener">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_country.png" alt="usa" class="newHeader__logoUSA" />
        </a>
      </div>
    </div>


    <!-- SP -->
    <div class="newHeader__contentSP">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="logo" class="newHeader__logo" />
      </a>

      <div class="c_menu newHeader__burgMenu">
        <span class="c_menu_inner"></span>
      </div>

      <!-- Navigation -->
      <div class="newHeader__navSPContent">
        <div class="newHeader__navContent">

          <!-- お知らせ -->
          <div class="newHeader__navTextSP navTextSP">
            <p class="newHeader__titleSP titleSP">
              <a href="<?php echo home_url(); ?>/news">お知らせ</a>
              <span class="arrowSP"></span>
            </p>
            <div class="newHeader__navListSP navListSP">
              <a href="<?php echo get_category_link(get_category_by_slug('argon-news')); ?>" class="newHeader__navNewItem">会社情報</a>
              <a href="<?php echo get_category_link(get_category_by_slug('product-news')); ?>" class="newHeader__navNewItem">製品情報のお知らせ</a>
              <a href="<?php echo home_url(); ?>/upcoming-meetings" class="newHeader__navNewItem">学術集会出展予定</a>
              <a href="<?php echo get_post_type_archive_link('pdf'); ?>" class="newHeader__navNewItem">レターPDF</a>
            </div>
          </div>

          <!-- 取扱い製品 -->
          <div class="newHeader__navTextSP navTextSP">
            <p class="newHeader__titleSP titleSP">
              <a href="<?php echo home_url(); ?>/product_item_cate">取扱い製品</a>
              <span class="arrowSP"></span>
            </p>
            <div class="newHeader__navListSP navListSP">
              <a href="<?php echo get_term_link('ccs_pro', 'ccs_pro_cat'); ?>" class="newHeader__navNewItem">クリティカルケア関連製品</a>
              <a href="<?php echo get_term_link('intervention', 'intervention_cat'); ?>" class="newHeader__navNewItem">インターベンション関連製品</a>
              <a href="<?php echo get_post_type_archive_link('documents'); ?>" class="newHeader__navNewItem">添付文書</a>
              <a href="<?php echo get_post_type_archive_link('catalog'); ?>" class="newHeader__navNewItem">カタログ・動画・ケースレポート</a>
            </div>
          </div>

          <!-- OEM -->
          <div class="newHeader__navTextSP navTextSP">
            <p class="newHeader__titleSP titleSP">
              <a href="<?php echo home_url(); ?>/oem">OEM</a>
              <span class="arrowSP"></span>
            </p>
            <div class="newHeader__navListSP navListSP">
              <a href="<?php echo home_url(); ?>/oem/oem-business-overview" class="newHeader__navNewItem">OEM Business Overview</a>
              <a href="<?php echo home_url(); ?>/oem/oem-product" class="newHeader__navNewItem">OEM 製品一覧</a>
              <a href="https://meritoem.com/about/iso-80369-small-bore-connector-standard/" target="_blank" class="newHeader__navNewItem">ISO80369<p></p></a>
              <a href="<?php echo home_url(); ?>/oem/oem-centrosflo" class="newHeader__navNewItem">CentrosFLO™ 総販売元について</a>
              <a href="<?php echo home_url(); ?>/oem/oem-petit-access-kit-nk" class="newHeader__navNewItem">プチアクセスキット　NK　販売元について</a>
              <a href="<?php echo home_url(); ?>/oem/oem-safe-guard-focus/" class="newHeader__navNewItem">メリット　セーフガードFOCUS　<br>取扱い販売店について</a>
            </div>
          </div>

          <!-- 会社概要 -->
          <div class="newHeader__navTextSP navTextSP">
            <p class="newHeader__titleSP titleSP">
              <a href="<?php echo home_url(); ?>/about-merit">会社概要</a>
              <span class="arrowSP"></span>
            </p>
            <div class="newHeader__navListSP navListSP">
              <a href="<?php echo home_url(); ?>/about-merit/top-message" class="newHeader__navNewItem">代表の挨拶</a>
              <a href="<?php echo home_url(); ?>/about-merit/culture" class="newHeader__navNewItem">ミッション・ビジョン・バリュー</a>
              <a href="<?php echo home_url(); ?>/about-merit/transparency-guidelines" class="newHeader__navNewItem">透明性に関する指針</a>
              <a href="<?php echo home_url(); ?>/about-merit/privacy-policy" class="newHeader__navNewItem">個人情報保護方針</a>
              <a href="<?php echo home_url(); ?>/about-merit/bases" class="newHeader__navNewItem">拠点</a>
              <a href="<?php echo home_url(); ?>/about-merit/history" class="newHeader__navNewItem">沿革</a>
              <a href="https://www.merit.com/investors/" target="_blank" class="newHeader__navNewItem">IR情報<p></p></a>
            </div>
          </div>

          <div class="newHeader__navTextSP navTextSP">
            <p class="newHeader__titleSP titleSP">
              <a href="<?php echo home_url(); ?>/dealer">販売代理店様</a>
          </div>

          <div class="newHeader__navTextSP navTextSP">
            <p class="newHeader__titleSP titleSP">
              <a href="<?php echo home_url(); ?>/careers">採用情報</a>
              <span class="arrowSP"></span>
            </p>
            <div class="newHeader__navListSP navListSP">
              <a href="<?php echo home_url(); ?>/careers/recruit-info" class="newHeader__navNewItem">募集情報</a>
              <a href="<?php echo home_url(); ?>/careers/system" class="newHeader__navNewItem">制度について</a>
              <a href="<?php echo home_url(); ?>/careers/message" class="newHeader__navNewItem">人事総務本部長メッセージ</a>
              <a href="<?php echo home_url(); ?>/careers/faq" class="newHeader__navNewItem">よくある質問</a>
            </div>
          </div>

          <div class="newHeader__navTextSP navTextSP">
            <p class="newHeader__titleSP titleSP">
              <a href="<?php echo home_url(); ?>/contact-us">お問い合わせ</a>
              <!-- <span class="arrowSP"></span> -->
            </p>

          </div>

          <a href="#" target="_blank" rel="noopener">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_country.png" alt="usa" class="newHeader__logoUSA" />
          </a>
        </div>

      </div>
    </div>
  </header>

  <main>