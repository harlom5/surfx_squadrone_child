<?php
    function surfx_squadrone_child_enqueue_styles() {

        $parent_style = 'parent-style';

        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
    }

    function surfx_squadrone_child_scripts() {
        wp_enqueue_script(
            'surfx_header',
            get_stylesheet_directory_uri() . '/framework/js/header.misc.js',
            array( 'jquery' ),
            '',
            true
        );
    }

    wp_dequeue_script('squadrone-header');
    
    add_action( 'wp_enqueue_scripts', 'surfx_squadrone_child_scripts' );
    add_action( 'wp_enqueue_scripts', 'surfx_squadrone_child_enqueue_styles' );
?>

<!-- 
    // commented out in parent functions.php
    // custom theme js
	// wp_enqueue_script( 'squadrone-header', get_template_directory_uri() . '/framework/js/header.misc.js', array( 'jquery' ), '', true );
-->