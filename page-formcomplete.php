<?php /* Template Name: Form Complete */ ?>

<?php
// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and capture the form data
    $formData = [
        'last_name' => sanitize_text_field($_POST['last_name']),
        'first_name' => sanitize_text_field($_POST['first_name']),
        'katakana_first_name' => sanitize_text_field($_POST['katakana_first_name']),
        'katakana_last_name' => sanitize_text_field($_POST['katakana_last_name']),
        'company' => sanitize_text_field($_POST['company']),
        'billing_phone' => sanitize_text_field($_POST['billing_phone']),
        'username' => sanitize_text_field($_POST['username']),
        'user_email' => sanitize_email($_POST['user_email']),
        'password' => $_POST['password'], // Raw password
    ];

    // Example: Save to the database or perform desired action
    $user_id = wp_insert_user([
        'user_login' => $formData['username'],
        'user_email' => $formData['user_email'],
        'user_pass'  => $formData['password'], // Automatically hashed
        'last_name'  => $formData['last_name'],
        'first_name' => $formData['first_name'],
        'role'       => 'not_approved',
    ]);

    if (is_wp_error($user_id)) {
        $error_message = $user_id->get_error_message();
        wp_die("Error: $error_message");
    }

    // Add additional meta fields
    update_user_meta($user_id, 'katakana_last_name', $formData['katakana_last_name']);
    update_user_meta($user_id, 'katakana_first_name', $formData['katakana_first_name']);
    update_user_meta($user_id, 'company', $formData['company']);
    update_user_meta($user_id, 'billing_phone', $formData['billing_phone']);
    
    // Generate a unique approval token and store it
    $approval_token = wp_generate_password(32, false);
    update_user_meta($user_id, 'approval_token', $approval_token);
    
    // Create approval link
    $approval_url = add_query_arg(
        array(
            'action' => 'approve_user',
            'user_id' => $user_id,
            'token' => $approval_token
        ),
        home_url()
    );
    
    //Get all users with the administrator role
    $admins = get_users([
        'role' => 'administrator'
    ]);

    // Send email to admin for creating new users accounts
    $subject = '[MERITMEDICAL] 新規ユーザー登録に対する承認のお願い';
    $message = "新規ユーザーの登録がありました。ご確認のうえ、承認をお願いいたします。:\n\n";
    $message .= "氏名(漢字): {$formData['last_name']} {$formData['first_name']}\n";
    $message .= "氏名(カタカナ): {$formData['katakana_last_name']} {$formData['katakana_first_name']}\n";
    $message .= "会社名: {$formData['company']}\n";
    $message .= "電話番号: {$formData['billing_phone']}\n";
    $message .= "ユーザー名: {$formData['username']}\n";
    $message .= "メールアドレス: {$formData['user_email']}\n\n";
    $message .= "ユーザーを承認する場合は、以下のリンクをご確認ください:\n";
    $message .= $approval_url . "\n\n";
    $message .= "承認すると、ユーザーの権限が「購読者」に変更され、会員専用コンテンツへアクセスできるようになります。";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    // Send to all admin
    foreach ($admins as $admin) {
        $email = $admin->user_email;
        wp_mail($email, $subject, $message, $headers);
    }
    
    //Send email to admin
    // $admin_email = get_option('admin_email');
    // $subject = '[MERITMEDICAL] 新規ユーザー登録に対する承認のお願い';
    // $message = "新規ユーザーの登録がありました。ご確認のうえ、承認をお願いいたします。:\n\n";
    // $message .= "氏名(漢字): {$formData['last_name']} {$formData['first_name']}\n";
    // $message .= "氏名(カタカナ): {$formData['katakana_last_name']} {$formData['katakana_first_name']}\n";
    // $message .= "会社名: {$formData['company']}\n";
    // $message .= "電話番号: {$formData['billing_phone']}\n";
    // $message .= "ユーザー名: {$formData['username']}\n";
    // $message .= "メールアドレス: {$formData['user_email']}\n\n";
    // $message .= "ユーザーを承認する場合は、以下のリンクをご確認ください:\n";
    // $message .= $approval_url . "\n\n";
    // $message .= "承認すると、ユーザーの権限が「購読者」に変更され、会員専用コンテンツへアクセスできるようになります。";
    
    // $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    // wp_mail($admin_email, $subject, $message, $headers);
    
} else {
    // Redirect to the form if accessed directly
    wp_redirect(home_url('/dealer/members/form/'));
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
                <div class="step__item active">
                    <span class="step__itemTxt">会員登録<br class="u-spDb">フォーム</span>
                </div>
                <div class="step__item active">
                    <span class="step__itemTxt">入力内容の<br class="u-spDb">確認</span>
                </div>
                <div class="step__item active">
                    <span class="step__itemTxt">会員登録完了</span>
                </div>
            </div>
            <span class="complete__header01">会員登録の申請が完了いたしました。</span>
            <p class="complete__txt">弊社側での承認後、アカウントが承認された事を通知するメールを送信させていただきます。<br>メールが届かない場合は、恐れ入りますが下記までご連絡ください。</p>
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