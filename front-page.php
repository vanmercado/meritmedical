<?php get_header(); ?>
<section class="topPageSec">

    <!-- Landing Section -->
    <section class="topPageLandSec">

        <div class="topPageLandSec__inner">

            <!-- Swiper Slider -->
            <div class="topPageLandSec__sliderContent swiper-container">
                <div class="topPageLandSec__sliderWrapper swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://merit.commude.site/about-merit/history/" rel="noreferrer noopener">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/landing_mv-04.png" alt="" class="topPageLandSec__slideImg" />
                        </a>
                    </div>
                    <div class="topPageLandSec__slideItem swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/landing_mv-01.jpg" alt="" class="topPageLandSec__slideImg" />
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.merit.co.jp/23231/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/landing_mv-03.png" alt="" class="topPageLandSec__slideImg" />
                        </a>
                    </div>
                </div>
                <div class="topPageLandSec__pagination swiper-pagination"></div>
            </div>


            <!-- other Links -->
            <div class="topPageLandSec__listLinks">

                <a href="<?php home_url(); ?>/product_item_cate/" class="topPageLandSec__itemProduct">
                    <p class="topPageLandSec__productTitle">取扱製品 / Products</p>
                    <p class="topPageLandSec__productMore openSans">Read more</p>

                    <picture>
                        <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/landing_img-02.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/landing_img-02-sp.png" alt="" class="topPageLandSec__productImg" />
                    </picture>
                </a>

                <div class="topPageLandSec__parentOEM">
                    <a href="<?php echo home_url(); ?>/oem/">
                        <picture>
                            <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/landing_oem.png">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/landing_img-03-201-sp.png" alt="" class="topPageLandSec__oemImg" />
                        </picture>
                    </a>
                </div>

                <a href="https://uf-note.com/" target="_blank" class="topPageLandSec__itemNote">
                    <picture>
                        <source media="(min-width:490px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/landing_img-05.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/landing_img-05-sp.png" alt="" class="topPageLandSec__noteImg">
                    </picture>
                </a>
            </div>
        </div>

    </section>


    <!-- About Merit Section -->
    <section class="topPageAboutSec">

        <div class="topPageAboutSec__contentPC">
            <div class="topPageAboutSec__contentText">
                <div class="topPageAboutSec__bg01"></div>

                <div class="topPageAboutSec__contentParent">
                    <h2 class="topPageAboutSec__title titleSans openSans">About Merit</h2>
                    <p class="topPageAboutSec__description">メリットメディカル・ジャパン株式会社は、米国ユタ州に拠点をおくMerit Medical Systems社の日本法人として2015年に設立されました。<br>私達は、世界中の人々の健康な生活に貢献するための多様な医療機器の開発を行うヘルスケア企業です。<br>私達は常に医療従事者の皆様と患者様の立場で考え、安全で有益な製品とサービスを提供してまいります。</p>

                    <div class="topPageAboutSec__btnCon">
                        <a href="<?php echo home_url(); ?>/about-merit/" class="topPageAboutSec__btn">メリットメディカル・ジャパンについて</a>
                    </div>
                </div>
            </div>
            <div class="topPageAboutSec__bg02"></div>
        </div>

    </section>


    <!-- Latest News -->
    <section class="topPageNewsSec">

        <div class="topPageNewsSec__inner">

            <!-- News -->
            <div class="topPageNewsSec__content">
                <h2 class="topPageNewsSec__title titleSans openSans">News</h2>

                <div class="topPageNewsSec__contentTexts">
                    <h1 class="topPageNewsSec__titleCon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/news_icon-01.png" alt="icon" class="topPageNewsSec__icon" />
                        会社情報
                    </h1>

                    <div class="topPageAboutSec__lists">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 8,
                            'category_name' => 'argon-news'
                        );
                        $the_query = get_posts($args);
                        foreach ($the_query as $post) : setup_postdata($post);
                        ?>
                            <a href="<?php the_permalink(); ?>" class="topPageAboutSec__items">
                                <p class="topPageAboutSec__itemTitle"><?php the_time('Y年m月d日') ?></p>
                                <p class="topPageAboutSec__itemDescription"><?php the_title(); ?></p>
                            </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>

                    <a href="<?php echo home_url(); ?>/category/argon-news" class="topPageAboutSec__titleLists">会社情報一覧</a>
                </div>
            </div>

            <!-- Products -->
            <div class="topPageNewsSec__content">
                <h2 class="topPageNewsSec__title titleSans openSans">Products</h2>

                <div class="topPageNewsSec__contentTexts">
                    <h1 class="topPageNewsSec__titleCon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/news_icon-02.png" alt="icon" class="topPageNewsSec__icon" />
                        製品情報のお知らせ
                    </h1>

                    <div class="topPageAboutSec__lists">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 8,
                            'category_name' => 'product-news'
                        );
                        $the_query = get_posts($args);
                        foreach ($the_query as $post) : setup_postdata($post);
                        ?>
                            <a href="<?php the_permalink(); ?>" class="topPageAboutSec__items">
                                <p class="topPageAboutSec__itemTitle"><?php the_time('Y年m月d日') ?></p>
                                <p class="topPageAboutSec__itemDescription"><?php the_title(); ?></p>
                            </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>

                    <a href="<?php echo home_url(); ?>/category/product-news" class="topPageAboutSec__titleLists">製品情報のお知らせ⼀覧</a>
                </div>
            </div>

            <!-- Education & Training -->
            <div class="topPageNewsSec__content">
                <h2 class="topPageNewsSec__title titleSans openSans">Education & Training</h2>

                <div class="topPageNewsSec__contentTexts">
                    <h1 class="topPageNewsSec__titleCon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/news_icon-03.png" alt="icon" class="topPageNewsSec__icon" />
                        <p class="topPageAboutSec__padd">学術集会における<br class="u-brSP">製品展⽰予定</p>
                    </h1>

                    <div class="topPageAboutSec__lists">
                        <div class="topPageAboutSec__items">
                            <p class="topPageAboutSec__itemTitle">2024年06月06日(木)-08日(土)</p>
                            <p class="topPageAboutSec__itemDescription">日本麻酔科学会第71回学術集会</p>
                        </div>



                        <div class="topPageAboutSec__items">
                            <p class="topPageAboutSec__itemTitle">2024年05月23日(木)-25日(土)</p>
                            <p class="topPageAboutSec__itemDescription">第53回日本IVR学会総会</p>
                        </div>
                        <div class="topPageAboutSec__items">
                            <p class="topPageAboutSec__itemTitle">2024年05月03日(金)-05日(日)</p>
                            <p class="topPageAboutSec__itemDescription">APSCVIR 2024 (18th Annual Scientific Meeting of Asia Pacific Society of Cardiovascular and Interventional Radiology)</p>
                        </div>
                        <div class="topPageAboutSec__items">
                            <p class="topPageAboutSec__itemTitle">2024年04月19日(金)-21日(日)</p>
                            <p class="topPageAboutSec__itemDescription">第76回日本産科婦人科学会学術講演会</p>
                        </div>

                        <div class="topPageAboutSec__items">
                            <p class="topPageAboutSec__itemTitle">2024年03月23日(土)-28日(木)</p>
                            <p class="topPageAboutSec__itemDescription">SIR 2024 (Society of Interventional Radiology）</p>
                        </div>
                    </div>

                    <a href="<?php echo home_url(); ?>/upcoming-meetings/" class="topPageAboutSec__titleLists">学術集会における製品展⽰予定⼀覧</a>
                </div>
            </div>

            <!-- Search -->
            <div class="topPageNewsSec__content topPageNewsSec__search">
                <h2 class="topPageNewsSec__title titleSans openSans">Search</h2>

                <div class="topPageNewsSec__contentTexts">
                    <h1 class="topPageNewsSec__titleCon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/news_icon-04.png" alt="icon" class="topPageNewsSec__icon" />
                        レターPDF
                    </h1>

                    <div class="topPageAboutSec__lists topPageNewsSec__searchList">
                        <a href="<?php echo get_post_type_archive_link('pdf'); ?>" class="topPageAboutSec__pdfText">サイト内のPDF⽂書検索はこちらになります。</a>
                    </div>

                    <a href="<?php echo get_post_type_archive_link('pdf'); ?>" class="topPageAboutSec__titleLists">レターPDF検索</a>
                </div>
            </div>
        </div>

    </section>


    <section class="topPageOverviewSec">
        <div class="topPageOverviewSec__inner">

            <!-- Company Overview -->
            <div class="topPageOverviewSec__content">
                <h2 class="topPageOverviewSec__title titleSans openSans">Company Overview</h2>

                <div class="topPageOverviewSec__contentTexts">
                    <picture>
                        <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/news_img-02.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/news_img-02-sp.jpg" alt="" class="topPageOverviewSec__img" />
                    </picture>

                    <h1 class="topPageOverviewSec__titleCon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/news_icon-05.png" alt="icon" class="topPageOverviewSec__icon" />
                        会社概要
                    </h1>

                    <div class="topPageOverviewSec__locLists">
                        <div>
                            <p class="topPageOverviewSec__locTitle">社名</p>
                            <p>メリットメディカル・ジャパン株式会社</p>
                        </div>

                        <div>
                            <p class="topPageOverviewSec__locTitle">所在地</p>
                            <p>〒163-0531<br>東京都新宿区西新宿一丁目26番2号<br>新宿野村ビル<br>TEL 03-5989-0100<br>FAX 03-5909-5402</p>
                        </div>

                        <div>
                            <p class="topPageOverviewSec__locTitle">設⽴</p>
                            <p>2015年8⽉</p>
                        </div>

                        <div>
                            <p class="topPageOverviewSec__locTitle">代表取締役社長</p>
                            <p>櫻井雅俊</p>
                        </div>

                        <div>
                            <p class="topPageOverviewSec__locTitle">資本⾦</p>
                            <p>5,000万円</p>
                        </div>

                        <div>
                            <p class="topPageOverviewSec__locTitle">事業内容</p>
                            <p>医療機器の製造、輸⼊、販売</p>
                        </div>
                    </div>

                    <a href="<?php echo home_url(); ?>/about-merit" class="topPageOverviewSec__titleLists">会社概要ページへ</a>
                </div>
            </div>

            <!-- Vision -->
            <div class="topPageOverviewSec__content">
                <h2 class="topPageOverviewSec__title titleSans openSans">Vision</h2>

                <div class="topPageOverviewSec__contentTexts">
                    <picture>
                        <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/news_img-03.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/news_img-03-sp.jpg" alt="" class="topPageOverviewSec__img" />
                    </picture>


                    <h1 class="topPageOverviewSec__titleCon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-new/news_icon-06.png" alt="icon" class="topPageOverviewSec__icon" />
                        ミッション・ビジョン&バリュー
                    </h1>

                    <div class="topPageOverviewSec__locLists mgnPadd">
                        <div>
                            <p class="topPageOverviewSec__localListsTtl">ミッション</p>
                            <p class="topPageOverviewSec__localListsSubTtl">Understand. Innovate. Deliver.™</p>
                            <p>私たちは、ヘルスケア分野で最も顧客重視の企業になるために、お客様のニーズを<span class="topPageOverviewSec__localListsText">理解</span>し、人びとの生活を向上させる製品を<span class="topPageOverviewSec__localListsText">革新</span>して<span class="topPageOverviewSec__localListsText">提供</span>していきます。</p>
                        </div>
                        <div>
                            <p class="topPageOverviewSec__localListsTtl">ビジョン&バリュー</p>
                            <p class="topPageOverviewSec__localListsSubTtl">The Merit Way</p>
                            <p>私たちのビジョン&バリューとなるThe Merit Wayは、<span class="topPageOverviewSec__localListsText">H.E.A.R.T.</span>に紐づいた行動指針を、グローバルで共通言語化し、文化の構築につなげています。</p>
                        </div>
                    </div>

                    <a href="<?php echo home_url(); ?>/about-merit/culture" class="topPageOverviewSec__titleLists">ミッション・ビジョン&バリューへ</a>
                </div>
            </div>

        </div>
    </section>

</section>
<?php get_footer(); ?>