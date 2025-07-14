<?php get_header(); ?>

<div class="sub_mv sub_mv02 dealer__ttlePage">
  
    <div class="container">
      <h1 class="sub_mv_title">製品情報一覧</h1>
    </div>
</div>

<?php

  // Logout User
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ( is_user_logged_in() ) {
      wp_logout();
    }
    
    // Redirect to homepage
    wp_redirect( home_url('/dealer') );
    exit;
  }
  
  if(!is_user_approved()) {
    wp_redirect( home_url('/dealer/login/') );
    exit;
  }
?>

<div class="sub_main">
    <div class="container">
      <div class="master_header">
        <div class="sub_breadcrumb">
            <?php custom_breadcrumb(); ?>
        </div>
        <form method="post" action="<?php echo esc_url(home_url('/dealer/product-master'))?>" class="master-btnsContainer">
          <button class="master-btnLeft" style="cursor:pointer;">ログアウト</button>
          <a href="<?php echo home_url(); ?>/dealer/members/form-update/" class="master-btnRight btnRightColor">会員情報変更</a>
        </form>
      </div>

        <div class="master_inner">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/products/products_thumb.jpg" alt="thumb" class="master-thumb" />
            <h3 class="master_ttle">製品情報一覧</h3>
            <div class="master_btnP">
                <a href="#" target="_blank" rel="noreferrer" class="master-btnRight btnWidth">データはこちらから</a>
                <p class="master_subTtleBtn">5月中に公開予定</p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>