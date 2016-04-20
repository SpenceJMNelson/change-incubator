<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'challenge-menu' => __( 'Challenge Menu' ),
      'solution-menu' => __( 'Solution Menu' ),
      'resources-menu' => __( 'Resources Menu' ),
      'footer-menu' => __( 'Footer Menu' )

    )
  );
}
add_action( 'init', 'register_my_menus' );

?>