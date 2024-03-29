<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>詳細検索</title>
    <!-- リセットCSS -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <!-- フォントリンク -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti:wght@700&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap" rel="stylesheet">
    <!-- slickスライダー -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- 共有CSS -->
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/header.css" />
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/card_list2.css">
    <!-- 自作CSS -->
    <link rel="stylesheet" href="../assets/css/search.css">
</head>

<body>
    <div class="wrap">
        <!-- header開始 -->
        <header>
            <div class="header_image">
                <img src="../assets/images/header01.png" alt="header画像" />
            </div>
        </header>
        <div class="wrapper">
            <div class="header__logo">
                <h1 class="js__title__logo">
                    <a href=""><img src="../assets/images/阿波レトロロゴ案１.png" alt="" /></a>
                </h1>
            </div>
            <!-- headerナビゲーション -->
            <btn class="hamburger__menu__btn"><span></span></btn>
            <nav class="gnav__menu__content">
                <div class="gnav__menu__content__inner"></div>

                <ul class="menu__wrap">
                    <a class="gnav__search__sp__title" href="">徳島昭和知識</a>
                    <li class="gnav color1">
                        <a class="gnav__title" href="">徳島昭和知識</a>
                    </li>
                </ul>

                <ul class="menu__wrap">
                    <a class="gnav__search__sp__title" href="">お食事処</a>
                    <li class="gnav color2">
                        <a class="gnav__title" href="">お食事処</a>
                        <ul class="menu__item__wrap stay__wrap">
                            <li class="menu__item">
                                <a href=""><img src="../assets/images/title_img1.png" alt="" />
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href=""><img src="../assets/images/title_img1.png" alt="" />
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href=""><img src="../assets/images/title_img1.png" alt="" />
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu__wrap">
                    <a class="gnav__search__sp__title" href="">スポット</a>
                    <li class="gnav color1">
                        <a class="gnav__title" href="">スポット</a>

                        <ul class="menu__item__wrap eat__wrap">
                            <li class="menu__item">
                                <a href=""><img src="../assets/images/title_img1.png" alt="" />
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href=""><img src="../assets/images/title_img1.png" alt="" />
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href=""><img src="../assets/images/title_img1.png" alt="" />
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href=""><img src="../assets/images/title_img1.png" alt="" />
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href=""><img src="../assets/images/title_img1.png" alt="" />
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu__wrap">
                    <a class="gnav__search__sp__title" href="">モデルコース</a>
                    <li class="gnav color2">
                        <a class="gnav__title" href="">モデルコース</a>

                        <ul class="menu__item__wrap model__course__wrap">
                            <li class="menu__item">
                                <a href=""><img src="../assets/images/title_img1.png" alt="" />
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href=""><img src="../assets/images/title_img1.png" alt="" />
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu__wrap">
                    <a class="gnav__search__sp__title" href="">コラム・情報</a>
                    <li class="gnav color1">
                        <a class="gnav__title" href="">コラム・情報</a>
                    </li>
                </ul>
                <ul class="menu__wrap">
                    <a class="gnav__search__sp__title" href="">ギャラリー</a>
                    <li class="gnav color2">
                        <a class="gnav__title" href="">ギャラリー</a>
                    </li>
                </ul>
                <ul class="menu__wrap">
                    <a class="gnav__search__sp__title" href="">詳細検索</a>
                    <li class="gnav color1">
                        <a class="gnav__title" href="">詳細検索</a>
                    </li>
                </ul>
                <ul class="menu__wrap">
                    <a class="gnav__search__sp__title" href="">お気に入り</a>
                    <li class="gnav color2">
                        <a class="gnav__title" href="">お気に入り</a>
                    </li>
                </ul>

                <ul class="menu__wrap done">
                    <li class="gnav color1"></li>
                </ul>
            </nav>
        </div>
        <main class="main_conteiner">
            <div class="container">
                <section class="contents">
                    <div class="template_title_box">
                        <div class="template_title_box_text">
                            <h2>カテゴリー検索</h2>
                        </div>
                    </div>

                    <!-- テキストボックス -->
                    <div class="search_box">
                        <div class="search_box_inner">
                            <form action="#" method="post">
                                <div class="search_word_title">語句で調べる</div>
                                <div class="search_word_input">
                                    <input type="text" name="word" class="search_word_input_data">
                                </div>
                                <!--  -->
                                <div class="search_category_title">カテゴリーで調べる</div>
                                <div class="search_form_title">お食事処で調べる</div>
                                <div class="search_form_input">
                                    <label class="search_form_label"><input type="checkbox" name="food" value="喫茶店・カフェ">喫茶店・カフェ</label>
                                    <label class="search_form_label"><input type="checkbox" name="food" value="ご飯">ご飯</label>
                                    <label class="search_form_label"><input type="checkbox" name="food" value="甘味処">甘味処</label>
                                </div>
                                <!--  -->
                                <div class="search_form_title">スポットで調べる</div>
                                <div class="search_form_input">
                                    <label class="search_form_label"><input type="checkbox" name="spot" value="自動販売機">自動販売機</label>
                                    <label class="search_form_label"><input type="checkbox" name="spot" value="お店">お店</label>
                                    <label class="search_form_label"><input type="checkbox" name="spot" value="お店">お店</label>
                                    <label class="search_form_label"><input type="checkbox" name="spot" value="お店">お店</label>
                                </div>
                                <!--  -->
                                <div class="search_form_title">用途で調べる</div>
                                <div class="search_form_input">
                                    <label class="search_form_label"><input type="checkbox" name="purpose" value="食べる">食べる</label>
                                    <label class="search_form_label"><input type="checkbox" name="purpose" value="見る">見る</label>
                                    <label class="search_form_label"><input type="checkbox" name="purpose" value="遊ぶ">遊ぶ</label>
                                    <label class="search_form_label"><input type="checkbox" name="purpose" value="デート">デート</label>
                                </div>
                                <!--  -->
                                <div class="search_form_title">地域で調べる</div>
                                <div class="search_form_input">
                                    <label class="search_form_label"><input type="checkbox" name="region" value="東部">東部</label>
                                    <label class="search_form_label"><input type="checkbox" name="region" value="西部">西部</label>
                                    <label class="search_form_label"><input type="checkbox" name="region" value="南部">南部</label>
                                    <label class="search_form_label"><input type="checkbox" name="region" value="徳島市">徳島市</label>
                                </div>
                                <div class="search_form_post">
                                    <div class="bs"><input type="submit" value="検索する"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>

            <div class="container">
                <section class="contents">
                    <div class="template_title_box2">
                        <div class="template_title_box_text">
                            <div class="section_text_green">
                                <div class="section_text_green_h2">
                                    <h2>検索</h2>
                                </div>
                            </div>
                        </div>
                    </div>
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
<?php get_footer(); ?>
