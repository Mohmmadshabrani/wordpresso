<?php


$creative_portfolio_lite_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$creative_portfolio_lite_text_transform = get_theme_mod( 'menu_text_transform_creative_portfolio_lite','CAPITALISE');
    if($creative_portfolio_lite_text_transform == 'CAPITALISE'){

		$creative_portfolio_lite_custom_css .='#main-menu ul li a{';

			$creative_portfolio_lite_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$creative_portfolio_lite_custom_css .='}';

	}else if($creative_portfolio_lite_text_transform == 'UPPERCASE'){

		$creative_portfolio_lite_custom_css .='#main-menu ul li a{';

			$creative_portfolio_lite_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$creative_portfolio_lite_custom_css .='}';

	}else if($creative_portfolio_lite_text_transform == 'LOWERCASE'){

		$creative_portfolio_lite_custom_css .='#main-menu ul li a{';

			$creative_portfolio_lite_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$creative_portfolio_lite_custom_css .='}';
	}

	/*---------------------------Slider-content-alignment-------------------*/


$creative_portfolio_lite_slider_content_alignment = get_theme_mod( 'creative_portfolio_lite_slider_content_alignment','LEFT-ALIGN');

if($creative_portfolio_lite_slider_content_alignment == 'LEFT-ALIGN'){

	$creative_portfolio_lite_custom_css .='.blog_box{';

		$creative_portfolio_lite_custom_css .='text-align:left;';

	$creative_portfolio_lite_custom_css .='}';


}else if($creative_portfolio_lite_slider_content_alignment == 'CENTER-ALIGN'){

	$creative_portfolio_lite_custom_css .='.blog_box{';

		$creative_portfolio_lite_custom_css .='text-align:center; right: 30%; left: 30%;';

	$creative_portfolio_lite_custom_css .='}';


}else if($creative_portfolio_lite_slider_content_alignment == 'RIGHT-ALIGN'){

	$creative_portfolio_lite_custom_css .='.blog_box{';

		$creative_portfolio_lite_custom_css .='text-align:right; right: 55%; left: 18%;';

	$creative_portfolio_lite_custom_css .='}';

}


	/*---------------------------Copyright Text alignment-------------------*/

$creative_portfolio_lite_copyright_text_alignment = get_theme_mod( 'creative_portfolio_lite_copyright_text_alignment','CENTER-ALIGN');

 if($creative_portfolio_lite_copyright_text_alignment == 'LEFT-ALIGN'){

		$creative_portfolio_lite_custom_css .='.copy-text p{';

			$creative_portfolio_lite_custom_css .='text-align:left;';

		$creative_portfolio_lite_custom_css .='}';


	}else if($creative_portfolio_lite_copyright_text_alignment == 'CENTER-ALIGN'){

		$creative_portfolio_lite_custom_css .='.copy-text p{';

			$creative_portfolio_lite_custom_css .='text-align:center;';

		$creative_portfolio_lite_custom_css .='}';


	}else if($creative_portfolio_lite_copyright_text_alignment == 'RIGHT-ALIGN'){

		$creative_portfolio_lite_custom_css .='.copy-text p{';

			$creative_portfolio_lite_custom_css .='text-align:right;';

		$creative_portfolio_lite_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$creative_portfolio_lite_related_product_setting = get_theme_mod('creative_portfolio_lite_related_product_setting',true);

	if($creative_portfolio_lite_related_product_setting == false){

		$creative_portfolio_lite_custom_css .='.related.products, .related h2{';

			$creative_portfolio_lite_custom_css .='display: none;';

		$creative_portfolio_lite_custom_css .='}';
	}

/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$creative_portfolio_lite_scroll_top_position = get_theme_mod( 'creative_portfolio_lite_scroll_top_position','Right');

	if($creative_portfolio_lite_scroll_top_position == 'Right'){

		$creative_portfolio_lite_custom_css .='.scroll-up{';

			$creative_portfolio_lite_custom_css .='right: 20px;';

		$creative_portfolio_lite_custom_css .='}';

	}else if($creative_portfolio_lite_scroll_top_position == 'Left'){

		$creative_portfolio_lite_custom_css .='.scroll-up{';

			$creative_portfolio_lite_custom_css .='left: 20px;';

		$creative_portfolio_lite_custom_css .='}';

	}else if($creative_portfolio_lite_scroll_top_position == 'Center'){

		$creative_portfolio_lite_custom_css .='.scroll-up{';

			$creative_portfolio_lite_custom_css .='right: 50%;left: 50%;';

		$creative_portfolio_lite_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


	$creative_portfolio_lite_pagination_setting = get_theme_mod('creative_portfolio_lite_pagination_setting',true);

		if($creative_portfolio_lite_pagination_setting == false){

			$creative_portfolio_lite_custom_css .='.nav-links{';

				$creative_portfolio_lite_custom_css .='display: none;';

			$creative_portfolio_lite_custom_css .='}';
		}


		
	/*---------------------------Container Width-------------------*/

$creative_portfolio_lite_container_width = get_theme_mod('creative_portfolio_lite_container_width');

		$creative_portfolio_lite_custom_css .='body{';

			$creative_portfolio_lite_custom_css .='width: '.esc_attr($creative_portfolio_lite_container_width).'%; margin: auto';

		$creative_portfolio_lite_custom_css .='}';

