<div class="confirm_cover">
  <div class="confirm_cover_content">
    <div class="confirm_cover_content_logo" align="center">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/common/logo.png" />
    </div>
    <div class="confirm_cover_content_message" align="center">
      この先は、メリットメディカル・ジャパンの医療機器や医療に関する情報を、<br />
      医療従事者の方へ提供することを目的として作成されております。<br />
      一般のお客様への情報提供を目的としたものではありませんので、どうかご了承ください。
    </div>
    <div class="confirm_cover_content_question" align="center">
      <h3>あなたは医療従事者ですか？</h3>
    </div>
    <div class="confirm_cover_content_answer" align="center">
      <button class="confirm_cover_content_answer_yes" onclick="jQuery('.confirm_cover').remove(); document.cookie = 'medic=true;path=/;'">はい</button>
      <button class="confirm_cover_content_answer_no" onclick="location.href = '/';">いいえ</button>
    </div>
  </div>
</div>
