<?php get_header(); ?>
  <div class="top_mv">
    <ul class="top_mv_lists">
      <li class="top_mv_lists_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_mv_lists_item_img1.png" alt="">
      </li>
      <li class="top_mv_lists_item">
        <a href="https://uf-note.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_mv_lists_item_img2.png" alt=""></a>
      </li>
      <li class="top_mv_lists_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_mv_lists_item_img3.png" alt="">
      </li>
      <li class="top_mv_lists_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_mv_lists_item_img4.png" alt="">
      </li>
      <li class="top_mv_lists_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_mv_lists_item_img5.png" alt="">
      </li>
    <?php /*
      <li class="top_mv_lists_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_mv_lists_item_img.png" alt="" class="only_pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_mv_lists_item_img_sp.png" alt="" class="only_sp">
      </li>
      <li class="top_mv_lists_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_mv_lists_item_img.png" alt="" class="only_pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_mv_lists_item_img_sp.png" alt="" class="only_sp">
      </li>
      <li class="top_mv_lists_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_mv_lists_item_img.png" alt="" class="only_pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_mv_lists_item_img_sp.png" alt="" class="only_sp">
      </li>
    */ ?>
    </ul>
  </div>

  <section class="top_video">
    <div class="container">
      <p class="top_video_text">メリットメディカル・ジャパン株式会社は、米国ユタ州に拠点をおくMerit Medical Systems社の日本法人として2015年に設立されました。<br>
        私達は、世界中の人々の健康な生活に貢献するための多様な医療機器の開発を行うヘルスケア企業です。<br>
        私達は常に医療従事者の皆様と患者様の立場で考え、安全で有益な製品とサービスを提供してまいります。</p>
      <div class="top_video_btn">
        VIEW MOVIE
      </div>
    </div>
  </section>

  <section class="top_news">
    <div class="container">
      <h2 class="top_title">最新のお知らせ</h2>
      <ul class="top_news_top">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
        );
        $the_query = get_posts( $args );
        foreach ( $the_query as $post ) : setup_postdata( $post );
        ?>
        <li class="top_news_top_item">
          <a href="<?php the_permalink(); ?>" class="top_news_top_item_link">
            <p class="top_news_top_item_link_title"><?php the_title(); ?></p>
            <p class="top_news_top_item_link_date"><?php the_time('Y年m月d日') ?></p>
          </a>
        </li>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </ul>

      <div class="top_news_main">
        <div class="top_news_main_item">
          <h3 class="top_news_main_item_title">会社情報</h3>
          <ul class="top_news_main_item_lists">
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 8,
              'category_name' => 'argon-news'
            );
            $the_query = get_posts( $args );
            foreach ( $the_query as $post ) : setup_postdata( $post );
            ?>
            <li class="top_news_main_item_lists_item">
              <a href="<?php the_permalink(); ?>" class="top_news_main_item_lists_item_link">
                <p class="top_news_main_item_lists_item_link_date"><?php the_time('Y年m月d日') ?></p>
                <p class="top_news_main_item_lists_item_link_title"><?php the_title(); ?></p>
              </a>
            </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <a href="<?php echo home_url(); ?>/category/argon-news" class="top_news_main_link">会社情報一覧</a>
        </div>
        <div class="top_news_main_item product">
          <h3 class="top_news_main_item_title product">製品情報のお知らせ</h3>
          <ul class="top_news_main_item_lists">
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 8,
              'category_name' => 'product-news'
            );
            $the_query = get_posts( $args );
            foreach ( $the_query as $post ) : setup_postdata( $post );
            ?>
            <li class="top_news_main_item_lists_item">
              <a href="<?php the_permalink(); ?>" class="top_news_main_item_lists_item_link">
                <p class="top_news_main_item_lists_item_link_date"><?php the_time('Y年m月d日') ?></p>
                <p class="top_news_main_item_lists_item_link_title"><?php the_title(); ?></p>
              </a>
            </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>

          </ul>
          <a href="<?php echo home_url(); ?>/category/product-news" class="top_news_main_link product">製品情報のお知らせ一覧</a>
        </div>
      </div>
      <div class="top_news_main_other_link">
        <a href="<?php echo home_url();?>/upcoming-meetings" class="top_news_main_carender"><span>学術集会出展予定</span></a>
        <a href="<?php echo get_post_type_archive_link('pdf');?>" class="top_news_main_pdf"><span>レターPDF</span></a>
      </div>
    </div>
  </section>

  <section class="top_product">
    <div class="container">
      <h2 class="top_title">取扱い製品</h2>
      <div class="top_product_main">
        <div class="top_product_main_item">
          <div class="top_product_main_item_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_product_main_item_img_medical.png" alt="">
          </div>
          <a href="<?php echo get_term_link('ccs_pro','ccs_pro_cat');?>" class="top_product_main_item_link">クリティカルケア関連製品</a>
          <p class="top_product_main_item_text">標準的な観血的血圧トランスデューサライン、医療機関のニーズに合わせたカスタムキット製品など、血行動態モニタリング関連製品を提供しております。<br></p>
        </div>
        <div class="top_product_main_item">
          <div class="top_product_main_item_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_product_main_item_img_intervention.png" alt="">
          </div>
          <a href="<?php echo get_term_link('intervention','intervention_cat');?>" class="top_product_main_item_link intervention">インターベンション関連製品</a>
          <p class="top_product_main_item_text">血管内治療用および非血管治療用製品、動脈血管塞栓治療用製品など、幅広くラインナップを揃えております。<br></p>
        </div>
      </div>
      <div class="top_product_links">
        <a href="<?php echo get_post_type_archive_link('catalog');?>" class="top_product_links_item"><span>カタログ・動画</span></a>
        <a href="<?php echo get_post_type_archive_link('documents');?>" class="top_product_links_item text"><span>添付文書</span></a>
      </div>
    </div>
  </section>

  <section class="top_oem">
    <div class="container">
      <h2 class="top_title">OEM</h2>
      <div class="top_oem_main">
        <div class="top_oem_main_item">
          <div class="top_oem_main_item_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_oem_main_item_img.png" alt="">
          </div>
          <p class="top_oem_main_item_text">メリットメディカルOEM部門は、長年にわたり設計・開発・製造してきた数多くの医療機器とコンポーネントを世界中の医療機器メーカーへ供給しています。</p>
        </div>
        <div class="top_oem_main_item">
          <a href="https://storage.net-fs.com/hosting/7168824/13/" class="top_oem_main_item_link" target="_blank"><span>バーチャルブースのご案内</a>
          <a href="<?php echo home_url();?>/oem/oem-business-overview" class="top_oem_main_item_link"><span>OEM Business Overview</a>
          <a href="<?php echo home_url();?>/oem/oem-product" class="top_oem_main_item_link"><span>OEM製品一覧</a>
          <a href="https://meritoem.com/about/iso-80369-small-bore-connector-standard/" class="top_oem_main_item_link link_icon" target="_blank"><span>ISO80369</span></a>
          <a href="javascript:void(0);" class="top_oem_main_item_link modal_oem_btn"><span>VIEW MOVIE</a>
        </div>
      </div>
    </div>
  </section>

  <section class="top_link">
    <div class="container">
      <div class="top_link_flex">
        <div class="top_link_flex_item">
          <a href="<?php echo home_url();?>/about-merit" class="top_link_flex_item_link">
            <div class="top_link_flex_item_link_img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_link_flex_item_link_img_company.png" alt="">
            </div>
            <p class="top_link_flex_item_link_text">会社概要</p>
          </a>
        </div>
        <div class="top_link_flex_item">
                <a href="<?php echo home_url();?>/about-merit/top-message" class="top_link_flex_item_link">
            <div class="top_link_flex_item_link_img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_link_flex_item_link_img_reader.png" alt="">
            </div>
            <p class="top_link_flex_item_link_text">代表の挨拶</p>
          </a>
        </div>
        <div class="top_link_flex_item">
          <a href="<?php echo home_url();?>/about-merit/culture" class="top_link_flex_item_link">
            <div class="top_link_flex_item_link_img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_link_flex_item_link_img_vision.png" alt="">
            </div>
            <p class="top_link_flex_item_link_text">ビジョン</p>
          </a>
        </div>
        <div class="top_link_flex_item">
          <a href="<?php echo home_url();?>/about-merit/bases" class="top_link_flex_item_link">
            <div class="top_link_flex_item_link_img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_link_flex_item_link_img_world.png" alt="">
            </div>
            <p class="top_link_flex_item_link_text">拠点</p>
          </a>
        </div>
        <div class="top_link_flex_item">
          <a href="<?php echo home_url();?>/history" class="top_link_flex_item_link">
            <div class="top_link_flex_item_link_img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_link_flex_item_link_img_story.png" alt="">
            </div>
            <p class="top_link_flex_item_link_text">沿革</p>
          </a>
        </div>
        <div class="top_link_flex_item links">
          <ul class="top_link_flex_item_lists">
            <li class="top_link_flex_item_lists_item">
              <a href="<?php echo home_url();?>/about-merit/transparency-guidelines" class="top_link_flex_item_lists_item_link"><span>透明性に関する指針</span></a>
            </li>
            <li class="top_link_flex_item_lists_item">
              <a href="<?php echo home_url();?>/about-merit/privacy-policy" class="top_link_flex_item_lists_item_link"><span>個人情報保護方針</span></a>
            </li>
            <li class="top_link_flex_item_lists_item">
              <a href="https://www.merit.com/investors/" class="top_link_flex_item_lists_item_link link_icon" target="_blank"><span>IR情報（EN）</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
