<?php


$foodie_restaurant_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$foodie_restaurant_text_transform = get_theme_mod( 'menu_text_transform_foodie_restaurant','CAPITALISE');
    if($foodie_restaurant_text_transform == 'CAPITALISE'){

		$foodie_restaurant_custom_css .='#main-menu ul li a{';

			$foodie_restaurant_custom_css .='text-transform: capitalize ; font-size:14px;';

		$foodie_restaurant_custom_css .='}';

	}else if($foodie_restaurant_text_transform == 'UPPERCASE'){

		$foodie_restaurant_custom_css .='#main-menu ul li a{';

			$foodie_restaurant_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$foodie_restaurant_custom_css .='}';

	}else if($foodie_restaurant_text_transform == 'LOWERCASE'){

		$foodie_restaurant_custom_css .='#main-menu ul li a{';

			$foodie_restaurant_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$foodie_restaurant_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$foodie_restaurant_container_width = get_theme_mod('foodie_restaurant_container_width');

		$foodie_restaurant_custom_css .='body{';

			$foodie_restaurant_custom_css .='width: '.esc_attr($foodie_restaurant_container_width).'%; margin: auto;';

		$foodie_restaurant_custom_css .='}';
