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

                        <!-- 写真15枚表示 -->
                        <div class="gallery_img">

                            <a class="gallery_item" href="#">

                                <?php
                                $gallery_img = get_field('gallery_img');

                                // print_r($gallery_img);

                                // $gallery_url = $gallery_img['sizes']['large'];

                                // print_r($gallery_url);
                                ?>



                                <img src="http://localhost/awa_retro/wp-content/uploads/2024/03/column01_01-1.jpg" alt="ギャラリー写真1">
                                <img src="http://localhost/awa_retro/wp-content/uploads/2024/03/column01_01-1.jpg" alt="ギャラリー写真1">
                                <img src="http://localhost/awa_retro/wp-content/uploads/2024/03/column01_01-1.jpg" alt="ギャラリー写真1">
                                <img src="http://localhost/awa_retro/wp-content/uploads/2024/03/column01_01-1.jpg" alt="ギャラリー写真1">
                                <img src="http://localhost/awa_retro/wp-content/uploads/2024/03/column01_01-1.jpg" alt="ギャラリー写真1">
                            </a>
                        </div>

                        <!-- WordPress ループの終了 -->
                    <?php endwhile; ?>
                <?php endif; ?>

                <!-- <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy1.jpg" rel="group01">
                        <img src="../uploads/dummy1.jpg" alt="ギャラリー写真2">
                    </a>
                </div> -->

                <!-- <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy2.png" rel="group01">
                        <img src="../uploads/dummy2.png" alt="ギャラリー写真3">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy3.jpg" rel="group01">
                        <img src="../uploads/dummy3.jpg" alt="ギャラリー写真4">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy4.jpg" rel="group01">
                        <img src="../uploads/dummy4.jpg" alt="ギャラリー写真5">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy5.jpg" rel="group01">
                        <img src="../uploads/dummy5.jpg" alt="ギャラリー写真5">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy6.jpg" rel="group01">
                        <img src="../uploads/dummy6.jpg" alt="ギャラリー写真5">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy.jpg" rel="group01" title="ここに説明文を記載する">
                        <img src="../uploads/dummy.jpg" alt="ギャラリー写真1">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy1.jpg" rel="group01">
                        <img src="../uploads/dummy1.jpg" alt="ギャラリー写真2">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy2.png" rel="group01">
                        <img src="../uploads/dummy2.png" alt="ギャラリー写真3">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy3.jpg" rel="group01">
                        <img src="../uploads/dummy3.jpg" alt="ギャラリー写真4">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy4.jpg" rel="group01">
                        <img src="../uploads/dummy4.jpg" alt="ギャラリー写真5">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy5.jpg" rel="group01">
                        <img src="../uploads/dummy5.jpg" alt="ギャラリー写真5">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy6.jpg" rel="group01">
                        <img src="../uploads/dummy6.jpg" alt="ギャラリー写真5">
                    </a>
                </div>

                <div class="gallery_img">
                    <a class="gallery_item" href="../uploads/dummy.jpg" rel="group01" title="ここに説明文を記載する">
                        <img src="../uploads/dummy.jpg" alt="ギャラリー写真1">
                    </a>
                </div> -->


                <!-- 背景のイラスト -->
                <div class="gallery_bgimg g_bg1"><img src="<?php echo get_template_directory_uri(); ?>/uploads/gallery_bg1.png" alt="ギャラリーの背景画像1"></div>
                <div class="gallery_bgimg g_bg2"><img src="<?php echo get_template_directory_uri(); ?>/uploads/gallery_bg2.png" alt="ギャラリーの背景画像2"></div>
                <div class="gallery_bgimg g_bg3"><img src="<?php echo get_template_directory_uri(); ?>/uploads/gallery_bg3.png" alt="ギャラリーの背景画像3"></div>
                <div class="gallery_bgimg g_bg4"><img src="<?php echo get_template_directory_uri(); ?>/uploads/gallery_bg4.png" alt="ギャラリーの背景画像4"></div>
                <div class="gallery_bgimg g_bg5"><img src="<?php echo get_template_directory_uri(); ?>/uploads/gallery_bg2.png" alt="ギャラリーの背景画像5"></div>

            </div>


            <!-- ページネーション -->
            <div class="gallery_pagination_box">
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
            </div>


        </section>

    </div>
</main>


<!-- jQuery -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

<!-- slick -->
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script> -->

<!-- colorbox -->
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.colorbox-min.js"></script> -->

<!-- 共通 -->
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script> -->


<!-- footer.phpを読み込む -->
<?php
get_footer();
?>
