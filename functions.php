
<?php
/**
 * Fungsi utama tema SilfiEdu.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Mendaftarkan fitur tema.
 */
function silfiedu_setup() {
    load_theme_textdomain( 'silfiedu', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'custom-logo' );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    register_nav_menus(
        array(
            'primary' => __( 'Menu Utama', 'silfiedu' ),
        )
    );
}
add_action( 'after_setup_theme', 'silfiedu_setup' );

/**
 * Memuat stylesheet tema.
 */
function silfiedu_enqueue_assets() {
    wp_enqueue_style(
        'silfiedu-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'silfiedu_enqueue_assets' );

/**
 * Mendaftarkan area widget sidebar.
 */
function silfiedu_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Sidebar Artikel', 'silfiedu' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widget yang tampil di samping artikel.', 'silfiedu' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'silfiedu_widgets_init' );

/**
 * Mengatur panjang ringkasan artikel.
 */
function silfiedu_excerpt_length( $length ) {
    return 22;
}
add_filter( 'excerpt_length', 'silfiedu_excerpt_length', 999 );

/**
 * Teks lanjutan pada ringkasan artikel.
 */
function silfiedu_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'silfiedu_excerpt_more' );
