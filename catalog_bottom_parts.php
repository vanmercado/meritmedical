<div class="sub_main">
  <div class="sub_main_search catalog">
    <div class="container">
      <h2 class="sub_main_search_title">カタログ・動画・ケースレポート検索検索</h2>
      <form class="" action="<?php echo home_url(); ?>/catalog/catalog_search/" method="get">
        <div class="sub_main_search_checks sub_main_search_checks-search ">
          <!-- CATALOG -->
          <div class="sub_main_search_checks_item sub_main_search_checks_item-search">
            <div class="sub_main_search_checks_main_item catalog_movie">
              <input type="checkbox" name="catalog_movie[]" value="catalog" id="catalog"><label for="catalog">カタログ</label>
            </div>
            <h3 class="sub_main_search_checks_item_title">クリティカルケア関連製品</h3>
            <div class="sub_main_search_checks_main">
              <?php
                $terms = get_terms('catalog_ccs_pro');
                if ($terms):
                foreach( $terms as $term ):
                $parent_ccs_pro = "";
                foreach ($terms as $key) {
                    if ($key->parent == 0) {
                      $parent_ccs_pro = $key->term_id;
                    }
                }
                if($term->parent == $parent_ccs_pro):
                $name = $term->name;
                $slug = $term->slug;
                $term_id = $term->term_id;
              ?>
              <div class="sub_main_search_checks_main_item">
                <input type="checkbox" name="catalog_ccs_pro[]" value="<?php echo $slug; ?>" id="<?php echo $name; ?>"><label for="<?php echo $name; ?>"><?php echo $name; ?></label>
              </div>
              <?php endif; endforeach; ?>
              <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
          </div>
          
          <!-- VIDEO -->
          <div class="sub_main_search_checks_item sub_main_search_checks_item-search">
            <div class="sub_main_search_checks_main_item catalog_movie">
              <input type="checkbox" name="catalog_movie[]" value="movie" id="movie"><label for="movie">動画</label>
            </div>
            <h3 class="sub_main_search_checks_item_title">IVR関連製品その他</h3>
            <div class="sub_main_search_checks_main">
              <?php
                $terms = get_terms('catalog_ivr');
                if ($terms):
                foreach( $terms as $term ):
                $parent_catalog_ivr = "";
                foreach ($terms as $key) {
                    if ($key->parent == 0) {
                      $parent_catalog_ivr = $key->term_id;
                    }
                }
                if($term->parent == $parent_catalog_ivr):
                $name = $term->name;
                $slug = $term->slug;
                $term_id = $term->term_id;
              ?>
              <div class="sub_main_search_checks_main_item">
                <input type="checkbox" name="catalog_ivr[]" value="<?php echo $slug; ?>" id="<?php echo $name; ?>2"><label for="<?php echo $name; ?>2"><?php echo $name; ?></label>
              </div>
              <?php endif; endforeach; ?>
              <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
          </div>
          
          <!-- CASE_REPORT -->
          <div class="sub_main_search_checks_item sub_main_search_checks_item-search">
            <div class="sub_main_search_checks_main_item catalog_movie">
              <input type="checkbox" name="catalog_movie[]" value="case_report" id="case_report"><label for="case_report">ケースレポート</label>
            </div>
          </div>
        </div>
        <div class="sub_main_search_keyword">
          <dl class="sub_main_search_keyword_search">
            <dt><input type="text" name="keywords" value="" placeholder="製品名を入力してください"></dt>
            <dd><button><span>検索</span></button></dd>
          </dl>
        </div>
      </form>
    </div>
  </div>
  <div class="container">
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
            <a href="<?php echo get_post_type_archive_link('catalog');?>" class="sub_main_template_inner_links_item yellow">カタログ・動画・ケースレポート</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
