<?php
// アイキャッチ画像
add_theme_support('post-thumbnails');

// ギャラリー・サムネイル
add_image_size('gallery_thumb', 300, 300, true);
add_image_size('col2_side', 800, 9999, false);
add_image_size('col1', 2000, 9999, false);
add_image_size('col2', 940, 9999, false);
add_image_size('col3', 620, 9999, false);
add_image_size('product_slider', 1080, 9999, false);
add_image_size('product_slider_thumb', 200, 200, true);
add_image_size('product_function_slider', 640, 9999, false);
add_image_size('product_archive', 220, 165, true);


////////////////////////////////////
// エディターカスマイズ
////////////////////////////////////

// CSS適用
add_editor_style();

// フォーマット選択
function custom_editor_settings($initArray)
{
  $initArray['block_formats'] = "大見出し=h2; 中見出し=h3; 小見出し=h4; 段落=p;";
  return $initArray;
}
add_filter('tiny_mce_before_init', 'custom_editor_settings');


function custom_excerpt_length($length)
{
  return 70;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function twpp_change_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'twpp_change_excerpt_more');

////////////////////////////////////
// メディアライブラリ不具合解消
////////////////////////////////////

if (isset($_POST['action']) && in_array($_POST['action'], array('query-attachments', 'send-attachment-to-editor', 'get-post-thumbnail-html'))) {
  @header('Content-Type: application/json; charset=' . get_option('blog_charset'));
} else {
  @header('Content-Type: text/html; charset=' . get_option('blog_charset'));
}

// 検索でACFも含むように設定
add_filter('posts_join', function ($sql, WP_Query $query) {
  global $wpdb;
  if (!is_admin() && $query->get('search_meta')) {
    $sql .= ' LEFT JOIN ' . $wpdb->postmeta . ' ON ' . $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
  }
  return $sql;
}, 10, 2);

add_filter('posts_where', function ($sql, WP_Query $query) {
  global $wpdb;

  if (!is_admin() && $query->get('search_meta')) {

    $field_query = '';

    if (is_string($query->get('search_meta'))) {
      $field_name = $query->get('search_meta');
      $field_query = "AND {$wpdb->postmeta}.meta_key = '{$field_name}'";
    }

    $sql = preg_replace('/\(\s*' . $wpdb->posts . '.post_title\s+LIKE\s*(\'[^\']+\')\s*\)/', '(' . $wpdb->posts . '.post_title LIKE $1) OR (' . $wpdb->postmeta . '.meta_value LIKE $1' . $field_query . ')', $sql);
  }

  return $sql;
}, 10, 2);

add_filter('posts_distinct', function ($sql, WP_Query $query) {

  if (!is_admin() && $query->get('search_meta')) {
    return 'DISTINCT';
  }

  return $sql;
}, 10, 2);

// authorページにアクセスされたらトップページにリダイレクトする
add_action('template_redirect', 'redirect_author_archive_to_top');
function redirect_author_archive_to_top()
{
  if (is_author()) {
    wp_redirect(home_url());
    exit;
  }
}

// Change the "From" email address based on the environment
add_filter( 'wp_mail_from', 'custom_wp_mail_from' );
function custom_wp_mail_from( $email ) {
    // Get the current site URL
    $site_url = get_site_url();

    // Check if this is the staging/test site
    if ( strpos( $site_url, 'commude.site' ) !== false ) {
        return 'support@merit.commude.site'; // Staging site address
    }

    // Default: production site
    return 'support@merit.co.jp';
}

// Change the "From" name (common for both environments)
add_filter( 'wp_mail_from_name', 'custom_wp_mail_from_name' );
function custom_wp_mail_from_name( $name ) {
    return 'MeritMedical';
}

// Add new ADMIN ROLE
function create_admin_role() {

    // Create Not Approved Role
    add_role(
        'not_approved',
        'Not Approved',
        [
            'read' => true, // Allow them to read content
            // Add other permissions as needed
        ]
    );
    
    // Add new one here if needed 
    //add_role();
}
add_action('init', 'create_admin_role');

