<?php
// ギャラリー・サムネイルのID
$gallery_id = 0;
?>
<?php if (have_rows('page_component2')): ?>
  <div class="container">
    <div class="sub_main_content<?php if (is_singular('product_item_cate')): ?> product_item_cate<?php endif; ?>">
      <?php while (have_rows('page_component2')): the_row(); ?>

        <?php if (get_row_layout() == 'big_heading'): ?>

          <div class="content margin">
            
            <?php
              $text_alignment = get_sub_field("title_alignment");
              if ($text_alignment === '中央揃え') {
                $text_alignment_class = 'center';
              } elseif ($text_alignment === '右揃え') {
                $text_alignment_class = 'right';
              }
            ?>
            
            <h2 style="text-align:<?php echo $text_alignment_class; ?>;"><?php the_sub_field('text'); ?></h2>
          </div>

        <?php elseif (get_row_layout() == 'middle_heading'): ?>

          <div class="content margin">
            <h3><?php the_sub_field('text'); ?></h3>
          </div>

        <?php elseif (get_row_layout() == 'small_heading'): ?>

          <div class="content margin">
            <h4><?php the_sub_field('text'); ?></h4>
          </div>

        <?php elseif (get_row_layout() == 'text'): ?>

          <div class="content margin">
            <p><?php the_sub_field('text'); ?></p>
          </div>

        <?php elseif (get_row_layout() == 'list'): ?>

          <div class="content margin">
            <ul>
              <?php if (have_rows('list')): while (have_rows('list')): the_row(); ?>
                  <li><?php the_sub_field('text'); ?></li>
              <?php endwhile;
              endif; // end list
              ?>
            </ul>
          </div>

        <?php elseif (get_row_layout() == 'list_number'): ?>

          <div class="content margin">
            <ol>
              <?php if (have_rows('list')): while (have_rows('list')): the_row(); ?>
                  <li><?php the_sub_field('text'); ?></li>
              <?php endwhile;
              endif; // end list
              ?>
            </ol>
          </div>

        <?php elseif (get_row_layout() == 'table'): ?>
          <?php
            $border_specs = get_sub_field("border_specs");
            if($border_specs == "ボーダーあり") {
              $border_specs = "";
            }else {
              $border_specs = "noBorder";
            }
          ?>
          
          <div class="content margin">
            <table class="<?php echo $border_specs; ?>">
              <tbody>
                <?php if (have_rows('row')): while (have_rows('row')): the_row(); ?>
                    <tr>
                      <th class="<?php echo $border_specs; ?>"><?php the_sub_field('title'); ?></th>
                      <td class="<?php echo $border_specs; ?>"><?php the_sub_field('text'); ?></td>
                    </tr>
                <?php endwhile;
                endif; // end row
                ?>
              </tbody>
            </table>
          </div>
          
        <?php elseif (get_row_layout() == 'timeline'): ?>
          <div class="content margin">
            <div class="sub_timeline">
              <?php if (have_rows('lists')): while (have_rows('lists')): the_row(); ?>
                <div class="sub_timeline-item">
                  <div class="sub_timeline-circle"><?php echo the_sub_field("title"); ?></div>
                  <div class="sub_timeline-content">
                     <?php echo the_sub_field("text_area"); ?>
                  </div>
                </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
          
        <?php elseif (get_row_layout() == 'editor'): ?>

          <?php
          $editor = get_sub_field('editor');
          $device = $editor['device'];
          $content = $editor['contents'];
          if (in_array('pc', $device) && in_array('sp', $device)) {
            $class = '';
          } elseif (in_array('pc', $device)) {
            $class = ' only_pc';
          } elseif (in_array('sp', $device)) {
            $class = ' only_sp';
          }
          ?>

          <div class="content margin<?php echo $class; ?>">
            <?php echo $content; ?>
          </div>
        <?php elseif (get_row_layout() == 'img'): ?>

          <?php
          $img = get_sub_field('img_main')['url'];
          ?>

          <p class="content_image"><img src="<?php echo $img; ?>" alt=""></p>

        <?php elseif (get_row_layout() == 'col2_side'): ?>

          <?php
          $img_position = get_sub_field('img_right');
          $col2_main_img = get_sub_field('col2_main')['img']['sizes']['col2_side'];
          $col2_main_heading = get_sub_field('col2_main')['heading'];
          $col2_main_text = get_sub_field('col2_main')['text'];
          
          $img_left_pc = "";
          if(isset(get_sub_field('col2_main')["img_left_pc"])) {
            $img_left_pc = get_sub_field('col2_main')["img_left_pc"];
          }
          
          $img_left_sp = "";
          if(isset(get_sub_field('col2_main')["img_left_sp"])) {
            $img_left_sp = get_sub_field('col2_main')["img_left_sp"];
          }
          
          $have_background = get_sub_field("have_background");
          if($have_background) {
            $have_background = "haveBackground";
          }else {
            $have_background = null;
          }
          ?>

          <div class="sub_textimg <?php echo $have_background; ?> <?php if ($img_position === true): ?> right<?php endif; ?>">
            <h3 class="sub_textimg_secondary_title <?php echo $have_background; ?>"><?php echo the_sub_field("title"); ?></h3>
            <div class="sub_textimg_flexbox">
              <div class="sub_textimg_img"
                <?php if(!is_null($have_background)) : ?>
                  style="margin: 0;"
                <?php endif; ?>
              >
                <img src="<?php echo $col2_main_img; ?>" alt="" />
              </div>
              <div class="sub_textimg_text <?php echo $have_background; ?>">
                <?php if ($col2_main_heading): ?>
                  <h3 class="sub_textimg_text_title"><?php echo $col2_main_heading; ?></h3>
                <?php endif; ?>
                <p class="sub_textimg_text_desc"><?php echo $col2_main_text; ?></p>
                
                <!-- img -->
                <?php if($img_left_pc != "" && $img_left_sp != ""): ?>
                  <picture>
                    <source media="(max-width:786px)" srcset="<?php echo $img_left_sp; ?>">
                    <img src="<?php echo $img_left_pc; ?>" alt="" class="sub_textimg_text_img" />
                  </picture>
                <?php elseif($img_left_pc != ""): ?>
                  <img src="<?php echo $img_left_pc; ?>" alt="" class="sub_textimg_text_img" />
                <?php else: ?>
                  <img src="<?php echo $img_left_sp; ?>" alt="" class="sub_textimg_text_img" />
                <?php endif; ?>
                
              </div>
            </div>
          </div>

        <?php elseif (get_row_layout() == 'col1'): ?>
          <?php
          $col1_main_heading = get_sub_field('image_text')['heading'];
          $col1_main_text = get_sub_field('image_text')['text'];
          
          $row_reverse = null;
          if(isset(get_sub_field('image_text')["row_reverse"])) {
            $row_reverse = get_sub_field('image_text')["row_reverse"];
            if($row_reverse) {
              $row_reverse = "rowReverse";
            }
          }
          
          $col1_main_img_sp = "";
          if(isset(get_sub_field('image_text')['img_sp']['sizes']['col1'])) {
            $col1_main_img_sp = get_sub_field('image_text')['img_sp']['sizes']['col1'];
          }
          
          $col1_main_img = "";
          if(isset(get_sub_field('image_text')['img']['sizes']['col1'])) {
            $col1_main_img = get_sub_field('image_text')['img']['sizes']['col1'];
          }
          
          $col1_main_aligment = null;
          if(isset(get_sub_field('image_text')['img_alignment'])) {
            $col1_main_aligment = get_sub_field('image_text')['img_alignment'];
            if ($col1_main_aligment === '中央揃え') {
              $col1_main_aligment = '0 auto';
            } elseif ($col1_main_aligment === '右揃え') {
              $col1_main_aligment = '0 0 0 auto';
            }
          }
          ?>
          <div class="sub_col1 <?php echo $row_reverse; ?>">
            <div class="sub_textimg_img <?php echo $row_reverse; ?>">
              <?php if(empty($col1_main_img_sp)) : ?>
                <img src="<?php echo $col1_main_img; ?>" alt="" style="margin: <?php echo $col1_main_aligment; ?>;"/>
              <?php else: ?>
                <picture>
                  <source media="(max-width:767px)" srcset="<?php echo $col1_main_img_sp;?>">
                  <img src="<?php echo $col1_main_img; ?>" alt="" style="margin: <?php echo $col1_main_aligment; ?>;">
                </picture>
              <?php endif; ?>
            </div>
            <div class="sub_textimg_text <?php echo $row_reverse; ?>">
              <?php if ($col1_main_heading): ?>
                <h3 class="sub_textimg_text_title"><?php echo $col1_main_heading; ?></h3>
              <?php endif; ?>
              <p class="sub_textimg_text_desc <?php echo $row_reverse; ?>"><?php echo $col1_main_text; ?></p>
            </div>
          </div>

        <?php elseif (get_row_layout() == 'col2'): ?>
          <?php
          $col2_left_img = get_sub_field('image_text_left')['img']['sizes']['col2'];
          $col2_left_heading = get_sub_field('image_text_left')['heading'];
          $col2_left_text = get_sub_field('image_text_left')['text'];
          $col2_right_img = get_sub_field('image_text_right')['img']['sizes']['col2'];
          $col2_right_heading = get_sub_field('image_text_right')['heading'];
          $col2_right_text = get_sub_field('image_text_right')['text'];
          ?>
          
          <div class="sub_col2">
            <div class="sub_col_item">
              <div class="sub_textimg_img">
                <img src="<?php echo $col2_left_img; ?>" alt="" />
              </div>
              <div class="sub_textimg_text">
                <?php if ($col2_left_heading): ?>
                  <h3 class="sub_textimg_text_title"><?php echo $col2_left_heading; ?></h3>
                <?php endif; ?>
                <p class="sub_textimg_text_desc"><?php echo $col2_left_text; ?></p>
              </div>
            </div>
            <div class="sub_col_item">
              <div class="sub_textimg_img">
                <img src="<?php echo $col2_right_img; ?>" alt="" />
              </div>
              <div class="sub_textimg_text">
                <?php if ($col2_right_heading): ?>
                  <h3 class="sub_textimg_text_title"><?php echo $col2_right_heading; ?></h3>
                <?php endif; ?>
                <p class="sub_textimg_text_desc"><?php echo $col2_right_text; ?></p>
              </div>
            </div>
          </div>

        <?php elseif (get_row_layout() == 'col3'): ?>
          <?php
          $col2_left_img = get_sub_field('image_text_left')['img']['sizes']['col2'];
          $col2_left_heading = get_sub_field('image_text_left')['heading'];
          $col2_left_text = get_sub_field('image_text_left')['text'];
          $col2_center_img = get_sub_field('image_text_center')['img']['sizes']['col2'];
          $col2_center_heading = get_sub_field('image_text_center')['heading'];
          $col2_center_text = get_sub_field('image_text_center')['text'];
          $col2_right_img = get_sub_field('image_text_right')['img']['sizes']['col2'];
          $col2_right_heading = get_sub_field('image_text_right')['heading'];
          $col2_right_text = get_sub_field('image_text_right')['text'];
          ?>
          <div class="sub_col3">
            <div class="sub_col_item">
              <div class="sub_textimg_img">
                <img src="<?php echo $col2_left_img; ?>" alt="" />
              </div>
              <div class="sub_textimg_text">
                <?php if ($col2_left_heading): ?>
                  <h3 class="sub_textimg_text_title"><?php echo $col2_left_heading; ?></h3>
                <?php endif; ?>
                <p class="sub_textimg_text_desc"><?php echo $col2_left_text; ?></p>
              </div>
            </div>
            <div class="sub_col_item">
              <div class="sub_textimg_img">
                <img src="<?php echo $col2_center_img; ?>" alt="" />
              </div>
              <div class="sub_textimg_text">
                <?php if ($col2_center_heading): ?>
                  <h3 class="sub_textimg_text_title"><?php echo $col2_center_heading; ?></h3>
                <?php endif; ?>
                <p class="sub_textimg_text_desc"><?php echo $col2_center_text; ?></p>
              </div>
            </div>
            <div class="sub_col_item">
              <div class="sub_textimg_img">
                <img src="<?php echo $col2_right_img; ?>" alt="" />
              </div>
              <div class="sub_textimg_text">
                <?php if ($col2_right_heading): ?>
                  <h3 class="sub_textimg_text_title"><?php echo $col2_right_heading; ?></h3>
                <?php endif; ?>
                <p class="sub_textimg_text_desc"><?php echo $col2_right_text; ?></p>
              </div>
            </div>
          </div>
          
        <?php elseif (get_row_layout() == 'col4'): ?>          
          <div class="content margin">
            <div class="sub_content_lists">
              <?php if (have_rows('row')): while (have_rows('row')): the_row(); ?>
                <?php
                  $window = get_sub_field("window");
                  if($window) {
                    $window = "window";
                  }else {
                    $window = "";
                  }
                ?>
                <div class="sub_content_lists_items">
                  <img src="<?php echo the_sub_field('image'); ?>" alt="" class="sub_content_lists_imgs">
                  <div class="sub_content_lists_btnParent">
                    <a 
                      href="<?php echo the_sub_field('url'); ?>" 
                      class="sub_content_lists_btn <?php echo $window; ?>" <?php if (get_sub_field('window')): ?> 
                      target="_blank"
                      <?php endif; ?>>
                      <?php echo the_sub_field('text'); ?>
                    </a>
                  </div>
                </div>
              <?php endwhile;
              endif; // end row
              ?>
            </div>
          </div>

        <?php elseif (get_row_layout() == 'link'): ?>

          <?php
          $type = get_sub_field('type');
          if ($type === 'プライマリーボタン') {
            $type_class = 'red';
          } elseif ($type === 'セカンダリーボタン') {
            $type_class = 'blue';
          }
          
          $text_alignment = get_sub_field("title_alignment");
          if ($text_alignment === '中央揃え') {
            $text_alignment_class = 'center';
          } elseif ($text_alignment === '右揃え') {
            $text_alignment_class = 'right';
          }
          
          $fontSize = get_sub_field("font_size");
          $fontStyleSize = "";
          if($fontSize) {
            $fontSize = "valueFont";
            $fontStyleSize = "font-size: ".get_sub_field("font_size").";";
          }else {
            $fontSize = "";
          }
          ?>
          
          <div class="cmn_btn_parent">
            <?php if (get_sub_field('header_title')): ?>
              <p class=" <?php echo $text_alignment_class; ?> "><?php echo the_sub_field('header_title'); ?></p>
            <?php endif; ?>
            
            <a 
              href="<?php the_sub_field('url'); ?>" 
              class="cmn_btn <?php echo $fontSize; ?> 
                <?php echo $type_class; ?>" 
                  <?php if (get_sub_field('window')): ?> 
                    target="_blank"
                  <?php endif; ?>>
              
              <span style="<?php echo $fontStyleSize; ?>"><?php the_sub_field('text'); ?></span>
            </a>
          </div>
        <?php elseif (get_row_layout() == 'gallery'): ?>

          <?php
          $contents = get_sub_field('contents');
          if ($contents):
          ?>

            <div class="sub_main_content_gallery">
              <ul class="sub_main_content_gallery_lists">
                <?php
                foreach ($contents as $content):
                  $image_thumb_url = $content['sizes']['gallery_thumb'];
                  $image_large_url = $content['sizes']['large'];
                  $image_description = $content['description'];
                  $image_title = $content['title'];
                ?>
                  <li class="item">
                    <a href="<?php echo $image_large_url; ?>" data-lightbox="img<?php echo $gallery_id; ?>" data-title="<?php echo $image_title; ?>" class="sub_main_content_gallery_lists_img"><img src="<?php echo $image_thumb_url; ?>" alt="<?php echo $image_title; ?>"></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php $gallery_id++; ?>
          <?php endif; ?>


        <?php elseif (get_row_layout() == 'slide'): ?>
          <?php
          $contents = get_sub_field('contents');
          if ($contents):
          ?>
            <div class="sub_album">
              <div class="sub_album_container">
                <ul class="sub_album_slider">
                  <?php
                  foreach ($contents as $content):
                    $image_url = $content['sizes']['col1'];
                    $image_alt = $content['alt'];
                  ?>
                    <li class="sub_album_slider_item">
                      <div class="sub_album_slider_item_img">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_title; ?>">
                      </div>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>

          <?php endif; ?>

        <?php elseif (get_row_layout() == 'iframe'): ?>
          <div class="sub_movie_youtube">
            <div class="iframe_wrap">
              <?php echo get_sub_field('tag'); ?>
            </div>
          </div>

        <?php elseif (get_row_layout() == 'video'): ?>
          <div class="sub_movie_youtube">
            <div class="movie_wrap">
              <video controls controlsList="nodownload" src="<?php the_sub_field('movie'); ?>"></video>
            </div>
          </div>

        <?php endif; ?>
      <?php endwhile; ?>
    </div>
  <?php endif; // end page_component
  ?>
  </div>