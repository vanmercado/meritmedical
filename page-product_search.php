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
    <?php
    if(isset($_GET['ccs_pro_cat']) || isset($_GET['intervention_cat']) || isset($_GET['keywords'])):
      $keywords = $_GET['keywords'];
      if(isset($_GET['ccs_pro_cat'])){
        $ccs_pro_lists = '';
        foreach( $ccs_pro_cat as $value ){
          if($value !== end($ccs_pro_cat)){
            $cat_terms = get_terms('ccs_pro_cat');
            foreach ( $cat_terms as $cat_term ){
              if($cat_term->slug == $value){
                $value = $cat_term->name;
              }
            }
            //最後以外のループ
            $ccs_pro_lists.= $value . ',' ;
          }else{
            $cat_terms = get_terms('ccs_pro_cat');
            foreach ( $cat_terms as $cat_term ){
              if($cat_term->slug == $value){
                $value = $cat_term->name;
              }
            }
            //最後のループ
            $ccs_pro_lists.= $value;
          }
        }
      }
      if(isset($_GET['intervention_cat'])){
        $intervention_lists = '';
        foreach( $intervention_cat as $value ){
          if($value !== end($intervention_cat)){
            $cat_terms = get_terms('intervention_cat');
            foreach ( $cat_terms as $cat_term ){
              if($cat_term->slug == $value){
                $value = $cat_term->name;
              }
            }
            //最後以外のループ
            $intervention_lists.= $value . ',' ;
          }else{
            $cat_terms = get_terms('intervention_cat');
            foreach ( $cat_terms as $cat_term ){
              if($cat_term->slug == $value){
                $value = $cat_term->name;
              }
            }
            //最後のループ
            $intervention_lists.= $value;
          }
        }
      }
    $paged = get_query_var('paged') ?: 1;
    if(isset($_GET['ccs_pro_cat']) && isset($_GET['intervention_cat'])){
    $args = array(
      'post_type' => 'product_item_cate',
      'posts_per_page' => 9,
      'paged' => $paged,
      's' => $keywords,
      'search_meta' => true,
      'tax_query' => array(
        'relation' => 'OR',
        array(
          'taxonomy' => 'ccs_pro_cat',
          'field' => 'slug',
          'terms' => $ccs_pro_cat,
         ),
        array(
          'taxonomy' => 'intervention_cat',
          'field' => 'slug',
          'terms' => $intervention_cat,
         ),
       ),
     );
   } elseif(isset($_GET['ccs_pro_cat'])) {
      $args = array(
        'post_type' => 'product_item_cate',
        'posts_per_page' => 9,
        'paged' => $paged,
        's' => $keywords,
        'search_meta' => true,
        'tax_query' => array(
          array(
            'taxonomy' => 'ccs_pro_cat',
            'field' => 'slug',
            'terms' => $ccs_pro_cat,
           ),
         ),
      );
    } elseif(isset($_GET['intervention_cat'])) {
      $args = array(
        'post_type' => 'product_item_cate',
        'posts_per_page' => 9,
        'paged' => $paged,
        's' => $keywords,
        'search_meta' => true,
        'tax_query' => array(
          array(
            'taxonomy' => 'intervention_cat',
            'field' => 'slug',
            'terms' => $intervention_cat,
           ),
         ),
      );
    } else {
      $args = array(
        'post_type' => 'product_item_cate',
        'posts_per_page' => 9,
        'paged' => $paged,
        's' => $keywords,
        'search_meta' => true
      );
    }

    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
    $all_post = $the_query->found_posts;
    $this_post = $the_query->post_count - 1;
    $first_post = 10 * $paged - 9;
    ?>
    <div>
      <h3 class="products_title">検索結果</h3>
      <div class="search_word">
        <?php if(isset($_GET['ccs_pro_cat']) && isset($_GET['intervention_cat'])): ?>
        <div>カテゴリー：<?php echo $ccs_pro_lists; ?>,<?php echo $intervention_lists; ?></div>
      <?php elseif(isset($_GET['ccs_pro_cat'])): ?>
        <div>カテゴリー：<?php echo $ccs_pro_lists; ?></div>
      <?php elseif(isset($_GET['intervention_cat'])): ?>
        <div>カテゴリー：<?php echo $intervention_lists; ?></div>
        <?php else: ?>
        <div>カテゴリー：</div>
        <?php endif; ?>
        <div>キーワード：<?php echo $keywords; ?></div>
      </div>
      <div class="products_item_wrapper">
        <?php
        while($the_query->have_posts()): $the_query->the_post();
        ?>
        <a class="products_item" href="<?php the_permalink(); ?>">
          <div class="products_item_img">
            <?php the_post_thumbnail('product_archive'); ?>
          </div>
          <?php
          $cat_ccs_pro = get_the_terms($post->ID, 'ccs_pro_cat');
            if($cat_ccs_pro):
              $parent_ccs_pro = "";
              $parent2_ccs_pro = "";
              $parent3_ccs_pro = "";
              foreach ($cat_ccs_pro as $key) {
                  if ($key->parent == 0) {
                    $parent_ccs_pro = $key->term_id;
                  }
              }
              foreach ($cat_ccs_pro as $key) {
                if($parent_ccs_pro){
                  if ($key->parent == $parent_ccs_pro) {
                    $parent2_ccs_pro = $key->term_id;
                  }
                }
              }
              foreach ($cat_ccs_pro as $key) {
                if($parent_ccs_pro){
                  if($parent2_ccs_pro){
                    if($key->parent == $parent2_ccs_pro) {
                      ?>
                      <span class="products_item_label"><?php echo $key->name; ?></span>
                      <?php
                    }
                  }
                }
              }
            endif;
          ?>
          <?php
          $cat_intervention = get_the_terms($post->ID, 'intervention_cat');
            if($cat_intervention):
              $parent_intervention = "";
              $parent2_intervention = "";
              $parent3_intervention = "";
              foreach ($cat_intervention as $key) {
                  if ($key->parent == 0) {
                    $parent_intervention = $key->term_id;
                  }
              }
              foreach ($cat_intervention as $key) {
                if($parent_intervention){
                  if ($key->parent == $parent_intervention) {
                    $parent2_intervention = $key->term_id;
                  }
                }
              }
              foreach ($cat_intervention as $key) {
                if($parent_intervention){
                  if($parent2_intervention){
                    if($key->parent == $parent2_intervention) {
                      ?>
                      <span class="products_item_label"><?php echo $key->name; ?></span>
                      <?php
                    }
                  }
                }
              }
            endif;
          ?>
          <p class="products_item_title products_item_title_result"><?php the_title(); ?></p>
        </a>
      <?php endwhile; ?>
      </div>
      <?php
        if( function_exists( 'pagination' ) ) :
          pagination( $the_query->max_num_pages, $paged );
        endif;
      ?>
    </div>
    <?php endif; wp_reset_postdata(); endif; ?>

  </div>
</div>

<?php get_template_part( 'sub_main_bottom_parts' ); ?>
<?php get_footer();?>
