<?php 

// Cuando inicia el tema
function test_credibanco_setup() {
    // Habilitar Imagenes destacadas
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'test_credibanco_setup');


/* Menu principal */
function test_credibanco() {
    register_nav_menus( array(
        'menu-principal' => __( 'Menu Principal', 'test_credibanco')
    ) );
}
add_action( 'init', 'test_credibanco' );

/* Scripts y Styles */
function test_credibanco_styles_scripts() {
    // Reset.css
    /* wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '2.0'); */
    // Fuente
    wp_enqueue_style( 'gilroy', 'https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css', array(), '1.0.0');
    //Hoja de estilos
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0.2');
    //Hoja de estilos root
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0');
    // JS Bootstrap
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.0.2', true);
    // JS Custom
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'test_credibanco_styles_scripts' )

?>