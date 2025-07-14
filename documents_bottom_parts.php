<div class="sub_main">
  <div class="sub_main_search documents">
    <div class="container">
      <h2 class="sub_main_search_title">添付文書検索</h2>
      <form class="" action="<?php echo home_url(); ?>/documents/documents_search/" method="get">
        <div class="sub_main_search_checks">
          <div class="sub_main_search_checks_item">
            <h3 class="sub_main_search_checks_item_title">クリティカルケア関連製品</h3>
            <div class="sub_main_search_checks_main">
              <?php
                $terms = get_terms('documents_ccs_pro');
                if ($terms):
                  $parent_documents_ccs_pro = "";
                  $parent2_documents_ccs_pro = "";
                  $parent3_documents_ccs_pro = "";
                  foreach ($terms as $key) {
                      if ($key->parent == 0) {
                        $parent_documents_ccs_pro = $key->term_id;
                      }
                  }
                  foreach ($terms as $key) {
                    if($parent_documents_ccs_pro){
                      if ($key->parent == $parent_documents_ccs_pro) {
                        $name = $key->name;
                        $slug = $key->slug;
                        $term_id = $key->term_id;
                        ?>
                        <div class="sub_main_search_checks_main_item">
                          <input type="checkbox" name="documents_ccs_pro[]" value="<?php echo $slug; ?>" id="<?php echo $name; ?>"><label for="<?php echo $name; ?>"><?php echo $name; ?></label>
                        </div>
                        <?php
                      }
                    }
                  }
                wp_reset_postdata(); endif; ?>
            </div>
          </div>
          <div class="sub_main_search_checks_item">
            <h3 class="sub_main_search_checks_item_title">IVR関連製品その他</h3>
            <div class="sub_main_search_checks_main">
              <?php
                $terms = get_terms('documents_ivr');
                if ($terms):
                  $parent_documents_ccs_pro = "";
                  $parent2_documents_ccs_pro = "";
                  $parent3_documents_ccs_pro = "";
                  foreach ($terms as $key) {
                      if ($key->parent == 0) {
                        $parent_documents_ccs_pro = $key->term_id;
                      }
                  }
                  foreach ($terms as $key) {
                    if($parent_documents_ccs_pro){
                      if ($key->parent == $parent_documents_ccs_pro) {
                        $name = $key->name;
                        $slug = $key->slug;
                        $term_id = $key->term_id;
                        ?>
                        <div class="sub_main_search_checks_main_item">
                          <input type="checkbox" name="documents_ivr[]" value="<?php echo $slug; ?>" id="<?php echo $name; ?>"><label for="<?php echo $name; ?>"><?php echo $name; ?></label>
                        </div>
                        <?php
                      }
                    }
                  }
                wp_reset_postdata(); endif; ?>
            </div>
          </div>
        </div>
        <div class="sub_main_search_keyword">
          <dl class="sub_main_search_keyword_search">
            <dt><input type="text" name="keywords" value="" placeholder="添付文書名を入力してください"></dt>
            <dd><button><span>検索</span></button></dd>
          </dl>
        </div>
      </form>
      <a href="https://www.info.pmda.go.jp/downfiles/md/whatsnew/companylist/companyframe.html" class="documents_bottom_link" target="_blank">&gt;　独立行政法人　<br class="only_sp">医薬品医療機器総合機構（PMDA）<br class="only_sp">検索ページはこちらから</a>
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
