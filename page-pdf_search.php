<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">レターPDF</h1>
  </div>
</div>

<div class="sub_main product">
  <div class="container">
    <div class="sub_breadcrumb">
      <?php custom_breadcrumb();?>
    </div>
    <?php
    if(isset($_GET['pdf_category']) || isset($_GET['keywords'])):
      $keywords = $_GET['keywords'];
      if(isset($_GET['pdf_category'])){
        $pdf_category_lists = '';
        foreach( $pdf_category as $value ){
          if($value !== end($pdf_category)){
            $cat_terms = get_terms('pdf_category');
            foreach ( $cat_terms as $cat_term ){
              if($cat_term->slug == $value){
                $value = $cat_term->name;
              }
            }
            //最後以外のループ
            $pdf_category_lists.= $value . ',' ;
          }else{
            $cat_terms = get_terms('pdf_category');
            foreach ( $cat_terms as $cat_term ){
              if($cat_term->slug == $value){
                $value = $cat_term->name;
              }
            }
            //最後のループ
            $pdf_category_lists.= $value;
          }
        }
      }
    $paged = get_query_var('paged') ?: 1;
    if(isset($_GET['pdf_category'])){
    $args = array(
      'post_type' => 'pdf',
      'posts_per_page' => 8,
      'paged' => $paged,
      's' => $keywords,
      'search_meta' => true,
      'tax_query' => array(
        array(
          'taxonomy' => 'pdf_category',
          'field' => 'slug',
          'terms' => $pdf_category,
         ),
       ),
     );
    } elseif(isset($_GET['keywords'])) {
      $args = array(
        'post_type' => 'pdf',
        'posts_per_page' => 9,
        'paged' => $paged,
        's' => $keywords,
        'search_meta' => true
      );
    } else {
      $args = array(
        'post_type' => 'pdf',
        'posts_per_page' => 8,
      );
    }

    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
    $all_post = $the_query->found_posts;
    $this_post = $the_query->post_count - 1;
    $first_post = 10 * $paged - 9;
    ?>
    <div class="container">
      <h2 class="pdf_title">検索結果</h2>
      <div class="search_word">
        <?php if(isset($_GET['pdf_category'])): ?>
        <div>カテゴリー：<?php echo $pdf_category_lists; ?></div>
        <?php else: ?>
        <div>カテゴリー：</div>
        <?php endif; ?>
        <div>キーワード：<?php echo $keywords; ?></div>
      </div>
      <div class="pdf_item_wrapper">
        <?php
        while($the_query->have_posts()): $the_query->the_post();
        ?>

        <div class="pdf_item">
          <div class="pdf_item_content">
            <div class="pdf_item_content_title_wrapper">
              <p class="pdf_item_content_title"><?php the_title(); ?></p>
            </div>
            <div class="pdf_item_content_link_wrapper">
              <?php if(get_field('download')): ?>
                <a class="pdf_item_content_link" href="<?php the_field('download'); ?>">&gt; レターPDF</a>
              <?php endif; ?>
              <?php if(get_field('page_url')): ?>
                <a class="pdf_item_content_link dl" href="<?php the_field('page_url'); ?>" target="_blank">&gt; 記事ページへ</a>
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
</div>

<?php get_template_part( 'pdf_bottom_parts' ); ?>
<?php get_footer();?>
