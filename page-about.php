<!-- header.phpを読み込む -->
<?php
get_header();
?>


<!-- WordPress ループの開始 -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <main>
            <section class="site_about">
                <div>
                    <div class="title_box">
                        <h2 class="dashed">このサイトについて</h2>
                    </div>
                    <div>
                        <p>
                            「エモい」「懐かしい」Z世代を中心にトレンドとなっている“昭和レトロ”。<br>
                            リアルタイムで経験した“昭和世代”にとっては、懐かしくノスタルジック、当時を知らない“平成世代”にとっては、ユニークで新鮮に感じられています。 <br>
                            そんな“昭和レトロ”をコンセプトにしたお店やレトロスポットを紹介するサイトです。 </p>
                    </div>
                </div>

                <div>
                    <div class="title_box">
                        <h2 class="dashed">このサイトの制作意図</h2>
                    </div>
                    <div>
                        <p>
                            １０〜２０代の若者の間で「レトロブーム」が巻き起こり、古いものが爆発的に注目を集めています。現代に古いものが求められ、話題を集めているレトロ。<br>
                            徳島のレトロなお店やスポットを紹介し、訪れた方に阿波の昭和時代にタイムスリップしていただきたい。<br>
                            そして、ご協力いただくお店のPR、徳島の活性化に繋げたいという思いで制作しました。
                        </p>
                    </div>
                </div>

                <div>
                    <div class="title_box">
                        <h2 class="dashed">このサイトの使い方</h2>
                    </div>
                    <div>
                        <p>
                            サイトを利用するユーザーに向けて昭和レトロなお店やスポットの情報を提供する。<br>
                            ご協力いただくお店のPR、徳島の活性化に繋げる。 </p>
                    </div>
                </div>

            </section>
        </main>

        <!-- WordPress ループの終了 -->
    <?php endwhile; ?>
<?php endif; ?>


<!-- <main>
    <section class="section is-black">
        <h2>このサイトについて</h2>
    </section>
</main> -->


<!-- footer.phpを読み込む -->
<?php
get_footer();
?>
