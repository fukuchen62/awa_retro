<!-- header.phpを読み込む -->
<?php
get_header();
?>

<!-- WordPress ループの開始 -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <!-- メイン ================== -->
        <main id="contact_main" class="contact_main">

            <!-- お問い合わせフォーム -->
            <div class="contact_form_container">

                <!-- 固定ページの中身を読み込ンで出力 -->
                <?php the_content(); ?>

            </div>

        </main>

        <!-- WordPress ループの終了 -->
    <?php endwhile; ?>
<?php endif; ?>

<!-- footer.phpを読み込む -->
<?php
get_footer();
?>
