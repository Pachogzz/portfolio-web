<?php
/**
 * Pacho González Portfolio - Child Theme Functions
 *
 * @package PachoPortfolio
 * @version 1.0.0
 */

// Prevenir acceso directo
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * ============================================================
 * ENQUEUE STYLES & SCRIPTS
 * ============================================================
 */

function pacho_portfolio_enqueue_styles() {
    // Parent theme (Kadence) styles
    $parent_style = 'kadence-global';

    wp_enqueue_style(
        $parent_style,
        get_template_directory_uri() . '/assets/css/global.min.css',
        array(),
        wp_get_theme( 'kadence' )->get( 'Version' )
    );

    // Child theme styles
    wp_enqueue_style(
        'pacho-portfolio-style',
        get_stylesheet_uri(),
        array( $parent_style ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'pacho_portfolio_enqueue_styles' );

/**
 * ============================================================
 * GOOGLE FONTS - Inter (misma que el portafolio actual)
 * ============================================================
 */

function pacho_portfolio_enqueue_fonts() {
    wp_enqueue_style(
        'pacho-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts', 'pacho_portfolio_enqueue_fonts' );

/**
 * ============================================================
 * THEME SETUP
 * ============================================================
 */

function pacho_portfolio_setup() {
    // Soporte para título del sitio
    add_theme_support( 'title-tag' );

    // Thumbnails
    add_theme_support( 'post-thumbnails' );

    // HTML5 markup
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Ancho del editor
    add_theme_support( 'editor-styles' );

    // Responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Alineamiento de bloques ancho
    add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'pacho_portfolio_setup' );

/**
 * ============================================================
 * SOPORTE BILINGÜE (Preparación para Polylang)
 * ============================================================
 */

function pacho_portfolio_load_textdomain() {
    load_child_theme_textdomain(
        'pacho-portfolio',
        get_stylesheet_directory() . '/languages'
    );
}
add_action( 'after_setup_theme', 'pacho_portfolio_load_textdomain' );

/**
 * Registrar strings para traducción con Polylang
 * Se ejecuta solo si Polylang está activo
 */
function pacho_portfolio_register_strings() {
    if ( function_exists( 'pll_register_string' ) ) {
        // Hero section
        pll_register_string( 'hero_headline', 'Diseño Web Profesional Para Tu Negocio', 'Pacho Portfolio' );
        pll_register_string( 'hero_subheadline', 'Sitios web modernos, rápidos y administrables que impulsan tu presencia digital.', 'Pacho Portfolio' );
        pll_register_string( 'hero_cta', 'Ver Servicios', 'Pacho Portfolio' );

        // Contact section
        pll_register_string( 'contact_cta', 'Hablemos de Tu Proyecto', 'Pacho Portfolio' );

        // Footer
        pll_register_string( 'footer_copyright', '© 2026 Francisco (Pacho) González. Todos los derechos reservados.', 'Pacho Portfolio' );
    }
}
add_action( 'init', 'pacho_portfolio_register_strings' );

/**
 * ============================================================
 * PERFORMANCE OPTIMIZATIONS
 * ============================================================
 */

// Remover emojis de WordPress (no los necesitamos)
function pacho_portfolio_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'pacho_portfolio_disable_emojis' );

// Remover versión de WordPress del head (seguridad)
remove_action( 'wp_head', 'wp_generator' );

// Remover links de Windows Live Writer
remove_action( 'wp_head', 'wlwmanifest_link' );

// Remover shortlink
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

/**
 * ============================================================
 * CUSTOM ADMIN BRANDING
 * ============================================================
 */

function pacho_portfolio_admin_footer() {
    echo '<span id="footer-thankyou">Desarrollado por <a href="https://pachogonzalez.click" target="_blank">Pacho González</a></span>';
}
add_filter( 'admin_footer_text', 'pacho_portfolio_admin_footer' );

/**
 * ============================================================
 * WHATSAPP INTEGRATION HELPER
 * ============================================================
 */

function pacho_portfolio_whatsapp_link( $message = '' ) {
    $phone = '5281191846320';
    $default_message = __( 'Hola Pacho! Me interesa trabajar contigo.', 'pacho-portfolio' );
    $msg = ! empty( $message ) ? $message : $default_message;
    return 'https://wa.me/' . $phone . '?text=' . urlencode( $msg );
}

/**
 * Shortcode para botón de WhatsApp
 * Uso: [pacho_whatsapp text="Contactar por WhatsApp" message="Hola!"]
 */
function pacho_portfolio_whatsapp_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'text'    => __( 'Contactar por WhatsApp', 'pacho-portfolio' ),
        'message' => '',
        'class'   => 'btn-primary',
    ), $atts, 'pacho_whatsapp' );

    $link = pacho_portfolio_whatsapp_link( $atts['message'] );

    return sprintf(
        '<a href="%s" target="_blank" rel="noopener noreferrer" class="%s">%s</a>',
        esc_url( $link ),
        esc_attr( $atts['class'] ),
        esc_html( $atts['text'] )
    );
}
add_shortcode( 'pacho_whatsapp', 'pacho_portfolio_whatsapp_shortcode' );
