<?php 

    function registreerWidgets() {
        register_sidebar(
            array(
                'id' => 'sidebar_info',
                'name' => 'Zijkant Sidebar'
            )
        );
    }

    add_action('widgets_init', 'registreerWidgets');

    function registerMenu() {
        register_nav_menu('hoofdmenu', 'Mijn hoofdmenu');
    }

    add_action('init', 'registerMenu');

?>