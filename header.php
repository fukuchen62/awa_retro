<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->

    <!-- reset CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="../assets/css/reset.css"> -->

    <!-- slick CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css"> -->

    <!-- 共通のCSS -->
    <!-- <link rel="stylesheet" href="../assets/css/common.css"> -->

    <!-- 自作のCSS -->
    <!-- <link rel="stylesheet" href="../assets/css/single.css"> -->

    <!-- googleフォント -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti:wght@700&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap" rel="stylesheet"> -->

    <!-- ハンバーガー -->
    <!-- <link rel="stylesheet" href="../assets/css/hamburger.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/hamburger.js"></script> -->

    <?php
    wp_head();
    ?>



</head>

<body <?php body_class(); ?>>
    <?php
    wp_body_open();
    ?>

    <div class="wrap">
        <header>
            <div class="header_image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header01.png" alt="header画像">
            </div>

            <div class="gnav">
                <div class="logo_box">
                    <img src="<?php echo get_template_directory_uri(); ?>/uploads/阿波レトロロゴ案１.png" alt="ロゴ画像">
                </div>
                <div class="nav_inner">
                    <nav>
                        <ul>
                            <li class="nav_item color2">
                            </li>
                            <li class="nav_item color1">
                            </li>

                            <li class="nav_item color2">
                                <a href="<?php echo home_url('/trivia'); ?>"><span class="nav_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/01415.png" alt="徳島昭和知識マーク" /></span>徳島昭和知識</a>
                            </li>
                            <li class="nav_item color1">
                                <a href="<?php echo home_url('/food'); ?>"><span class="nav_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cofee_l.png" alt="お食事処マーク" /></span>お食事処</a>
                            </li>
                            <li class="nav_item color2">
                                <a href="<?php echo home_url('/spot'); ?>"><span class="nav_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/00636.png" alt="レトロスポットマーク" /></span>レトロスポット</a>
                            </li>
                            <li class="nav_item color1">
                                <a href="<?php echo home_url('/course'); ?>"><span class=" nav_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/00714.png" alt="モデルコースマーク" /></span>モデルコース</a>
                            </li>
                            <li class="nav_item color2">
                                <a href="<?php echo home_url('/special'); ?>"><span class="nav_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/00714.png" alt="コラム・情報マーク" /></span>コラム・情報</a>
                            </li>
                            <li class="nav_item color1">
                                <a href="<?php echo home_url('/gallery'); ?>"><span class="nav_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/00091.png" alt="ギャラリーマーク" /></span>ギャラリー</a>
                            </li>
                            <li class="nav_item color2">
                                <a href="<?php echo home_url('/'); ?>/?s="><span class="nav_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/00714.png" alt="詳細検索マーク" /></span>詳細検索</a>
                            </li>
                            <li class="nav_item color1">
                                <a href="<?php echo home_url('/mypage'); ?>"><span class="nav_icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/00714.png" alt="お気に入りマーク" /></span>お気に入り</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="hamburger">
                <!-- <div class="logo">LOGO</div> -->
                <div class="openbtn1">
                    <p class="btn-gNav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </p>
                </div>
                <nav class="gNav">
                    <ul class="gNav-menu">
                        <li><a href="<?php echo home_url('/trivia'); ?>">徳島昭和知識</a></li>
                        <li><a href="<?php echo home_url('/food'); ?>">お食事処</a></li>
                        <li><a href="<?php echo home_url('/spot'); ?>">レトロスポット</a></li>
                        <li><a href="<?php echo home_url('/course'); ?>">モデルコース</a></li>
                        <li><a href="<?php echo home_url('/special'); ?>">コラム・情報</a></li>
                        <li><a href="<?php echo home_url('/gallery'); ?>">ギャラリー</a></li>
                        <li><a href="<?php echo home_url('/'); ?>/?s=">詳細検索</a></li>
                        <li><a href="<?php echo home_url('/mypage'); ?>">お気に入り</a></li>
                    </ul>
                </nav>
            </div>
        </header>


