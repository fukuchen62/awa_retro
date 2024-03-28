<?php get_header(); ?>

<div class="contents_top">
    <main class="contents">
        <!-- ページタイトル -->
        <section>
            <div class="title_container">
                <div>
                    <h2>お食事 一覧</h2>
                </div>
                <div class="title_box_img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/food_list/so-da.png" alt=""></div>
            </div>
        </section>

        <!-- ページ解説 -->
        <div class="explanation_container">
            <div class="explanation_text">
                <h3 class="explanation_text_h3">昭和を感じるレトロ</h3>
                <p>ああああああああああああああああああああああああああああああああああああああ</p>
                <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</p>
                <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</p>
            </div>
            <!-- <div class="explanation_box"><img src="../assets/images/food_list/cafe.png" alt=""></div> -->
        </div>


        <!-- スライドショー -->

        <div class="screen_container ">
            <ul class="slider">
                <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/uploads/food_list_screen01.jpg" alt=""></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/uploads/food_list_screen02.jpg" alt=""></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/uploads/food_list_screen03.jpg" alt=""></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/uploads/food_list_screen04.webp" alt=""></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/uploads/food_list_screen05.jpg" alt=""></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/uploads/food_list_screen06.jpg" alt=""></a></li>
                <!--/slider-->
            </ul>
        </div>


        <!-- カテゴリー -->

        <div class="category_container ">
            <div class="category_item 1">
                <div class="category_item_text">純喫茶</div>
            </div>
            <div class="category_item 2">
                <div class="category_item_text">和食</div>
            </div>
            <div class="category_item 3">
                <div class="category_item_text">洋食</div>
            </div>
            <img src="../assets/images/gallery/gallery_bg2.png" alt="" class="bg">
        </div>

        <!-- 周辺のスポット ========================== -->
        <section id="card_list_container" class="card_list_container">

            <div class="card_list_title_container">
            </div>

            <div class="card_list_box">

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


            </div>

        </section>
    </main>
</div>
<?php get_footer(); ?>
