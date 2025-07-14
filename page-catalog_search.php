<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">カタログ・動画・ケースレポート
    </h1>
  </div>
</div>

<div class="sub_main product">
  <div class="container">
    <div class="sub_breadcrumb">
      <?php custom_breadcrumb(); ?>
    </div>
    <?php
    if (isset($_GET['catalog_ccs_pro']) || isset($_GET['catalog_ivr']) || isset($_GET['keywords'])):
      $keywords = $_GET['keywords'];
      if (isset($_GET['catalog_ccs_pro'])) {
        $catalog_ccs_pro_lists = '';
        foreach ($catalog_ccs_pro as $value) {
          if ($value !== end($catalog_ccs_pro)) {
            $cat_terms = get_terms('catalog_ccs_pro');
            foreach ($cat_terms as $cat_term) {
              if ($cat_term->slug == $value) {
                $value = $cat_term->name;
              }
            }
            //最後以外のループ
            $catalog_ccs_pro_lists .= $value . ',';
          } else {
            $cat_terms = get_terms('catalog_ccs_pro');
            foreach ($cat_terms as $cat_term) {
              if ($cat_term->slug == $value) {
                $value = $cat_term->name;
              }
            }
            //最後のループ
            $catalog_ccs_pro_lists .= $value;
          }
        }
      }
      if (isset($_GET['catalog_ivr'])) {
        $catalog_ivr_lists = '';
        foreach ($catalog_ivr as $value) {
          if ($value !== end($catalog_ivr)) {
            $cat_terms = get_terms('catalog_ivr');
            foreach ($cat_terms as $cat_term) {
              if ($cat_term->slug == $value) {
                $value = $cat_term->name;
              }
            }
            //最後以外のループ
            $catalog_ivr_lists .= $value . ',';
          } else {
            $cat_terms = get_terms('catalog_ivr');
            foreach ($cat_terms as $cat_term) {
              if ($cat_term->slug == $value) {
                $value = $cat_term->name;
              }
            }
            //最後のループ
            $catalog_ivr_lists .= $value;
          }
        }
      }
      $paged = get_query_var('paged') ?: 1;
      if (isset($_GET['catalog_ccs_pro']) && isset($_GET['catalog_ivr'])) {
        $args = array(
          'post_type' => 'catalog',
          'posts_per_page' => 9,
          'paged' => $paged,
          's' => $keywords,
          'search_meta' => true,
          'tax_query' => array(
            'relation' => 'OR',
            array(
              'taxonomy' => 'catalog_ccs_pro',
              'field' => 'slug',
              'terms' => $catalog_ccs_pro,
            ),
            array(
              'taxonomy' => 'catalog_ivr',
              'field' => 'slug',
              'terms' => $catalog_ivr,
            ),
          ),
        );
      } elseif (isset($_GET['catalog_ccs_pro'])) {
        $args = array(
          'post_type' => 'catalog',
          'posts_per_page' => 9,
          'paged' => $paged,
          's' => $keywords,
          'search_meta' => true,
          'tax_query' => array(
            array(
              'taxonomy' => 'catalog_ccs_pro',
              'field' => 'slug',
              'terms' => $catalog_ccs_pro,
            ),
          ),
        );
      } elseif (isset($_GET['catalog_ivr'])) {
        $args = array(
          'post_type' => 'catalog',
          'posts_per_page' => 9,
          'paged' => $paged,
          's' => $keywords,
          'search_meta' => true,
          'tax_query' => array(
            array(
              'taxonomy' => 'catalog_ivr',
              'field' => 'slug',
              'terms' => $catalog_ivr,
            ),
          ),
        );
      } elseif (isset($_GET['keywords'])) {
        $args = array(
          'post_type' => 'catalog',
          'posts_per_page' => 9,
          'paged' => $paged,
          's' => $keywords,
          'search_meta' => true
        );
      } else {
        $args = array(
          'post_type' => 'catalog',
          'posts_per_page' => 9,
          'paged' => $paged,
        );
      }
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()):
        $all_post = $the_query->found_posts;
        $this_post = $the_query->post_count - 1;
        $first_post = 10 * $paged - 9;
    ?>
        <div class="container">
          <h3 class="catalog_title">検索結果</h3>
          <div class="search_word">
            <?php if (isset($_GET['catalog_ccs_pro']) && isset($_GET['catalog_ivr'])): ?>
              <div>カテゴリー：<?php echo $catalog_ccs_pro_lists; ?>,<?php echo $catalog_ivr_lists; ?></div>
            <?php elseif (isset($_GET['catalog_ccs_pro'])): ?>
              <div>カテゴリー：<?php echo $catalog_ccs_pro_lists; ?></div>
            <?php elseif (isset($_GET['catalog_ivr'])): ?>
              <div>カテゴリー：<?php echo $catalog_ivr_lists; ?></div>
            <?php else: ?>
              <div>カテゴリー：</div>
            <?php endif; ?>
            <div>キーワード：<?php echo $keywords; ?></div>
          </div>
           
          <!-- If user click categories the function will work on this -->
          <?php if (isset($_GET['catalog_movie'])): ?>
          
            <!-- CATALOG -->
            <?php if (in_array("catalog", $_GET['catalog_movie'])): ?>
              <div class="catalog_search">
                <div class="catalog_search_title">カタログ</div>
                <div class="catalog_search_item_wrapper">
                  <?php
                  while ($the_query->have_posts()): $the_query->the_post();
                    if (get_field("catalog_or_movie") == "catalog"):
                  ?>
                      <a href="<?php the_field('catalog'); ?>" class="catalog_search_item">
                        <div class="catalog_search_item_img">
                          <?php the_post_thumbnail('product_archive'); ?>
                        </div>
                        <?php
                        $cat_catalog_ccs_pro = get_the_terms($post->ID, 'catalog_ccs_pro');
                        if ($cat_catalog_ccs_pro):
                          $parent_catalog_ccs_pro = "";
                          $parent2_catalog_ccs_pro = "";
                          $parent3_catalog_ccs_pro = "";
                          foreach ($cat_catalog_ccs_pro as $key) {
                            if ($key->parent == 0) {
                              $parent_catalog_ccs_pro = $key->term_id;
                            }
                          }
                          foreach ($cat_catalog_ccs_pro as $key) {
                            if ($parent_catalog_ccs_pro) {
                              if ($key->parent == $parent_catalog_ccs_pro) {
                                $parent2_catalog_ccs_pro = $key->term_id;
                              }
                            }
                          }
                          foreach ($cat_catalog_ccs_pro as $key) {
                            if ($parent_catalog_ccs_pro) {
                              if ($parent2_catalog_ccs_pro) {
                                if ($key->parent == $parent2_catalog_ccs_pro) {
                        ?>
                                  <span class="catalog_search_item_label"><?php echo $key->name; ?></span>
                        <?php
                                }
                              }
                            }
                          }
                        endif;
                        ?>
                        <?php
                        $cat_catalog_ivr = get_the_terms($post->ID, 'catalog_ivr');
                        if ($cat_catalog_ivr):
                          $parent_catalog_ivr = "";
                          $parent2_catalog_ivr = "";
                          $parent3_catalog_ivr = "";
                          foreach ($cat_catalog_ivr as $key) {
                            if ($key->parent == 0) {
                              $parent_catalog_ivr = $key->term_id;
                            }
                          }
                          foreach ($cat_catalog_ivr as $key) {
                            if ($parent_catalog_ivr) {
                              if ($key->parent == $parent_catalog_ivr) {
                                $parent2_catalog_ivr = $key->term_id;
                              }
                            }
                          }
                          foreach ($cat_catalog_ivr as $key) {
                            if ($parent_catalog_ivr) {
                              if ($parent2_catalog_ivr) {
                                if ($key->parent == $parent2_catalog_ivr) {
                        ?>
                                  <span class="catalog_search_item_label"><?php echo $key->name; ?></span>
                        <?php
                                }
                              }
                            }
                          }
                        endif;
                        ?>
                        <p class="catalog_search_item_title"><?php the_title(); ?></p>
                      </a>
                  <?php endif;
                  endwhile; ?>
                </div>
              </div>
            <?php endif; ?>
            
    
            <!-- CASE_REPORT -->
            <?php if (in_array("case_report", $_GET['catalog_movie'])): ?>
              <div class="catalog_search">
                <div class="catalog_search_title">ケースレポート</div>
                <div class="catalog_search_item_wrapper">
                  <?php
                  while ($the_query->have_posts()): $the_query->the_post();
                    if (get_field("catalog_or_movie") == "case_report"):
                  ?>
                      <a href="<?php the_field('case_report'); ?>" class="catalog_search_item case_search_item">
                        <?php
                        $cat_catalog_ccs_pro = get_the_terms($post->ID, 'catalog_ccs_pro');
                        if ($cat_catalog_ccs_pro):
                          $parent_catalog_ccs_pro = "";
                          $parent2_catalog_ccs_pro = "";
                          $parent3_catalog_ccs_pro = "";
                          foreach ($cat_catalog_ccs_pro as $key) {
                            if ($key->parent == 0) {
                              $parent_catalog_ccs_pro = $key->term_id;
                            }
                          }
                          foreach ($cat_catalog_ccs_pro as $key) {
                            if ($parent_catalog_ccs_pro) {
                              if ($key->parent == $parent_catalog_ccs_pro) {
                                $parent2_catalog_ccs_pro = $key->term_id;
                              }
                            }
                          }
                          foreach ($cat_catalog_ccs_pro as $key) {
                            if ($parent_catalog_ccs_pro) {
                              if ($parent2_catalog_ccs_pro) {
                                if ($key->parent == $parent2_catalog_ccs_pro) {
                        ?>
                                  <span class="catalog_search_item_label"><?php echo $key->name; ?></span>
                        <?php
                                }
                              }
                            }
                          }
                        endif;
                        ?>
                        <?php
                        $cat_catalog_ivr = get_the_terms($post->ID, 'catalog_ivr');
                        if ($cat_catalog_ivr):
                          $parent_catalog_ivr = "";
                          $parent2_catalog_ivr = "";
                          $parent3_catalog_ivr = "";
                          foreach ($cat_catalog_ivr as $key) {
                            if ($key->parent == 0) {
                              $parent_catalog_ivr = $key->term_id;
                            }
                          }
                          foreach ($cat_catalog_ivr as $key) {
                            if ($parent_catalog_ivr) {
                              if ($key->parent == $parent_catalog_ivr) {
                                $parent2_catalog_ivr = $key->term_id;
                              }
                            }
                          }
                          foreach ($cat_catalog_ivr as $key) {
                            if ($parent_catalog_ivr) {
                              if ($parent2_catalog_ivr) {
                                if ($key->parent == $parent2_catalog_ivr) {
                        ?>
                                  <span class="catalog_search_item_label"><?php echo $key->name; ?></span>
                        <?php
                                }
                              }
                            }
                          }
                        endif;
                        ?>
                        <p class="catalog_search_item_title case_saerch_item_title"><?php the_title(); ?></p>
                      </a>
                  <?php endif;
                  endwhile; ?>
                </div>
              </div>
            <?php endif; ?>
            
            
            <!-- VIDEO -->
            <?php if (in_array("movie", $_GET['catalog_movie'])): $post_number = 0; ?>
              <div class="video_search">
                <div class="video_search_title">動画</div>
                <div class="video_search_item_wrapper">
                  <?php
                  while ($the_query->have_posts()): $the_query->the_post();
                    $post_number += 1;
                    if (get_field("catalog_or_movie") == "movie"):
                  ?>
                      <?php if (have_rows('movie')): $number = 0; ?>
                        <?php while (have_rows('movie')): the_row();
                          $number += 1; ?>
                          <?php if (get_sub_field('file_or_youtube') == 'file'): ?>
                            <div class="video_search_item" id="modal_movie<?php echo $post_number; ?><?php echo $number; ?>">
                              <div class="video_search_item_img">
                                <?php the_post_thumbnail('product_archive'); ?>
                              </div>
                              <?php
                              $cat_catalog_ccs_pro = get_the_terms($post->ID, 'catalog_ccs_pro');
                              if ($cat_catalog_ccs_pro):
                                $parent_catalog_ccs_pro = "";
                                $parent2_catalog_ccs_pro = "";
                                $parent3_catalog_ccs_pro = "";
                                foreach ($cat_catalog_ccs_pro as $key) {
                                  if ($key->parent == 0) {
                                    $parent_catalog_ccs_pro = $key->term_id;
                                  }
                                }
                                foreach ($cat_catalog_ccs_pro as $key) {
                                  if ($parent_catalog_ccs_pro) {
                                    if ($key->parent == $parent_catalog_ccs_pro) {
                                      $parent2_catalog_ccs_pro = $key->term_id;
                                    }
                                  }
                                }
                                foreach ($cat_catalog_ccs_pro as $key) {
                                  if ($parent_catalog_ccs_pro) {
                                    if ($parent2_catalog_ccs_pro) {
                                      if ($key->parent == $parent2_catalog_ccs_pro) {
                              ?>
                                        <span class="video_search_item_label"><?php echo $key->name; ?></span>
                              <?php
                                      }
                                    }
                                  }
                                }
                              endif;
                              ?>
                              <?php
                              $cat_catalog_ivr = get_the_terms($post->ID, 'catalog_ivr');
                              if ($cat_catalog_ivr):
                                $parent_catalog_ivr = "";
                                $parent2_catalog_ivr = "";
                                $parent3_catalog_ivr = "";
                                foreach ($cat_catalog_ivr as $key) {
                                  if ($key->parent == 0) {
                                    $parent_catalog_ivr = $key->term_id;
                                  }
                                }
                                foreach ($cat_catalog_ivr as $key) {
                                  if ($parent_catalog_ivr) {
                                    if ($key->parent == $parent_catalog_ivr) {
                                      $parent2_catalog_ivr = $key->term_id;
                                    }
                                  }
                                }
                                foreach ($cat_catalog_ivr as $key) {
                                  if ($parent_catalog_ivr) {
                                    if ($parent2_catalog_ivr) {
                                      if ($key->parent == $parent2_catalog_ivr) {
                              ?>
                                        <span class="video_search_item_label"><?php echo $key->name; ?></span>
                              <?php
                                      }
                                    }
                                  }
                                }
                              endif;
                              ?>
                              <p class="video_catalog_search_item_title"><?php the_title(); ?></p>
                              <div class="modal oem_modal modal_movie<?php echo $post_number; ?><?php echo $number; ?>">
                                <div class="modal_inner">
                                  <div class="modal_back"></div>
                                  <div class="modal_main">
                                    <div class="modal_cancel">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/modal_cancel.png" alt="">
                                    </div>
                                    <div class="modal_main_content">
                                      <video controls controlsList="nodownload" src="<?php the_sub_field('file'); ?>" class="modal_video"></video>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php elseif (get_sub_field('file_or_youtube') == 'youtube'): ?>
                            <div class="video_search_item" id="modal_movie<?php echo $post_number; ?><?php echo $number; ?>">
                              <div class="video_search_item_img">
                                <?php the_post_thumbnail('product_archive'); ?>
                              </div>
                              <?php
                              $cat_catalog_ccs_pro = get_the_terms($post->ID, 'catalog_ccs_pro');
                              if ($cat_catalog_ccs_pro):
                                $parent_catalog_ccs_pro = "";
                                $parent2_catalog_ccs_pro = "";
                                $parent3_catalog_ccs_pro = "";
                                foreach ($cat_catalog_ccs_pro as $key) {
                                  if ($key->parent == 0) {
                                    $parent_catalog_ccs_pro = $key->term_id;
                                  }
                                }
                                foreach ($cat_catalog_ccs_pro as $key) {
                                  if ($parent_catalog_ccs_pro) {
                                    if ($key->parent == $parent_catalog_ccs_pro) {
                                      $parent2_catalog_ccs_pro = $key->term_id;
                                    }
                                  }
                                }
                                foreach ($cat_catalog_ccs_pro as $key) {
                                  if ($parent_catalog_ccs_pro) {
                                    if ($parent2_catalog_ccs_pro) {
                                      if ($key->parent == $parent2_catalog_ccs_pro) {
                              ?>
                                        <span class="video_search_item_label"><?php echo $key->name; ?></span>
                              <?php
                                      }
                                    }
                                  }
                                }
                              endif;
                              ?>
                              <?php
                              $cat_catalog_ivr = get_the_terms($post->ID, 'catalog_ivr');
                              if ($cat_catalog_ivr):
                                $parent_catalog_ivr = "";
                                $parent2_catalog_ivr = "";
                                $parent3_catalog_ivr = "";
                                foreach ($cat_catalog_ivr as $key) {
                                  if ($key->parent == 0) {
                                    $parent_catalog_ivr = $key->term_id;
                                  }
                                }
                                foreach ($cat_catalog_ivr as $key) {
                                  if ($parent_catalog_ivr) {
                                    if ($key->parent == $parent_catalog_ivr) {
                                      $parent2_catalog_ivr = $key->term_id;
                                    }
                                  }
                                }
                                foreach ($cat_catalog_ivr as $key) {
                                  if ($parent_catalog_ivr) {
                                    if ($parent2_catalog_ivr) {
                                      if ($key->parent == $parent2_catalog_ivr) {
                              ?>
                                        <span class="video_search_item_label"><?php echo $key->name; ?></span>
                              <?php
                                      }
                                    }
                                  }
                                }
                              endif;
                              ?>
                              <p class="video_catalog_search_item_title"><?php the_title(); ?></p>
                              <div class="modal oem_modal modal_movie<?php echo $post_number; ?><?php echo $number; ?>">
                                <div class="modal_inner">
                                  <div class="modal_back"></div>
                                  <div class="modal_main">
                                    <div class="modal_cancel">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/modal_cancel.png" alt="">
                                    </div>
                                    <div class="modal_main_content">
                                      <?php echo get_sub_field('youtube'); ?>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                      <?php endif;
                        endwhile;
                      endif; ?>
                  <?php endif;
                  endwhile; ?>
                </div>
              </div>
            <?php endif; ?>
          
          
          <!-- If user only click search button and keywords the function will work on this -->
          <?php else: ?>
            <!-- CATALOG -->
            <div class="catalog_search">
              <div class="catalog_search_title">カタログ</div>
              <div class="catalog_search_item_wrapper">
                <?php
                while ($the_query->have_posts()): $the_query->the_post();
                  if (get_field("catalog_or_movie") == "catalog"):
                ?>
                    <a href="<?php the_field('catalog'); ?>" class="catalog_search_item">
                      <div class="catalog_search_item_img">
                        <?php the_post_thumbnail('product_archive'); ?>
                      </div>
                      <?php
                      $cat_catalog_ccs_pro = get_the_terms($post->ID, 'catalog_ccs_pro');
                      if ($cat_catalog_ccs_pro):
                        $parent_catalog_ccs_pro = "";
                        $parent2_catalog_ccs_pro = "";
                        $parent3_catalog_ccs_pro = "";
                        foreach ($cat_catalog_ccs_pro as $key) {
                          if ($key->parent == 0) {
                            $parent_catalog_ccs_pro = $key->term_id;
                          }
                        }
                        foreach ($cat_catalog_ccs_pro as $key) {
                          if ($parent_catalog_ccs_pro) {
                            if ($key->parent == $parent_catalog_ccs_pro) {
                              $parent2_catalog_ccs_pro = $key->term_id;
                            }
                          }
                        }
                        foreach ($cat_catalog_ccs_pro as $key) {
                          if ($parent_catalog_ccs_pro) {
                            if ($parent2_catalog_ccs_pro) {
                              if ($key->parent == $parent2_catalog_ccs_pro) {
                      ?>
                                <span class="catalog_search_item_label"><?php echo $key->name; ?></span>
                      <?php
                              }
                            }
                          }
                        }
                      endif;
                      ?>
                      <?php
                      $cat_catalog_ivr = get_the_terms($post->ID, 'catalog_ivr');
                      if ($cat_catalog_ivr):
                        $parent_catalog_ivr = "";
                        $parent2_catalog_ivr = "";
                        $parent3_catalog_ivr = "";
                        foreach ($cat_catalog_ivr as $key) {
                          if ($key->parent == 0) {
                            $parent_catalog_ivr = $key->term_id;
                          }
                        }
                        foreach ($cat_catalog_ivr as $key) {
                          if ($parent_catalog_ivr) {
                            if ($key->parent == $parent_catalog_ivr) {
                              $parent2_catalog_ivr = $key->term_id;
                            }
                          }
                        }
                        foreach ($cat_catalog_ivr as $key) {
                          if ($parent_catalog_ivr) {
                            if ($parent2_catalog_ivr) {
                              if ($key->parent == $parent2_catalog_ivr) {
                      ?>
                                <span class="catalog_search_item_label"><?php echo $key->name; ?></span>
                      <?php
                              }
                            }
                          }
                        }
                      endif;
                      ?>
                      <p class="catalog_search_item_title"><?php the_title(); ?></p>
                    </a>
                <?php endif;
                endwhile; ?>
              </div>
            </div>
            
            <!-- CASE_REPORT -->
            <div class="catalog_search">
              <div class="catalog_search_title">ケースレポート</div>
              <div class="catalog_search_item_wrapper">
                <?php
                while ($the_query->have_posts()): $the_query->the_post();
                  if (get_field("catalog_or_movie") == "case_report"):
                ?>
                    <a href="<?php the_field('case_report'); ?>" class="catalog_search_item case_search_item">
                      <?php
                      $cat_catalog_ccs_pro = get_the_terms($post->ID, 'catalog_ccs_pro');
                      if ($cat_catalog_ccs_pro):
                        $parent_catalog_ccs_pro = "";
                        $parent2_catalog_ccs_pro = "";
                        $parent3_catalog_ccs_pro = "";
                        foreach ($cat_catalog_ccs_pro as $key) {
                          if ($key->parent == 0) {
                            $parent_catalog_ccs_pro = $key->term_id;
                          }
                        }
                        foreach ($cat_catalog_ccs_pro as $key) {
                          if ($parent_catalog_ccs_pro) {
                            if ($key->parent == $parent_catalog_ccs_pro) {
                              $parent2_catalog_ccs_pro = $key->term_id;
                            }
                          }
                        }
                        foreach ($cat_catalog_ccs_pro as $key) {
                          if ($parent_catalog_ccs_pro) {
                            if ($parent2_catalog_ccs_pro) {
                              if ($key->parent == $parent2_catalog_ccs_pro) {
                      ?>
                                <span class="catalog_search_item_label"><?php echo $key->name; ?></span>
                      <?php
                              }
                            }
                          }
                        }
                      endif;
                      ?>
                      <?php
                      $cat_catalog_ivr = get_the_terms($post->ID, 'catalog_ivr');
                      if ($cat_catalog_ivr):
                        $parent_catalog_ivr = "";
                        $parent2_catalog_ivr = "";
                        $parent3_catalog_ivr = "";
                        foreach ($cat_catalog_ivr as $key) {
                          if ($key->parent == 0) {
                            $parent_catalog_ivr = $key->term_id;
                          }
                        }
                        foreach ($cat_catalog_ivr as $key) {
                          if ($parent_catalog_ivr) {
                            if ($key->parent == $parent_catalog_ivr) {
                              $parent2_catalog_ivr = $key->term_id;
                            }
                          }
                        }
                        foreach ($cat_catalog_ivr as $key) {
                          if ($parent_catalog_ivr) {
                            if ($parent2_catalog_ivr) {
                              if ($key->parent == $parent2_catalog_ivr) {
                      ?>
                                <span class="catalog_search_item_label"><?php echo $key->name; ?></span>
                      <?php
                              }
                            }
                          }
                        }
                      endif;
                      ?>
                      <p class="catalog_search_item_title case_saerch_item_title"><?php the_title(); ?></p>
                    </a>
                <?php endif;
                endwhile; ?>
              </div>
            </div>
            
            <!-- VIDEO -->
            <div class="video_search">
              <div class="video_search_title">動画</div>
              <div class="video_search_item_wrapper">
                <?php
                $post_number = 0; // ここで変数を初期化
                while ($the_query->have_posts()): $the_query->the_post();
                  $post_number += 1;
                  if (get_field("catalog_or_movie") == "movie"):
                    if (have_rows('movie')): $number = 0;
                      while (have_rows('movie')): the_row();
                        $number += 1;
                        if (get_sub_field('file_or_youtube') == 'youtube'): ?>
                          <div class="video_search_item" id="modal_movie<?php echo $post_number; ?><?php echo $number; ?>">
                            <div class="video_search_item_img">
                              <?php the_post_thumbnail('product_archive'); ?>
                            </div>

                            <p class="video_catalog_search_item_title"><?php the_title(); ?></p>
                            <div class="modal oem_modal modal_movie<?php echo $post_number; ?><?php echo $number; ?>">
                              <div class="modal_inner">
                                <div class="modal_back"></div>
                                <div class="modal_main">
                                  <div class="modal_cancel">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/modal_cancel.png" alt="">
                                  </div>
                                  <div class="modal_main_content">
                                    <?php
                                    $embed_code = get_sub_field('youtube'); // ACFのフィールドから埋め込みコードを取得
                                    echo $embed_code; // 埋め込みコードを出力
                                    ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                <?php endif;
                      endwhile;
                    endif;
                  endif;
                endwhile;
                wp_reset_postdata(); // クエリをリセット
                ?>


              </div>
            </div>
            <?php
            if (function_exists('pagination')) :
              pagination($the_query->max_num_pages, $paged);
            endif;
            ?>
          <?php endif; ?>
        </div>
    <?php endif;
      wp_reset_postdata();
    endif; ?>

  </div>
</div>

<?php get_template_part('catalog_bottom_parts'); ?>
<?php get_footer(); ?>