<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">リードマネジメント製品に関するお問い合わせ</h1>
  </div>
</div>

<div class="container">
  <div class="sub_breadcrumb">
    <?php custom_breadcrumb(); ?>
  </div>
</div>

<!-- html -->
<div class="container">
  <div class="contact_pages_nav">
    <button><a href="<?php echo home_url(); ?>/contact-us">お問い合わせ</a></button>
    <button><a href="<?php echo home_url(); ?>/contact-us-2">OEMお問い合わせ</a></button>
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
    <?php echo do_shortcode('[contact-form-7 id="d8210fb" title="リードマネジメント製品に関するお問い合わせ"]'); ?>
  </div>
</div>
<!-- /html -->
<?php get_footer(); ?>