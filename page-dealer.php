<?php get_header(); ?>


<div class="sub_mv sub_mv02 dealer__ttlePage">
    <div class="container">
        <h1 class="sub_mv_title"><?php echo get_the_title(); ?></h1>
    </div>
</div>

<div class="sub_main">
    <div class="container">
        <div class="sub_breadcrumb">
            <?php custom_breadcrumb(); ?>
        </div>

        <div class="category_wrapper">
            <p class="dealer__txt">こちらは販売代理店様の専用ページです。弊社との連携時に必要な情報を、こちらから入手いただけます。<br>下記それぞれのリンクをご利用ください。<br>尚、公開情報以外は、会員登録いただいた方のみの限定公開とさせていただきます。<br>
                <!-- 会員登録がお済でない方は、<a href="<?php echo home_url(); ?>/dealer/login/" class="dealer__txtLink">ログインページ</a>から登録をお願い致します。 -->
            </p>
            <div class="dealer__list">
                <div class="dealer__listItem">
                    <figure class="dealer__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dealer/dealer_img-01.jpg" alt="">
                    </figure>
                    <div class="dealer__listItemCont">
                        <div class="dealer__listItemTxt">
                            <span class="dealer__listItemTxtTtl">製品情報</span>
                            <p class="dealer__listItemTxtMain">弊社製品ページのご案内</p>
                        </div>
                        <a href="/product_item_cate/" class="dealer__listItemLink">取扱い製品ページを見る</a>
                    </div>
                </div>
                <div class="dealer__listItem">
                    <figure class="dealer__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dealer/dealer_img-02.jpg" alt="">
                    </figure>
                    <div class="dealer__listItemCont">
                        <div class="dealer__listItemTxt">
                            <span class="dealer__listItemTxtTtl">添付文書サイト</span>
                            <p class="dealer__listItemTxtMain">外部サイト（独立行政法人PMDA内、医療機器添付文書検索ページ）</p>
                        </div>
                        <a href="https://www.pmda.go.jp/PmdaSearch/kikiSearch/" target="_blank" rel="noopener" class="dealer__listItemLink u-tab">独立行政法人PMDA</a>
                    </div>
                </div>
                <div class="dealer__listItem">
                    <figure class="dealer__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dealer/dealer_img-03.jpg" alt="">
                    </figure>
                    <div class="dealer__listItemCont">
                        <div class="dealer__listItemTxt">
                            <span class="dealer__listItemTxtTtl">製品情報一覧</span>
                            <!-- <p class="dealer__listItemTxtIndent">※こちらのページは会員専用ページです。<br>月に1回更新予定</p> -->
                        </div>
                        <a href="/dealer/login/" class="dealer__listItemLink">会員ページログイン</a>
                        <!-- <span class="dealer__listItemLink u-noLink">取扱い製品ページを見る</span> -->
                    </div>
                </div>
                <div class="dealer__listItem">
                    <figure class="dealer__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dealer/dealer_img-04.jpg" alt="">
                    </figure>
                    <div class="dealer__listItemCont">
                        <div class="dealer__listItemTxt">
                            <span class="dealer__listItemTxtTtl">弊社専用伝票</span>
                        </div>
                        <div class="dealer__listItemList">
                            <a href="https://www.merit.co.jp/wmeritp/wp-content/uploads/2017/12/5e5ff7016d116c5c17bd0985bf336dea.pdf" target="_blank" rel="noopener" class="dealer__listItemListLink">注文書（PDF）</a>
                            <a href="https://www.merit.co.jp/wmeritp/wp-content/uploads/2017/12/5e5ff7016d116c5c17bd0985bf336dea.xlsx" class="dealer__listItemListLink">注文書（エクセル）</a>
                            <a href="https://www.merit.co.jp/wmeritp/wp-content/uploads/2022/03/16784e4d5ae455241ee3e4784d94cf49.pdf" target="_blank" rel="noopener" class="dealer__listItemListLink">ヘパスフィア専用（PDF）</a>
                            <a href="https://www.merit.co.jp/wmeritp/wp-content/uploads/2022/03/80d4e98e8d9cb8747d87617900fecc44.pdf" target="_blank" rel="noopener" class="dealer__listItemListLink">エンボスフィア専用（PDF）</a>
                            <a href="https://www.merit.co.jp/wmeritp/wp-content/uploads/2022/03/3039cd3821341acb7ca32f1032fa8105.xlsx" class="dealer__listItemListLink">エンボ&amp;ヘパ専用（エクセル）</a>
                            <a href="https://www.merit.co.jp/wmeritp/wp-content/uploads/2024/12/長期預託製品返却および交換依頼書_20241225.pdf" target="_blank" rel="noopener" class="dealer__listItemListLink">預託返却伝票（PDF）</a>
                        </div>
                    </div>
                </div>
                <div class="dealer__listItem">
                    <figure class="dealer__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dealer/dealer_img-05.jpg" alt="">
                    </figure>
                    <div class="dealer__listItemCont">
                        <div class="dealer__listItemTxt">
                            <span class="dealer__listItemTxtTtl">納品書/請求書</span>
                            <p class="dealer__listItemTxtMain">外部サイト（ナビエクスプレスサーバー）</p>
                        </div>
                        <a href="https://naviexp.jp/NaviExp/jsp/A/Login.jsp" target="_blank" rel="noopener" class="dealer__listItemLink u-tab">ナビエクスプレス</a>
                    </div>
                </div>
                <div class="dealer__listItem">
                    <figure class="dealer__listItemFgr">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dealer/dealer_img-06.jpg" alt="">
                    </figure>
                    <div class="dealer__listItemCont">
                        <div class="dealer__listItemTxt">
                            <span class="dealer__listItemTxtTtl">苦情製品の返送</span>
                        </div>
                        
                        <a href="https://www.merit.co.jp/wmeritp/wp-content/uploads/2025/01/不具合品の返送先に関するご案内.pdf" target="_blank" rel="noopener" class="dealer__listItemLink">苦情製品の返送</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>