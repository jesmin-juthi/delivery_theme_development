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
		// header description
		$wp_customize->add_setting("header_desc_s", [
			"default"	=> "Order your favorite foods at any time and we will deliver them right to where you are.",
			"transport"	=> "refresh",
			"type"		=> "theme_mod"
		]);
		$wp_customize->add_control("header_desc_c", [
			"label"		=> "Header Description",
			"section"	=> "delivery_theme_option",
			"settings"	=> "header_desc_s"
		]);
		// header button 
		$wp_customize->add_setting("header_btn_s", [
			"default"	=> "Get Started",
			"transport"	=> "refresh",
			"type"		=> "theme_mod" 
		]);
		$wp_customize->add_control("header_btn_c", [
			"label"		=> "Header Button Text",
			"section"	=> "delivery_theme_option",
			"settings"	=> "header_btn_s"
		]);
	}

	add_action("customize_register", "delivery_customizer");





 ?>