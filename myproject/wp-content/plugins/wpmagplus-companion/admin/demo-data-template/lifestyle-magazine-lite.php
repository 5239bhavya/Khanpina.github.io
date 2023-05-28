<?php


$demo_templates_lists = array(

	'lifestyle-magazine-lite' =>array(
        'title' => esc_html__( 'Lifestyle Magazine Lite', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => false,  /*Premium*/
        'type' => 'free',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Lifestyle Magazine Lite'),  /*Search keyword*/
        'categories' => array( 'magazine', 'lifestyle' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/lifestyle-magazine-lite/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/lifestyle-magazine-lite/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/lifestyle-magazine-lite/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/lifestyle-magazine-lite/screenshot.jpg',
        'demo_url' => 'https://demo.wpmagplus.com/lifestyle-magazine-lite/',
        'plugins' => ''
    ),


	'beauty-coach-plus' =>array(
        'title' => esc_html__( 'Beauty Coach Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/beauty-coach/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Beauty Coach'),  /*Search keyword*/
        'categories' => array( 'feminine', 'blog', 'personal' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/beauty-coach-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/beauty-coach-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/beauty-coach-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/beauty-coach-plus/beauty-coach.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=beauty-coach',
        'plugins' => ''
    ),

    'photo-blog-plus' =>array(
        'title' => esc_html__( 'Photo Blog Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/photo-blog/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Photo Blog Plus'),  /*Search keyword*/
        'categories' => array( 'feminine', 'blog' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/photo-blog-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/photo-blog-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/photo-blog-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/photo-blog-plus/photo-blog.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=photo-blog',
        'plugins' => ''
    ),

    'fresh-fashion' =>array(
        'title' => esc_html__( 'Fresh Fashion Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/fresh-fashion/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Fresh Fashion Plus'),  /*Search keyword*/
        'categories' => array( 'magazine', 'feminine', 'fashion' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/fresh-fashion/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/fresh-fashion/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/fresh-fashion/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/fresh-fashion/fresh-fashion.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=fresh-fashion',
        'plugins' => ''
    ),

    'food-lover' =>array(
        'title' => esc_html__( 'Food Lover Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/food-lover/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Food Lover Plus'),  /*Search keyword*/
        'categories' => array( 'feminine', 'food', 'blog', 'personal' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/food-lover/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/food-lover/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/food-lover/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/food-lover/food-lover.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=food-lover',
        'plugins' => ''
    ),

    'fitness-coach' =>array(
        'title' => esc_html__( 'Fitness Coach Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/fitness-coach/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Fitness Coach Plus'),  /*Search keyword*/
        'categories' => array( 'personal', 'lifestyle' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/fitness-coach/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/fitness-coach/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/fitness-coach/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/fitness-coach/fitness-coach.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=fitness-coach',
        'plugins' => ''
    ),

    'crave-blog' =>array(
        'title' => esc_html__( 'Crave Blog Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/crave-blog/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Crave Blog Plus'),  /*Search keyword*/
        'categories' => array( 'food', 'blog' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/crave-blog/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/crave-blog/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/crave-blog/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/crave-blog/crave-blog.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=crave-blog',
        'plugins' => ''
    ),


    'wp-beauty-plus' =>array(
        'title' => esc_html__( 'Beauty Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/wp-magazine-plus/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Beauty Plus'),  /*Search keyword*/
        'categories' => array( 'lifestyle', 'feminine' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-beauty-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-beauty-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-beauty-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-beauty-plus/wp-beauty.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=Beauty',
        'plugins' => ''
    ),


    'wp-trends-plus' =>array(
        'title' => esc_html__( 'Trends Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/wp-magazine-plus/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Trends Plus'),  /*Search keyword*/
        'categories' => array( 'feminine', 'lifestyle', 'fashion' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-trends-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-trends-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-trends-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-trends-plus/wp-trends.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=Trends',
        'plugins' => ''
    ),

    'style-magazine' =>array(
        'title' => esc_html__( 'Style Magazine Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/style-magazine/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Style Magazine Plus'),  /*Search keyword*/
        'categories' => array( 'fashion', 'magazine' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/style-magazine/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/style-magazine/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/style-magazine/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/style-magazine/style-magazine.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=style-magazine',
        'plugins' => ''
    ),

    'beautify-blog' =>array(
        'title' => esc_html__( 'Beautify Blog', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/beautify-blog/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Beautify Blog'),  /*Search keyword*/
        'categories' => array( 'lifestyle' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/beautify-blog/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/beautify-blog/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/beautify-blog/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/beautify-blog/beauty-blog.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=beautify-blog',
        'plugins' => ''
    ),

    'wander' =>array(
        'title' => esc_html__( 'Wander Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/wander/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Wander Plus'),  /*Search keyword*/
        'categories' => array( 'travel' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wander/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wander/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wander/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wander/wander.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=wander',
        'plugins' => ''
    ),

    'travel-diary' =>array(
        'title' => esc_html__( 'Travel Diary Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/travel-diary/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Travel Diary Plus'),  /*Search keyword*/
        'categories' => array( 'feminine', 'blog', 'travel' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/travel-diary/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/travel-diary/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/travel-diary/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/travel-diary/travel-diary.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=travel-diary',
        'plugins' => ''
    ),

    'wp-travel-plus' =>array(
        'title' => esc_html__( 'Travel Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/wp-magazine-plus/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Travel Plus'),  /*Search keyword*/
        'categories' => array( 'travel' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-travel-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-travel-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-travel-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-travel-plus/wp-travel.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=Travel',
        'plugins' => ''
    ),

    'wp-holiday-plus' =>array(
        'title' => esc_html__( 'Holiday Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/wp-magazine-plus/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Holiday Plus'),  /*Search keyword*/
        'categories' => array( 'travel' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-holiday-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-holiday-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-holiday-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-holiday-plus/wp-holiday.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=Holiday',
        'plugins' => ''
    ),

    'business' =>array(
        'title' => esc_html__( 'Business Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/business/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Business Plus'),  /*Search keyword*/
        'categories' => array( 'magazine', 'news' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/business/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/business/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/business/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/business/business.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=business',
        'plugins' => ''
    ),

    'destination' =>array(
        'title' => esc_html__( 'Destination Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/destination/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Destination Plus'),  /*Search keyword*/
        'categories' => array( 'travel' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/destination/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/destination/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/destination/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/destination/destination.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=destination',
        'plugins' => ''
    ),

    'foodz' =>array(
        'title' => esc_html__( 'Foodz Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/foodz/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Foodz Plus'),  /*Search keyword*/
        'categories' => array( 'food' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/foodz/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/foodz/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/foodz/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/foodz/screenshot.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=foodz',
        'plugins' => ''
    ),

    'treat' =>array(
        'title' => esc_html__( 'Treat Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/treat/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Treat Plus'),  /*Search keyword*/
        'categories' => array( 'food' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/treat/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/treat/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/treat/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/treat/treat.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=treat',
        'plugins' => ''
    ),

    'wp-fitness-plus' =>array(
        'title' => esc_html__( 'Fitness Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/wp-magazine-plus/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Fitness Plus'),  /*Search keyword*/
        'categories' => array( 'lifestyle', 'feminine', 'health' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-fitness-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-fitness-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-fitness-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-fitness-plus/wp-fitness.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=Fitness',
        'plugins' => ''
    ),

    'wp-yoga-plus' =>array(
        'title' => esc_html__( 'Yoga Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/wp-magazine-plus/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Yoga Plus'),  /*Search keyword*/
        'categories' => array( 'feminine', 'lifestyle', 'health' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-yoga-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-yoga-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-yoga-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-yoga-plus/wp-yoga.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=Yoga',
        'plugins' => ''
    ),

    'wp-technology-plus' =>array(
        'title' => esc_html__( 'Technology Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/wp-magazine-plus/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Technology Plus'),  /*Search keyword*/
        'categories' => array( 'magazine', 'others' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-technology-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-technology-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-technology-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-technology-plus/wp-technology.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=Technology',
        'plugins' => ''
    ),

    'wp-sports-plus' =>array(
        'title' => esc_html__( 'Sports Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/wp-magazine-plus/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Sports Plus'),  /*Search keyword*/
        'categories' => array( 'magazine', 'others' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-sports-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-sports-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-sports-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-sports-plus/wp-sports.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=Sports',
        'plugins' => ''
    ),

    'wp-health-plus' =>array(
        'title' => esc_html__( 'Health Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/wp-magazine-plus/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Health Plus'),  /*Search keyword*/
        'categories' => array( 'health' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-health-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-health-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-health-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-health-plus/wp-health.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=Health',
        'plugins' => ''
    ),


    'wp-ayurveda-plus' =>array(
        'title' => esc_html__( 'Ayurveda Plus', 'wpmagplus-companion' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://wpmagplus.com/wp-magazine-plus/',
        'type' => 'plus',
        'author' => esc_html__( 'WPMagPlus', 'wpmagplus-companion' ),    /*Author Name*/
        'keywords' => array( 'Ayurveda Plus'),  /*Search keyword*/
        'categories' => array( 'health' ), /*Categories*/
        'template_url' => array(
            'content' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-ayurveda-plus/content.json',
            'options' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-ayurveda-plus/options.json',
            'widgets' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-ayurveda-plus/widgets.json'
        ),
        'screenshot_url' => WPMAGPLUS_COMPANION_TEMPLATE_URL.'/wp-ayurveda-plus/wp-ayurveda.jpg',
        'demo_url' => 'https://wpmagplus.com/preview/?product_id=Ayurveda',
        'plugins' => ''
    ),
);