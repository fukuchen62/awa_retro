<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>詳細ページ(フード)</title>

    <!-- reset CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/reset.css">

    <!-- slick CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/slick-theme.css">

    <!-- colorbox CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/colorbox.css">

    <!-- 共通のCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/common.css">

    <!-- 自作のCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/detail.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/gallery.css">

    <!-- googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti:wght@700&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrap">
        <header>

        </header>

        <!-- メイン ================== -->
        <main id="detail_main" class="detail_main">

            <!-- お店の詳細エリア ========================-->
            <section id="shop_detail_container">

                <!-- お店のタイトルエリア ======-->
                <div class="shop_detail_title_container">

                    <!-- ※背景画像1 -->
                    <div class="detail_food_bg1">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/detail/food_detail_bg1.PNG" alt="背景画像1">
                    </div>

                    <h2 class="detail_title"><?php the_field('restaurant_name'); ?></h2>

                    <div class="detail_title_sub food">
                        <!-- <a>種別</a>
                        <a>目的別</a>
                        <a>エリア</a> -->
                        <!-- タクソノミーを取得する -->
                        <?php
                        $food_type = get_post_type(get_the_ID());
                        $taxonomies = get_object_taxonomies($post_type);


                        $taxonomy_names = wp_get_object_terms(
                            get_the_ID(),
                            $taxonomies,
                            array(
                                "fields" => "all",
                                "orderby" => "taxonomy",
                                "order" => "asc"
                            )
                        );

                        // print_r($taxonomy_names);
                        ?>
                        <!-- タクソノミーを出力 -->

                        <?php
                        if (!empty($taxonomy_names)) :
                            foreach ($taxonomy_names as $tax_name) : ?>

                                <?php
                                // print_r($tax_name);
                                $link = get_term_link($tax_name->term_id, $tax_name->taxonomy);
                                ?>
                                <a href="<?php echo $link; ?>"><?php echo $tax_name->name; ?></a>
                            <?php endforeach; ?>
                        <?php else :  ?>
                        <?php endif;  ?>
                    </div>

                    <div class="shop_detail_chatch">
                        <p>
                            <!-- お店のキャッチフレーズが入ります。
                            お店のキャッチフレーズが入ります。
                            お店のキャッチフレーズが入ります。 -->
                            <?php the_field('catchphrase'); ?>
                        </p>
                    </div>

                </div>


                <!-- スライダー ======-->
                <div class="shop_detail_slider_container">

                    <div class="shop_detail_slider_box food detail_filter">

                        <div class="shop_detail_slider">
                            <?php if (get_field('pic1')) : ?>
                                <?php
                                $pic1 = get_field('pic1');
                                $pic_url1 = $pic1['sizes']['large']; //大サイズ画像
                                ?>
                                <div><img src="<?php echo $pic_url1; ?>" alt="お店の写真1"></div>
                            <?php endif; ?>
                            <?php if (get_field('pic2')) : ?>
                                <?php
                                $pic2 = get_field('pic2');
                                $pic_url2 = $pic2['sizes']['large'];
                                ?>
                                <div><img src="<?php echo $pic_url2; ?>" alt="お店の写真2"></div>
                            <?php endif; ?>
                            <?php if (get_field('pic3')) : ?>
                                <?php
                                $pic3 = get_field('pic3');
                                $pic_url3 = $pic3['sizes']['large'];
                                ?>
                                <div><img src="<?php echo $pic_url3; ?>" alt="お店の写真3"></div>
                            <?php endif; ?>
                            <?php if (get_field('pic4')) : ?>
                                <?php
                                $pic4 = get_field('pic4');
                                $pic_url4 = $pic4['sizes']['large'];
                                ?>
                                <div><img src="<?php echo $pic_url4; ?>" alt="お店の写真4"></div>
                            <?php endif; ?>
                        </div>

                        <div class="shop_detail_slider_nav">
                            <?php if (get_field('pic1')) : ?>
                                <?php
                                $pic1 = get_field('pic1');
                                $pic_url1 = $pic1['sizes']['medium']; //サイズ画像
                                ?>
                                <div><img src="<?php echo $pic_url1; ?>" alt="お店の写真1"></div>
                            <?php endif; ?>
                            <?php if (get_field('pic2')) : ?>
                                <?php
                                $pic2 = get_field('pic2');
                                $pic_url2 = $pic2['sizes']['medium'];
                                ?>
                                <div><img src="<?php echo $pic_url2; ?>" alt="お店の写真2"></div>
                            <?php endif; ?>
                            <?php if (get_field('pic3')) : ?>
                                <?php
                                $pic3 = get_field('pic3');
                                $pic_url3 = $pic3['sizes']['medium'];
                                ?>
                                <div><img src="<?php echo $pic_url3; ?>" alt="お店の写真3"></div>
                            <?php endif; ?>
                            <?php if (get_field('pic4')) : ?>
                                <?php
                                $pic4 = get_field('pic4');
                                $pic_url4 = $pic4['sizes']['medium'];
                                ?>
                                <div><img src="<?php echo $pic_url4; ?>" alt="お店の写真4"></div>
                            <?php endif; ?>
                        </div>

                    </div>

                </div>

                <!-- ショップの紹介テキスト ======-->
                <div class="shop_text_container">


                    <!-- ショップの紹介テキストの枠 -->
                    <div class="shop_text_box">

                        <!-- img & おすすめテキスト -->
                        <div class="shop_point_content">
                            <?php
                            $shop = get_field('shop_pic1');
                            $pic_url5 = $shop['sizes']['medium'];
                            ?>
                            <div class="shop_point_item">
                                <img src="<?php echo $pic_url5; ?>" alt="おすすめ写真">
                            </div>

                            <div class="shop_point_text_item">
                                <h3><span>イチオシ・</span><span>こだわり</span></h3>
                                <p>
                                    <!-- ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。 -->
                                    <?php the_field('menu_comment'); ?>
                                </p>
                            </div>
                        </div>

                        <!-- 雰囲気・歴史・その他 テキスト -->
                        <div class="shop_text_content">
                            <h3>雰囲気</h3>
                            <p>
                                <!-- ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。 -->
                                <?php the_field('menu_detail'); ?>
                            </p>

                            <h3>歴史</h3>
                            <p>
                                <!-- ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。 -->
                                <?php the_field('menu_history'); ?>
                            </p>

                            <h3>その他</h3>
                            <p>
                                <!-- ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。 -->
                                <?php the_field('memo'); ?>
                            </p>

                            <!-- コラムページへのリンク -->
                            <div class="detail_colamn_food_link">
                                <a href="colamn_detail.html">コラムページへ →</a>
                            </div>
                        </div>

                    </div>

                    <!-- 人気・オススメ商品 -->
                    <div class="detail_price_container">

                        <!-- ※背景画像2 -->
                        <div class="detail_food_bg2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/detail/food_detail_bg2.PNG" alt="背景画像2">
                        </div>

                        <!-- 人気オススメ商品タイトル -->
                        <div class="detail_price_title">
                            <h3>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/detail/detail_icon.png" alt="タイトルアイコン">
                                <span>人気・オススメ</span><span>商品</span>
                            </h3>
                        </div>

                        <!-- 価格テーブル -->
                        <div class="detail_price_box">
                            <table>
                                <tr>
                                    <th>商品</th>
                                    <th>価格</th>
                                    <th>コメント</th>
                                </tr>
                                <tr>
                                    <td><?php the_field('menu_name1'); ?></td>
                                    <td><?php the_field('menu_price1'); ?></td>
                                    <td>
                                        <?php the_field('menu_summary1'); ?>
                                    </td>
                                    <!-- <td>バナナマフィンバナナマフィン</td>
                                    <td>650円</td>
                                    <td>
                                        商品のコメントが入ります。
                                        商品のコメントが入ります。
                                        商品のコメントが入ります。
                                        商品のコメントが入ります。
                                    </td> -->
                                </tr>
                                <tr>
                                    <!-- <td>バナナマフィン2</td>
                                    <td>1700円</td>
                                    <td>昭和の懐かしの味を再現した特別なスイーツ</td> -->
                                    <td><?php the_field('menu_name2'); ?></td>
                                    <td><?php the_field('menu_price2'); ?></td>
                                    <td><?php the_field('menu_summary2'); ?></td>
                                </tr>
                                <tr>
                                    <!-- <td>チョコマフィン</td>
                                    <td>300円</td>
                                    <td>チョコチップの歯応えが美味しさを引き立てます</td> -->
                                    <td><?php the_field('menu_name3'); ?></td>
                                    <td><?php the_field('menu_price3'); ?></td>
                                    <td><?php the_field('menu_summary3'); ?></td>
                                </tr>
                            </table>
                        </div>
                        <!-- 終・価格テーブル -->

                    </div>
                </div>

                <!-- ショップの情報 ======-->
                <div class="shop_info_container">

                    <div class="shop_info_box">

                        <!-- テーブル -->
                        <div class="info_table_content">
                            <table>
                                <?php if (get_field('address')) : ?>
                                    <tr>
                                        <th>住所</th>
                                        <td><?php the_field('address'); ?></td>
                                    </tr>
                                <?php endif; ?>

                                <!-- <tr>
                                    <th>住所</th>
                                    <td>住所が入ります
                                        住所が入ります
                                        住所が入ります
                                    </td>
                                </tr> -->

                                <?php if (get_field('tel')) : ?>
                                    <tr>
                                        <th>電話番号</th>
                                        <td><?php the_field('tel'); ?></td>
                                    </tr>
                                <?php endif; ?>

                                <!-- <tr>
                                    <th>電話番号</th>
                                    <td></td>
                                </tr> -->

                                <?php if (get_field('business_hours')) : ?>
                                    <tr>
                                        <th>営業時間</th>
                                        <td><?php the_field('business_hours'); ?></td>
                                    </tr>
                                <?php endif; ?>

                                <!-- <tr>
                                    <th>営業時間</th>
                                    <td></td>
                                </tr> -->

                                <!-- <tr>
                                    <th>定休日</th>
                                    <td></td>
                                </tr> -->

                                <?php if (get_field('parking')) : ?>
                                    <tr>
                                        <th>駐車場</th>
                                        <td><?php the_field('parking'); ?></td>
                                    </tr>
                                <?php endif; ?>

                                <!-- <tr>
                                    <th>駐車場</th>
                                    <td></td>
                                </tr> -->

                                <?php if (get_field('url')) : ?>
                                    <tr>
                                        <th>HP/SNS</th>
                                        <td><?php the_field('url'); ?></td>
                                    </tr>
                                <?php endif; ?>

                                <!-- <tr>
                                    <th>HP/SNS</th>
                                    <td></td>
                                </tr> -->

                                <?php if (get_field('memo')) : ?>
                                    <tr>
                                        <th>その他<br>備考</th>
                                        <td><?php the_field('memo'); ?></td>
                                    </tr>
                                <?php endif; ?>

                                <!-- <tr>
                                    <th>その他<br>備考</th>
                                    <td>
                                        その他・備考のテキストが入ります。
                                        その他・備考のテキストが入ります。
                                        その他・備考のテキストが入ります。
                                        その他・備考のテキストが入ります。
                                        その他・備考のテキストが入ります。
                                        その他・備考のテキストが入ります。
                                    </td>
                                </tr> -->

                            </table>
                        </div>

                        <!-- google map -->
                        <div class="shop_info_map_content">
                            <?php echo get_field('iframe'); ?>
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d413.1053881257279!2d134.5521171893902!3d34.073536000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35536d61a9bac1cd%3A0x6fff29ff27afcdb0!2z44CSNzcwLTA4MzIg5b6z5bO255yM5b6z5bO25biC5a-65bO25pys55S65p2x77yT5LiB55uu77yR77yS4oiS77yYIEsx44OT44OrIDVG!5e0!3m2!1sja!2sjp!4v1710613268483!5m2!1sja!2sjp" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        </div>

                    </div>

                </div>

            </section>


            <!-- コメント欄 ==========================-->
            <div class="detail_comment_container detail_filter">

                <!-- ※背景画像3 -->
                <div class="detail_food_bg3">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/detail/food_detail_bg3.PNG" alt="背景画像3">
                </div>


                <div class="detail_comment_box">

                    <form class="detail_comment_content" action="#" method="post">

                        <table class="detail_comment_table">
                            <caption>コメント投稿欄</caption>

                            <tr>
                                <th>お名前</th>
                                <td><input type="text" name="name" required placeholder="徳島 レトロ"></td>
                            </tr>

                            <tr>
                                <th>お問い合わせ内容</th>
                                <td><textarea name="comment" cols="30" rows="5"></textarea></td>
                            </tr>
                        </table>

                        <div class="comment_btns">
                            <input type="reset" value="クリア">
                            <input type="submit" value="送信">
                        </div>

                    </form>

                </div>

            </div>


            <!-- 周辺のスポット ==========================-->
            <section id="other_spot_container" class="other_spot_container">

                <div class="other_spot_title_container">
                    <h2>周辺のスポット</h2>
                </div>

                <div class="other_spot_box">


                    <!-- カード ============ -->
                    <!-- 直近の3件の投稿を取得して出力 -->
                    <?php
                    // 検索条件を定義
                    $myfood = [
                        'post_type' => 'food', // 投稿タイプ
                        'posts_per_page' => '4', // 4件を取得
                        'post__not_in' => array(get_the_ID()), //現在表示している記事のID
                        'orderby' => 'rand' // ランダムに
                    ];
                    // クエリを実行する
                    $query = new WP_Query($myfood);
                    ?>

                    <!-- WordPress ループの開始 -->
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : ?>
                            <?php $query->the_post(); ?>

                            <div class="other_spot_card food">

                                <!-- カード全体をhoverした時のリンク -->
                                <a href="<?php the_permalink(); ?>" tabindex="-1"></a>

                                <!-- 内側枠(飾り) -->
                                <div class="other_spot_card_inner food"></div>

                                <!-- カード画像 -->
                                <div class="other_spot_contant_img">
                                    <!-- <img src="../uploads/dummy3.jpg" alt="周辺スポットの写真"> -->

                                    <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示
                                    ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else : // なければnoimage画像をデフォルトで表示
                                    ?>
                                        <img src="<?php echo get_template_directory_uri() ?>/uploads/dummy6.jpg" alt="周辺スポットの写真">
                                    <?php endif; ?>
                                </div>

                                <!-- カードタグ -->
                                <!-- タクソノミーを取得する -->
                                <?php
                                $post_type = get_post_type(get_the_ID());
                                $taxonomies = get_object_taxonomies($post_type);

                                // $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names", "orderby" => "count"));

                                $taxonomy_names = wp_get_object_terms(
                                    get_the_ID(),
                                    $taxonomies,
                                    array(
                                        "fields" => "all",
                                        "orderby" => "taxonomy",
                                        "order" => "asc"
                                    )
                                );

                                // print_r($taxonomy_names);
                                ?>

                                <div class="other_spot_contant_tag food">
                                    <!-- <a href="#">喫茶店</a>
                                    <a href="#">洋食</a>
                                    <a href="#">ナポリタン</a>
                                    <a href="#">クリームソーダ</a>
                                    <a href="#">食べる</a> -->

                                    <!-- タクソノミーを出力 -->

                                    <?php
                                    if (!empty($taxonomy_names)) :
                                        foreach ($taxonomy_names as $tax_name) : ?>

                                            <?php
                                            // print_r($tax_name);
                                            $link = get_term_link($tax_name->term_id, $tax_name->taxonomy);
                                            ?>
                                            <a href="<?php echo $link; ?>"><?php echo $tax_name->name; ?></a>
                                        <?php endforeach; ?>
                                    <?php else :  ?>
                                    <?php endif;  ?>
                                </div>

                                <!-- カードタイトル -->
                                <div class="other_spot_content_name">
                                    <!-- <h3>ギャラリー喫茶グレイス</h3> -->
                                    <h3><?php the_field('restaurant_name'); ?></h3>
                                </div>

                                <!-- カードテキスト -->
                                <div class="other_spot_contant_text">
                                    <p>
                                        <!-- ここにはお店の説明文が入ります。
                                        ここにはお店の説明文が入ります。
                                        ここにはお店の説明文が入ります。
                                        ここにはお店の説明文が入ります。
                                        ここにはお店の説明文が入ります。
                                        ここにはお店の説明文が入ります。
                                        ここにはお店の説明文が入ります。
                                        ここにはお店の説明文が入ります。
                                        ここにはお店の説明文が入ります。
                                        ここにはお店の説明文が入ります。 -->
                                        <?php the_field('shop_info'); ?>
                                    </p>
                                </div>

                            </div>
                            <!-- WordPress ループの終了 -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                    <!-- カード ============ -->
                    <!-- <div class="other_spot_card food"> -->

                    <!-- カード全体をhoverした時のリンク -->
                    <!-- <a href="#" tabindex="-1"></a> -->

                    <!-- 内側枠(飾り) -->
                    <!-- <div class="other_spot_card_inner food"></div> -->

                    <!-- カード画像 -->
                    <!-- <div class="other_spot_contant_img">
                            <img src="../uploads/dummy5.jpg" alt="周辺スポットの写真">
                        </div> -->

                    <!-- カードタグ -->
                    <!-- <div class="other_spot_contant_tag food">
                            <a href="#">喫茶店</a>
                            <a href="#">洋食</a>
                            <a href="#">ナポリタン</a>
                            <a href="#">クリームソーダ</a>
                            <a href="#">食べる</a>
                        </div> -->

                    <!-- カードタイトル -->
                    <!-- <div class="other_spot_content_name">
                            <h3>ギャラリー喫茶グレイス</h3>
                        </div> -->

                    <!-- カードテキスト -->
                    <!-- <div class="other_spot_contant_text">
                            <p>
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                            </p>
                        </div> -->

                    <!-- </div> -->

                </div>

            </section>


        </main>

        <!-- フッター -->
        <footer>

        </footer>

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- slick -->
        <script src="<?php echo get_template_directory_uri() ?>/assets/js/slick.min.js"></script>

        <!-- colorbox -->
        <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.colorbox-min.js"></script>

        <!-- 自作js -->
        <script src="<?php echo get_template_directory_uri() ?>/assets/js/detail.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/js/gallery.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/js/contact.js"></script>
    </div>
</body>

</html>
