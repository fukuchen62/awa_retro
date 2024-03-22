<!-- header.phpを読み込む -->
<?php
get_header();
?>

<!-- WordPress ループの開始 -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <main>
            <section class="section is-black">
                <h2p>ギャラリーページ</h2p>
            </section>
        </main>

        <!-- WordPress ループの終了 -->
    <?php endwhile; ?>
<?php endif; ?>

<!-- footer.phpを読み込む -->
<?php
get_footer();
?>
