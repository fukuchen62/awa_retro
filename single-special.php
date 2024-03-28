<?php get_header(); ?>

<main>


    <section class="colamn_list_container">
        <div class="colamn_body">
            <div class="colamn_title_box">
                <p class="small"><time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j') ?></time></p>
                <div class="colamn_tag">
                    <!-- 豆知識 -->
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
                <h3 class="colamn_titile"><?php the_title(); ?></h3>
            </div>
            <div></div>
            <div class="colamn_contant_img"><a class="detail_link" href="spot_detail.html"><span>→詳細ページへ</span></a>
                <?php the_content(); ?>
                <p class="comments">注釈</p>
            </div>
            <div class="colamn_commnt">
                <!-- <p>テキストテキストテキストテキストテキストテキスト <br>
                            テキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p> -->
            </div>
            <div class="colamn_contant_img">
                <!-- <img src="../uploads/baic.jpg" alt="インタビュー画像"> -->
            </div>
        </div>
    </section>

    <div class="colamn_list">
        <div class="title_box">
            <h3 class="colamn_titile">オススメ情報</h3>
        </div>

        <div>
            <div class="colamn_box">
                <!-- 直近の3件の投稿を取得して出力 -->
                <?php
                // 検索条件を定義
                $mypost = [
                    'post_type' => 'special', // 投稿タイプ
                    'posts_per_page' => '4', // 4件を取得
                    'post__not_in' => array(get_the_ID()), //現在表示している記事のID
                    'orderby' => 'rand' // ランダムに
                ];
                // クエリを実行する
                $query = new WP_Query($mypost);
                ?>

                <!-- WordPress ループの開始 -->
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : ?>
                        <?php $query->the_post(); ?>

                        <div class="colamn_card">

                            <!-- カード全体をhoverした時のリンク -->
                            <a href="<?php the_permalink(); ?>" tabindex="-1"></a>

                            <!-- 内側枠(飾り) -->
                            <div class="colamn_card_inner"></div>

                            <!-- カード画像 -->
                            <div class="colamn_contant_img">
                                <!-- <img src="../uploads/baic.jpg" alt="コラム写真"> -->
                                <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示
                                ?>
                                    <?php the_post_thumbnail(); ?>
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
                            <div class="colamn_contant_tag">
                                <!-- <a href="#">豆知識</a>
                                <a href="#">体験</a>
                                <a href="#">コラム</a> -->
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
                            <div class="colamn_content_name">
                                <!-- <h3>ギャラリー喫茶グレイス <br>昭和53年創業</h3> -->
                                <h3><?php the_field('sp_title1'); ?></h3>
                            </div>

                        </div>

                        <!-- WordPress ループの終了 -->
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

            </div>
        </div>
    </div>


</main>
<?php get_footer(); ?>
