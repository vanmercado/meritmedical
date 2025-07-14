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
            <div class="dealer__forgotComplete">
                <p class="dealer__forgotDesc">
                    パスワードをリセットするためのメールをお送りしました。<br>
                    もし数分経ってもメールが届かない場合は、迷惑メールフォルダもご確認いただき、それでも受信できない場合は、<br>
                    メールアドレスが正しいか再度ご確認ください。
                </p>

                <div class="dealer__contentFlexBtnFlex dealer__forgotBtn">
                    <a href="<?php echo home_url(); ?>">                    
                        <input type="submit" name="Submit" value="販売代理店様TOPへ戻る" class="buttons dealer__contentFlexBtnSubmit">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>