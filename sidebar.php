<div class="side_bar">
  <div class="side_bar_item">
    <div class="side_bar_item_header">カテゴリー
      <!-- <hr> -->
    </div>
    <ul>
      <?php
        $terms = get_categories();
        if($terms):
      ?>
      <?php
        foreach($terms as $term):
      ?>
      <li><a href="<?php echo get_category_link($term->term_id);?>">&gt; <?php echo $term->name;?></a></li>
    <?php endforeach; ?>
    <?php endif;?>
    </ul>
  </div>
  <div class="side_bar_item">
    <div class="side_bar_item_header">アーカイブ
      <!-- <hr> -->
    </div>
    <ul>
      <?php
      $args = array(
        'type' => 'yearly',
        'post_type' => 'post',
        'echo' => false,
        'show_post_count' => 0,
        'format' => 'custom',
        'before' => '<li>> ',
        'after' => '年</li>',
      );
      // パーマリンクの変更（/date/を挿入）
      $yearly_list = wp_get_archives($args);
      echo $yearly_list;
      ?>
    </ul>
  </div>
</div>
