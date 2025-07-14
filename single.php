<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">お知らせ</h1>
  </div>
</div>

<div class="container">
  <div class="sub_breadcrumb">
    <?php custom_breadcrumb();?>
  </div>
</div>

<div class="container">
  <div class="news_container">
    <div class="main_content">
      <div class="main_content_title_wrapper">
        <div class="main_content_title_label"><span class="main_content_title_label_date"><?php the_time('Y年m月d日') ?></span>
          <div class="main_content_tags">
            <?php
            $cat = get_the_category($post->ID);
            if($cat){
            foreach ($cat as $key) {
              if($key->slug == "argon-news"){
              ?>
              <a class="main_content_title_label_company" href="<?php echo get_category_link($key->term_id); ?>"><?php echo $key->name; ?></a>
            <?php } elseif($key->slug == "product-news") { ?>
              <a class="main_content_title_label_news" href="<?php echo get_category_link($key->term_id); ?>"><?php echo $key->name; ?></a>
              <?php
            }}}
            ?>
          </div>
        </div>
        <h2 class="main_content_title"><?php the_title(); ?></h2>
      </div>
      <div class="main_content_desc">
        <?php the_content(); ?>
        <div class="clear"></div>
        <ul class="news_detail_pagination">
          <?php
            $prev_post = get_previous_post();
            if($prev_post):
          ?>
          <li><a href="<?php echo get_permalink($prev_post->ID);?>">&lt; 前へ</a></li>
          <?php endif;?>
          <li><a href="<?php echo get_post_type_archive_link('post'); ?>">一覧に戻る</a></li>
          <?php
            $next_post = get_next_post();
            if($next_post):
          ?>
          <li><a href="<?php echo get_permalink($next_post->ID);?>">次へ&gt;</a></li>
          <?php endif;?>
        </ul>
      </div>

  </div>

  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer();?>
