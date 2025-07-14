</main>

<footer class="newFooter">
  </div>
  <div class="newFooter__content">
    <div class="newFooter__media">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="logo" class="newFooter__logo" />
        </a>

        <div class="newFooter__location">
            <h2 class="newFooter__title">メリットメディカル・ジャパン株式会社</h2>
            <div class="newFooter__destination">
                <div class="newFooter__iconLoc"></div>
                <p class="newFooter__description"><span class="openSans">〒163-0531</span><br>東京都新宿区西新宿一丁目26番2号<br>新宿野村ビル</p>
            </div>
        </div>

        <div class="newFooter__contentMedia">
            <a href="http://www.facebook.com/meritmedicalsystems" target="_blank" style="display: block;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/media-01.png" alt="media" class="newFooter__mediaIcon" />
            </a>
            <a href="https://x.com/intent/follow?source=followbutton&variant=1.0&screen_name=meritmedical" target="_blank" style="display: block;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/media-02.png" alt="media" class="newFooter__mediaIcon" />
            </a>
            <a href="http://www.linkedin.com/company/merit-medical-systems-inc" target="_blank" style="display: block;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/media-03.png" alt="media" class="newFooter__mediaIcon" />
            </a>
            <a href="http://www.youtube.com/user/meritmedical?sub_confirmation=1?sub_confirmation=1" target="_blank" style="display: block;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/media-04.png" alt="media" class="newFooter__mediaIcon" />
            </a>
        </div>
    </div>


    <div class="newFooter__links">
        <div class="newFooter__contentLinks navTextSP navTextPC">
            <h2 class="newFooter__titleLink titleSP">
              <a href="<?php echo home_url(); ?>/news">お知らせ</a>
              <span class="arrowSP"></span>
            </h2>
            <div class="navListSP">
              <div class="newFooter__navListSP">
                <a href="<?php echo get_category_link(get_category_by_slug('argon-news')); ?>" class="newFooter__linksDes">会社情報</a>
                <a href="<?php echo get_category_link(get_category_by_slug('product-news')); ?>" class="newFooter__linksDes">製品情報のお知らせ</a>
                <a href="<?php echo home_url(); ?>/upcoming-meetings" class="newFooter__linksDes">学術集会出展予定</a>
                <a href="<?php echo get_post_type_archive_link('pdf'); ?>" class="newFooter__linksDes">レターPDF</a>
              </div>
            </div>
        </div>

        <div class="newFooter__contentLinks navTextSP navTextPC">
          <h2 class="newFooter__titleLink titleSP">
            <a href="<?php echo home_url(); ?>/product_item_cate">取扱い製品</a>
            <span class="arrowSP"></span>
          </h2>
          <div class="navListSP">
            <div class="newFooter__navListSP">
              <a href="<?php echo get_term_link('ccs_pro', 'ccs_pro_cat'); ?>" class="newFooter__linksDes">クリティカルケア関連製品</a>
              <a href="<?php echo get_term_link('intervention', 'intervention_cat'); ?>" class="newFooter__linksDes">インターベンション関連製品</a>
              <a href="<?php echo get_post_type_archive_link('documents'); ?>" class="newFooter__linksDes">添付文書</a>
              <a href="<?php echo get_post_type_archive_link('catalog'); ?>" class="newFooter__linksDes">カタログ・動画・ケースレポート</a>
            </div>
          </div>
        </div>

        <div class="newFooter__contentLinks navTextSP navTextPC">
            <h2 class="newFooter__titleLink titleSP">
              <a href="<?php echo home_url(); ?>/oem">OEM</a>
              <span class="arrowSP"></span>
            </h2>
            <div class="navListSP">
              <div class="newFooter__navListSP">
                <a href="<?php echo home_url(); ?>/oem/oem-business-overview" class="newFooter__linksDes">OEM Business Overview</a>
                <a href="<?php echo home_url(); ?>/oem/oem-product" class="newFooter__linksDes">OEM製品一覧</a>
                <a href="https://meritoem.com/about/iso-80369-small-bore-connector-standard/" target="_blank" class="newFooter__linksDes">ISO80369<p></p></a>
                <a href="<?php echo home_url(); ?>/oem/oem-centrosflo" class="newFooter__linksDes">CentrosFLO™ 総販売元について</a>
                <a href="<?php echo home_url(); ?>/oem/oem-petit-access-kit-nk" class="newFooter__linksDes">プチアクセスキット NK 販売元について</a>
                <a href="<?php echo home_url(); ?>/oem/oem-safe-guard-focus" class="newFooter__linksDes">メリット　セーフガードFOCUS　取扱い販売店について</a>
              </div>
            </div>
          </div>

        <div class="newFooter__contentLinks navTextSP navTextPC">
          <h2 class="newFooter__titleLink titleSP">
            <a href="<?php echo home_url(); ?>/about-merit">会社概要</a>
            <span class="arrowSP"></span>
          </h2>
          <div class="navListSP">
            <div class="newFooter__navListSP">
              <a href="<?php echo home_url(); ?>/about-merit/top-message" class="newFooter__linksDes">代表の挨拶</a>
              <a href="<?php echo home_url(); ?>/about-merit/culture" class="newFooter__linksDes">ミッション・ビジョン&バリュー</a>
              <a href="<?php echo home_url(); ?>/about-merit/transparency-guidelines" class="newFooter__linksDes">透明性に関する指針</a>
              <a href="<?php echo home_url(); ?>/about-merit/privacy-policy" class="newFooter__linksDes">個人情報保護方針</a>
              <a href="<?php echo home_url(); ?>/about-merit/bases" class="newFooter__linksDes">拠点</a>
              <a href="<?php echo home_url(); ?>/about-merit/history" class="newFooter__linksDes">沿革</a>
              <a href="https://www.merit.com/investors/" target="_blank" class="newFooter__linksDes">IR情報<p></p></a>
            </div>
          </div>
        </div>

        <div class="newFooter__contentLinks navTextSP navTextPC">
          <h2 class="newFooter__titleLink titleSP">
            <a href="<?php echo home_url(); ?>/dealer">販売代理店様</a>
          </h2>
        </div>

        <div class="newFooter__contentLinks navTextSP navTextPC">
          <h2 class="newFooter__titleLink titleSP">
            <a href="<?php echo home_url(); ?>/careers">採用情報</a>
            <span class="arrowSP"></span>
          </h2>
          <div class="navListSP">
            <div class="newFooter__navListSP">
              <a href="<?php echo home_url(); ?>/careers/recruit-info" class="newFooter__linksDes">募集情報</a>
              <a href="<?php echo home_url(); ?>/careers/system" class="newFooter__linksDes">制度について</a>
              <a href="<?php echo home_url(); ?>/careers/message" class="newFooter__linksDes">人事総務本部長メッセージ</a>
              <a href="<?php echo home_url(); ?>/careers/faq" class="newFooter__linksDes">よくある質問</a>
            </div>
          </div>
        </div>


        <!-- <div class="lowerFooterLinks u-pc u-flex">

        </div> -->


        <!-- <div class="newFooter__contentLinks navTextSP navTextPC u-sp">
            <h2 class="newFooter__titleLink titleSP">
              <a href="<?php echo home_url(); ?>/careers">採用情報</a>
              <span class="arrowSP"></span>
            </h2>
            <div class="navListSP">
              <div class="newFooter__navListSP">
                <a href="<?php echo home_url(); ?>/careers/recruit-info" class="newFooter__linksDes">募集情報</a>
                <a href="<?php echo home_url(); ?>/careers/system" class="newFooter__linksDes">制度について</a>
                <a href="<?php echo home_url(); ?>/careers/message" class="newFooter__linksDes">人事総務本部長メッセージ</a>
                <a href="<?php echo home_url(); ?>/careers/faq" class="newFooter__linksDes">よくある質問</a>
              </div>
            </div>
          </div>
         -->

    </div>
  </div>

  <div class="newFooter__ltd">
    <h2 class="newFooter__ltdTitle">©2022 メリットメディカル・ジャパン株式会社</h2>
    <p class="newFooter__ltdDesc openSans">The content on Merit.com is not intended nor recommended as a substitute for medical advice, diagnosis, or treatment. Always seek the advice of your own physician or other qualified health care professional regarding any medical questions or conditions. The use of this website is governed by the Merit.com. Merit Medical is a global company. Not all goods on this website are available in every country. Terms and conditions may vary. Contact your local Sales Representative for more details.</p>
  </div>
</footer>

<!-- <div class="page_top"></div>

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
<?php endif; ?> -->

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/top-new.js"></script>
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
<?php elseif (is_page('careers')) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/career.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sub.js"></script>
<?php elseif (is_page('faq')) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/career.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sub.js"></script>
<?php elseif (is_page('catalog_search')) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/catalog.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sub.js"></script>
<?php elseif(is_tax(array('ccs_pro_cat', 'intervention_cat'))) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/product_list.js"></script>
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