/**
 * Checks if the current user is approved (does not have the "not_approved" role).
 *
 * @return bool True if the user is logged in and does not have the "not_approved" role, false otherwise.
 * 
 * To call it in page.php use this code ---- if(is_user_approved()){}
 */
function is_user_approved() {
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        if ($user && !is_wp_error($user) && !in_array('not_approved', (array) $user->roles)) {
            return true;
        }
    }
    return false;
}

// Hide top black box on login for Subscriber and Not Approved roles user
add_action('after_setup_theme', function() {
    if (current_user_can('subscriber') || current_user_can('not_approved')) {
        show_admin_bar(false);
    }
});

//セレクトメニュー用
remove_action('wpcf7_swv_create_schema', 'wpcf7_swv_add_select_enum_rules', 20, 2);

// Custom Register Form
function custom_wpmem_register_form( $form ) {
    // Replace the default form with your custom layout
    $form = '
        <form name="form" method="post" action="' . esc_url(home_url('/dealer/form/confirm/')) . '" id="wpmem_register_form" class="form" onsubmit="return validateForm();">
          <div class="registerForm__content">
              <div class="registerForm__contentFlex">
                  <div class="registerForm__contentHd">
                      <label for="first_name">氏名(漢字) </label>
                      <div class="registerForm__contentHdReq">必須</div>
                  </div>
                  <div class="registerForm__contentInput">
                      <div class="registerForm__contentInputFlex">
                        <div class="registerForm__contentInputItem">
                            <input name="last_name" type="text" id="last_name" value="" class="textbox" placeholder="姓" required="">
                        </div>
                        <div class="registerForm__contentInputItem">
                            <input name="first_name" type="text" id="first_name" value="" class="textbox" placeholder="名" required="">
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
                          <div class="registerForm__contentInputItem">
                              <input name="katakana_last_name" type="text" id="katakana_last_name" value="" class="textbox" placeholder="セイ" required="">
                          </div>
                          <div class="registerForm__contentInputItem">
                              <input name="katakana_first_name" type="text" id="katakana_first_name" value="" class="textbox" placeholder="メイ" required="">
                          </div>
                      </div>
                      <span class="registerForm__contentInputTxt">※ カタカナ入力してください。</span>
                  </div>
              </div>
              <div class="registerForm__contentFlex">
                  <div class="registerForm__contentHd">
                      <label for="company">会社名</label>
                      <div class="registerForm__contentHdReq">必須</div>
                  </div>
                  <div class="registerForm__contentInput">
                      <div class="registerForm__contentInputFlex">
                          <input name="company" type="text" id="company" value="" class="textbox" required="">
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
                          <input name="billing_phone" type="text" id="billing_phone" value="" placeholder="00-0000-0000" class="textbox" required="">
                      </div>
                      <span class="registerForm__contentInputTxt">※ ハイフンを含む半角数字で入力してください。(記入例：00-0000-0000)</span>
                  </div>
              </div>
              <div class="registerForm__contentFlex">
                  <div class="registerForm__contentHd">
                      <label for="username">ユーザー名</label>
                      <div class="registerForm__contentHdReq">必須</div>
                  </div>
                  <div class="registerForm__contentInput">
                      <div class="registerForm__contentInputFlex">
                          <input name="username" type="text" id="username" value="" class="textbox" required="">
                      </div>
                      <span class="registerForm__contentInputTxt">※半角英数字で入力してください。</span>
                  </div>
              </div>
              <div class="registerForm__contentFlex">
                  <div class="registerForm__contentHd">
                      <label for="user_email">メールアドレス</label>
                      <div class="registerForm__contentHdReq">必須</div>
                  </div>
                  <div class="registerForm__contentInput">
                      <div class="registerForm__contentInputFlex">
                          <input name="user_email" type="email" id="user_email" value="" placeholder="aaa@bbbccc.co.jp" class="textbox" required="">
                      </div>
                      <span class="registerForm__contentInputTxt">※ @を含む半角英数字で入力してください。<br class="u-spDb">(記入例：aaa@bbbccc.co.jp)</span>
                  </div>
              </div>
              <div class="registerForm__contentFlex">
                  <div class="registerForm__contentHd">
                  </div>
                  <div class="registerForm__contentInput">
                      <div class="registerForm__contentInputFlex">
                          <input name="confirm_email" type="email" id="confirm_email" value="" class="textbox" required="">
                      </div>
                      <span class="registerForm__contentInputTxt">※ 確認のため再度ご入力ください。</span>
                  </div>
              </div>
              <div class="registerForm__contentFlex">
                  <div class="registerForm__contentHd">
                      <label for="user_email">パスワード</label>
                      <div class="registerForm__contentHdReq">必須</div>
                  </div>
                  <div class="registerForm__contentInput">
                      <div class="registerForm__contentInputFlex">
                          <input name="password" type="password" id="password" class="textbox" placeholder="記入例：Abcd&amp;12345Z!" required="">
                      </div>
                      <span class="registerForm__contentInputTxt">※ 8文字以上の大文字・小文字・記号を含む半角英数字で入力してください。(記入例：Abcd&12345Z!)</span>
                  </div>
              </div>
              <div class="registerForm__contentFlex">
                  <div class="registerForm__contentHd">
                  </div>
                  <div class="registerForm__contentInput">
                      <div class="registerForm__contentInputFlex">
                          <input name="confirm_password" type="password" id="confirm_password" class="textbox" required="">
                      </div>
                      <span class="registerForm__contentInputTxt">※ 確認のため再度ご入力ください。</span>
                  </div>
              </div>
              <div class="registerForm__contentFlex">
                  <div class="registerForm__contentFlexBtnFlex">
                      <div class="registerForm__contentFlexBtn">
                          <input type="reset" value="リセット" class="registerForm__contentFlexBtnReset">
                      </div>
                      <div class="registerForm__contentFlexBtn">
                          <input name="submit" type="submit" value="入力内容を確認する" class="buttons registerForm__contentFlexBtnSubmit">
                      </div>
                  </div>
              </div>
          </div>
      </form>
      <script>
        function validateForm() {
            var email = document.getElementById("user_email").value;
            var confirmEmail = document.getElementById("confirm_email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            var firstName = document.getElementById("first_name").value;
            var lastName = document.getElementById("last_name").value;
            var katakanaFirstName = document.getElementById("katakana_first_name").value;
            var katakanaLastName = document.getElementById("katakana_last_name").value;
            var username = document.getElementById("username").value;
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            var kanjiPattern = /^[\u4E00-\u9FFF]+$/; // Kanji regex
            var katakanaPattern = /^[\u30A0-\u30FFー]+$/; // Katakana regex
            var usernamePattern = /^[a-zA-Z0-9]+$/; // Username regex

            // Validate Kanji for first and last name (漢字)
            // if (!kanjiPattern.test(firstName) || !kanjiPattern.test(lastName)) {
            //     alert("氏名(漢字)には漢字のみを入力してください。");
            //     return false;
            // }

            // Validate Katakana for katakana first and last name (カタカナ)
            if (!katakanaPattern.test(katakanaFirstName) || !katakanaPattern.test(katakanaLastName)) {
                alert("氏名(カタカナ)にはカタカナのみを入力してください。");
                return false;
            }

            // Email validation
            if (email !== confirmEmail) {
                alert("メールアドレスと確認用メールアドレスが一致しません。");
                return false;
            }

            if (!emailPattern.test(email)) {
                alert("正しいメールアドレスを入力してください。");
                return false;
            }

            // Password validation
            if (password !== confirmPassword) {
                alert("パスワードが一致しません。");
                return false;
            }

            var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            if (!passwordPattern.test(password)) {
                alert("パスワードは8文字以上で、大文字・小文字・数字・記号を含めてください。");
                return false;
            }
            
            if (!usernamePattern.test(username)) {
                alert("ユーザー名は、半角英数字で入力してください。");
                return false;
            }

            return true; // If everything is valid, allow form submission
        }
      </script>
    ';
    return $form;
}
add_filter( 'wpmem_register_form', 'custom_wpmem_register_form' );

// Handle user approval links for new USERS
// The system will send an email to admin and once they click the link it will direct here and perform the action
function handle_user_approval() {
    // Check if this is an approval or decline request
    if (isset($_GET['action']) && isset($_GET['user_id']) && isset($_GET['token'])) {
        
        $user_id = intval($_GET['user_id']);
        $token = sanitize_text_field($_GET['token']);
        $action = sanitize_text_field($_GET['action']);
        
        // Verify the token
        $stored_token = get_user_meta($user_id, 'approval_token', true);
        
        if ($stored_token && $stored_token === $token) {
            $user = new WP_User($user_id);
            $user_email = $user->user_email;
            
            // Update user role to subscriber
            $user->set_role('subscriber');
            
    
            // Send notification to user that they've been approved
            $subject = 'お客様のアカウントが承認されました';
            $message .= $user->last_name." ".$user->first_name." 様\n\n";
            $message .= "メリットメディカル・ジャパン株式会社です。\n弊社ホームページ内の販売代理店様専用ページに会員登録いただき、誠にありがとうございます。\n";
            $message .= "登録ができましたので、次回からユーザー名とパスワードでログインいただけます。\n\n";
            $message .= "今後ともお客様の利便性を高める施策を検討してまいります。\n";
            $message .= "引き続き弊社製品のご愛顧を宜しくお願い致します。\n\n";
            $message .= "メリットメディカル・ジャパン株式会社\n\n";
            $message .= "（本メールは自動送信のため、返信いただいても弊社には届きません。ご質問用は弊社ホームページのお問い合わせよりご連絡ください。）";
            $message .= "\n\nお問い合わせ\n";
            $message .= home_url("/contact-us");
            
            wp_mail($user_email, $subject, $message);
            
            // Delete the token since it's been used
            delete_user_meta($user_id, 'approval_token');

            // Redirect to success page
            echo '
                <script>
                    alert("ユーザーが正常に承認されました。");
                    window.close();
                </script>
            '; 
            
             exit;
        } else {
            // Token Expired show the message
            wp_die('トークンの有効期限が切れています。すでに管理者によって新規ユーザーの承認が行われた可能性があります。.');
        }
    }
}
add_action('template_redirect', 'handle_user_approval');

// Customize the login form
function custom_login_form_style($form) {
    $forgot_link = apply_filters('wpmem_forgot_link', '');
   
    // reCAPTCHA site key from WP-Members
    $settings = get_option('wpmembers_captcha');
    $site_key = $settings["recaptcha"]["public"];
    
    // Add reCAPTCHA script
    wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js', array(), null, true);
    
    $form = '
        <div class="dealer__loginItemForm">
            <div class="dealer__logins">
                <h1 class="dealer__ttleLogin">既にアカウントをお持ちの方</h1>
                <p class="dealer__desc">メールアドレス、パスワードを入力し、<br>「ログイン」ボタンを押してください。</p>

                <form method="post" action="" class="dealer__form">
                    <div class="dealer__form-group">
                        <label for="log" class="label">メールアドレス</label>
                        <input type="text" name="log" id="log" class="textbox" autocomplete="username" required />
                    </div>
                    <div class="dealer__form-group">
                        <label for="pwd" class="label">パスワード</label>
                        <input type="password" name="pwd" id="pwd" class="textbox" autocomplete="current-password" required/>
                    </div>
                    
                    <!-- reCAPTCHA v2 -->
                    <div class="dealer__form-group delear__captcha">
                       <div class="g-recaptcha" data-sitekey="'. esc_attr($site_key) .'"></div>
                    </div>
                    
                    <div class="dealer__contentFlexBtnFlex">
                        <input type="submit" name="Submit" value="ログイン" class="buttons dealer__contentFlexBtnSubmit">
                    </div>
                    
                    <div class="form-group">
                        <label class="dealer__rememberme">
                            <input type="checkbox" name="rememberme" id="rememberme" value="forever" />
                            <p>ログイン状態を保持する</p>
                        </label>
                    </div>

                    ' . wp_nonce_field('wpmem-login-nonce', 'wpmem-login-nonce', true, false) . '
                    <input type="hidden" name="redirect_to" value="' . esc_url(get_permalink()) . '" />
                    <input type="hidden" name="a" value="login" />
                </form>
                <a href="'. home_url() .'/dealer/password" class="dealer__forgotPass">パスワードをお忘れの方はこちら</a>
            </div>

            <div class="delear__register">
                <h1 class="dealer__ttleLogin">はじめての方</h1>
                <p class="dealer__desc">新規会員登録を希望される方は、<br>下記のボタンよりお手続きください。</p>

                <div class="dealer__parentP">
                    <a href="'. home_url() .'/dealer/form/" class="dealer__contentFlexBtnFlex">
                        <input type="button" value="新規会員登録はこちら" class="buttons dealer__contentFlexBtnSubmit">
                    </a>
                </div>
            </div>
        </div>
        ';
        
    return $form;
}
add_filter('wpmem_login_form', 'custom_login_form_style');

// Hook to verify reCAPTCHA
function verify_captcha_on_login($user, $password) {
    
    // Check for reCAPTCHA response
    if (isset($_POST['g-recaptcha-response'])) {
        $recaptcha_response = sanitize_text_field($_POST['g-recaptcha-response']);
        
        // reCAPTCHA secret key from WP-Members
        $settings = get_option('wpmembers_captcha');
        $secret_key = $settings["recaptcha"]["private"];

        if (empty($secret_key)) {
            return new WP_Error('captcha_error', 'reCAPTCHA secret key is missing.');
        }
        
        // Send verification request to Google
        $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', array(
            'body' => array(
                'secret' => $secret_key,
                'response' => $recaptcha_response,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            )
        ));

        // Check if the reCAPTCHA response is valid
        if (is_wp_error($response)) {
            return new WP_Error('captcha_error', 'reCAPTCHAサービスとの通信に失敗しました。');
        }

        $body = wp_remote_retrieve_body($response);
        $result = json_decode($body);

        // If reCAPTCHA fails
        if (!$result->success) {
            return new WP_Error('captcha_error', 'reCAPTCHAの認証に失敗しました。再度お試しくださいますようお願いいたします。');
        }
    } else {
        // If reCAPTCHA response is missing but there's actually a login attempt via form
        if (isset($_POST['a']) && $_POST['a'] == 'login') {
            return new WP_Error('captcha_error', 'ロボットではないことをご確認くださいますようお願いいたします。');
        }
    }
    
    return $user; 
}
add_filter('wp_authenticate_user', 'verify_captcha_on_login', 10, 2);

