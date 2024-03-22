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

            <!-- WordPress ループの開始 -->

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>

                    <?php
                    $gallery = [
                        'post_type' => 'special', // 投稿タイプ
                        'posts_per_page' => 15, // 15件を取得
                        'post__not_in' => array(get_the_ID()), // 現在表示している記事のID
                        'orderby' => 'rand' // ランダムに
                    ];
                    // クエリを実行する
                    $query = new WP_Query($gallery);
                    ?>


                    <!-- 写真15枚表示 -->
                    <div class="gallery_img">
                        <a class="gallery_item" href="../uploads/dummy.jpg" rel="group01" title="ここに説明文を記載するここに説明文を記載するここに説明文を記載するここに説明文を記載するここに説明文を記載するここに説明文を記載するここに説明文を記載するここに説明文を記載する">
                            <img src="../uploads/dummy.jpg" alt="ギャラリー写真1">
                        </a>
                    </div>

                    <!-- WordPress ループの終了 -->
                <?php endwhile; ?>
            <?php endif; ?>



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
            </div>


            <!-- 背景のイラスト -->
            <div class="gallery_bgimg g_bg1"><img src="../uploads/gallery_bg1.png" alt="ギャラリーの背景画像1"></div>
            <div class="gallery_bgimg g_bg2"><img src="../uploads/gallery_bg2.png" alt="ギャラリーの背景画像2"></div>
            <div class="gallery_bgimg g_bg3"><img src="../uploads/gallery_bg3.png" alt="ギャラリーの背景画像3"></div>
            <div class="gallery_bgimg g_bg4"><img src="../uploads/gallery_bg4.png" alt="ギャラリーの背景画像4"></div>
            <div class="gallery_bgimg g_bg5"><img src="../uploads/gallery_bg2.png" alt="ギャラリーの背景画像5"></div>

        </div>


        <!-- ページネーション -->
        <div class="gallery_page">
            <p>＜ 1234......＞</p>
        </div>


    </section>



</main>

<!-- footer.phpを読み込む -->
<?php
get_footer();
?>
