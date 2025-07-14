</main>

<footer class="footer">
  <div class="container">
    <div class="footer_flex">
      <div class="footer_flex_item">
        <a href="<?php echo home_url(); ?>" class="footer_flex_item_logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="">
        </a>
        <p class="footer_flex_item_text">メリットメディカル・ジャパン株式会社</p>
        <p class="footer_flex_item_text">〒163-0531<br>
          東京都新宿区西新宿1-26-2<br>
          新宿野村ビル31F<br></p>
        <a href="<?php echo home_url('contact-us'); ?>" class="footer_flex_item_contact">お問い合わせはこちら</a>
        <a href="<?php echo home_url('contact-us-2'); ?>" class="footer_flex_item_contact oem">OEMのお問い合わせはこちら</a>
        <a href="mailto:Japan-BusinessPartner@merit.com" class="footer_flex_item_contact business">製品開発やビジネス連携のお問い合わせはこちら</a>
        <a href="https://uf-note.com/" class="footer_flex_item_banner" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_flex_item_banner.png" alt="">
        </a>
      </div>
      <div class="footer_flex_item">
        <div class="footer_flex_item_nav">
          <a href="<?php echo home_url(); ?>/news" class="footer_flex_item_nav_title">お知らせ</a>
          <ul class="footer_flex_item_nav_lists">
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo get_category_link(get_category_by_slug('argon-news')); ?>">会社情報</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo get_category_link(get_category_by_slug('product-news')); ?>">製品情報のお知らせ</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url(); ?>/upcoming-meetings">学術集会出展予定</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo get_post_type_archive_link('pdf'); ?>">レターPDF</a></li>
          </ul>
        </div>
        <div class="footer_flex_item_nav">
          <a href="<?php echo home_url(); ?>/oem" class="footer_flex_item_nav_title">OEM</a>
          <ul class="footer_flex_item_nav_lists">
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url(); ?>/oem/oem-business-overview">OEM Business Overview</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url(); ?>/oem/oem-product">OEM製品一覧</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="https://meritoem.com/about/iso-80369-small-bore-connector-standard/" target="_blank" class="link">ISO80369</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url(); ?>/oem/oem-centrosflo">CentrosFLO&trade; 総販売元について</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url(); ?>/oem/oem-petit-access-kit-nk">プチアクセスキット　NK　販売元について</a></li>
          </ul>
        </div>
      </div>
      <div class="footer_flex_item">
        <div class="footer_flex_item_nav">
          <a href="<?php echo home_url(); ?>/product_item_cate" class="footer_flex_item_nav_title">取扱い製品</a>
          <ul class="footer_flex_item_nav_lists">
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo get_term_link('ccs_pro', 'ccs_pro_cat'); ?>">クリティカルケア関連製品</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo get_term_link('intervention', 'intervention_cat'); ?>">インターベンション関連製品</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo get_post_type_archive_link('documents'); ?>">添付文書</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo get_post_type_archive_link('catalog'); ?>">カタログ・動画</a></li>
          </ul>
        </div>
        <div class="footer_flex_item_nav">
          <a href="<?php echo home_url(); ?>/about-merit" class="footer_flex_item_nav_title">会社概要</a>
          <ul class="footer_flex_item_nav_lists">
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url(); ?>/about-merit/top-message">代表の挨拶</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url(); ?>/about-merit/culture">私たちのビジョン</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url(); ?>/about-merit/transparency-guidelines">透明性に関する指針</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url(); ?>/about-merit/privacy-policy">個人情報保護方針</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url(); ?>/about-merit/bases">拠点</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="<?php echo home_url(); ?>/about-merit/history">沿革</a></li>
            <li class="footer_flex_item_nav_lists_item"><a href="https://www.merit.com/investors/" target="_blank" class="link">IR情報</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="footer_bottom_copy">&copy;2022 メリットメディカル・ジャパン株式会社</p>
      <ul class="footer_bottom_sns">
        <li class="footer_bottom_sns_item"><a href="http://www.facebook.com/meritmedicalsystems" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_bottom_sns_item_facebook.png" alt="Facebook"></a></li>
        <li class="footer_bottom_sns_item"><a href="http://twitter.com/intent/follow?source=followbutton&variant=1.0&screen_name=meritmedical" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_bottom_sns_item_twitter.png" alt="Twitter"></a></li>
        <li class="footer_bottom_sns_item"><a href="http://www.linkedin.com/company/merit-medical-systems-inc" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_bottom_sns_item_in.png" alt="in"></a></li>
        <li class="footer_bottom_sns_item"><a href="http://www.youtube.com/user/meritmedical?sub_confirmation=1?sub_confirmation=1" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_bottom_sns_item_youtube.png" alt="YouTube"></a></li>
      </ul>
    </div>
  </div>
  <div class="footer_last">
    <div class="container">
      <p class="footer_last_text">The content on Merit.com is not intended nor recommended as a substitute for medical advice, diagnosis, or treatment. Always seek the advice of your own physician or other qualified health care professional
        regarding any medical questions or conditions. The use of this website is governed by the Merit.com. Merit Medical is a global company. Not all goods on this website are available in every country. Terms and conditions may vary. Contact
        your local Sales Representative for more details.</p>
    </div>
  </div>