// Remember Me cookie is set after login when the 'Remember Me' checkbox is checked
function set_auth_cookie_on_login($user_id) {
    if (isset($_POST['rememberme']) && $_POST['rememberme'] === 'forever') {
        wp_set_auth_cookie($user_id, true); // true = remember "Expires: Tue, 06 May 2025 12:34:56 GMT" 14days
    } else {
        wp_set_auth_cookie($user_id, false); // false = session-only
    }
}
add_action('wpmem_login_action', 'set_auth_cookie_on_login', 10, 1);

// Custom forgot password 
add_shortcode('wpmem_form_pwd_reset', 'custom_password_reset_form_handler');
function custom_password_reset_form_handler() {
    $output = '';
    
    // If form is submitted
    if (isset($_POST['action']) && $_POST['action'] == 'pwdreset') {
        $email = sanitize_email($_POST['user_email']);
        
        if (empty($email)) {
            $output .= '<p class="error">Please enter your email address.</p>';
        } else {
            $user = get_user_by('email', $email);
            
            if ($user) {
                $username = $user->user_login;
                $key = get_password_reset_key($user);
                $reset_link = network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user->user_login), 'login');
                
                // Email content
                $to = $email;
                $subject = '[MERITMEDICAL] パスワードのリセット';
                $message = 'どなたかが次のアカウントのパスワードリセットをリクエストしました:' . "\r\n\r\n";
                $message .= 'サイト名: MERITMEDICAL' . "\r\n\r\n";
                $message .= 'ユーザー名: ' . $username ."\r\n\r\n";
                $message .= 'もしこれが間違いだった場合は、このメールを無視すれば何も起こりません。' ."\r\n\r\n";
                $message .= "パスワードをリセットするには、以下へアクセスしてください。" ."\r\n\r\n";
                $message .= $reset_link;
                $message .= "\n\nお問い合わせ\n";
                $message .= home_url("/contact-us");

                wp_mail($to, $subject, $message);

                // Redirect to complete page
                wp_redirect(home_url() . "/dealer/password-complete/");
            } else {
                $output .= '<p class="error">No user found with that email address.</p>';
            }
        }
    }
    
    // Display the form
    $output .= '
    <div class="wpmem_pwd_reset_form">
        <form name="form" method="post" action="" id="wpmem_register_form" class="dealer__form dealer__formForgot">
            <input type="hidden" name="action" value="pwdreset" />
            <div class="dealer__form-group">
                <label for="user_email" class="label">メールアドレス</label>
                <input  type="email" name="user_email" id="user_email" class="textbox" required />
            </div>
            <div class="dealer__contentFlexBtnFlex">
                <input type="submit" name="Submit" value="送信" class="buttons dealer__contentFlexBtnSubmit">
            </div>
        </form>
    </div>';
    
    return $output;
}

