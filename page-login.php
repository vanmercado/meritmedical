<?php get_header(); ?>

<?php 
    if (is_user_approved()) {
        // Redirect to page
        wp_redirect( home_url('/dealer/product-master') );
        exit;
    }elseif(is_user_logged_in()) {
        // Redirect to page
        wp_redirect( home_url('/dealer') );
        exit;
    }
?>

<div class="sub_mv sub_mv02 dealer__ttlePage">
    <div class="container">
        <h1 class="sub_mv_title"><?php echo get_the_title(); ?></h1>
    </div>
</div>

<div class="sub_main">
    <div class="container">
        <div class="sub_breadcrumb">
            <?php custom_breadcrumb(); ?>
        </div>

        <div class="category_wrapper">
            <p class="dealer__txt">公開情報以外は、会員登録いただいた方のみの限定公開とさせていただきます。<br>会員登録がお済でない方は、こちらから登録をお願い致します。</p>
            <div class="dealer__login">
                <div class="dealer__loginItem">
                    <div class="dealer__loginItemForms">
                        <?php echo do_shortcode('[wpmem_form login]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>