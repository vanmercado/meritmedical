<?php get_header(); ?>


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
            <p class="dealer__txt">会員登録にて使用いただいているメールアドレスをご入力の上、送信ボタンを押してください。<br>再設定用のメールをお送りしますので、お手続きをお願いします。</p>
            <div class="dealer__forgot">
                <div class="dealer__forgotC">
                    <?php echo do_shortcode('[wpmem_form_pwd_reset]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>