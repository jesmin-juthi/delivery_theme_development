<?php 
	function delivery_customizer($wp_customize)
	{
		$wp_customize->add_section("delivery_theme_option", array(
			"title"		=> "Delivery Theme Option"
		));
		// header title
		$wp_customize->add_setting("header_title_settings", array(
			"default"	=> "Order Products Faster Easier",
			"transport" => "refresh",
			"type"		=> "theme_mod"
		));
		$wp_customize->add_control("header_title_controls",[
			"label"		=> "Header Title",
			"type"		=> "text",
			"section"	=> "delivery_theme_option",
			"settings"	=> "header_title_settings"
		]);
		// header title color 
		$wp_customize->add_setting("header_title_color", [
			"transport"	=> "refresh",
			"type"		=> "theme_mod"
		]);
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "header_title_color_c",[
			"label"		=> "Header Title Color",
			"section"	=> "delivery_theme_option",
			"settings"	=> "header_title_color"
		]));
		// header description
		$wp_customize->add_setting("header_desc_s", [
			"default"	=> "Order your favorite foods at any time and we will deliver them right to where you are.",
			"transport"	=> "refresh",
			"type"		=> "theme_mod"
		]);
		$wp_customize->add_control("header_desc_c", [
			"label"		=> "Header Description",
			"type"		=> "text",
			"section"	=> "delivery_theme_option",
			"settings"	=> "header_desc_s"
		]);
		// header description color 
		$wp_customize->add_setting("header_desc_color", [
			"transport"	=> "refresh",
			"type"		=> "theme_mod"
		]);
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "header_desc_color_c",[
			"label"		=> "Header Description Color",
			"section"	=> "delivery_theme_option",
			"settings"	=> "header_desc_color"
		]));
		// header button 
		$wp_customize->add_setting("header_btn_s", [
			"default"	=> "Get Started",
			"transport"	=> "refresh",
			"type"		=> "theme_mod" 
		]);
		$wp_customize->add_control("header_btn_c", [
			"label"		=> "Header Button Text",
			"type"		=> "text",
			"section"	=> "delivery_theme_option",
			"settings"	=> "header_btn_s"
		]);
		// header button color 
		$wp_customize->add_setting("header_btn_color", [
			"transport"	=> "refresh",
			"type"		=> "theme_mod"
		]);
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "header_btn_color_c",[
			"label"		=> "Header Button Color",
			"section"	=> "delivery_theme_option",
			"settings"	=> "header_btn_color"
		]));
		// header button bg color 
		$wp_customize->add_setting("header_btn_bg", [
			"transport"	=> "refresh",
			"type"		=> "theme_mod"
		]);
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "header_btn_bg_c",[
			"label"		=> "Header Button Background Color",
			"section"	=> "delivery_theme_option",
			"settings"	=> "header_btn_bg"
		]));
		// hero img
		$wp_customize->add_setting("hero_img", [
			"transport"	=> "refresh",
			"type"		=> "theme_mod"
		]);
		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, "hero_img_c",[
			"label"		=> "Hero Image",
			"section"	=> "delivery_theme_option",
			"settings"	=> "hero_img"
		]));
		// about header
		$wp_customize->add_setting("about_header_s", [
			"default"	=> "Find Out A Little More About Us",
			"transport"	=> "refresh",
			"type"		=> "theme_mod"
		]);
		$wp_customize->add_control("about_header_c", [
			"label"		=> "About Section Header",
			"type"		=> "text",
			"section" 	=> "delivery_theme_option",
			"settings"	=> "about_header_s"
		]);
		// about description
		$wp_customize->add_setting("about_desc_s", [
			"default"	=> "We are a company dedicated to the distribution of products by delivery to your home or to the place where you are, with the best quality of delivery.",
			"transport"	=> "refresh",
			"type"		=> "theme_mod"
		]);
		$wp_customize->add_control("about_desc_c", [
			"label"		=> "About Section Description",
			"type"		=> "textarea",
			"section"	=> "delivery_theme_option",
			"settings"	=> "about_desc_s"
		]);
	}

	add_action("customize_register", "delivery_customizer");





 ?>