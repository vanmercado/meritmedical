<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">OEM製品関連のお問い合わせ・御見積フォーム</h1>
  </div>
</div>

<div class="container">
  <div class="sub_breadcrumb">
    <?php custom_breadcrumb();?>
  </div>
</div>

<!-- html -->
<div class="container">
  <div class="contact_pages_nav">
    <button><a href="<?php echo home_url();?>/contact-us">お問い合わせ</a></button>
    <button><a href="<?php echo home_url();?>/contact-us-2">OEMお問い合わせ</a></button>
    <button><a href="<?php echo home_url();?>/contact-us-3">リードマネジメント製品<br>に関するお問い合わせ</a></button>
  </div>
</div>
<!-- /html -->

<!-- html -->
<div class="form_table_bg_container">
  <div class="container">
    <div class="form_table_title">
      <h2>お問い合わせ</h2>
    </div>

    <div class="form_table_description">
      <p>こちらでは、お客様からのお問い合わせおよび御見積のご要望に対してメールで回答いたします。<br>お問い合わせに必要な項目をご記入の上送信ボタンを押してください。</p>
      <p>お問い合わせフォームに記載いただいた個人情報取扱については、<a href="<?php echo home_url();?>/about-merit/privacy-policy">個人情報保護方針</a>をご覧ください。</p>
    </div>

<?php echo do_shortcode('[contact-form-7 id="21567" title="OEM製品関連のお問い合わせ・御見積フォーム"]'); ?>
  </div>
</div>
<!-- /html -->
<?php get_footer();?>
