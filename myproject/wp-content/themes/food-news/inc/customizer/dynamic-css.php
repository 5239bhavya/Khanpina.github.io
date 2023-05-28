<?php
function food_news_dynamic_css() {
	wp_enqueue_style( 'food-news', get_stylesheet_uri(), array(), FOOD_NEWS_VERSION );

        $dynamic_css = "";

        $site_title_color = esc_attr( get_theme_mod( 'site_title_color_option', '#ffffff' ) );
        $site_tagline_color = esc_attr( get_theme_mod( 'site_tagline_color', '#97a6b2' ) );
        $header_bg_color = esc_attr( get_theme_mod( 'header_background_color', '#ffffff' ) );
        $header_bg_color_opacity = floatval( get_theme_mod( 'header_background_color_opacity', 0 ) );

        $container_width = absint( get_theme_mod( 'container_width', 1297 ) );
        $image_border = absint( get_theme_mod( 'image_border', 5 ) );

        
        
        
        $blog_news_title['color'] = esc_attr( get_theme_mod( 'blog_colors', '#333' ) );
        $blog_news_title['font_family'] = esc_attr( get_theme_mod( 'blog_news_title_font_family', 'Montserrat' ) );
        $blog_news_title['font_size'] = esc_attr( get_theme_mod( 'blog_news_title_font_size', '22px' ) );
        $blog_news_title['line_height'] = esc_attr( get_theme_mod( 'blog_news_title_line_height', '30px' ) );
        $blog_news_title['font_weight'] = absint( get_theme_mod( 'blog_news_title_font_weight', 600 ) );




        $font_color = esc_attr( get_theme_mod( 'font_color', '#333' ) );
        $primary_color = esc_attr( get_theme_mod( 'primary_color', '#4d55af' ) );

        $menu['color'] = esc_attr( get_theme_mod( 'menu_font_color', '#fff' ) );
        $menu['background_color'] = esc_attr( get_theme_mod( 'menu_background_color', '#e5a81b' ) );
        $menu['font_family'] = esc_attr( get_theme_mod( 'menu_font_family', 'Poppins' ) );
        $menu['font_size'] = esc_attr( get_theme_mod( 'menu_font_size', '14px' ) );
        $menu['font_weight'] = absint( get_theme_mod( 'menu_font_weight', 500 ) );


        $heading_title_color = esc_attr( get_theme_mod( 'heading_title_color', '#2173ce' ) );
        $heading_link_color = esc_attr( get_theme_mod( 'heading_link_color', '#ce106d' ) );
        $top_bar_bg_color = esc_attr( get_theme_mod( 'top_bar_background_color', '#24262d' ) );
        $button_color = esc_attr( get_theme_mod( 'button_color', '#f0aa11' ) );
        $background_color = esc_attr( get_theme_mod( 'body_background_color', '#fff' ) );
        $footer_background_color = esc_attr( get_theme_mod( 'footer_background_color', '#ececec' ) );
        $link_color = esc_attr( get_theme_mod( 'link_color', '#e5a81b' ) );

        $font_family = esc_attr( get_theme_mod( 'font_family', 'Montserrat' ) );
        $font_size = esc_attr( get_theme_mod( 'font_size', '16px' ) );
        $font_weight = absint( get_theme_mod( 'wp_newspaper_font_weight', 400 ) );
        $line_height = esc_attr( get_theme_mod( 'line_height', '24px' ) );

        $detail_post_page_font_color = esc_attr( get_theme_mod( 'detail_post_page_font_color', '#333' ) );
        $detail_post_page_font_family = esc_attr( get_theme_mod( 'detail_post_page_font_family', 'Playfair Display' ) );
        $detail_post_page_font_size = esc_attr( get_theme_mod( 'detail_post_page_font_size', '18px' ) );
        $detail_post_page_font_weight = absint( get_theme_mod( 'detail_post_page_font_weight', 400 ) );
        $detail_post_page_line_height = esc_attr( get_theme_mod( 'detail_post_page_line_height', '31px' ) );

       
        $site_identity_font_family = esc_attr( get_theme_mod( 'site_identity_font_family', 'Oleo Script' ) );
        $logo_font_size = absint( get_theme_mod( 'wp_newspaper_logo_size', 50 ) );
        $logo_size = absint( $logo_font_size * 2 );
        $header_image_height = absint( get_theme_mod( 'header_image_height', 35 ) );

       

        $heading = array();
        $defaults = wp_newspaper_default_fonts_attributes();

        for( $i = 1; $i <= 6 ; $i++ ) {

        	$heading[$i]['font_size'] = absint( get_theme_mod( 'wp_newspaper_heading_' . $i . '_size', absint( $defaults[$i]['font_size'] ) ) );
                $heading[$i]['font_family'] = esc_attr( get_theme_mod( 'wp_newspaper_heading_' . $i . '_font_family', $defaults[$i]['font_family'] ) );
                $heading[$i]['font_weight'] = absint( get_theme_mod( 'heading_' . $i . '_font_weight', absint( $defaults[$i]['font_weight'] ) ) );
                $heading[$i]['font_color'] = esc_attr( get_theme_mod( 'heading_' . $i . '_font_color', '#333' ) );

                $dynamic_css .= ".detail-content h".$i."{ font:{$heading[$i]['font_weight']} {$heading[$i]['font_size']}px/1em {$heading[$i]['font_family']}; }";
                $dynamic_css .= "h".$i."{ color:{$heading[$i]['font_color']}; }";
        }



        $home_pages_section_bg = get_theme_mod( 'pages_bg_color', '#dd3333' );

        

        


        $dynamic_css .= "
                body{ font: $font_weight $font_size/$line_height $font_family; color: $font_color; }
                body{ background-color: $background_color; }

                article{ font: $detail_post_page_font_weight $detail_post_page_font_size/$detail_post_page_line_height $detail_post_page_font_family; color: $detail_post_page_font_color; }

                div.container{ max-width: {$container_width}" . "px; }

                
                



                header .logo img{ height: {$logo_size}"."px; }
                .site-title a{ font-size: {$logo_font_size}"."px; font-family: {$site_identity_font_family}; color: $site_title_color;}
                header .logo .site-description{color: {$site_tagline_color};}
                section.top-bar{padding: {$header_image_height}" . "px 0;}

                section.top-bar:before {background: {$header_bg_color}; opacity: {$header_bg_color_opacity};}


                

               


                
                

                .blog-news-title{ font-size: {$blog_news_title['font_size']}; font-family: {$blog_news_title['font_family']}; line-height: {$blog_news_title['line_height']}; font-weight: {$blog_news_title['font_weight']};}
                .blog-news-title a{color: {$blog_news_title['color']};}

                

                


                
               

                // link color
                a{color:{$link_color};}

                #primary-menu li a {color: {$menu['color']};}
                header .main-nav{background-color: {$menu['background_color']};}
                .main-navigation ul ul.sub-menu{background-color: {$menu['background_color']};}
                .main-navigation .nav-menu{background-color: {$menu['background_color']};}
                #primary-menu li a{ font-size: {$menu['font_size']}; font-family: {$menu['font_family']}; font-weight: {$menu['font_weight']};}
                footer.main{background-color: {$footer_background_color};}


                header .top-info.pri-bg-color{background-color: $top_bar_bg_color;}

                


                /*buttons*/
                header .search-submit,.widget .profile-link,
                .woocommerce #respond input#submit.alt, .woocommerce a.button.alt,
                .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button,
                .woocommerce input.button,form#wte_enquiry_contact_form input#enquiry_submit_button,#blossomthemes-email-newsletter-626 input.subscribe-submit-626,
                .jetpack_subscription_widget,.widget_search .search-submit,.widget-instagram .owl-carousel .owl-nav .owl-prev,
                .widget-instagram .owl-carousel .owl-nav .owl-next,.widget_search input.search-submit
                {background-color: $button_color;}

                


                .home-pages{background-color:{$home_pages_section_bg};}


                

               
        ";
        wp_add_inline_style( 'food-news', $dynamic_css );
}
add_action( 'wp_enqueue_scripts', 'food_news_dynamic_css' );