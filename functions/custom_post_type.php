<?php
add_action('init','create_post_type');
function create_post_type(){
  $supports =

  register_post_type('product_item_cate',array(
    'label' => '取扱い製品',
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
       'with_front' => false,
     ),
    'supports' => array(
      'title',
      'thumbnail',
      'author'
    )
  ));

  // register_taxonomy(
  //   'ccs_pro',
  //   'product_item_cate',
  //   array(
  //     'label' => 'クリティカルケア関連製品',
  //     'hierarchical' => true,
  //   )
  // );
  //
  // register_taxonomy(
  //   'intervention',
  //   'product_item_cate',
  //   array(
  //     'label' => 'インターベンション関連製品',
  //     'hierarchical' => true,
  //   )
  // );

  register_taxonomy(
    'ccs_pro_cat',
    'product_item_cate',
    array(
      'label' => 'クリティカルケア関連製品',
      'hierarchical' => true,
    )
  );

  register_taxonomy(
    'intervention_cat',
    'product_item_cate',
    array(
      'label' => 'インターベンション関連製品',
      'hierarchical' => true,
    )
  );

  register_post_type('documents',array(
    'label' => '添付文書',
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
       'with_front' => false,
     ),
    'supports' => array(
      'title',
      'author'
    )
  ));

  register_taxonomy(
    'documents_ccs_pro',
    'documents',
    array(
      'label' => 'クリティカルケア関連製品',
      'hierarchical' => true,
    )
  );

  register_taxonomy(
    'documents_ivr',
    'documents',
    array(
      'label' => 'IVR関連製品その他',
      'hierarchical' => true,
    )
  );

  register_post_type('catalog',array(
    'label' => 'カタログ・動画・ケースレポート',
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
       'with_front' => false,
     ),
    'supports' => array(
      'title',
      'thumbnail',
      'author'
    )
  ));

  register_taxonomy(
    'catalog_ccs_pro',
    'catalog',
    array(
      'label' => 'クリティカルケア関連製品',
      'hierarchical' => true,
    )
  );

  register_taxonomy(
    'catalog_ivr',
    'catalog',
    array(
      'label' => 'IVR関連製品その他',
      'hierarchical' => true,
    )
  );

  register_post_type('pdf',array(
    'label' => 'レターPDF',
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
       'with_front' => false,
     ),
    'supports' => array(
      'title',
      'author'
    )
  ));

  register_taxonomy(
    'pdf_category',
    'pdf',
    array(
      'label' => 'カテゴリ',
      'hierarchical' => true,
    )
  );

}

function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
  return;
  if ( $query->is_post_type_archive('product_item_cate') ) {
    $query->set( 'posts_per_page', '9' );
  }
  if ( $query->is_post_type_archive('news') ) {
    $query->set( 'posts_per_page', '10' );
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );
