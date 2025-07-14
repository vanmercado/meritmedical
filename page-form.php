<?php get_header(); ?>

<div class="sub_mv sub_mv02 dealer__ttlePage">
  <div class="container">
    <h1 class="sub_mv_title">会員登録フォーム</h1>
  </div>
</div>

<div class="sub_main">
    <div class="container">
        <div class="sub_breadcrumb">
            <?php custom_breadcrumb(); ?>
        </div>

        <div class="category_wrapper">
            <div class="step">
                <div class="step__item active">
                    <span class="step__itemTxt">会員登録<br class="u-spDb">フォーム</span>
                </div>
                <div class="step__item">
                    <span class="step__itemTxt">入力内容の<br class="u-spDb">確認</span>
                </div>
                <div class="step__item">
                    <span class="step__itemTxt">会員登録完了</span>
                </div>
            </div>
            <p class="registerForm__txt">会員登録をご希望の方は、以下の項目についてご入力いただき、「入力内容を確認する」ボタンを押してください。</p>
            <p class="registerForm__txtWarning">登録メールアドレスは、ご所属の会社のドメインで設定してください（例：＠merit.com）。　携帯のキャリア会社ドメイン、yahoo、gmailなどでも登録ができますが、ご所属が弊社の取引先でない場合は、登録後に除外させていただく場合がございます。</p>
            <p class="registerForm__txtDesc">登録いただきました内容は、弊社からのお知らせなどをメールでお送りするなど、今後の弊社とのコミュニケーションリストとして活用させていただきます。</p>
            <div class="registerForm">
                <?php echo do_shortcode('[wpmem_form register]'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>