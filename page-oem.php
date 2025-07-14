<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">OEM</h1>
  </div>
</div>

<div class="container">
  <div class="sub_breadcrumb">
    <?php custom_breadcrumb(); ?>
  </div>
</div>

<div class="oem_slider">
  <ul class="oem_slider_lists">
    <li class="oem_slider_lists_item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oem/oem_slider_lists_item_img1.png" alt="">
    </li>
    <li class="oem_slider_lists_item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oem/oem_slider_lists_item_img2.png" alt="">
    </li>
    <li class="oem_slider_lists_item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oem/oem_slider_lists_item_img3.png" alt="">
    </li>
    <!-- <li class="oem_slider_lists_item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oem/oem_slider_lists_item_img4.png" alt="" class="only_pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oem/oem_slider_lists_item_img4_sp.png" alt="" class="only_sp">
    </li> -->
  </ul>
</div>

<div class="container">
  <div class="sub_main_top">
    <div class="sub_main_template">
      <div class="sub_main_template_inner">
        <a href="https://storage.net-fs.com/hosting/7168824/13/" class="sub_main_template_inner_big" target="_blank">
          <div class="sub_main_template_inner_big_text">
            <p class="sub_main_template_inner_big_text_title">バーチャルブースのご案内</p>
            <p class="sub_main_template_inner_big_text_desc">こちらからも製品・ビジネス概要をご覧いただけます。</p>
          </div>
          <div class="sub_main_template_inner_big_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sub/sub_main_template_inner_big_oem_img03.png" alt="">
          </div>
        </a>
        <a href="<?php echo home_url(); ?>/oem/oem-business-overview" class="sub_main_template_inner_big">
          <div class="sub_main_template_inner_big_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sub/sub_main_template_inner_big_oem_img01.png" alt="">
          </div>
          <div class="sub_main_template_inner_big_text">
            <p class="sub_main_template_inner_big_text_title">OEM Business Overview</p>
            <p class="sub_main_template_inner_big_text_desc">メリットメディカルOEM部門は、長年にわたり設計・開発・製造してきた数多くの医療機器とコンポーネントを世界中の医療機器メーカーへ供給しています。</p>
          </div>
        </a>
        <a href="<?php echo home_url(); ?>/oem/oem-product" class="sub_main_template_inner_big blue">
          <div class="sub_main_template_inner_big_text">
            <p class="sub_main_template_inner_big_text_title">OEM製品一覧</p>
          </div>
          <div class="sub_main_template_inner_big_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sub/sub_main_template_inner_big_oem_img02.png" alt="">
          </div>
        </a>
        <div class="sub_main_template_inner_links">
          <a href="https://meritoem.com/about/iso-80369-small-bore-connector-standard/" class="sub_main_template_inner_links_item blue" target="_blank">ISO80369</a>
          <a href="<?php echo home_url(); ?>/oem/oem-centrosflo" class="sub_main_template_inner_links_item purple">CentrosFLO™総販売元について</a>
          <a href="<?php echo home_url(); ?>/oem/oem-petit-access-kit-nk" class="sub_main_template_inner_links_item green">プチアクセスキット　NK　販売元について</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>