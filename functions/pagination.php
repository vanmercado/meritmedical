<?php
/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 1, $show_only = true ) {

    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

    //表示テキスト
    //$text_first   = "« 最初へ";
    $text_before  = "前ページ";
    $text_next    = "次ページ";
    //$text_last    = "最後へ »";

    if ( $show_only && $pages === 1 ) {
        // １ページのみで表示設定が true の時
        echo '<ul class="pagination"><li class="pagination_item"><span class="current">1</span></li></ul>';
        return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
        //２ページ以上の時
        echo '<ul class="pagination">';
        // if ( $paged > $range + 1 ) {
        //     // 「最初へ」 の表示
        //     echo '<li class="pagination_item first"><a href="', get_pagenum_link(1) ,'"></a></li>';
        // }
        if ( $paged > 1 ) {
            // 「前へ」 の表示
            echo '<li class="pagination_item prev"><a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev"><span><</span></a></li>';
        }
        for ( $i = 1; $i <= $pages; $i++ ) {

            if ( $i <= $paged + $range && $i >= $paged - $range ) {
                // $paged +- $range 以内であればページ番号を出力
                if ( $paged === $i ) {
                    echo '<li class="pagination_item"><span class="current">', $i ,'</span></li>';
                } else {
                    echo '<li class="pagination_item"><a href="', get_pagenum_link( $i ) ,'"><span>', $i ,'</span></a></li>';
                }
            }

        }
        if ( $paged < $pages ) {
            // 「次へ」 の表示
            echo '<li class="pagination_item next"><a href="', get_pagenum_link( $paged + 1 ) ,'" class="next" ><span>></span></a></li>';
        }
        // if ( $paged + $range < $pages ) {
        //     // 「最後へ」 の表示
        //     echo '<li class="pagination_item last"><a href="', get_pagenum_link( $pages ) ,'" class=""></a></li>';
        // }

        echo '</ul>';
    }
}
