<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レトロスポット一覧</title>


    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/reset.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/common.css">
    <!-- 自分のcss -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/spot_list.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti:wght@700&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrap">
        <!-- ヘッダー -->
        <header></header>

        <!-- ナビゲーション -->
        <nav></nav>

        <!-- メイン -->
        <main>
            <section id="food_contner" class="food_contner">
                <div class="food_contner_box">
                    <!-- タイトル -->
                    <div class="spot_title_box">
                        <h2><span class="right_space">レトロスポット</span>一覧</h2>
                    </div>

                    <div class="food_content">

                        <!-- スライドショー -->
                        <div class="spotsarch_slider">
                            <div class="spotsarch_slider_img"></div>
                            <div class="spotsarch_slider_img"></div>
                            <div class="spotsarch_slider_img"></div>
                        </div>

                        <!-- 見出しと文章 -->
                        <section class="sub_section_box">
                            <div class="sub_title_box">
                                <h3>建物や街並みで感じる昭和レトロ</h3>
                            </div>
                            <div class="sub_text_box">
                                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
                            </div>
                        </section>

                        <!-- ボタン -->
                        <div class="spot_btn_box">

                            <div class="spot_btn">
                                <a href="#" class="btn_a">
                                    <span class="spot_name">ゲームセンター</span>
                                </a>
                            </div>

                            <div class="spot_btn">
                                <a href="#" class="btn_a">
                                    <span class="spot_name">自販機</span>
                                </a>
                            </div>

                            <div class="spot_btn">
                                <a href="#" class="btn_a">
                                    <span class="spot_name">建物</span>
                                </a>
                            </div>

                            <div class="spot_btn">
                                <a href="#" class="btn_a">
                                    <span class="spot_name">街並み</span>
                                </a>
                            </div class="spot_btn">

                            <div class="spot_btn">
                                <a href="#" class="btn_a">
                                    <span class="spot_name">お店</span>
                                </a>
                            </div>

                        </div>

                        <!-- 一覧のカード -->
                        <div class="spot_card_list_box">

                            <!-- カード ============ -->
                            <!-- <div class="other_spot_card food"> -->

                            <!-- カード全体をhoverした時のリンク -->
                            <!-- <a href="#" tabindex="-1"></a> -->

                            <!-- 内側枠(飾り) -->
                            <!-- <div class="other_spot_card_inner food"></div> -->

                            <!-- カード画像 -->
                            <!-- <div class="other_spot_contant_img">
                                    <img src="img/dummy.jpg" alt="周辺スポットの写真">
                                </div> -->

                            <!-- カードタグ -->
                            <!-- <div class="other_spot_contant_tag food">
                                    <a href="#">喫茶店</a>
                                    <a href="#">洋食</a>
                                    <a href="#">ナポリタン</a>
                                    <a href="#">クリームソーダ</a>
                                    <a href="#">食べる</a>
                                </div> -->

                            <!-- カードタイトル -->
                            <!-- <div class="other_spot_content_name">
                                    <h3>ギャラリー喫茶グレイス <br>昭和53年創業</h3>
                                </div> -->

                            <!-- カードテキスト -->
                            <!-- <div class="other_spot_contant_text">
                                    <p>
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    ここにはお店の説明文が入ります。
                                    </p>
                                </div> -->

                            <!-- </div> -->

                            <!-- カード ============ -->
                            <div class="card_list_content">

                                <!-- カード全体をhoverした時のリンク -->
                                <a href="#" tabindex="-1"></a>

                                <!-- 内側枠(飾り) -->
                                <div class="card_list_content_inner"></div>

                                <!-- カード画像 -->
                                <div class="card_list_contant_img">
                                    <img src="../assets/images/dummy.jpg" alt="周辺スポットの写真">
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
                                    <img src="../assets/images/dummy.jpg" alt="周辺スポットの写真">
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
                                    <img src="../assets/images/dummy.jpg" alt="周辺スポットの写真">
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
                                    <img src="../assets/images/dummy.jpg" alt="周辺スポットの写真">
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
                                    <img src="../assets/images/dummy.jpg" alt="周辺スポットの写真">
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
                                    <img src="../assets/images/dummy.jpg" alt="周辺スポットの写真">
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
                        </div>

                        <!-- ページ番号と次へ進むリンク -->
                        <div class="spot_pagination_box">
                            <div class="spot_pagination">
                                <a href="#">&laquo;</a>
                                <a href="#">1</a>
                                <a href="#" class="active">2</a>
                                <a href="#">3</a>
                                <!-- <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">6</a> -->
                                <a href="#">&raquo;</a>
                            </div>
                        </div>

                        <!-- <div class="page_next_box">
                            <div>
                                <span>
                                    <a href="#">戻る</a>
                                </span>
                            </div>
                            <div class="page_box">
                                <span class="page_next_text">1/3</span>
                            </div>

                            <div class="next_box">
                                <span class="page_next_text">
                                    <a href="#" class="page_next_link">次へ</a>
                                </span>
                            </div>

                        </div> -->
                    </div>
                </div>
            </section>
        </main>

        <!-- フッター -->
        <footer></footer>
    </div>

</body>

</html>
