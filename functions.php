<?php

// 管理バーを非表示させる
// add_filter('show_admin_bar', '__return_false');


/**
 * テーマセットアップ後に、WordPressの初期化設定
 *
 * @return void
 */
function awaretro_after_setup_theme()
{
    /**
     * <title>タぐを出力する
     */
    add_theme_support('title-tag');

    /**
     * アイキャッチ画像を使用可能にする
     */
    add_theme_support('post-thumbnails');

    /**
     * カスタムメニュー機能を使用可能にする
     */
    add_theme_support('menus');
}
add_action('after_setup_theme', 'awaretro_after_setup_theme');

/**
 * スタイルシートとJSファイルを読み込む関数
 *
 * @return void
 */
function awaretro_wp_enqueue_scripts()
{
    // WEBサイトの共通のスタイルシート、JSファイルを読み込む
    // スタイルファイルを読み込む
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css');


    // googleフォント
    wp_enqueue_style('google-googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('google-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('google-kaisei', 'https://fonts.googleapis.com/css2?family=Kaisei+Opti:wght@700&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap');

    // リセットCSS
    wp_enqueue_style('awaretro-reset', get_template_directory_uri() . '/assets/css/reset.css');

    // 共通のスタイルシート
    // wp_enqueue_style('awaretro-app', get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_style('awaretro-common', get_template_directory_uri() . '/assets/css/common.css');

    // 自作のCSS
    wp_enqueue_style('awaretro-footer', get_template_directory_uri() . '/assets/css/footer.css');

    // wp_enqueue_style('awaretro-header', get_template_directory_uri() . '/assets/css/header.css');

    // slick CSS
    wp_enqueue_style('awaretro-slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('awaretro-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');

    // ハンバーガーCSS
    wp_enqueue_style('awaretro-hamburger-css', get_template_directory_uri() . '/assets/css/hamburger.css');

    // jQueryを読み込む
    // wp_enqueue_script('jquery');

    wp_deregister_script('jquery');

    wp_enqueue_script(
        'jquery-3.7.1',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js',
        '',
        '',
        false  //フッターに読み込むように
    );

    wp_enqueue_script(
        'awaretro-main',
        get_template_directory_uri() . '/assets/js/main.js',
        '',
        '',
        true  //フッターに読み込むように
    );

    // ハンバーガーJSファイルを読み込む
    wp_enqueue_script(
        'awaretro-hamburger',
        get_template_directory_uri() . '/assets/js/hamburger.js',
        '',
        '',
        true  //フッターに読み込むように
    );

    // ハンバーガーJSファイルを読み込む
    wp_enqueue_script(
        'awaretro-slick_min',
        get_template_directory_uri() . '/assets/js/slick.min.js',
        '',
        '',
        true  //フッターに読み込むように
    );


    // それぞれのページに必要とするスタイルシート、JSファイルを読み込む

    if (is_home()) {
        // トップページのKVのスライドショー
        // CSSファイルを読み込む
        // wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

        // JSファイルを読み込む
        // wp_enqueue_script(
        //     'slick-carousel',
        //     'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        //     '',
        //     '',
        //     true
        // );
        // JSファイルを読み込む
        // wp_enqueue_script(
        //     'awaretro-home',
        //     get_template_directory_uri() . '/assets/js/home.js',
        //     '',
        //     '',
        //     true
        // );
    } else if (is_page()) {

        wp_enqueue_style('awaretro-contact', get_template_directory_uri() . '/assets/css/contact.css');

        wp_enqueue_script(
            'awaretro-contact',
            get_template_directory_uri() . '/assets/js/contact.js',
            '',
            '',
            true
        );
    } else if (is_post_type_archive('gallery')) {

        wp_enqueue_style('awaretro-gallery', get_template_directory_uri() . '/assets/css/gallery.css');

        wp_enqueue_style('awaretro-colorbox', get_template_directory_uri() . '/assets/css/colorbox.css');

        // JSファイルを読み込む
        wp_enqueue_script(
            'awaretro-colorbox-min',
            get_template_directory_uri() . '/assets/js/jquery.colorbox-min.js',
            '',
            '',
            true
        );
        wp_enqueue_script(
            'awaretro-gallery',
            get_template_directory_uri() . '/assets/js/gallery.js',
            '',
            '',
            true
        );
    } else if (is_category()) {
        // カテゴリーページ

    } else if (is_tax()) {
        // タクソノミーページ

    } else if (is_single()) {
        // 汎用のsingleページ
        wp_enqueue_style('awaretro-detail', get_template_directory_uri() . '/assets/css/detail.css');

        wp_enqueue_script(
            'awaretro-detail',
            get_template_directory_uri() . '/assets/js/detail.js',
            '',
            '',
            true
        );
    } else if (is_singular('food')) {
        // 特定のfoodの詳細ページ
        // 汎用のsingleページ
        // wp_enqueue_style('awaretro-detail', get_template_directory_uri() . '/assets/css/detail.css');
    }
}
add_action('wp_enqueue_scripts', 'awaretro_wp_enqueue_scripts');
// add_action('読みだすタイミング', '呼び出す関数名');


/**
 * タイトルの区切り文字を設定する
 *
 * @param string $separator
 * @return string
 */
function awaretro_document_title_separator(string $separator): string
{
    $separator = '|';     //好きな文字をセットする
    return $separator;
}

// add_filter('呼び出すタイミング', '呼びだす関数名');
add_filter(
    'document_title_separator',
    'awaretro_document_title_separator'
);

/**
 * Contact Form 7の時には整形機能をOFFにする
 *
 * @return void
 */
function awaretro_wpcf7_autop()
{
    return false;
}
add_filter('wpcf7_autop_or_not', 'awaretro_wpcf7_autop');

/**
 * メインクエリを調整する
 *
 * @param [type] $query
 * @return void
 */
function awaretro_pre_get_posts($query)
{
    // 管理画面、またはメインクエリでないとき対象外とする
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    if ($query->is_home()) {
        // トップページの場合は変更する
        // $query->set('posts_per_page', 3);       //3件だけ
        // $query->set('category_name', 'news');   //カテゴリーnewsだけ
    } else if (is_search()) {
        //検索の場合は、投稿のみ対象とする
        // $query->set('post_type', 'post');
    } else if (is_post_type_archive('gallery')) {
        $query->set('posts_per_page', 9);       //9件だけ
        //ギャラリーの場合は、並びはランダムとする
        $query->set('orderby', 'rand');
    }

    //公開する投稿だけ
    $query->set('post_status', 'publish');
    return;
}
// アクションフックで関数を呼び出す
add_action('pre_get_posts', 'awaretro_pre_get_posts');


/**
 * descriptionを取得して出力関数
 *
 * @return void
 */
function fst_description()
{
    // トップページの場合は
    if (is_home()) {
        // トップページ
        $description = "トップページのデスクリプションです。";
    } else {
        // その他の下層ページ
        $description = "下層ページのデスクリプションです。";
    }
    echo $description;
    return;
}

/*-----------------------------------------
	ウィジェットの登録
-------------------------------------------*/
function theme_slug_widgets_init()
{
    register_sidebar(array(
        'name' => 'サイドバー', //ウィジェットの名前を入力
        'id' => 'sidebar', //ウィジェットに付けるid名を入力
    ));
}
add_action('widgets_init', 'theme_slug_widgets_init');;
