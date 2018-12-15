<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}

add_action( 'widgets_init', 'register_my_menus' );

function misidebar() {
    register_sidebar(
        array (
            'name' => __( 'MiSidebar', 'twentyseventeen-child' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Sidebar personalizada', 'twentyseventeen-child' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'misidebar' );

?>