<?php get_header(); ?>

<!-- メイン ================== -->
<main id="detail_main" class="detail_main">

    <!-- お店の詳細エリア ========================-->
    <section id="shop_detail_container">

        <!-- お店のタイトルエリア ======-->
        <div class="shop_detail_title_container">

            <!-- ※背景画像1 -->
            <div class="detail_spot_bg1">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/detail/spot_detail_bg1.PNG" alt="背景画像1">
            </div>

            <h2 class="detail_title"><?php the_field('spot_name'); ?></h2>

            <div class="detail_title_sub">
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
                    <?php the_field('catchphrase'); ?>
                </p>
            </div>

        </div>


        <!-- スライダー ======-->
        <div class="shop_detail_slider_container">

            <div class="shop_detail_slider_box detail_filter">

                <div class="shop_detail_slider">
                    <?php for ($i = 1; $i <= 15; $i++) : ?>
                        <?php if (get_field('pic' . $i)) : ?>
                            <?php
                            $pic = get_field('pic' . $i);
                            $pic_url = $pic['sizes']['large']; //大サイズ画像
                            ?>
                            <div><img src="<?php echo $pic_url; ?>" alt="お店の写真<?php echo $i; ?>"></div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>

                <div class="shop_detail_slider_nav">
                    <?php for ($i = 1; $i <= 15; $i++) : ?>
                        <?php if (get_field('pic' . $i)) : ?>
                            <?php
                            $pic = get_field('pic' . $i);
                            $pic_url = $pic['sizes']['medium'];
                            ?>
                            <div><img src="<?php echo $pic_url; ?>" alt="お店の写真<?php echo $i; ?>"></div>
                        <?php endif; ?>
                    <?php endfor; ?>

                </div>
            </div>

        </div>



        <!-- ショップの紹介テキスト ======-->
        <div class="shop_text_container">


            <!-- ショップの紹介テキストの枠 -->
            <div class="shop_text_box">

                <!-- img & おすすめテキスト -->
                <div class="shop_point_content">

                    <div class="shop_point_item">
                        <img src="<?php the_field('spot_pic1'); ?>" alt="おすすめ写真">
                    </div>

                    <div class="shop_point_text_item">
                        <h3><span>イチオシ・</span><span>こだわり</span></h3>
                        <p>
                            <?php the_field('spot_detail'); ?>
                        </p>
                    </div>
                </div>

                <!-- 雰囲気・歴史・その他 テキスト -->
                <div class="shop_text_content">
                    <h3>雰囲気</h3>
                    <p>
                        <?php the_field('spot_vibe'); ?>
                    </p>

                    <h3>歴史</h3>
                    <p>
                        <?php the_field('spot_history'); ?>
                    </p>

                    <h3>その他</h3>
                    <p>
                        <?php the_field('spot_other'); ?>
                    </p>
                </div>

            </div>

            <!-- 人気・オススメ商品 -->
            <div class="detail_price_container">

                <!-- ※背景画像2 -->
                <div class="detail_spot_bg2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/detail/spot_detail_bg2.PNG" alt="背景画像2">
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
                            <td><?php the_field('spot_menu1'); ?></td>
                            <td><?php the_field('spot_price1'); ?></td>
                            <td>
                                <?php the_field('spot_summary1'); ?>
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
                            <td><?php the_field('spot_menu2'); ?></td>
                            <td><?php the_field('spot_price2'); ?></td>
                            <td><?php the_field('spot_summary2'); ?></td>

                            <!-- <td>バナナマフィン2</td>
                                    <td>1700円</td>
                                    <td>昭和の懐かしの味を再現した特別なスイーツ</td> -->
                        </tr>
                        <tr>
                            <td><?php the_field('spot_menu3'); ?></td>
                            <td><?php the_field('spot_price3'); ?></td>
                            <td><?php the_field('spot_summary3'); ?></td>
                            <!-- <td>チョコマフィン</td>
                                    <td>300円</td>
                                    <td>チョコチップの歯応えが美味しさを引き立てます</td> -->
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
        <div class="detail_spot_bg3">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/detail/spot_detail_bg3.PNG" alt="背景画像3">
        </div>

        <!-- コメント投稿欄 -->
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
            $myspot = [
                'post_type' => 'spot', // 投稿タイプ
                'posts_per_page' => '4', // 4件を取得
                'post__not_in' => array(get_the_ID()), //現在表示している記事のID
                'orderby' => 'rand' // ランダムに
            ];
            // クエリを実行する
            $query = new WP_Query($myspot);
            ?>

            <!-- WordPress ループの開始 -->
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : ?>
                    <?php $query->the_post(); ?>
                    <div class="other_spot_card">

                        <!-- カード全体をhoverした時のリンク -->
                        <a href="<?php the_permalink(); ?>" tabindex="-1"></a>

                        <!-- 内側枠(飾り) -->
                        <div class="other_spot_card_inner"></div>

                        <!-- カード画像 -->
                        <div class="other_spot_contant_img">
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
                        <div class="other_spot_contant_tag">
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
                            <h3>
                                <!-- ギャラリー喫茶グレイス <br>昭和53年創業 -->
                                <?php the_field('spot_name'); ?>
                            </h3>
                        </div>

                        <!-- カードテキスト -->
                        <div class="other_spot_contant_text">
                            <p>
                                <!-- ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。
                                ここにはお店の説明文が入ります。 -->
                                <?php the_field('catchphrase'); ?>
                            </p>
                        </div>

                    </div>
                    <!-- WordPress ループの終了 -->
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <!-- カード ============ -->
            <!-- <div class="other_spot_card"> -->

            <!-- カード全体をhoverした時のリンク -->
            <!-- <a href="#" tabindex="-1"></a> -->

            <!-- 内側枠(飾り) -->
            <!-- <div class="other_spot_card_inner"></div> -->

            <!-- カード画像 -->
            <!-- <div class="other_spot_contant_img">
                            <img src="../uploads/dummy1.jpg" alt="周辺スポットの写真">
                        </div> -->

            <!-- カードタグ -->
            <!-- <div class="other_spot_contant_tag">
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

<?php get_footer(); ?>
