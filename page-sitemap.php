<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title"><?php the_title(); ?></h1>
  </div>
</div>

<div class="sub_main">
  <div class="container">
    <div class="sub_breadcrumb">
      <?php custom_breadcrumb();?>
    </div>
  </div>

  <div class="footer_flex_item">
    <div class="footer_flex_item_nav">
      <a href="<?php echo home_url();?>/news" class="footer_flex_item_nav_title">お知らせ</a>
      <ul class="footer_flex_item_nav_lists">
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo get_category_link(get_category_by_slug('argon-news'));?>">会社情報</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo get_category_link(get_category_by_slug('product-news'));?>">製品情報のお知らせ</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url();?>/upcoming-meetings">学術集会出展予定</a></li>
      </ul>
    </div>
    <div class="footer_flex_item_nav">
      <a href="<?php echo home_url();?>/oem" class="footer_flex_item_nav_title">OEM</a>
      <ul class="footer_flex_item_nav_lists">
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url();?>/oem/oem-business-overview">OEM Business Overview</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url();?>/oem/oem-product">OEM製品一覧</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="https://meritoem.com/about/iso-80369-small-bore-connector-standard/" target="_blank" class="link">ISO80369</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url();?>/oem/oem-centrosflo">CentrosFLO&trade; 総販売元について</a></li>
      </ul>
    </div>
  </div>
  <div class="footer_flex_item">
    <div class="footer_flex_item_nav">
      <a href="<?php echo home_url();?>/product_item_cate" class="footer_flex_item_nav_title">取扱い製品</a>
      <ul class="footer_flex_item_nav_lists">
        <li class="footer_flex_item_nav_lists_item"><a href="#">クリティカルケア関連製品</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="#">インターベンション関連製品</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo get_post_type_archive_link('documents');?>">添付文書</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo get_post_type_archive_link('catalog');?>">カタログ・動画・ケースレポート</a></li>
      </ul>
    </div>
    <div class="footer_flex_item_nav">
      <a href="<?php echo home_url();?>/about-merit" class="footer_flex_item_nav_title">会社概要</a>
      <ul class="footer_flex_item_nav_lists">
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url();?>/about-merit/ceo-greeting">代表の挨拶</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url();?>/about-merit/culture">私たちのビジョン</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url();?>/about-merit/transparency-guidelines">透明性に関する指針</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url();?>/about-merit/privacy-policy">個人情報保護方針</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url();?>/about-merit/bases">拠点</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url();?>/about-merit/history">沿革</a></li>
        <li class="footer_flex_item_nav_lists_item"><a href="https://www.merit.com/investors/" target="_blank" class="link">IR情報</a></li>
      </ul>
    </div>
  </div>



</div>
<?php get_footer();?>