</footer>

<div class="page_top"></div>

<?php if (is_front_page()) : ?>
  <div class="modal modal_top">
    <div class="modal_inner">
      <div class="modal_back"></div>
      <div class="modal_main">
        <div class="modal_cancel">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/modal_cancel.png" alt="">
        </div>
        <div class="modal_main_content">
          <video controls controlsList="nodownload" src="<?php echo get_template_directory_uri(); ?>/assets/video/top.mp4" title="会社紹介動画" class="modal_video"></video>
        </div>
      </div>
    </div>
  </div>
  <div class="modal modal_oem">
    <div class="modal_inner">
      <div class="modal_back"></div>
      <div class="modal_main">
        <div class="modal_cancel">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/modal_cancel.png" alt="">
        </div>
        <div class="modal_main_content">
          <video controls controlsList="nodownload" src="<?php echo get_template_directory_uri(); ?>/assets/video/top_movie.mp4" class="modal_video"></video>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<?php if (is_front_page()) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.js"></script>
<?php elseif (is_page('contact-us') || is_page('contact-us-2') || is_page('contact-hepasphere-embosphere')) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sub.js"></script>
<?php elseif (is_page('oem')) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/oem.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sub.js"></script>
<?php elseif (is_page('oem-product')) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/oem_list.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sub.js"></script>
<?php elseif (is_page('catalog_search')) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/catalog.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sub.js"></script>
<?php elseif (is_singular('product_item_cate')) : ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sub.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/product_slick.js"></script>
  <script type="text/javascript">
    $(function() {
      <?php if (have_rows('product_function')) : $product_function_number = 1; ?>
        <?php while (have_rows('product_function')) : the_row();
          $product_function_number += 1; ?>
          <?php if (have_rows('product_function_item')) : $number = 1; ?>
            <?php while (have_rows('product_function_item')) : the_row();
              $number += 1; ?>
              if ($(".slider<?php echo $product_function_number; ?>-<?php echo $number; ?>.slider1 .slick-img").length > 1) {
                $(".slider<?php echo $product_function_number; ?>-<?php echo $number; ?>.slider1").slick({
                  autoplay: false,
                  arrows: false,
                });
                $(".thumbnail<?php echo $product_function_number; ?>-<?php echo $number; ?>.thumbnail1 .thumbnail-img").on("click", function() {
                  let index = $(this).attr("data-slick-index");
                  $(".slider<?php echo $product_function_number; ?>-<?php echo $number; ?>.slider1").slick("slickGoTo", index);
                });
              } else {
                $(".slider<?php echo $product_function_number; ?>-<?php echo $number; ?>.slider1").addClass('slider_single');
                $(".thumbnail<?php echo $product_function_number; ?>-<?php echo $number; ?>.thumbnail1").hide();
              }

            <?php endwhile; ?>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    });
  </script>
  <script type="text/javascript">
    $(function() {
      <?php if (have_rows('product_function2')) : $product_function_number = 1; ?>
        <?php while (have_rows('product_function2')) : the_row();
          $product_function_number += 1; ?>
          <?php if (have_rows('product_function_item')) : $number = 1; ?>
            <?php while (have_rows('product_function_item')) : the_row();
              $number += 1; ?>
              if ($(".slider<?php echo $product_function_number; ?>-<?php echo $number; ?>.slider2 .slick-img").length > 1) {
                $(".slider<?php echo $product_function_number; ?>-<?php echo $number; ?>.slider2").slick({
                  autoplay: false,
                  arrows: false,
                });
                $(".thumbnail<?php echo $product_function_number; ?>-<?php echo $number; ?>.thumbnail2 .thumbnail-img").on("click", function() {
                  let index = $(this).attr("data-slick-index");
                  $(".slider<?php echo $product_function_number; ?>-<?php echo $number; ?>.slider2").slick("slickGoTo", index);
                });
              } else {
                $(".slider<?php echo $product_function_number; ?>-<?php echo $number; ?>.slider2").addClass('slider_single');
                $(".thumbnail<?php echo $product_function_number; ?>-<?php echo $number; ?>.thumbnail2").hide();
              }

            <?php endwhile; ?>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    });
  </script>
<?php elseif (is_page('oem')) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/oem.js"></script>
<?php else : ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sub.js"></script>
<?php endif; ?>
<?php
$post_parent = get_post_parent();

if (
  is_post_type_archive(array('product_item_cate', 'documents', 'catalog', 'pdf')) ||
  is_singular('product_item_cate') ||
  is_tax(array('ccs_pro_cat', 'intervention_cat')) ||
  is_category('product-news') ||
  (is_single() && in_category('product-news')) ||
  is_page(array('oem', 'pdf/pdf_search', 'product_search', 'catalog/catalog_search', 'documents/documents_search')) ||
  ($post_parent && $post_parent->post_name == 'oem')
) : ?>
  <?php get_template_part('template-confirm'); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/confirm.js"></script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>