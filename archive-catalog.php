<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">カタログ・動画・ケースレポート</h1>
  </div>
</div>

<div class="sub_main product">
  <div class="container">
    <div class="sub_breadcrumb">
      <?php custom_breadcrumb();?>
    </div>
  </div>
  <?php get_template_part( 'catalog_bottom_parts' ); ?>

</div>
<?php get_footer();?>
