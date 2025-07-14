<?php get_header(); ?>

<?php if(is_page("about-merit")): ?>
  <div class="sub_mv02 large">
    <div class="container">
      <h1 class="sub_mv_title02"><?php the_title(); ?></h1>
      <p class="sub_mv_subTitle">メリットメディカル日本法人の概要と、<br>弊社が取り組む方針をご覧いただけます。</p>
    </div>
  </div>
<?php elseif(is_page("culture") || is_page("transparency-guidelines") || is_page("privacy-policy") || is_page("bases") || is_page("history")): ?>
  <div class="sub_mv02 medium">
    <div class="container">
      <h1 class="sub_mv_title02"><?php the_title(); ?></h1>
    </div>
  </div>
<?php elseif(is_page("top-message")): ?>
  <div class="sub_mv02 medium topmsg">
    <div class="container">
      <h1 class="sub_mv_title02"><?php the_title(); ?></h1>
    </div>
  </div>
<?php else: ?>
  <div class="sub_mv">
    <div class="container">
    <h1 class="sub_mv_title"><?php the_title(); ?></h1>
    </div>
  </div>
<?php endif; ?>


<div class="sub_main">
  <div class="container">
    <div class="sub_breadcrumb">
      <?php custom_breadcrumb();?>
    </div>
  </div>
  
<?php if(is_page('oem-business-overview')):?>
  
  <div class="sub_main oem">
    <div class="container">
      <a href="https://storage.net-fs.com/hosting/7168824/13/" class="sub_main_template_inner_big" target="_blank">
        <div class="sub_main_template_inner_big_text">
          <p class="sub_main_template_inner_big_text_title">バーチャルブースのご案内</p>
          <p class="sub_main_template_inner_big_text_desc">こちらからも製品・ビジネス概要をご覧いただけます。</p>
        </div>
        <div class="sub_main_template_inner_big_img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sub/sub_main_template_inner_big_oem_img03.png" alt="">
        </div>
      </a>
    </div>
  </div>
<?php endif;?>

  <?php get_template_part( 'template_parts' ); ?>
</div>
<?php get_footer();?>
