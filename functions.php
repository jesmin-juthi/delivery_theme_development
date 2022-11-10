<?php
    function delivery_theme_setup()
    {
        load_theme_textdomain("delivery");
        add_theme_support( "title-tag" );
        add_theme_support( "menus" );

        register_nav_menus( array(
            'primary'   => "Primary Menu",
        ) );
    }
add_action("after_setup_theme", "delivery_theme_setup");

    function delivery_assets_files()
    {
        // CSS Files
        wp_enqueue_style("delivery-theme-icons", "//cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css");
        wp_enqueue_style("delivery-theme-stylesheet", get_template_directory_uri() . "/assets/css/styles.css");

        // JS Files
        wp_enqueue_script("delivery-theme-main-js", get_template_directory_uri() . "/assets/js/main.js", null, "1.0.0", true);
    }

add_action("wp_enqueue_scripts","delivery_assets_files");

require_once get_theme_file_path("inc/option-panel/customizer.php");