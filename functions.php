<?php
/**
 * functions
 *
 * @package    WordPress
 * @subpackage gomi_ningen
 */

if ( ! isset( $content_width ) )
     $content_width = 585;
 
if ( ! function_exists( 'hoho_setup' ) ):
    function hoho_setup() {
        // ここに add_theme_support を書いていく
    }
endif;

// 'after_setup_theme' フックが実行された時に 'hoho_setup' 関数を実行する処理
add_action( 'after_setup_theme', 'hoho_setup' );


/**
 * RSS Feed
 * @since WordPress 3.0
 */
add_theme_support( 'automatic-feed-links' );


// sidebar definition
register_sidebar( $args = array(
        // サイドバーの名前、2つめの引数でテキストドメインを指定
        'name'          => __( 'sidebar name', 'text domain' ),
        // サイドバー呼び出し用のID。小文字かつスペースは無きよう。
        'id'            => 'sidebar-main',
        // サイドバーの説明
        'description'   => '',
        // サイドバーウィジェットに付加されるクラス
        'class'         => '',
        // ウィジェットの前に配置する HTML
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        // ウィジェットの後に配置する HTML
        'after_widget'  => '</aside>',
        // ウィジェットタイトルの前に配置する HTML
        'before_title'  => '<h3 class="widgettitle">',
        // ウィジェットタイトルの後に配置する HTML
        'after_title'   => '</h3>' )
);
