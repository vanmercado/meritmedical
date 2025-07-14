<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">ヘパスフィア®及びエンボスフィア® 販売移管のお問い合わせ</h1>
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
    <button><a href="<?php echo home_url();?>/contact-hepasphere-embosphere">ヘパスフィア&reg;及びエンボスフィア&reg;<br>販売移管のお問い合わせ</a></button>
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
      <p>お客様からのお問い合わせに対してメールで回答いたします。必要な項目をご記入の上、送信ボタンを押してください。
        尚、緊急を要するご用件はお電話で対応いたしますので、上記、AZセンターまたはカスタマーサービスへご連絡ください。
        ※AZセンターまたはカスタマーサービスの連絡先は<a href="<?php echo home_url();?>/contact-us">こちら</p>
      <p>お問い合わせフォームに記載いただいた個人情報取扱については、<a href="<?php echo home_url();?>/about-merit/privacy-policy">個人情報保護方針</a>をご覧ください。</p>
    </div>

<?php echo do_shortcode('[contact-form-7 id="21568" title="ヘパスフィア®及びエンボスフィア® 販売移管のお問い合わせ"]'); ?>
  </div>
</div>
<!-- /html -->
<?php get_footer();?>