// Custom change password success email from these 
// -Update information
// -Wordpress password update
function custom_password_email($send, $user, $userdata) {
    // Return false to prevent the default email
    
    // Custom subject and message
    $subject = 'パスワードが変更されました。';
    $message = $user['last_name']." ".$user['first_name']." 様\n\n";
    $message .= "メリットメディカル・ジャパン株式会社です。\n\n";
    $message .= "お客様のパスワードが変更されました。\n";
    $message .= "次回から変更したパスワードでログインいただけます。\n";
    $message .= home_url("/dealer")."\n\n";
    $message .= "メリットメディカル・ジャパン株式会社\n\n";
    $message .= "（本メールは自動送信のため、返信いただいても弊社には届きません。ご質問用は弊社ホームページのお問い合わせよりご連絡ください。）";
    $message .= "\n\nお問い合わせ\n";
    $message .= home_url("/contact-us");
            
    // Get the user's email
    $user_email = $user['user_email'];
    
    // Send the email
    wp_mail($user_email, $subject, $message);
    
    // Return false to prevent WordPress default email
    return false;
}
add_filter('send_password_change_email', 'custom_password_email', 10, 3);


// Custom change password success email from these
// -custom change password
function password_reset_completed($user, $new_pass) {
    $subject = 'パスワードが変更されました。';
    
    $message = $user->last_name . " " . $user->first_name . " 様\n\n";
    $message .= "メリットメディカル・ジャパン株式会社です。\n\n";
    $message .= "お客様のパスワードが変更されました。\n";
    $message .= "次回から変更したパスワードでログインいただけます。\n";
    $message .= home_url("/dealer")."\n\n";
    $message .= "メリットメディカル・ジャパン株式会社\n\n";
    $message .= "（本メールは自動送信のため、返信いただいても弊社には届きません。ご質問用は弊社ホームページのお問い合わせよりご連絡ください。）";
    $message .= "\n\nお問い合わせ\n";
    $message .= home_url("/contact-us");
            
    wp_mail($user->user_email, $subject, $message);
    
    // Return true to allow WordPress to continue processing
    return true;
}
add_action('after_password_reset', 'password_reset_completed', 10, 3);