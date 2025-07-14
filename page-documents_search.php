<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">添付文書</h1>
  </div>
</div>

<div class="sub_main product">
  <div class="container">
    <div class="sub_breadcrumb">
      <?php custom_breadcrumb();?>
    </div>
  </div>
  <?php
  if(isset($_GET['documents_ccs_pro']) || isset($_GET['documents_ivr']) || isset($_GET['keywords'])):
    $keywords = $_GET['keywords'];
    if(isset($_GET['documents_ccs_pro'])){
      $documents_ccs_pro_lists = '';
      foreach( $documents_ccs_pro as $value ){
        if($value !== end($documents_ccs_pro)){
          $cat_terms = get_terms('documents_ccs_pro');
          foreach ( $cat_terms as $cat_term ){
            if($cat_term->slug == $value){
              $value = $cat_term->name;
            }
          }
          //最後以外のループ
          $documents_ccs_pro_lists.= $value . ',' ;
        }else{
          $cat_terms = get_terms('documents_ccs_pro');
          foreach ( $cat_terms as $cat_term ){
            if($cat_term->slug == $value){
              $value = $cat_term->name;
            }
          }
          //最後のループ
          $documents_ccs_pro_lists.= $value;
        }
      }
    }
    if(isset($_GET['documents_ivr'])){
      $documents_ivr_lists = '';
      foreach( $documents_ivr as $value ){
        if($value !== end($documents_ivr)){
          $cat_terms = get_terms('documents_ivr');
          foreach ( $cat_terms as $cat_term ){
            if($cat_term->slug == $value){
              $value = $cat_term->name;
            }
          }
          //最後以外のループ
          $documents_ivr_lists.= $value . ',' ;
        }else{
          $cat_terms = get_terms('documents_ivr');
          foreach ( $cat_terms as $cat_term ){
            if($cat_term->slug == $value){
              $value = $cat_term->name;
            }
          }
          //最後のループ
          $documents_ivr_lists.= $value;
        }
      }
    }
  $paged = get_query_var('paged') ?: 1;
  if(isset($_GET['documents_ccs_pro']) && isset($_GET['documents_ivr'])){
  $args = array(
    'post_type' => 'documents',
    'posts_per_page' => 8,
    'paged' => $paged,
    's' => $keywords,
    'search_meta' => true,
    'tax_query' => array(
      'relation' => 'OR',
      array(
        'taxonomy' => 'documents_ccs_pro',
        'field' => 'slug',
        'terms' => $documents_ccs_pro,
       ),
      array(
        'taxonomy' => 'documents_ivr',
        'field' => 'slug',
        'terms' => $documents_ivr,
       ),
     ),
   );
  } elseif(isset($_GET['documents_ccs_pro'])) {
    $args = array(
      'post_type' => 'documents',
      'posts_per_page' => 8,
      'paged' => $paged,
      's' => $keywords,
      'search_meta' => true,
      'tax_query' => array(
        array(
          'taxonomy' => 'documents_ccs_pro',
          'field' => 'slug',
          'terms' => $documents_ccs_pro,
         ),
       ),
    );
  } elseif(isset($_GET['documents_ivr'])) {
    $args = array(
      'post_type' => 'documents',
      'posts_per_page' => 8,
      'paged' => $paged,
      's' => $keywords,
      'search_meta' => true,
      'tax_query' => array(
        array(
          'taxonomy' => 'documents_ivr',
          'field' => 'slug',
          'terms' => $documents_ivr,
         ),
       ),
    );
  } else {
    $args = array(
      'post_type' => 'documents',
      'posts_per_page' => 8,
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
  <div class="container">
    <h2 class="documents_title">検索結果</h2>
    <div class="search_word">
      <?php if(isset($_GET['documents_ccs_pro']) && isset($_GET['documents_ivr'])): ?>
      <div>カテゴリー：<?php echo $documents_ccs_pro_lists; ?>,<?php echo $documents_ivr_lists; ?></div>
      <?php elseif(isset($_GET['documents_ccs_pro'])): ?>
      <div>カテゴリー：<?php echo $documents_ccs_pro_lists; ?></div>
    <?php elseif(isset($_GET['documents_ivr'])): ?>
      <div>カテゴリー：<?php echo $documents_ivr_lists; ?></div>
      <?php else: ?>
      <div>カテゴリー：</div>
      <?php endif; ?>
      <div>キーワード：<?php echo $keywords; ?></div>
    </div>
    <div class="documents_item_wrapper">
      <?php
      while($the_query->have_posts()): $the_query->the_post();
      ?>

      <div class="documents_item">
        <div class="documents_item_content">
          <div class="documents_item_content_title_wrapper">
            <p class="documents_item_content_title"><?php the_title(); ?></p>
            <?php
            $cat_documents_ccs_pro = get_the_terms($post->ID, 'documents_ccs_pro');
              if($cat_documents_ccs_pro):
                $parent_documents_ccs_pro = "";
                $parent2_documents_ccs_pro = "";
                $parent3_documents_ccs_pro = "";
                foreach ($cat_documents_ccs_pro as $key) {
                    if ($key->parent == 0) {
                      $parent_documents_ccs_pro = $key->term_id;
                    }
                }
                foreach ($cat_documents_ccs_pro as $key) {
                  if($parent_documents_ccs_pro){
                    if ($key->parent == $parent_documents_ccs_pro) {
                      ?>
                      <span class="documents_item_content_title_label"><?php echo $key->name; ?></span>
                      <?php
                    }
                  }
                }
              endif;
            ?>
            <?php
            $cat_documents_ivr = get_the_terms($post->ID, 'documents_ivr');
              if($cat_documents_ivr):
                $parent_documents_ivr = "";
                $parent2_documents_ivr = "";
                foreach ($cat_documents_ivr as $key) {
                    if ($key->parent == 0) {
                      $parent_documents_ivr = $key->term_id;
                    }
                }
                foreach ($cat_documents_ivr as $key) {
                  if($parent_documents_ivr){
                    if ($key->parent == $parent_documents_ivr) {
                      ?>
                      <span class="documents_item_content_title_label"><?php echo $key->name; ?></span>
                      <?php
                    }
                  }
                }
              endif;
            ?>
          </div>
          <span class="documents_item_content_num">医療機器承認番号・認証番号/届出番号：<?php the_field('number'); ?></span>
          <div class="documents_item_content_link_wrapper">
            <?php if(get_field('product_url')): ?>
            <a class="documents_item_content_link" href="<?php the_field('product_url'); ?>">&gt; 製品情報</a>
            <?php endif; ?>
            <?php if(get_field('download')): ?>
            <a class="documents_item_content_link dl" href="<?php the_field('download'); ?>" target="_blank">&gt; ダウンロード</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php
        if( function_exists( 'pagination' ) ) :
          pagination( $the_query->max_num_pages, $paged );
        endif;
      ?>
    </div>
  <?php endif; wp_reset_postdata(); endif; ?>
  </div>
</div>

<?php get_template_part( 'documents_bottom_parts' ); ?>
<?php get_footer();?>
