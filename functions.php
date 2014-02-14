<?php
/**
 * functions
 *
 * @package    WordPress
 * @subpackage gomi_ningen
 */

/**
 * RSS Feed
 * @since WordPress 3.0
 */
add_theme_support( 'automatic-feed-links' );

// sidebar definition
register_sidebar( $args = array(
        // サイドバーの名前、2つめの引数でテキストドメインを指定
        'name'          => __( 'メインのサイドバー', 'テーマのテキストドメイン' ),
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
