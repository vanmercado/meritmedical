<?php
if ( ! function_exists( 'custom_breadcrumb' ) ) {
  function custom_breadcrumb() {

    // トップページでは何も出力しないように
    if ( is_front_page() ) return false;

    //そのページのWPオブジェクトを取得
    $wp_obj = get_queried_object();

    echo '<ul class="sub_breadcrumb_lists">'.  //id名などは任意で
        '<li class="sub_breadcrumb_lists_item">'.
          '<a href="'. esc_url( home_url() ) .'">HOME</a>'.
        '</li>';

    if ( is_attachment() ) {

      /**
       * 添付ファイルページ ( $wp_obj : WP_Post )
       * ※ 添付ファイルページでは is_single() も true になるので先に分岐
       */
      $post_title = apply_filters( 'the_title', $wp_obj->post_title );
      echo '<li class="sub_breadcrumb_lists_item">'. esc_html( $post_title ) .'</li>';

    } elseif ( is_single() ) {

      /**
       * 投稿ページ ( $wp_obj : WP_Post )
       */
      $post_id    = $wp_obj->ID;
      $post_type  = $wp_obj->post_type;
      $post_title = apply_filters( 'the_title', $wp_obj->post_title );

      // カスタム投稿タイプかどうか
      if ( $post_type !== 'post' ) {

        $the_tax = "";  //そのサイトに合わせて投稿タイプごとに分岐させて明示的に指定してもよい

        // 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
        $tax_array = get_object_taxonomies( $post_type, 'names');
        foreach ($tax_array as $tax_name) {
            if ( $tax_name !== 'post_format' ) {
                $the_tax = $tax_name;
                break;
            }
        }

        $post_type_link = esc_url( get_post_type_archive_link( $post_type ) );
        $post_type_label = esc_html( get_post_type_object( $post_type )->label );

        //カスタム投稿タイプ名の表示
        echo '<li class="sub_breadcrumb_lists_item">'.
              '<a href="'. $post_type_link .'">'. $post_type_label .'</a>'.
            '</li>';

        } else {

        //   $the_tax = 'category';  //通常の投稿の場合、カテゴリーを表示
        //
        // }
        //
        // // 投稿に紐づくタームを全て取得
        // $terms = get_the_terms( $post_id, $the_tax );
        //
        // // タクソノミーが紐づいていれば表示
        // if ( $terms !== false ) {
        //
        //   $child_terms  = array();  // 子を持たないタームだけを集める配列
        //   $parents_list = array();  // 子を持つタームだけを集める配列
        //
        //   //全タームの親IDを取得
        //   foreach ( $terms as $term ) {
        //     if ( $term->parent !== 0 ) {
        //       $parents_list[] = $term->parent;
        //     }
        //   }
        //
        //   //親リストに含まれないタームのみ取得
        //   foreach ( $terms as $term ) {
        //     if ( ! in_array( $term->term_id, $parents_list ) ) {
        //       $child_terms[] = $term;
        //     }
        //   }
        //
        //   // 最下層のターム配列から一つだけ取得
        //   $term = $child_terms[0];
        //
        //   if ( $term->parent !== 0 ) {
        //
        //     // 親タームのIDリストを取得
        //     $parent_array = array_reverse( get_ancestors( $term->term_id, $the_tax ) );
        //
        //     foreach ( $parent_array as $parent_id ) {
        //       $parent_term = get_term( $parent_id, $the_tax );
        //       $parent_link = esc_url( get_term_link( $parent_id, $the_tax ) );
        //       $parent_name = esc_html( $parent_term->name );
        //       echo '<li class="sub_breadcrumb_lists_item">'.
        //             '<a href="'. $parent_link .'">'. $parent_name .'</a>'.
        //           '</li>';
        //     }
        //   }

          // 最下層のタームを表示
          echo '<li class="sub_breadcrumb_lists_item">'.
                '<a href="'. get_post_type_archive_link('post') .'">お知らせ</a>'.
              '</li>';
        }

        // 投稿自身の表示
        echo '<li class="sub_breadcrumb_lists_item">'. esc_html( strip_tags( $post_title ) ) .'</li>';

    } elseif ( is_page() || is_home() ) {

      /**
       * 固定ページ ( $wp_obj : WP_Post )
       */
      $page_id    = $wp_obj->ID;
      $page_title = apply_filters( 'the_title', $wp_obj->post_title );

      // 親ページがあれば順番に表示
      if ( $wp_obj->post_parent !== 0 ) {
        $parent_array = array_reverse( get_post_ancestors( $page_id ) );
        foreach( $parent_array as $parent_id ) {
          $parent_link = esc_url( get_permalink( $parent_id ) );
          $parent_name = esc_html( get_the_title( $parent_id ) );
          echo '<li class="sub_breadcrumb_lists_item">'.
                '<a href="'. $parent_link .'">'. $parent_name .'</a>'.
              '</li>';
        }
      }
      // 投稿自身の表示
      echo '<li class="sub_breadcrumb_lists_item">'. esc_html( strip_tags( $page_title ) ) .'</li>';

    } elseif ( is_post_type_archive() ) {

      /**
       * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
       */
      echo '<li class="sub_breadcrumb_lists_item">'. esc_html( $wp_obj->label ) .'</li>';

    } elseif ( is_category() ) {
      $cat_name = single_cat_title( '', false);
      $site_url = home_url();
      echo '<li class="sub_breadcrumb_lists_item"><a href="'.$site_url.'/news">お知らせ</a></li><li class="sub_breadcrumb_lists_item">'.$cat_name.'</li>';
    } elseif ( is_tax() ) {
      $taxonomy = get_query_var( 'taxonomy' );
      $post_type = get_taxonomy( $taxonomy )->object_type[0];
      $term_object = get_queried_object();
      $term_type_label = $term_object->name;

      $cp_label = esc_html(get_post_type_object(get_post_type())->label);
      $cp_slug = esc_html(get_post_type_object(get_post_type())->name);
      $post_type_url= get_post_type_archive_link($cp_slug);
      echo '<li class="sub_breadcrumb_lists_item"><a href="'. $post_type_url .'">'. $cp_label .'</a></li>';
      echo '<li class="sub_breadcrumb_lists_item">'. $term_type_label .'</li>';

    } elseif ( is_date() ) {

      /**
       * 日付アーカイブ ( $wp_obj : null )
       */
      $year  = get_query_var('year');
      $month = get_query_var('monthnum');
      $day   = get_query_var('day');

      if ( $day !== 0 ) {
        //日別アーカイブ
        echo '<li class="sub_breadcrumb_lists_item">'.
              '<a href="'. get_post_type_archive_link('post') . '"><span>お知らせ</span></a>'.
            '</li>'.
            '<li class="sub_breadcrumb_lists_item">'.
              '<a href="'. esc_url( get_year_link( $year ) ) .'"><span>'. esc_html( $year ) .'年</span></a>'.
            '</li>'.
            '<li class="sub_breadcrumb_lists_item">'.
              '<a href="'. esc_url( get_month_link( $year, $month ) ) . '"><span>'. esc_html( $month ) .'月</span></a>'.
            '</li>'.
            '<li class="sub_breadcrumb_lists_item">'.
              '<span>'. esc_html( $day ) .'日</span>'.
            '</li>';

      } elseif ( $month !== 0 ) {
        //月別アーカイブ
        echo '<li class="sub_breadcrumb_lists_item">'.
              '<a href="'. get_post_type_archive_link('post') . '"><span>お知らせ</span></a>'.
            '</li>'.
            '<li class="sub_breadcrumb_lists_item">'.
              '<a href="'. esc_url( get_year_link( $year ) ) .'"><span>'. esc_html( $year ) .'年</span></a>'.
            '</li>'.
            '<li class="sub_breadcrumb_lists_item">'.
              '<span>'. esc_html( $month ) .'月</span>'.
            '</li>';

      } else {
        //年別アーカイブ
        echo '<li class="sub_breadcrumb_lists_item">'. esc_html( $year ) .'年</li>';

      }

    } elseif ( is_author() ) {

      /**
       * 投稿者アーカイブ ( $wp_obj : WP_User )
       */
      echo '<li class="sub_breadcrumb_lists_item">'. esc_html( $wp_obj->display_name ) .' の執筆記事</li>';

    } elseif ( is_archive() ) {

      /**
       * タームアーカイブ ( $wp_obj : WP_Term )
       */
      $term_id   = $wp_obj->term_id;
      $term_name = $wp_obj->name;
      $tax_name  = $wp_obj->taxonomy;

      /* ここでタクソノミーに紐づくカスタム投稿タイプを出力しても良いでしょう。 */

      // 親ページがあれば順番に表示
      if ( $wp_obj->parent !== 0 ) {

        $parent_array = array_reverse( get_ancestors( $term_id, $tax_name ) );
        foreach( $parent_array as $parent_id ) {
          $parent_term = get_term( $parent_id, $tax_name );
          $parent_link = esc_url( get_term_link( $parent_id, $tax_name ) );
          $parent_name = esc_html( $parent_term->name );
          echo '<li class="sub_breadcrumb_lists_item">'.
                '<a href="'. $parent_link .'">'. $parent_name .'</a>'.
              '</li>';
        }
      }

      // ターム自身の表示
      echo '<li class="sub_breadcrumb_lists_item">'.
            ''. esc_html( $term_name ) .
          '</li>';


    } elseif ( is_search() ) {

      /**
       * 検索結果ページ
       */
      echo '<li class="sub_breadcrumb_lists_item">「'. esc_html( get_search_query() ) .'」で検索した結果</li>';


    } elseif ( is_404() ) {

      /**
       * 404ページ
       */
      echo '<li class="sub_breadcrumb_lists_item">お探しのページは見つかりませんでした。</li>';

    } else {

      /**
       * その他のページ（無いと思うけど一応）
       */
      echo '<li class="sub_breadcrumb_lists_item">'. esc_html( get_the_title() ) .'</li>';

    }

    echo '</ul>';  // 冒頭に合わせた閉じタグ

  }
}
