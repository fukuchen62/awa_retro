<!-- ヘッダーの読込 -->
<?php
get_header();
?>


<!-- メイン ================== -->
<main id="gallery_main" class="gallery_main">

    <!-- ギャラリー ========================-->
    <section id="gallery_container" class="gallery_container">

        <h2>ギャラリー</h2>

        <div class="gallery_box">
            <?php
            $menu_terms = get_terms(['taxonomy' => 'menu']);
            if (!empty($menu_terms)) :
                // $args=['taxonomy' => 'menu',]  この2行、上と同じ効果
                // $menu_terms = get_terms($args)
                //'order' => 'DESC',
            ?>


                <!-- WordPress ループの開始 -->

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>

                        <!-- 写真15枚表示 -->
                        <a class="gallery_item" href="<?php echo get_the_term_link($gallery_img); ?>" rel="group01" title="<?php echo get_the_term_link($gallery_text); ?>">
                            <img src="<?php echo get_the_term_link($gallery_img); ?>">
                        </a>
        </div>

        <?php
                        $gallery = get_field('gallrey');
                        $gallery_url = $gallery_img['sizes']['medium'];
        ?>

        <?php
                        $gallery_img = [
                            'post_type' => 'gallery', // 投稿タイプ
                            'posts_per_page' => 15, // 15件を取得
                            'post__not_in' => array(get_the_ID()), // 現在表示している記事のID
                            'orderby' => 'rand' // ランダムに
                        ];
                        // クエリを実行する
                        $query = new WP_Query($gallery);
        ?>


        <!-- WordPress ループの終了 -->
    <?php endwhile; ?>
<?php endif; ?>



<!-- 背景のイラスト -->
<div class="gallery_bgimg g_bg1"><img src="<?php echo get_template_directory_uri(); ?>../uploads/gallery_bg1.png" alt="ギャラリーの背景画像1"></div>
<div class="gallery_bgimg g_bg2"><img src="<?php echo get_template_directory_uri(); ?>../uploads/gallery_bg2.png" alt="ギャラリーの背景画像2"></div>
<div class="gallery_bgimg g_bg3"><img src="<?php echo get_template_directory_uri(); ?>../uploads/gallery_bg3.png" alt="ギャラリーの背景画像3"></div>
<div class="gallery_bgimg g_bg4"><img src="<?php echo get_template_directory_uri(); ?>../uploads/gallery_bg4.png" alt="ギャラリーの背景画像4"></div>
<div class="gallery_bgimg g_bg5"><img src="<?php echo get_template_directory_uri(); ?>../uploads/gallery_bg2.png" alt="ギャラリーの背景画像5"></div>

</div>


<!-- ページネーション -->
<?php
                if (function_exists('wp_pagenavi')) :
?>
    <div class="gallery_page">
        <?php
                    wp_pagenavi();
        ?>
    </div>
<?php
                endif;
?>



    </section>



</main>

<!-- footer.phpを読み込む -->
<?php
get_footer();
?>
