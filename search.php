<!-- header.phpを読み込む -->
<?php
get_header();
?>

<main class="main_conteiner">


    <!-- フォームを読み込む -->
    <?php get_search_form(); ?>

    <div class="container">
        <section class="contents">
            <div class="search_count_box">
                <div class="search_count_box_text">結果：「〇〇件」</div>
            </div>

        </section>
    </div>

    <div class="container">
        <!-- 周辺のスポット ========================== -->
        <section id="card_list_container" class="card_list_container">
            <div class="card_list_box">

                <!-- カード ============ -->
                <div class="card_list_content">

                    <!-- カード全体をhoverした時のリンク -->
                    <a href="#" tabindex="-1"></a>

                    <!-- 内側枠(飾り) -->
                    <div class="card_list_content_inner"></div>

                    <!-- カード画像 -->
                    <div class="card_list_contant_img">
                        <img src="../uploads/test_img1.png" alt="周辺スポットの写真">
                    </div>

                    <!-- カードタグ -->
                    <div class="card_list_contant_tag">
                        <a href="#">喫茶店</a>
                        <a href="#">洋食</a>
                        <a href="#">ナポリタン</a>
                        <a href="#">クリームソーダ</a>
                        <a href="#">食べる</a>
                    </div>


                    <!-- カードタイトル -->
                    <div class="card_list_content_name">
                        <h3>ギャラリー喫茶グレイス</h3>
                    </div>

                    <!-- カードテキスト -->
                    <div class="card_list_contant_text">
                        <p>
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                        </p>
                    </div>

                </div>

                <!-- カード ============ -->
                <div class="card_list_content">

                    <!-- カード全体をhoverした時のリンク -->
                    <a href="#" tabindex="-1"></a>

                    <!-- 内側枠(飾り) -->
                    <div class="card_list_content_inner"></div>

                    <!-- カード画像 -->
                    <div class="card_list_contant_img">
                        <img src="../uploads/dummy.jpg" alt="周辺スポットの写真">
                    </div>

                    <!-- カードタグ -->
                    <div class="card_list_contant_tag">
                        <a href="#">喫茶店</a>
                        <a href="#">洋食</a>
                        <a href="#">ナポリタン</a>
                        <a href="#">クリームソーダ</a>
                        <a href="#">食べる</a>
                    </div>


                    <!-- カードタイトル -->
                    <div class="card_list_content_name">
                        <h3>ギャラリー喫茶グレイス</h3>
                    </div>

                    <!-- カードテキスト -->
                    <div class="card_list_contant_text">
                        <p>
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                        </p>
                    </div>

                </div>

                <!-- カード ============ -->
                <div class="card_list_content">

                    <!-- カード全体をhoverした時のリンク -->
                    <a href="#" tabindex="-1"></a>

                    <!-- 内側枠(飾り) -->
                    <div class="card_list_content_inner"></div>

                    <!-- カード画像 -->
                    <div class="card_list_contant_img">
                        <img src="../uploads/dummy.jpg" alt="周辺スポットの写真">
                    </div>

                    <!-- カードタグ -->
                    <div class="card_list_contant_tag">
                        <a href="#">喫茶店</a>
                        <a href="#">洋食</a>
                        <a href="#">ナポリタン</a>
                        <a href="#">クリームソーダ</a>
                        <a href="#">食べる</a>
                    </div>


                    <!-- カードタイトル -->
                    <div class="card_list_content_name">
                        <h3>ギャラリー喫茶グレイス <br>昭和53年創業</h3>
                    </div>

                    <!-- カードテキスト -->
                    <div class="card_list_contant_text">
                        <p>
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                            ここにはお店の説明文が入ります。
                        </p>
                    </div>
                </div>

            </div>
            <div class="pagination_box">
                <div>1/3 次へ→</div>
            </div>

        </section>
    </div>

</main>

<!-- footer.phpを読み込む -->
<?php
get_footer();
?>
