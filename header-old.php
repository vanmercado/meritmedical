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
  <?php if (is_front_page()) : ?>
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
  <?php elseif (is_page('contact-us') || is_page('contact-us-2') || is_page('contact-hepasphere-embosphere')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css">
  <?php elseif (is_page('oem')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/oem.css">
  <?php elseif (is_page('oem-product')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/oem.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/oem-list.css">
  <?php elseif (is_home() || is_date() || is_category()) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css">
  <?php elseif (is_singular('post')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/news-detail.css">
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
  <header class="header">
    <div class="header_inner">
      <div class="container">
        <h1 class="header_logo">
          <a href="<?php echo home_url(); ?>" class="header_logo_link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="MERITMEDICAL">
          </a>
        </h1>
        <nav class="header_right">
          <ul class="header_right_nav">
            <li class="header_right_nav_item">
              <a href="<?php echo home_url(); ?>/news">お知らせ</a>
              <ul class="header_right_nav_item_sub">
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo get_category_link(get_category_by_slug('argon-news')); ?>">会社情報</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo get_category_link(get_category_by_slug('product-news')); ?>">製品情報のお知らせ</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo home_url(); ?>/upcoming-meetings">学術集会出展予定</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo get_post_type_archive_link('pdf'); ?>">レターPDF</a>
                </li>
              </ul>
            </li>
            <li class="header_right_nav_item">
              <a href="<?php echo home_url(); ?>/product_item_cate">取扱い製品</a>
              <ul class="header_right_nav_item_sub">
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo get_term_link('ccs_pro', 'ccs_pro_cat'); ?>">クリティカルケア関連製品</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo get_term_link('intervention', 'intervention_cat'); ?>">インターベンション関連製品</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo get_post_type_archive_link('documents'); ?>">添付文書</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo get_post_type_archive_link('catalog'); ?>">カタログ・動画</a>
                </li>
              </ul>
            </li>
            <li class="header_right_nav_item">
              <a href="<?php echo home_url(); ?>/oem">OEM</a>
              <ul class="header_right_nav_item_sub">
                <li class="header_right_nav_item_sub_item">
                  <a href="https://storage.net-fs.com/hosting/7168824/13/" target="_blank">バーチャルブースのご案内</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo home_url(); ?>/oem/oem-business-overview">OEM Business Overview</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo home_url(); ?>/oem/oem-product">OEM 製品一覧</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="https://meritoem.com/about/iso-80369-small-bore-connector-standard/" target="_blank">ISO80369</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo home_url(); ?>/oem/oem-centrosflo">CentrosFLO&trade; 総販売元について</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo home_url(); ?>/oem/oem-petit-access-kit-nk">プチアクセスキット　NK<br>販売元について
                  </a>
                </li>
              </ul>
            </li>
            <li class="header_right_nav_item">
              <a href="<?php echo home_url(); ?>/about-merit">会社概要</a>
              <ul class="header_right_nav_item_sub">
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/top-message">代表の挨拶</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/culture">私たちのビジョン</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/transparency-guidelines">透明性に関する指針</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/privacy-policy">個人情報保護方針</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/bases">拠点</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/history">沿革</a>
                </li>
                <li class="header_right_nav_item_sub_item">
                  <a href="https://www.merit.com/investors/" target="_blank">IR情報</a>
                </li>
              </ul>
            </li>
            <li class="header_right_nav_item">
              <a href="<?php echo home_url(); ?>/contact-us">お問い合わせ</a>
            </li>
            <li class="header_right_nav_item">
              <a href="https://www.merit.com/" target="_blank">
                <div class="header_right_nav_item_usa"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header_right_nav_item_usa.png" alt=""></div>USA
              </a>
            </li>
          </ul>
        </nav>
        <div class="c_menu">
          <span class="c_menu_inner"></span>
        </div>
        <div class="header_sp">
          <ul class="header_sp_lists">
            <li class="header_sp_lists_item has_child">
              <a href="<?php echo home_url(); ?>/news">お知らせ</a>
              <ul class="header_sp_lists_item_sub">
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo get_category_link(get_category_by_slug('argon-news')); ?>">会社情報</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo get_category_link(get_category_by_slug('product-news')); ?>">製品情報のお知らせ</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo home_url(); ?>/upcoming-meetings">学術集会出展予定</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo get_post_type_archive_link('pdf'); ?>">レターPDF</a>
                </li>
              </ul>
            </li>
            <li class="header_sp_lists_item has_child">
              <a href="<?php echo home_url(); ?>/product_item_cate">取扱い製品</a>
              <ul class="header_sp_lists_item_sub">
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo get_term_link('ccs_pro', 'ccs_pro_cat'); ?>">クリティカルケア関連製品</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo get_term_link('intervention', 'intervention_cat'); ?>">インターベンション関連製品</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo get_post_type_archive_link('documents'); ?>">添付文書</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo get_post_type_archive_link('catalog'); ?>">カタログ・動画</a>
                </li>
              </ul>
            </li>
            <li class="header_sp_lists_item has_child">
              <a href="<?php echo home_url(); ?>/oem">OEM</a>
              <ul class="header_sp_lists_item_sub">
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo home_url(); ?>/oem/oem-business-overview">OEM Business Overview</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo home_url(); ?>/oem/oem-product">OEM 製品一覧</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="https://meritoem.com/about/iso-80369-small-bore-connector-standard/" target="_blank">ISO80369</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo home_url(); ?>/oem/oem-centrosflo">CentrosFLO&trade; 総販売元について</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo home_url(); ?>/oem/oem-petit-access-kit-nk">プチアクセスキット　NK　販売元について</a>
                </li>
              </ul>
            </li>
            <li class="header_sp_lists_item has_child">
              <a href="<?php echo home_url(); ?>/about-merit">会社概要</a>
              <ul class="header_sp_lists_item_sub">
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/top-message">代表の挨拶</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/culture">私たちのビジョン</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/transparency-guidelines">透明性に関する指針</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/privacy-policy">個人情報保護方針</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/bases">拠点</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="<?php echo home_url(); ?>/about-merit/history">沿革</a>
                </li>
                <li class="header_sp_lists_item_sub_item">
                  <a href="https://www.merit.com/investors/" target="_blank">IR情報</a>
                </li>
              </ul>
            </li>
            <li class="header_sp_lists_item has_child">
              <a href="<?php echo home_url(); ?>/contact-us">お問い合わせ</a>
            </li>
            <li class="header_sp_lists_item usa">
              <a href="https://www.merit.com/" target="_blank">
                <div class="header_right_nav_item_usa"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header_right_nav_item_usa.png" alt=""></div>USA
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main>