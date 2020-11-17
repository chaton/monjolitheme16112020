<?php 

// ajout des menus
function register_my_menu(){
    register_nav_menus( array(
        'header-menu' => __( 'Menu De Tete'),
        'footer-menu'  => __( 'Menu De Pied'),
    ) );
}
add_action( 'init', 'register_my_menu', 0 );
