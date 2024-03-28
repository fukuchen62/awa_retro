<!-- header.phpを読み込む -->
<?php
get_header();
?>

<!-- WordPress ループの開始 -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <main class="main_conteiner">
            <div class="container">
                <section class="contents">
                    <div class="template_title_box">
                        <div class="template_title_box_text">
                            <h2>プライバシーポリシー</h2>
                        </div>
                    </div>

                    <div class="policy_box">
                        <div class="policy_box_data">
                            <div class="policy_box_data_h">
                                <h3>1章　個人情報の利用目的</h3>
                            </div>
                            <div class="policy_box_data_text">
                                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                                <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</p>
                                <p>うううううううううううううううううううううううううううううううううううううううううううううううううううううううう</p>
                            </div>

                            <div class="policy_box_data_h">
                                <h3>2章　広告について</h3>
                            </div>
                            <div class="policy_box_data_text">
                                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                                <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</p>
                                <p>うううううううううううううううううううううううううううううううううううううううううううううううううううううううう</p>
                            </div>

                            <div class="policy_box_data_h">
                                <h3>3章　アクセス解析ツールについて</h3>
                            </div>
                            <div class="policy_box_data_text">
                                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                                <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</p>
                                <p>うううううううううううううううううううううううううううううううううううううううううううううううううううううううう</p>
                            </div>

                            <div class="policy_box_data_h">
                                <h3>4章　コメントについて</h3>
                            </div>
                            <div class="policy_box_data_text">
                                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                                <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</p>
                                <p>うううううううううううううううううううううううううううううううううううううううううううううううううううううううう</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2項目目 -->

                    <div class="template_title_box">
                        <div class="template_title_box_text">
                            <h2>免責事項</h2>
                        </div>
                    </div>

                    <div class="policy_box">
                        <div class="policy_box_data">
                            <div class="policy_box_data_text">
                                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                                <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</p>
                                <p>うううううううううううううううううううううううううううううううううううううううううううううううううううううううう</p>
                            </div>


                        </div>
                    </div>
                    <!-- 3項目目 -->

                    <div class="template_title_box">
                        <div class="template_title_box_text">
                            <h2>著作権・肖像権について</h2>
                        </div>
                    </div>

                    <div class="policy_box">
                        <div class="policy_box_data">
                            <div class="policy_box_data_text">
                                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                                <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</p>
                                <p>うううううううううううううううううううううううううううううううううううううううううううううううううううううううう</p>
                            </div>


                        </div>
                    </div>

                </section>
            </div>
        </main>

        <!-- WordPress ループの終了 -->
    <?php endwhile; ?>
<?php endif; ?>

<!-- footer.phpを読み込む -->
<?php
get_footer();
?>
