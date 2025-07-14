<?php /* Template Name: Form Complete */ ?>

<?php
// Process the form update submission
$current_user = wp_get_current_user();
$current_password_hash = $current_user->data->user_pass;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $current_user->exists()) {
    // Sanitize and capture the form data
    $formData = [
        'last_name' => sanitize_text_field($_POST['last_name']),
        'first_name' => sanitize_text_field($_POST['first_name']),
        'katakana_last_name' => sanitize_text_field($_POST['katakana_last_name']),
        'katakana_first_name' => sanitize_text_field($_POST['katakana_first_name']),
        'company' => sanitize_text_field($_POST['company']),
        'billing_phone' => sanitize_text_field($_POST['billing_phone']),
        'user_email' => sanitize_email($_POST['user_email']),
        'password' => $_POST['password'], // Raw password
    ];

    // Example: Update to the database or perform desired action
    // Check if new password is same as the current one
    if (wp_check_password($formData['password'], $current_password_hash, $current_user->ID)) {
        // Same
        $user_id = wp_update_user([
            'ID'         => $current_user->ID,
            'user_email' => $formData['user_email'],
            'last_name'  => $formData['last_name'],
            'first_name' => $formData['first_name'],
        ]);
    }else {
        $user_id = wp_update_user([
            'ID'         => $current_user->ID,
            'user_email' => $formData['user_email'],
            'user_pass'  => $formData['password'], // Automatically hashed
            'last_name'  => $formData['last_name'],
            'first_name' => $formData['first_name'],
        ]);
    }


    if (is_wp_error($user_id)) {
        $error_message = $user_id->get_error_message();
        wp_die("Error: $error_message");
    }

    // Add additional meta fields
    update_user_meta($user_id, 'katakana_last_name', $formData['katakana_last_name']);
    update_user_meta($user_id, 'katakana_first_name', $formData['katakana_first_name']);
    update_user_meta($user_id, 'company', $formData['company']);
    update_user_meta($user_id, 'billing_phone', $formData['billing_phone']);
    
    // Send email to users the information has been updated
    $subject = 'お客様のアカウント情報が変更されました。';
    $message = $formData['last_name']." ".$formData['first_name']." 様\n\n";
    $message .= "メリットメディカル・ジャパン株式会社です。\n\n";
    $message .= "お客様のアカウント情報が変更されました。\n";
    $message .= "次回から変更したアカウント情報でログインいただけます。\n";
    $message .= home_url("/dealer") . "\n\n";
    $message .= "メリットメディカル・ジャパン株式会社 \n\n";
    $message .= "（本メールは自動送信のため、返信いただいても弊社には届きません。ご質問用は弊社ホームページのお問い合わせよりご連絡ください。）";
    $message .= "\n\nお問い合わせ\n";
    $message .= home_url("/contact-us");
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    wp_mail($formData['user_email'], $subject, $message, $headers);
    
    
} else {
    // Redirect to the form if accessed directly
    wp_redirect(home_url('/dealer/members/form-update/'));
    exit;
}
?>


<?php get_header(); ?>



<div class="sub_mv sub_mv02 dealer__ttlePage">
  <div class="container">
    <h1 class="sub_mv_title">会員情報変更完了</h1>
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
                <div class="step__item">
                    <span class="step__itemTxt">入力内容の<br class="u-spDb">確認</span>
                </div>
                <div class="step__item active">
                    <span class="step__itemTxt">会員情報変更完了</span>
                </div>
            </div>
            <span class="complete__header01">会員情報の変更が完了致しました</span>
            <p class="complete__txt">設定いただいたメールアドレス宛に登録内容を記載したメールを送信させていただきます。<br>メールが届かない場合は、恐れ入りますが下記までご連絡ください。</p>
            <div class="complete__block">
                <span class="complete__blockHd">【お問い合わせ先】<br class="u-spDb">カスタマーサービス</span>
                <p class="complete__blockTxt">Tel：03-5989-0200 　<br class="u-spDb">Fax：03-5909-5851<br>e-mail：japancsall@meritmed.com</p>
            </div>
            <a href="<?php echo home_url(); ?>/dealer/" class="complete__btn">販売代理店様TOPへ戻る</a>
            <p class="warining_complete">※ブラウザの戻るボタンは押さないで下さい</p>
        </div>
    </div>
</div>
<?php get_footer(); ?>