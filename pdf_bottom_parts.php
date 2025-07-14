<div class="sub_main">
  <div class="sub_main_search pdf">
    <div class="container">
      <h2 class="sub_main_search_title">レターPDF検索</h2>
      <form class="" action="<?php echo home_url(); ?>/pdf/pdf_search/" method="get">
        <div class="sub_main_search_checks">
          <div class="sub_main_search_checks_item">
            <?php
              $terms = get_terms('pdf_category');
              if ($terms):
              foreach( $terms as $term ):
              $name = $term->name;
              $slug = $term->slug;
              $term_id = $term->term_id;
            ?>
            <div class="pdf_main_search_checks_main_item">
              <input type="checkbox" name="pdf_category[]" value="<?php echo $slug; ?>" id="<?php echo $name; ?>"><label for="<?php echo $name; ?>"><?php echo $name; ?></label>
            </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="sub_main_search_keyword">
          <dl class="sub_main_search_keyword_search">
            <dt><input type="text" name="keywords" value="" placeholder="キーワードを入力してください"></dt>
            <dd><button><span>検索</span></button></dd>
          </dl>
        </div>
      </form>
    </div>
  </div>
</div>
