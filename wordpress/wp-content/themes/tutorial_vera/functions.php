<?php

register_nav_menus( array(
    'main_menu' => 'Hauptmenü',
    'footer_menu' => 'Footermenü',
) );



add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

?>