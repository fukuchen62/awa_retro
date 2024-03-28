<?php get_header(); ?>

<!-- メイン -->
<main>
    <section id="food_contner" class="food_contner">
        <div class="food_contner_box">
            <!-- タイトル -->
            <div class="spot_title_box">
                <h2><span class="right_space">レトロスポット</span>一覧</h2>
            </div>

            <div class="food_content">

                <!-- スライドショー -->
                <div class="spotsarch_slider">
                    <div class="spotsarch_slider_img"></div>
                    <div class="spotsarch_slider_img"></div>
                    <div class="spotsarch_slider_img"></div>
                </div>

                <!-- 見出しと文章 -->
                <section class="sub_section_box">
                    <div class="sub_title_box">
                        <h3>建物や街並みで感じる昭和レトロ</h3>
                    </div>
                    <div class="sub_text_box">
                        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                    </div>
                </section>

                <!-- ボタン -->
                <div class="spot_btn_box">

                    <div class="spot_btn">
                        <a href="#" class="btn_a">
                            <span class="spot_name">ゲームセンター</span>
                        </a>
                    </div>

                    <div class="spot_btn">
                        <a href="#" class="btn_a">
                            <span class="spot_name">自販機</span>
                        </a>
                    </div>

                    <div class="spot_btn">
                        <a href="#" class="btn_a">
                            <span class="spot_name">建物</span>
                        </a>
                    </div>

                    <div class="spot_btn">
                        <a href="#" class="btn_a">
                            <span class="spot_name">街並み</span>
                        </a>
                    </div class="spot_btn">

                    <div class="spot_btn">
                        <a href="#" class="btn_a">
                            <span class="spot_name">お店</span>
                        </a>
                    </div>

                </div>

                <!-- 一覧のカード -->
                <div class="spot_card_list_box">

                    <!-- カード ============ -->
                    <!-- <div class="other_spot_card food"> -->

                    <!-- カード全体をhoverした時のリンク -->
                    <!-- <a href="#" tabindex="-1"></a> -->

                    <!-- 内側枠(飾り) -->
                    <!-- <div class="other_spot_card_inner food"></div> -->

                    <!-- カード画像 -->
                    <!-- <div class="other_spot_contant_img">
                                    <img src="img/dummy.jpg" alt="周辺スポットの写真">
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
                                    <h3>ギャラリー喫茶グレイス <br>昭和53年創業</h3>
                                </div> -->

                    <!-- カードテキスト -->
                    <!-- <div class="other_spot_contant_text">
                                    <p>
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    </p>
                                </div> -->

                    <!-- </div> -->

                    <!-- カード ============ -->
                    <!-- 直近の3件の投稿を取得して出力 -->
                    <?php
                    // 検索条件を定義
                    $myspot = [
                        'post_type' => 'spot', // 投稿タイプ
                        'posts_per_page' => '6', // 6件を取得
                        'orderby' => 'asc' //
                    ];
                    // クエリを実行する
                    $query = new WP_Query($myspot);
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
                                    <!-- <img src="../assets/images/dummy.jpg" alt="周辺スポットの写真"> -->
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
                                    <h3><?php the_field('spot_name'); ?></h3>
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
                </div>

                <!-- ページ番号と次へ進むリンク -->
                <!-- ページナビゲーション -->
                <?php if (function_exists('wp_pagenavi')) : ?>
                    <div class="spot_pagination_box">
                        <div class="spot_pagination">
                            <?php wp_pagenavi(); ?>
                            <!-- <a href="#">&laquo;</a>
                        <a href="#">1</a>
                        <a href="#" class="active">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">6</a>
                        <a href="#">&raquo;</a> -->

                        </div>
                    </div>
                <?php endif; ?>
                <!-- <div class="page_next_box">
                            <div>
                                <span>
                                    <a href="#">戻る</a>
                                </span>
                            </div>
                            <div class="page_box">
                                <span class="page_next_text">1/3</span>
                            </div>

                            <div class="next_box">
                                <span class="page_next_text">
                                    <a href="#" class="page_next_link">次へ</a>
                                </span>
                            </div>

                        </div> -->
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
