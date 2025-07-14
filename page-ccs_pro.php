<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">クリティカルケア関連製品</h1>
  </div>
</div>

<div class="container">
  <div class="sub_breadcrumb">
    <?php custom_breadcrumb();?>
  </div>

  <div class="category_wrapper">
    <?php
    $term_number = 0;
    $cat = get_terms('ccs_pro_cat');
    if($cat):
    ?>
    <ul class="category_list">
      <?php
      foreach ($cat as $key):
      if($key->parent == 6):
      $parent_child = $key->term_id;
      $term_number += 1;
      ?>
      <li class="category_list_item"><a href="#term<?php echo $key->term_id; ?>" class="category_list_item_label category_list_item_label<?php echo $term_number; ?>">&gt; <?php echo $key->name; ?></a></li>
      <?php endif; endforeach; ?>
    </ul>
    <?php endif; ?>
    <?php
    $args = array(
        'post_type' => 'product_item_cate',
        'posts_per_page' => 3,
        'tax_query'      => array(
          array(
            'taxonomy' => 'ccs_pro_cat',
            'field'    => 'slug',
            'terms'    => 'ccs_pro'
          )
        )
      );
      $the_query = get_posts( $args );
      if ($the_query):
    ?>
    <ul class="new_product_list">
      <?php foreach ( $the_query as $post ) : setup_postdata( $post );?>
      <li class="new_product_list_item"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('product_archive'); ?><span class="new_product_list_item_name"><?php the_title(); ?></span></a></li>
      <?php
        endforeach;
        wp_reset_postdata();
      ?>
    </ul>
    <?php endif; ?>
  </div>

  <?php
  $cat = get_terms('ccs_pro_cat');
  foreach ($cat as $key):
  if($key->parent == 6):
  $parent_child = $key->term_id;
  ?>
  <div>
    <h2 class="products_title" id="term<?php echo $key->term_id; ?>"><?php echo $key->name; ?></h2>
    <div class="products_wrapper">
      <?php
      $cat_child = get_terms('ccs_pro_cat');
      foreach ($cat_child as $key):
      if($key->parent == $parent_child):
        $parent_child_child = $key->term_id;
      ?>
      <div class="products_block">
        <h3 class="products_block_title products_block_title_1" id="term<?php echo $key->term_id; ?>"><?php echo $key->name; ?></h3>
        <?php
        $args = array(
            'post_type' => 'product_item_cate',
            'posts_per_page' => 4,
            'tax_query'      => array(
              array(
                'taxonomy' => 'ccs_pro_cat',
                'field'    => 'term_id',
                'terms'    => $parent_child_child,
              )
            )
          );
          $the_query = get_posts( $args );
          if ($the_query):
        ?>
        <ul class="products_item_wrapper">
          <?php foreach ( $the_query as $post ) : setup_postdata( $post );?>
          <li class="products_item">
            <a href="<?php the_permalink(); ?>">
              <div class="products_item_img">
                <?php the_post_thumbnail('product_archive'); ?>
              </div>
              <p class="products_item_title"><?php the_title(); ?></p>
            </a>
          </li>
          <?php
            endforeach;
            wp_reset_postdata();
          ?>
        </ul>
        <?php endif; ?>
      </div>
      <?php endif; endforeach;?>
    </div>
  </div>
  <?php endif; endforeach;?>
</div>

<?php get_template_part( 'sub_main_bottom_parts' ); ?>

<?php get_footer();?>
