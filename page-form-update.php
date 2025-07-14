<?php /* Template Name: Form Update Information */ ?>

<?php get_header(); ?>

<div class="sub_mv sub_mv02 dealer__ttlePage">
  <div class="container">
    <h1 class="sub_mv_title">会員情報変更フォーム</h1>
  </div>
</div>

<?php
// Collect the information of User
$user = wp_get_current_user();
$last_name   = get_user_meta($user->ID, 'last_name', true);
$first_name  = get_user_meta($user->ID, 'first_name', true);
$katakana_first_name  = get_user_meta($user->ID, 'katakana_first_name', true);
$katakana_last_name   = get_user_meta($user->ID, 'katakana_last_name', true);
$company    = get_user_meta($user->ID, 'company', true);
$billing_phone    = get_user_meta($user->ID, 'billing_phone', true);
$nickname    = get_user_meta($user->ID, 'nickname', true);
$email    = get_user_meta($user->ID, 'user_email', true);

?>

<div class="sub_main">
    <div class="container">
        <div class="sub_breadcrumb">
            <?php custom_breadcrumb(); ?>
        </div>
            <div class="category_wrapper">
            <div class="step">
                <div class="step__item active">
                    <span class="step__itemTxt">会員情報変更<br class="u-spDb">フォーム</span>
                </div>
                <div class="step__item">
                    <span class="step__itemTxt">入力内容の<br class="u-spDb">確認</span>
                </div>
                <div class="step__item">
                    <span class="step__itemTxt">会員情報変更完了</span>
                </div>
            </div>
            <p class="registerForm__txt">会員情報の変更後、「入力内容を確認する」ボタンを押してください。</p>
            <?php if ( is_user_logged_in() ) : ?>
                <div class="registerForm">
                    <form name="form" method="post" id="wpmem_register_form" action=" <?php echo esc_url(home_url('/dealer/form-update/confirm-update/')) ?>" class="form" onsubmit="return validateForm();">
                      <div class="registerForm__content">
                          <div class="registerForm__contentFlex">
                              <div class="registerForm__contentHd">
                                  <label for="first_name">氏名(漢字) </label>
                                  <div class="registerForm__contentHdReq">必須</div>
                              </div>
                              <div class="registerForm__contentInput">
                                  <div class="registerForm__contentInputFlex">
                                    <div class="registerForm__contentInputItem">
                                        <input name="last_name" type="text" id="last_name"  class="textbox" placeholder="姓" required="" value="<?php echo $last_name; ?>">
                                    </div>
                                    <div class="registerForm__contentInputItem">
                                        <input name="first_name" type="text" id="first_name" class="textbox" placeholder="名" required="" value="<?php echo $first_name; ?>">
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
                                          <input name="katakana_last_name" type="text" id="katakana_last_name"  class="textbox" placeholder="セイ" required="" value="<?php echo $katakana_last_name ?>">
                                      </div>
                                      <div class="registerForm__contentInputItem">
                                          <input name="katakana_first_name" type="text" id="katakana_first_name"  class="textbox" placeholder="メイ" required="" value="<?php echo $katakana_first_name ?>">
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
                                      <input name="company" type="text" id="company"  class="textbox" required="" value="<?php echo $company ?>">
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
                                      <input name="billing_phone" type="text" id="billing_phone"  placeholder="00-0000-0000" class="textbox" required="" value="<?php echo $billing_phone ?>">
                                  </div>
                                  <span class="registerForm__contentInputTxt">※ ハイフンを含む半角数字で入力してください。(記入例：00-0000-0000)</span>
                              </div>
                          </div>
                          <div class="registerForm__contentFlex">
                              <div class="registerForm__contentHd">
                                  <label for="user_email">メールアドレス</label>
                                  <div class="registerForm__contentHdReq">必須</div>
                              </div>
                              <div class="registerForm__contentInput">
                                  <div class="registerForm__contentInputFlex">
                                      <input name="user_email" type="email" id="user_email"  placeholder="aaa@bbbccc.co.jp" class="textbox" required="" value="<?php echo $user->user_email ?>">
                                  </div>
                                  <span class="registerForm__contentInputTxt">※ @を含む半角英数字で入力してください。<br class="u-spDb">(記入例：aaa@bbbccc.co.jp)</span>
                              </div>
                          </div>
                          <div class="registerForm__contentFlex">
                              <div class="registerForm__contentHd">
                              </div>
                              <div class="registerForm__contentInput">
                                  <div class="registerForm__contentInputFlex">
                                      <input name="confirm_email" type="email" id="confirm_email"  class="textbox" required="" value="<?php echo $user->user_email ?>">
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
                                    <button type="button" class="registerForm__contentFlexBtnReset" onclick="resetForm(event)">
                                      リセット
                                    </button>
                                  </div>
                                  <div class="registerForm__contentFlexBtn">
                                      <input name="submit" type="submit" value="入力内容を確認する" class="buttons registerForm__contentFlexBtnSubmit">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
            
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
                var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                var kanjiPattern = /^[\u4E00-\u9FFF]+$/; // Kanji regex
                var katakanaPattern = /^[\u30A0-\u30FFー]+$/; // Katakana regex
    
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
                
                return true; // If everything is valid, allow form submission
            }
            
            function resetForm(e) {
                e.preventDefault();
                
                document.getElementById("user_email").value = "";
                document.getElementById("confirm_email").value = "";
                document.getElementById("password").value = "";
                document.getElementById("confirm_password").value = "";
                document.getElementById("first_name").value = "";
                document.getElementById("last_name").value = "";
                document.getElementById("katakana_first_name").value = "";
                document.getElementById("katakana_last_name").value = "";
                document.getElementById("company").value = "";
                document.getElementById("billing_phone").value = "";
            }
            
          </script>
      <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>