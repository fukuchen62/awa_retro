<!-- header.phpを読み込む -->
<?php
get_header();
?>

<!-- メイン ================== -->
<main id="contact_main" class="contact_main">

    <!-- お問い合わせフォーム -->
    <div class="contact_form_container">

        <form class="contact_form_box" action="#" method="post">
            <p>※は必須項目</p>

            <table class="contact_form_table">
                <caption>お問い合わせ</caption>

                <tr>
                    <th>件名*</th>
                    <td>
                        <input type="text" name="name" required autofocus>
                    </td>
                </tr>

                <tr>
                    <th>氏名*</th>
                    <td>
                        <input type="text" name="name" required placeholder="徳島 レトロ">
                    </td>
                </tr>

                <tr>
                    <th>かな</th>
                    <td>
                        <input type="text" name="kana_name" required placeholder="とくしま れとろ">
                    </td>
                </tr>

                <tr>
                    <th>TEL</th>
                    <td>
                        <input type="tel" name="tel">
                    </td>
                </tr>

                <tr>
                    <th>E-mail*</th>
                    <td>
                        <input type="email" name="email" required placeholder="tokushima-1234@retroXXXX.com">
                        <div><small>※半角で入力してください</small></div>
                    </td>
                </tr>

                <tr>
                    <th>お問い合わせ内容*</th>
                    <td>
                        <textarea name="comment" cols="30" rows="5" required></textarea>
                    </td>
                </tr>
            </table>


            <!-- 個人情報の取り扱いについて -->
            <div class="parsonal_imfomation_check">
                <a href="../html/privacy_policy.html" target="_blank">
                    個人情報の取り扱いについて確認する
                </a>
            </div>

            <!-- 個人情報同意チェックボタン -->
            <div class="parsonal_imfomation_checkbox">
                <input type="checkbox" name="check" class="parsonal_imfomation_checkbox_data"> 同意する
            </div>

            <!-- クリア・入力内容確認ボタン -->
            <div class="contact_form_btns">
                <input type="reset" value="クリア">
                <input type="button" value="入力内容を確認" class="contact_form_btns_sbmit">
            </div>

        </form>

    </div>

</main>


<!-- WordPress ループの開始 -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <main>
            <section class="section is-black">
                <h2>お問い合わせ</h2>
            </section>
        </main>

        <!-- WordPress ループの終了 -->
    <?php endwhile; ?>
<?php endif; ?>

<!-- footer.phpを読み込む -->
<?php
get_footer();
?>
