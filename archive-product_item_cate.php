<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">取扱い製品</h1>
  </div>
</div>

<div class="sub_main product">
  <div class="container">
    <div class="sub_breadcrumb">
      <?php custom_breadcrumb();?>
    </div>
    <div class="sub_main_top">
      <div class="sub_main_template">
        <div class="sub_main_template_inner">
          <a href="<?php echo home_url(); ?>/ccs_pro_cat/ccs_pro" class="sub_main_template_inner_big">
            <div class="sub_main_template_inner_big_img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sub/sub_main_template_inner_big_img01.png" alt="">
            </div>
            <div class="sub_main_template_inner_big_text">
              <p class="sub_main_template_inner_big_text_title">クリティカルケア関連製品</p>
              <p class="sub_main_template_inner_big_text_desc">標準的な観血的血圧トランスデューサライン、医療機関のニーズに合わせたカスタムキット製品など、血行動態モニタリング関連製品を提供しております。<br>
                </p>
            </div>
          </a>
          <a href="<?php echo home_url(); ?>/intervention_cat/intervention" class="sub_main_template_inner_big blue">
            <div class="sub_main_template_inner_big_text">
              <p class="sub_main_template_inner_big_text_title">インターベンション関連製品</p>
              <p class="sub_main_template_inner_big_text_desc">血管内治療用および非血管治療用製品、動脈血管塞栓治療用製品など、幅広くラインナップを揃えております。<br>
                </p>
            </div>
            <div class="sub_main_template_inner_big_img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sub/sub_main_template_inner_big_img02.png" alt="">
            </div>
          </a>

          <div class="sub_main_template_inner_links">
            <a href="<?php echo get_post_type_archive_link('documents');?>" class="sub_main_template_inner_links_item red">添付文書</a>
          <?php /*
            <a href="<?php echo home_url();?>/contact-hepasphere-embosphere" class="sub_main_template_inner_links_item purple">ヘパスフィア®及びエンボスフィア®<br>販売移管のお問い合わせはこちら</a>
          */ ?>
            <a href="<?php echo get_post_type_archive_link('catalog');?>" class="sub_main_template_inner_links_item yellow">カタログ・動画・ケースレポート</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
