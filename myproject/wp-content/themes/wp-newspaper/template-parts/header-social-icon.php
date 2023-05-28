<ul class="list-inline">
    <?php if(get_theme_mod('facebook_social_link')){ ?>
        <li class="facebook"><a target="_blank" rel="noreferrer noopener" href="<?php echo esc_url(get_theme_mod('facebook_social_link'), 'wp-newspaper'); ?>"><i class="fa fa-facebook"></i></a></li>
    <?php } ?>
    <?php if(get_theme_mod('twitter_social_link')){ ?>
        <li class="twitter"><a target="_blank" rel="noreferrer noopener"
            href="<?php echo esc_url(get_theme_mod('twitter_social_link'), 'wp-newspaper'); ?>"><i class="fa fa-twitter"></i></a>
    </li>
    <?php } ?>
    <?php if(get_theme_mod('instagram_social_link')){ ?>
        <li class="instagram"><a target="_blank" rel="noreferrer noopener"
            href="<?php echo esc_url(get_theme_mod('instagram_social_link'), 'wp-newspaper'); ?>"><i class="fa fa-instagram"></i></a></li>
    <?php } ?>
    <?php if(get_theme_mod('linkedin_social_link')){ ?>
        <li class="linkedin"><a target="_blank" rel="noreferrer noopener"
            href="<?php echo esc_url(get_theme_mod('linkedin_social_link'), 'wp-newspaper'); ?>"><i class="fa fa-linkedin"></i></a></li>
    <?php } ?>
    <?php if(get_theme_mod('youtube_social_link')){ ?>
        <li class="youtube"><a target="_blank" rel="noreferrer noopener"
            href="<?php echo esc_url(get_theme_mod('youtube_social_link'), 'wp-newspaper'); ?>"><i
                class="fa fa-youtube-play"></i></a></li>
    <?php } ?>

    <?php if(get_theme_mod('pinterest_social_link')){ ?>
        <li class="pinterest">
            <a target="_blank" rel="noreferrer noopener" href="<?php echo esc_url(get_theme_mod('pinterest_social_link'), 'wp-newspaper'); ?>">
                <i class="fa fa-pinterest"></i>
            </a>
        </li>
    <?php } ?>
    
</ul>