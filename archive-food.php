<?php get_header(); ?>

<div class="contents_top">
    <main class="contents">
        <!-- ページタイトル -->
        <section>
            <div class="title_container">
                <div>
                    <h2>お食事 一覧</h2>
                </div>
                <div class="title_box_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/food_list/so-da.png" alt=""></div>
            </div>
        </section>

        <!-- ページ解説 -->
        <div class="explanation_container">
            <div class="explanation_text">
                <h3 class="explanation_text_h3">昭和を感じるレトロ</h3>
                <p>ああああああああああああああああああああああああああああああああああああああ</p>
                <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</p>
                <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</p>
            </div>
            <!-- <div class="explanation_box"><img src="../assets/images/food_list/cafe.png" alt=""></div> -->
        </div>


        <!-- スライドショー -->

        <div class="screen_container ">
            <ul class="slider">
                <li><a href=""><img src="../uploads/food_list_screen01.jpg" alt=""></a></li>
                <li><a href=""><img src="../uploads/food_list_screen02.jpg" alt=""></a></li>
                <li><a href=""><img src="../uploads/food_list_screen03.jpg" alt=""></a></li>
                <li><a href=""><img src="../uploads/food_list_screen04.webp" alt=""></a></li>
                <li><a href=""><img src="../uploads/food_list_screen05.jpg" alt=""></a></li>
                <li><a href=""><img src="../uploads/food_list_screen06.jpg" alt=""></a></li>
                <!--/slider-->
            </ul>
        </div>


        <!-- カテゴリー -->

        <div class="category_container ">
            <div class="category_item 1">
                <div class="category_item_text">純喫茶</div>
            </div>
            <div class="category_item 2">
                <div class="category_item_text">和食</div>
            </div>
            <div class="category_item 3">
                <div class="category_item_text">洋食</div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery_bg2.png" alt="" class="bg">
        </div>

        <!-- 周辺のスポット ========================== -->
        <section id="card_list_container" class="card_list_container">

            <div class="card_list_title_container">
                <h2>検索結果○○件</h2>
            </div>

            <div class="card_list_box">

                <!-- カード ============ -->
                <!-- 直近の3件の投稿を取得して出力 -->
                <?php
                // 検索条件を定義
                $mypost = [
                    'post_type' => 'food', // 投稿タイプ
                    'posts_per_page' => '6', // 6件を取得
                    'orderby' => 'asc' //
                ];
                // クエリを実行する
                $query = new WP_Query($mypost);
                ?>

                <!-- WordPress ループの開始 -->
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : ?>
                        <?php $query->the_post(); ?>

                        <div class="card_list_content">

                            <!-- カード全体をhoverした時のリンク -->
                            <a href="#" tabindex="-1"></a>

                            <!-- 内側枠(飾り) -->
                            <div class="card_list_content_inner"></div>

                            <!-- カード画像 -->
                            <div class="card_list_contant_img">
                                <!-- <img src="../uploads/dummy.jpg" alt="周辺スポットの写真"> -->

                                <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示
                                ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : // なければnoimage画像をデフォルトで表示
                                ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/images/dummy6.jpg" alt="周辺スポットの写真">
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

                            <div class="card_list_contant_tag">
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
                            <div class="card_list_content_name">
                                <!-- <h3>ギャラリー喫茶グレイス</h3> -->
                                <h3><?php the_field('restaurant_name'); ?></h3>

                            </div>

                            <!-- カードテキスト -->
                            <div class="card_list_contant_text">
                                <p>
                                    <!-- ここにはお店の説明文が入ります。
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
                <div class="card_list_content">

                    <!-- カード全体をhoverした時のリンク -->
                    <a href="#" tabindex="-1"></a>

                    <!-- 内側枠(飾り) -->
                    <div class="card_list_content_inner"></div>

                    <!-- カード画像 -->
                    <div class="card_list_contant_img">
                        <img src="../uploads/dummy.jpg" alt="周辺スポットの写真">
                    </div>

                    <!-- カードタグ -->
                    <div class="card_list_contant_tag">
                        <a href="#">喫茶店</a>
                        <a href="#">洋食</a>
                        <a href="#">ナポリタン</a>
                        <a href="#">クリームソーダ</a>
                        <a href="#">食べる</a>
                    </div>


                    <!-- カードタイトル -->
                    <div class="card_list_content_name">
                        <h3>ギャラリー喫茶グレイス</h3>
                    </div>

                    <!-- カードテキスト -->
                    <div class="card_list_contant_text">
                        <p>
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                        </p>
                    </div>

                </div>


            </div>

        </section>
    </main>
</div>

<?php get_footer(); ?>
