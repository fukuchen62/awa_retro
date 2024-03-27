<!-- header.phpを読み込む -->
<?php
get_header();
?>

<!-- メイン ================== -->
<main id="gallery_main" class="gallery_main">
    <div class="gallery_filter">

        <!-- ギャラリー ========================-->
        <section id="gallery_container" class="gallery_container">

            <h2>ギャラリー</h2>

            <div class="gallery_box">

                <!-- WordPress ループの開始 -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>

                        <!-- ギャラリー写真を表示 -->
                        <div class="gallery_img">
                            <?php
                            $gallery_img = get_field('gallery_img');
                            $gallery_url_large =
                                $gallery_img['sizes']['large'];
                            $gallery_url_medium =
                                $gallery_img['sizes']['medium'];
                            ?>

                            <a class="gallery_item" href="<?php echo $gallery_url_large; ?>" rel="group01" title="<?php the_field('gallery_text'); ?>">

                                <img src="<?php echo $gallery_url_medium; ?>" alt="">
                            </a>
                        </div>


                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- WordPress ループの終了 -->

                <!-- 背景のイラスト -->
                <div class="gallery_bgimg g_bg1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery_bg1.png" alt="ギャラリーの背景画像1"></div>
                <div class="gallery_bgimg g_bg2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery_bg2.png" alt="ギャラリーの背景画像2"></div>
                <div class="gallery_bgimg g_bg3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery_bg3.png" alt="ギャラリーの背景画像3"></div>
                <div class="gallery_bgimg g_bg4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery_bg4.png" alt="ギャラリーの背景画像4"></div>


            </div>

            <!-- ページナビゲーション -->
            <?php if (function_exists('wp_pagenavi')) : ?>
                <div class="gallery_pagination_box">
                    <?php wp_pagenavi(); ?>
                </div>
            <?php endif; ?>

            <!-- ページネーション -->
            <!-- <div class="gallery_pagination_box">
                <div class="gallery_pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
            </div> -->
        </section>
    </div>
</main>

<!-- footer.phpを読み込む -->
<?php
get_footer();
?>
