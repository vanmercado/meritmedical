<?php get_header(); ?>
<?php
$term = get_queried_object();
?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title"><?php echo esc_html($term->name); ?></h1>
  </div>
</div>

<div class="container">
  <div class="sub_breadcrumb">
    <?php custom_breadcrumb();?>
  </div>
  <div class="category_wrapper">
    <?php
    $term_number = 0;
    $terms = get_terms([
      'taxonomy' => 'ccs_pro_cat',
      'hide_empty' => false,
      'parent' => 105,
    ]);
    $queried_obj = get_queried_object();
    $term = get_queried_object();
    $is_child = isset($term->parent) && $term->parent != 0;

    if (!$is_child): 
    ?>
    <ul class="css_pro_list">
      <?php foreach ($terms as $term): $term_number++; ?>
      <li class="category_list_item category_list_item_css_pro">
        <a href="/ccs_pro_cat/ccs_pro/<?php echo $term->slug; ?>" target="_blank">
          <?php echo $term->description; ?>
          <p class="category_list_item_label category_list_item_label_css_pro<?php echo $term_number; ?>">
            <?php echo $term->name; ?>
          </p>
        </a>
        </li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </div>

  <?php
  $term_class_map01 = [
    'ibpm'      => 'category_bg_css_pro1',
    'aa'        => 'category_bg_css_pro2',
    'accessory' => 'category_bg_css_pro3',
    'mms'       => 'category_bg_css_pro4',
  ];

  $term_class_map02 = [
    'ibpm'      => 'category_border_css_pro1',
    'aa'        => 'category_border_css_pro2',
    'accessory' => 'category_border_css_pro3',
    'mms'       => 'category_border_css_pro4',
  ];

  $current_term = get_queried_object();
  if (!is_tax('ccs_pro_cat') || ($current_term && $current_term->parent != 0)):
    $term_id = $current_term->term_id;
    $child_terms = get_terms([
      'taxonomy' => 'ccs_pro_cat',
      'hide_empty' => false,
      'parent' => $term_id,
    ]);
  $slug = urldecode($current_term->slug);
  $term_bgcolor = isset($term_class_map01[$slug]) ? $term_class_map01[$slug] : 'category_bg_css_pro_default';
  $term_bordercolor = isset($term_class_map02[$slug]) ? $term_class_map02[$slug] : 'category_border_css_pro_default';
  ?>
  <div>
    <div class="products_wrapper">
      <?php
      if (!empty($child_terms)):
        foreach ($child_terms as $key):
      ?>
      <div class="products_block">
        <h1 class="products_title <?php echo esc_attr($term_bordercolor) ?>" id="term<?php echo $key->term_id; ?>"><?php echo esc_html($key->name); ?></h1>
        <?php
        $args = array(
            'post_type' => 'product_item_cate',
            'posts_per_page' => -1,
            'tax_query'      => array(
              array(
                'taxonomy' => 'ccs_pro_cat',
                'field'    => 'term_id',
                'terms'    => $key->term_id,
              )
            )
          );
          $the_query = get_posts( $args );
          if ($the_query):
        ?>
        
        <ul class="products_item_wrapper" style="gap: 0 20px;">
          <?php foreach ( $the_query as $post ) : setup_postdata( $post );?>
            <?php $postId = $post->ID; ?>
            <?php if(have_rows('category')): ?>
              <?php while (have_rows('category')): the_row();
                $category_number += 1; ?>
                <?php 
                  $name = get_sub_field('name');
                  $img = get_sub_field('img');
                  
                  if($name && !empty($img['url'])): 
                ?>
                <div class="product_category_item">
                  <div class="product_category_item_title"><?php the_sub_field('name'); ?></div>
                  <img class="product_category_item_img" src="<?php echo get_sub_field('img')['url']; ?>">
                  <?php if (have_rows('text_content_01')): ?>
                    <div class="product_category_item_link_wrapper01">
                      <?php while (have_rows('text_content_01')): the_row();?>
                        <a class="product_category_item_link_pdf <?php echo esc_attr($term_bgcolor) ?>" href="<?php echo the_sub_field('link'); ?>" target="_blank">&gt; <?php echo the_sub_field('name'); ?></a>
                       <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                  <?php if (have_rows('text_content_02')): ?>
                    <div class="product_category_item_link_wrapper02">
                      <?php while (have_rows('text_content_02')): the_row();?>
                        <a class="product_category_item_link_pdf <?php echo esc_attr($term_bgcolor) ?>" href="<?php echo the_sub_field('link'); ?>" target="_blank">&gt; <?php echo the_sub_field('name'); ?></a>
                       <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                  <?php if (have_rows('text_content_03')): ?>
                    <div class="product_category_item_link_wrapper03">
                      <?php while (have_rows('text_content_03')): the_row();?>
                        <a class="product_category_item_link_pdf <?php echo esc_attr($term_bgcolor) ?>" href="<?php echo the_sub_field('link'); ?>" target="_blank">&gt; <?php echo the_sub_field('name'); ?></a>
                       <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                  
                  <!-- VIDEO, YOUTUBE, MOVIE -->
                  <?php if (have_rows('movie')): $number = 0; ?>
                  <div class="product_category_item_video_ref">▼動画資料</div>
                    <div class="product_category_item_video_link_wrapper">
                      <?php while (have_rows('movie')): the_row(); $number++; ?>
                        <div class="product_category_item_video_link <?php echo esc_attr($term_bgcolor) ?>" id="modal_movie<?php echo $category_number ."vid". $postId . $number; ?>">&gt; <?php the_sub_field('text'); ?></div>
                        
                        <!-- MODAL -->
                        <div class="modal product_modal modal_movie<?php echo $category_number ."vid". $postId . $number; ?>">
                          <div class="modal_inner">
                            <div class="modal_back"></div>
                            <div class="modal_main">
                              <div class="modal_cancel">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/modal_cancel.png" alt="">
                              </div>
                              <div class="modal_main_content">
                                <!-- YOUTUBE -->
                                <?php 
                                  if (get_sub_field('movie_or_youtube_or_video') == 'youtube'):
                                    $youtube_url = get_sub_field('youtube');
                                    // Convert to embed URL
                                    parse_str(parse_url($youtube_url, PHP_URL_QUERY), $params);
                                    $video_id = $params['v'] ?? '';
                                    $embed_url = "https://www.youtube.com/embed/{$video_id}";
                                ?>
                                  <iframe width="100%" height="100%" src="<?php echo $embed_url; ?>" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen></iframe>
                                <!-- MOVIE -->
                                <?php elseif (get_sub_field('movie_or_youtube_or_video') == 'movie'): ?>
                                  <video controls controlsList="nodownload" src="<?php the_sub_field('movie'); ?>" class="modal_video"></video>
                                <!-- VIDEO -->
                                <?php elseif(get_sub_field('movie_or_youtube_or_video') == 'video'): ?>
                                  <?php echo get_sub_field('video'); ?>
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                </div>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          <?php
            endforeach;
            wp_reset_postdata();
          ?>
        </ul>
        <?php endif; ?>
      </div>
      <?php endforeach;?>
    </div>
  </div>
  <?php endif;?>
  <?php else: ?>
  <div>
  </div>
  <?php endif; ?>
</div>

<?php get_template_part( 'sub_main_bottom_parts' ); ?>

<?php get_footer();?>
