<?php
if(get_field('direct_url')){
  wp_redirect(get_field('direct_url'));
} else {
  get_header();
}
?>

<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">取扱い製品</h1>
  </div>
</div>

<div class="sub_main product_item_cate_single">

  <div class="sub_breadcrumb">
    <div class="container">
      <div class="sub_breadcrumb">
        <?php custom_breadcrumb();?>
      </div>
    </div>
  </div>

  <section class="main_content_first">
    <div class="container">
      <?php
        $terms_true = get_the_terms($post->ID, 'ccs_pro_cat');
        if($terms_true):
      ?>
      <ul class="main_content_first_tag ccs_pro">
        <?php
        $parent = "";
        $parent2 = "";
        $cat = get_the_terms($post->ID, 'ccs_pro_cat');
        foreach ($cat as $key) {
            if ($key->parent == 0) {
              ?>
              <li class="main_content_first_tag_item">
                <a href="<?php echo home_url(); ?>/ccs_pro_cat/ccs_pro"><?php echo $key->name; ?></a>
              </li>
              <?php
              $parent = $key->term_id;
            }
        }
        foreach ($cat as $key) {
          if($parent){
            if ($key->parent == $parent) {
              ?>
              <li class="main_content_first_tag_item">
                <a href="<?php echo home_url(); ?>/ccs_pro_cat/ccs_pro#term<?php echo $key->term_id; ?>"><?php echo $key->name; ?></a>
              </li>
              <?php
              $parent2 = $key->term_id;
            }
          }
        }
        foreach ($cat as $key) {
          if($parent){
            if($parent2){
              if($key->parent == $parent2) {
              ?>
              <li class="main_content_first_tag_item">
                <a href="<?php echo home_url(); ?>/ccs_pro_cat/ccs_pro#term<?php echo $key->term_id; ?>"><?php echo $key->name; ?></a>
              </li>
              <?php
              }
            }
          }
        }
          ?>
        </ul>
        <?php endif; ?>
      <?php
        $terms_true = get_the_terms($post->ID, 'intervention_cat');
        if($terms_true):
      ?>
      <ul class="main_content_first_tag intervention">
        <?php
        $parent = "";
        $parent2 = "";
        $cat = get_the_terms($post->ID, 'intervention_cat');
        foreach ($cat as $key) {
            if ($key->parent == 0) {
              ?>
              <li class="main_content_first_tag_item">
                <a href="<?php echo home_url(); ?>/intervention_cat/intervention"><?php echo $key->name; ?></a>
              </li>
              <?php
              $parent = $key->term_id;
            }
        }
        foreach ($cat as $key) {
          if($parent){
            if ($key->parent == $parent) {
              ?>
              <li class="main_content_first_tag_item">
                <a href="<?php echo home_url(); ?>/intervention_cat/intervention#term<?php echo $key->term_id; ?>"><?php echo $key->name; ?></a>
              </li>
              <?php
              $parent2 = $key->term_id;
            }
          }
        }
        foreach ($cat as $key) {
          if($parent){
            if($parent2){
              if($key->parent == $parent2) {
              ?>
              <li class="main_content_first_tag_item">
                <a href="<?php echo home_url(); ?>/intervention_cat/intervention#term<?php echo $key->term_id; ?>"><?php echo $key->name; ?></a>
              </li>
              <?php
              }
            }
          }
        }
        ?>
      </ul>
      <?php endif; ?>
      <h1 class="main_content_first_title"><?php the_title(); ?></h1>
    <?php if(get_field('product_name') || get_field('product_number') || get_field('product_genre')):?>
      <ul class="main_content_first_name_number">
      <?php if(get_field('product_name') && !empty(get_field('product_name'))):?>
        <li class="main_content_first_name_number_item">
          販売名：<?php the_field('product_name'); ?>
        </li>
      <?php endif;?>
      <?php if(!empty(get_field('product_number2')['number']) && !empty(get_field('product_number2')['name'])):?>
        <li class="main_content_first_name_number_item">
          <?php echo get_field('product_number2')['name'];?>：<?php echo get_field('product_number2')['number'];?>
        </li>
      <?php elseif(get_field('product_number') && !empty(get_field('product_number'))):?>
        <!-- <li class="main_content_first_name_number_item">
          医療機関認証番号：<?php the_field('product_number'); ?>
        </li> -->
      <?php endif;?>
      <?php if(get_field('product_genre') && !empty(get_field('product_genre'))):?>
        <li class="main_content_first_name_number_item">
          医療機能区分：<?php the_field('product_genre'); ?>
        </li>
      <?php endif;?>
      </ul>
    <?php endif;?>

      <div class="main_content_first_contents">
        <div class="main_content_first_left">
          <?php
            $images = get_field('img_slider');
            if($images):
          ?>
          <ul class="slider">
            <?php foreach( $images as $image ): ?>
            <li class="slick-img"><img src="<?php echo $image['sizes']['product_slider']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
          <?php
            $count = -1;
            $images = get_field('img_slider');
            if($images):
          ?>
          <ul class="thumbnail">
            <?php foreach( $images as $image ): $count++; ?>
            <li class="thumbnail-img" data-slick-index="<?php echo $count; ?>"><img src="<?php echo $image['sizes']['product_slider_thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
        <div class="main_content_first_right">
          <?php if(have_rows('slider_side')): ?>
          <?php while(have_rows('slider_side')): the_row(); ?>
            <div class="main_content_first_right_top">
              <?php if(get_sub_field('slider_side_title')): ?>
              <h2 class="main_content_first_right_top_title">
                <?php the_sub_field('slider_side_title'); ?>
              </h2>
              <?php endif; ?>
              <p class="main_content_first_right_top_text">
                <?php the_sub_field('slider_side_text'); ?>
              </p>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template_parts2' ); ?>

  <?php if(have_rows('product_function')): $product_function_number = 1; ?>
  <?php while(have_rows('product_function')): the_row(); $product_function_number += 1; ?>
  <section class="main_content_second">
    <div class="container">
      <?php if(get_sub_field('product_function_title')): ?>
      <div class="main_content_second_title">
        <h3 class="main_content_second_title_text"><?php the_sub_field('product_function_title'); ?></h3>
      </div>
      <?php endif; ?>
      <?php if(have_rows('product_function_item')): $number = 1; ?>
      <?php while(have_rows('product_function_item')): the_row(); $number += 1;?>
        <div class="main_content_second_contents_contents">
          <?php if(get_sub_field('product_function_item_title')): ?>
          <p class="main_content_second_contents_contents_title"><?php the_sub_field('product_function_item_title'); ?></p>
          <?php endif; ?>
          <div class="main_content_second_contents_contents_div<?php $image_size = get_sub_field('product_function_item_slider_size'); if($image_size == "none"): elseif($image_size): ?> <?php echo $image_size;  ?><?php endif; ?>">
            <?php
              $images = get_sub_field('product_function_item_slider');
              if($images):
                $thumbnail_count = -1;
            ?>
            <div class="main_content_second_contents_left_slider">
              <ul class="slider<?php echo $product_function_number; ?>-<?php echo $number; ?> slider1 slider_inner">
                <?php foreach( $images as $image ): ?>
                <li class="slick-img"><img src="<?php echo $image['sizes']['product_function_slider']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
                <?php endforeach; ?>
              </ul>
              <ul class="thumbnail<?php echo $product_function_number; ?>-<?php echo $number; ?> thumbnail1 thumbnail_inner">
                <?php foreach( $images as $image ): $thumbnail_count ++;?>
                <li class="thumbnail-img" data-slick-index="<?php echo $thumbnail_count; ?>"><img src="<?php echo $image['sizes']['product_slider_thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php endif; ?>
            <?php
              $images = get_sub_field('product_function_item_slider');
            ?>
            <div class="main_content_second_contents_right<?php if(!$images):?> full<?php endif; ?>">
              <?php if(have_rows('product_function_item_table')): ?>
              <table class="main_content_second_contents_table">
              <?php while(have_rows('product_function_item_table')): the_row(); ?>
                <tr class="main_content_second_contents_table_tr">
                  <th class="main_content_second_contents_table_tr_th"><?php the_sub_field('product_function_item_table_title'); ?></th>
                  <td class="main_content_second_contents_table_tr_td"><?php the_sub_field('product_function_item_table_desc'); ?></td>
                </tr>
              <?php endwhile; ?>
              </table>
              <?php endif; ?>
              <?php if(have_rows('product_function_item_text')): ?>
              <div class="main_content_second_contents_text">
              <?php while(have_rows('product_function_item_text')): the_row(); ?>
                <div class="main_content_second_contents_text_top">
                  <h4 class="main_content_second_contents_text_top_title"><?php the_sub_field('product_function_item_text_title'); ?></h4>
                  <p class="main_content_second_contents_text_top_text"><?php the_sub_field('product_function_item_text_desc'); ?></p>
                </div>
              <?php endwhile; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part( 'template_parts' ); ?>

  <?php if(have_rows('product_function2')): $product_function_number = 1; ?>
  <?php while(have_rows('product_function2')): the_row(); $product_function_number += 1; ?>
  <section class="main_content_second">
    <div class="container">
      <?php if(get_sub_field('product_function_title')): ?>
      <div class="main_content_second_title">
        <h3 class="main_content_second_title_text"><?php the_sub_field('product_function_title'); ?></h3>
      </div>
      <?php endif; ?>
      <?php if(have_rows('product_function_item')): $number = 1; ?>
      <?php while(have_rows('product_function_item')): the_row(); $number += 1;?>
        <div class="main_content_second_contents_contents">
          <?php if(get_sub_field('product_function_item_title')): ?>
          <p class="main_content_second_contents_contents_title"><?php the_sub_field('product_function_item_title'); ?></p>
          <?php endif; ?>
          <div class="main_content_second_contents_contents_div<?php $image_size = get_sub_field('product_function_item_slider_size'); if($image_size == "none"): elseif($image_size): ?> <?php echo $image_size;  ?><?php endif; ?>">
            <?php
              $images = get_sub_field('product_function_item_slider');
              if($images):
                $thumbnail_count = -1;
            ?>
            <div class="main_content_second_contents_left_slider">
              <ul class="slider<?php echo $product_function_number; ?>-<?php echo $number; ?> slider2 slider_inner">
                <?php foreach( $images as $image ): ?>
                <li class="slick-img"><img src="<?php echo $image['sizes']['product_function_slider']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
                <?php endforeach; ?>
              </ul>
              <ul class="thumbnail<?php echo $product_function_number; ?>-<?php echo $number; ?> thumbnail2 thumbnail_inner">
                <?php foreach( $images as $image ): $thumbnail_count ++;?>
                <li class="thumbnail-img" data-slick-index="<?php echo $thumbnail_count; ?>"><img src="<?php echo $image['sizes']['product_slider_thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php endif; ?>
            <?php
              $images = get_sub_field('product_function_item_slider');
            ?>
            <div class="main_content_second_contents_right<?php if(!$images):?> full<?php endif; ?>">
              <?php if(have_rows('product_function_item_table')): ?>
              <table class="main_content_second_contents_table">
              <?php while(have_rows('product_function_item_table')): the_row(); ?>
                <tr class="main_content_second_contents_table_tr">
                  <th class="main_content_second_contents_table_tr_th"><?php the_sub_field('product_function_item_table_title'); ?></th>
                  <td class="main_content_second_contents_table_tr_td"><?php the_sub_field('product_function_item_table_desc'); ?></td>
                </tr>
              <?php endwhile; ?>
              </table>
              <?php endif; ?>
              <?php if(have_rows('product_function_item_text')): ?>
              <div class="main_content_second_contents_text">
              <?php while(have_rows('product_function_item_text')): the_row(); ?>
                <div class="main_content_second_contents_text_top">
                  <h4 class="main_content_second_contents_text_top_title"><?php the_sub_field('product_function_item_text_title'); ?></h4>
                  <p class="main_content_second_contents_text_top_text"><?php the_sub_field('product_function_item_text_desc'); ?></p>
                </div>
              <?php endwhile; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>

  <section class="main_content_third">
    <div class="container">
      <div class="main_content_third_title">
        <h3 class="main_content_second_title_text">関連情報</h3>
      </div>
      <?php if(have_rows('catalog_link') || have_rows('documents_link')): ?>
      <div class="main_content_third_box">
        <div class="main_content_third_contents">
          <p class="main_content_third_contents_text"><span class="highlight_catalog">カタログ</span>＆<span class="highlight_document">添付文書</span></p>
        </div>
        <div class="main_content_third_contents_button">
          <?php if(have_rows('catalog_link')): ?>
          <ul class="main_content_third_contents_button1">
            <?php while(have_rows('catalog_link')): the_row(); ?>
            <li class="main_content_third_contents_button_item">
              <a href="<?php the_sub_field('file'); ?>" target="_blank" class="main_content_third_contents_button_a1">&gt; <?php the_sub_field('text'); ?></a>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>
          <?php /* if(have_rows('documents_link')): ?>
          <ul class="main_content_third_contents_button2">
            <?php while(have_rows('documents_link')): the_row(); ?>
            <li class="main_content_third_contents_button_item">
              <a href="<?php the_sub_field('file'); ?>" target="_blank" class="main_content_third_contents_button_a2">&gt; <?php the_sub_field('text'); ?></a>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; */ ?>
          <?php if(have_rows('documents_link_2')): ?>
          <ul class="main_content_third_contents_button2">
            <?php while(have_rows('documents_link_2')): the_row(); ?>
            <li class="main_content_third_contents_button_item">
              <a href="<?php the_sub_field('url'); ?>" target="_blank" class="main_content_third_contents_button_a2">&gt; <?php the_sub_field('text'); ?></a>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif;?>
        </div>
      </div>
      <?php endif; ?>
        <?php
        if(get_the_terms($post->ID, 'ccs_pro_cat')){
          $parent = "";
          $parent2 = "";
          $parent3 = "";
          $cat = get_the_terms($post->ID, 'ccs_pro_cat');
          foreach ($cat as $key) {
              if ($key->parent == 0) {
                $parent = $key->term_id;
              }
          }
          foreach ($cat as $key) {
            if($parent){
              if ($key->parent == $parent) {
                $parent2 = $key->term_id;
              }
            }
          }
          foreach ($cat as $key) {
            if($parent){
              if($parent2){
                if($key->parent == $parent2) {
                  $parent3 = $key->term_id;
                }
              }
            }
          }

        $args = array(
            'post_type' => 'product_item_cate',
            'posts_per_page' => 4,
            'tax_query'      => array(
              array(
                'taxonomy' => 'ccs_pro_cat',
                'field'    => 'term_id',
                'terms'    => $parent3,
              )
            )
          );
        }
        if(get_the_terms($post->ID, 'intervention_cat')){
          $parent = "";
          $parent2 = "";
          $parent3 = "";
          $cat = get_the_terms($post->ID, 'intervention_cat');
          foreach ($cat as $key) {
              if ($key->parent == 0) {
                $parent = $key->term_id;
              }
          }
          foreach ($cat as $key) {
            if($parent){
              if ($key->parent == $parent) {
                $parent2 = $key->term_id;
              }
            }
          }
          foreach ($cat as $key) {
            if($parent){
              if($parent2){
                if($key->parent == $parent2) {
                  $parent3 = $key->term_id;
                }
              }
            }
          }
        $args = array(
            'post_type' => 'product_item_cate',
            'posts_per_page' => 4,
            'tax_query'      => array(
              array(
                'taxonomy' => 'intervention_cat',
                'field'    => 'term_id',
                'terms'    => $parent3
              )
            )
          );
        }
        $the_query = get_posts( $args );
        if ($the_query):
        ?>
        <div class="main_content_third_box">
          <div class="main_content_third_contents">
            <p class="main_content_third_contents_text">関連商品</p>
          </div>
          <ul class="main_content_third_contents_lists">
          <?php foreach ( $the_query as $post ) : setup_postdata( $post );?>
            <li class="main_content_third_contents_lists_item">
              <a href="<?php the_permalink(); ?>" class="main_content_third_contents_lists_item_link">
                <div class="main_content_third_contents_lists_item_img">
                  <?php the_post_thumbnail('product_archive'); ?>
                </div>
                <p class="main_content_third_contents_lists_item_text"><?php the_title(); ?></p>
              </a>
            </li>
          <?php
            endforeach;
            wp_reset_postdata();
          ?>
          </ul>
        </div>

        <?php
          endif;
        ?>
        <div class="main_content_third_contents_button3_div">
          <a href="<?php echo home_url(); ?>/product_item_cate/" class="main_content_third_contents_button3_a">&gt; 取扱い製品トップへ戻る</a>
        </div>
      </div>
  </section>
  <?php get_template_part( 'sub_main_bottom_parts' ); ?>

</div>
<?php get_footer(); ?>
