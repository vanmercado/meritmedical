<?php /* Template Name: Form Confirm */ ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture submitted form data
    $formData = $_POST;
} else {
    wp_redirect(site_url('/dealer/members/formi@/form-update/')); // Redirect if accessed without POST
    exit;
}
?>


<?php get_header(); ?>

<div class="sub_mv sub_mv02 dealer__ttlePage">
  <div class="container">
    <h1 class="sub_mv_title">入力内容の確認</h1>
  </div>
</div>

<div class="sub_main">
    <div class="container">
        <div class="sub_breadcrumb">
            <?php custom_breadcrumb(); ?>
        </div>

        <div class="category_wrapper">
            <div class="step">
                <div class="step__item">
                    <span class="step__itemTxt">会員情報変更<br class="u-spDb">フォーム</span>
                </div>
                <div class="step__item active">
                    <span class="step__itemTxt">入力内容の<br class="u-spDb">確認</span>
                </div>
                <div class="step__item">
                    <span class="step__itemTxt">会員情報変更完了</span>
                </div>
            </div>
            <p class="registerForm__txtWarningConfirm">入力内容に間違いがない場合は、「送信する」ボタンを押してください。</p>
            <?php if ( is_user_logged_in() ) : ?>
                <div class="registerForm">
                    <form name="form" method="post" action="<?php echo esc_url(home_url('/dealer/form-update/complete-update/')); ?>" id="wpmem_register_form" class="form">
                        <div class="registerForm__content">
                            <div class="registerForm__contentFlex">
                                <div class="registerForm__contentHd">
                                    <label for="first_name">氏名(漢字) </label>
                                    <div class="registerForm__contentHdReq">必須</div>
                                </div>
                                <div class="registerForm__contentInput">
                                    <div class="registerForm__contentInputFlex">
                                        <div class="registerForm__contentInputItem confirm">
                                            <span class="registerForm__contentInputItemData"><?php echo esc_html($formData['last_name']); ?></span>
                                            <input type="hidden" name="last_name" value="<?php echo esc_attr($formData['last_name']); ?>">
                                        </div>
                                        <div class="registerForm__contentInputItem confirm">
                                            <span class="registerForm__contentInputItemData"><?php echo esc_html($formData['first_name']); ?></span>
                                            <input type="hidden" name="first_name" value="<?php echo esc_attr($formData['first_name']); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registerForm__contentFlex">
                                <div class="registerForm__contentHd">
                                    <label for="katakana_first_name">氏名(カタカナ)</label>
                                    <div class="registerForm__contentHdReq">必須</div>
                                </div>
                                <div class="registerForm__contentInput">
                                    <div class="registerForm__contentInputFlex">
                                        <div class="registerForm__contentInputItem confirm">
                                            <span class="registerForm__contentInputItemData"><?php echo esc_html($formData['katakana_last_name']); ?></span>
                                            <input type="hidden" name="katakana_last_name" value="<?php echo esc_attr($formData['katakana_last_name']); ?>">
                                        </div>
                                        <div class="registerForm__contentInputItem confirm">
                                            <span class="registerForm__contentInputItemData"><?php echo esc_html($formData['katakana_first_name']); ?></span>
                                            <input type="hidden" name="katakana_first_name" value="<?php echo esc_attr($formData['katakana_first_name']); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registerForm__contentFlex">
                                <div class="registerForm__contentHd">
                                    <label for="company">会社名</label>
                                    <div class="registerForm__contentHdReq">必須</div>
                                </div>
                                <div class="registerForm__contentInput">
                                    <div class="registerForm__contentInputFlex">
                                        <span class="registerForm__contentInputItemData"><?php echo esc_html($formData['company']); ?></span>
                                        <input type="hidden" name="company" value="<?php echo esc_attr($formData['company']); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="registerForm__contentFlex">
                                <div class="registerForm__contentHd">
                                    <label for="company">電話番号</label>
                                    <div class="registerForm__contentHdReq">必須</div>
                                </div>
                                <div class="registerForm__contentInput">
                                    <div class="registerForm__contentInputFlex">
                                        <span class="registerForm__contentInputItemData"><?php echo esc_html($formData['billing_phone']); ?></span>
                                        <input type="hidden" name="billing_phone" value="<?php echo esc_attr($formData['billing_phone']); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="registerForm__contentFlex">
                                <div class="registerForm__contentHd">
                                    <label for="user_email">メールアドレス</label>
                                    <div class="registerForm__contentHdReq">必須</div>
                                </div>
                                <div class="registerForm__contentInput">
                                    <div class="registerForm__contentInputFlex">
                                        <span class="registerForm__contentInputItemData"><?php echo esc_html($formData['user_email']); ?></span>
                                        <input type="hidden" name="user_email" value="<?php echo esc_attr($formData['user_email']); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="registerForm__contentFlex">
                                <div class="registerForm__contentHd">
                                    <label for="user_email">パスワード</label>
                                    <div class="registerForm__contentHdReq">必須</div>
                                </div>
                                <div class="registerForm__contentInput">
                                    <div class="registerForm__contentInputFlex">
                                        <span class="registerForm__contentInputItemData">●●●●●●●●</span>
                                        <input type="hidden" name="password" value="<?php echo esc_attr($formData['password']); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="registerForm__contentFlex">
                                <div class="registerForm__contentFlexBtnFlex">
                                    <div class="registerForm__contentFlexBtn">
                                        <button type="button" onclick="history.back();" class="registerForm__contentFlexBtnReset">登録フォームに戻る</button>
                                    </div>
                                    <div class="registerForm__contentFlexBtn">
                                        <input name="submit" type="submit" value="送信する" class="buttons registerForm__contentFlexBtnSubmit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>