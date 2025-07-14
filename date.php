<?php get_header(); ?>
<!-- subtitle -->
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">お知らせ</h1>
  </div>
  
</div>

<!-- breadcrumb -->
<div class="container">
  <div class="sub_breadcrumb">
    <?php custom_breadcrumb();?>
  </div>
</div>

<!-- main & side bar -->
<div class="container">
  <div class="news_container">
    <div class="main_content">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="main_content_item">
        <a href="<?php the_permalink(); ?>">
          <span class="main_content_item_date"><?php the_time('Y年m月d日') ?></span>
          <p class="main_content_item_title"><?php the_title(); ?></p>
        </a>
      </div>
      <?php endwhile;?>

      <?php
      $current_pgae = get_query_var( 'paged' );
      $current_pgae = $current_pgae == 0 ? '1' : $current_pgae;
      $max_pages = $wp_query->max_num_pages;
        if ( function_exists( 'pagination' ) ) :
            pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
        endif;
      ?>
    </div>
  <?php endif; ?>
  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer();?>
