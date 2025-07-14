<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">OEM</h1>
  </div>
</div>

<div class="container">
  <div class="sub_breadcrumb">
    <?php custom_breadcrumb(); ?>
  </div>
</div>

<div class="sub_main oem">
  <div class="container">
    <a href="https://storage.net-fs.com/hosting/7168824/13/" class="sub_main_template_inner_big" target="_blank">
      <div class="sub_main_template_inner_big_text">
        <p class="sub_main_template_inner_big_text_title">バーチャルブースのご案内</p>
        <p class="sub_main_template_inner_big_text_desc">こちらからも製品・ビジネス概要をご覧いただけます。</p>
      </div>
      <div class="sub_main_template_inner_big_img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sub/sub_main_template_inner_big_oem_img03.png" alt="">
      </div>
    </a>
  </div>
</div>

<div class="container">
  <div class="oem_catalog">
    <?php if (have_rows('catalog')): ?>
      <p class="oem_sec_title">カタログ<span class="oem_sec_title_small">※カタログに掲載の無い製品についてはお問合せください</span></p>
      <div class="oem_catalog_item_wrapper">
        <?php while (have_rows('catalog')): the_row(); ?>
          <a href="<?php if (get_sub_field('link_or_file') == 'file'): ?><?php the_sub_field('file'); ?><?php endif; ?><?php if (get_sub_field('link_or_file') == 'url'): ?><?php the_sub_field('url'); ?><?php endif; ?>" class="oem_catalog_item" target="_blank">
            <img class="oem_catalog_item_img" src="<?php echo get_sub_field('img')['url']; ?>">
            <div class="oem_catalog_item_title"><?php the_sub_field('text'); ?></div>
          </a>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    <?php if (have_rows('product')): ?>
      <div class="oem_catalog_newitem_wrapper">
        <?php while (have_rows('product')): the_row(); ?>
          <a href="<?php the_sub_field('url') ?>" class="oem_catalog_newitem">
            <img class="oem_catalog_item_img" src="<?php echo get_sub_field('img')['url']; ?>">
            <div class="oem_catalog_item_title"><?php the_sub_field('text'); ?></div>
          </a>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if (have_rows('category')): $category_number = 0; ?>
    <div class="oem_category">
      <p class="oem_sec_title">製品カテゴリ</p>
      <div class="oem_category_item_wrapper">
        <?php while (have_rows('category')): the_row();
          $category_number += 1; ?>
          <div class="oem_category_item">
            <div class="oem_category_item_title"><?php the_sub_field('name'); ?></div>
            <img class="oem_category_item_img" src="<?php echo get_sub_field('img')['url']; ?>">
            <div class="oem_category_item_link_wrapper">
              <a class="oem_category_item_link_pdf" href="<?php the_sub_field('file'); ?>" target="_blank">&gt; カタログPDF</a>
              <a class="oem_category_item_link_est" href="<?php echo home_url(); ?>/contact-us-2">&gt; 見積依頼</a>
            </div>
            <?php if (have_rows('movie')): $number = 0; ?>
              <div class="oem_category_item_video_ref">▼動画資料</div>
              <div class="oem_category_item_video_link_wrapper">
                <?php while (have_rows('movie')): the_row();
                  $number += 1; ?>
                  <div class="oem_category_item_video_link" id="modal_movie<?php echo $category_number; ?><?php echo $number; ?>">&gt; <?php the_sub_field('text'); ?></div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
        <a class="pharmaceutical_info" href="<?php echo home_url(); ?>/wmeritp/wp-content/uploads/2020/10/d9540f12a118cbe25f2cd420737c7831.pdf" target="_blank">&gt; 薬事情報　承認番号・販売名リスト</a>
      </div>
    </div>
  <?php endif; ?>
</div>

<!--MODAL-->
<?php if (have_rows('category')): $category_number = 0; ?>
  <?php while (have_rows('category')): the_row();
    $category_number += 1; ?>
    <?php if (have_rows('movie')): $number = 0; ?>
      <?php while (have_rows('movie')): the_row();
        $number += 1; ?>
        <div class="modal oem_modal modal_movie<?php echo $category_number; ?><?php echo $number; ?>">
          <div class="modal_inner">
            <div class="modal_back"></div>
            <div class="modal_main">
              <div class="modal_cancel">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/modal_cancel.png" alt="">
              </div>
              <div class="modal_main_content">
                <?php if (get_sub_field('movie_or_youtube') == 'youtube'): ?>
                  <?php the_sub_field('youtube'); ?>
                <?php elseif (get_sub_field('movie_or_youtube') == 'movie'): ?>
                  <video controls controlsList="nodownload" src="<?php the_sub_field('movie'); ?>" class="modal_video"></video>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>