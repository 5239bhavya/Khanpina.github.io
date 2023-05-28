<?php
/**
 * Add a new page under Appearance
 */

add_filter( 'wpmagplus_about_page', 'wp_magazine_page' );

/**
 * Enqueue styles for the help page.
 */
function wp_magazine_admin_scripts( $hook ) {
	
	wp_enqueue_style( 'wp-magazine-admin-style', WPMAGPLUS_COMPANION_URL . 'admin/about/about.css', array(), '' );
}
add_action( 'admin_enqueue_scripts', 'wp_magazine_admin_scripts' );

/**
 * Add the theme page
 */
function wp_magazine_page() {
	?>

<div class="main-info">



	<div class="main-info-detail">
		<h1><?php esc_html_e( 'WP Magazine', 'wp-magazine' ); ?></h1>

		<p><?php esc_html_e( 'WP Magazine WordPress Theme is easy to use theme for Passionate Bloggers, Writers and Editors. This theme is developed with lots of options that a magazine newspaper or blog need. WP Magazine Theme can be used by lifestyle bloggers, Personal blogging, magazine, newspaper, news portal and many more. This themes has multiple layout options for header, footer, featured news, sliders, category news. You will also get unlimited google fonts, color options, easy to use customizer and most importantly show/hide and drag/drop options for all the sections.

', 'wp-magazine' ); ?></p>
		<h4><?php esc_html_e( 'Once you install all recommended plugins, you can import demo templates.', 'wp-magazine' ); ?></h4>
		
		<a class="btn btn-primary" href="<?php echo esc_url( admin_url( '/customize.php' ) );
			?>"><?php esc_html_e( 'Theme Customization', 'wp-magazine' ); ?></a><a class="btn btn-primary" href="<?php echo esc_url (admin_url( '/themes.php?page=advanced-import' ));?>"><?php esc_html_e( 'Import Starter Demos', 'wp-magazine' ); ?></a>
		<p><?php esc_html_e("Need help?", 'wp-magazine'); ?> <a href="<?php echo esc_url('https://wpmagplus.com/support/'); ?>" target="_blank" class="link"><?php esc_html_e("Contact Us", 'wp-magazine'); ?></a> <?php esc_html_e("or email us at: hello@wpmagplus.com", 'wp-magazine'); ?></p>

		
		<div class="upgrade-to-pro">
			<div class="upgrade-image">
			<img class="ts-logo" src="<?php echo esc_url( WPMAGPLUS_COMPANION_URL . 'admin/about/images/layouts.jpg' ); ?>" alt="Logo"> 
			</div>
			<div class="upgrade-text">
			<h2><?php esc_html_e("Upgrade to Pro", 'wp-magazine'); ?></h2>
			<h4><?php esc_html_e("If you are looking for more features layouts, slider layout options, CTA layouts, Start Demos, whitelabeling, premium support and more, then you can check the pro version of the theme.", 'wp-magazine'); ?></h4>
			<a href="<?php echo esc_url( 'https://wpmagplus.com/wp-magazine-plus/' ); ?>" target="_blank" class="btn btn-success"><?php esc_html_e( 'View Pro Version', 'wp-magazine' ); ?></a>
			</div>
		</div>


		</div>
		<div class="video-tutorial">
			<h2><?php esc_html_e( 'Step by Step tutorial to help you customize the theme.', 'wp-magazine' ); ?></h2>
			<iframe width="100%" height="400" src="<?php echo esc_url( 'https://www.youtube.com/embed/84R0rHmxjss' ); ?>" title="<?php esc_attr_e( 'YouTube video player', 'wp-magazine' ); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


		</div>
</div>


<div class="top-wrapper">

	<div class="get-started-info">
		<h1><?php esc_html_e("Free v/s Pro", 'wp-magazine'); ?></h1>
		<table class="widefat">
			<thead><tr><th width="60%"></th><th><?php esc_html_e("Free", 'wp-magazine'); ?></th><th><?php esc_html_e("Pro", 'wp-magazine'); ?></th></tr></thead>
			<tbody>

				<tr><td><?php esc_html_e("Google Ads Placement", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-no"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Ads block detector", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-no"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Footer Copyright", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-no"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("24/7 Support", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-no"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Site Logo Management", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Site width controller", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Layouts Import", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span> <?php esc_html_e("6 Starter Demos", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span> <?php esc_html_e("30 Starter Demos", 'wp-magazine'); ?></td></tr>
				<tr><td><?php esc_html_e("600+ Google Fonts", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Unlimited Color Option", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("In-built Social Sharing", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Pagination Options", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Child Theme Compatible", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Floating/Sticky Menu", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Multiple Header Layouts", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Header Background Image", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Mulitple News Slider Layouts", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span><?php esc_html_e( "2 layouts available", 'wp-magazine' ); ?></td><td><span class="dashicons dashicons-yes"></span><?php esc_html_e( "4 layouts available", 'wp-magazine' ); ?></td></tr>
				<tr><td><?php esc_html_e("Multiple News Headline Layouts", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Featured News Layouts", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span> <?php esc_html_e( "4 layouts available", 'wp-magazine' ); ?></td><td><span class="dashicons dashicons-yes"></span> <?php esc_html_e( "12 layouts available", 'wp-magazine' ); ?></td></tr>
				<tr><td><?php esc_html_e("Blog Options", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Show/Hide Author Info", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Mulitple Blog Post Option", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Scroll to Top button", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Responsive Layout", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Live Customizer", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Theme Options", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Breadcrumb", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("SEO Optimized", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Lightweight", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span></td><td><span class="dashicons dashicons-yes"></span></td></tr>
				<tr><td><?php esc_html_e("Call to Action Section", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span><?php esc_html_e("1 layout available", 'wp-magazine'); ?></td><td><span class="dashicons dashicons-yes"></span><?php esc_html_e("4 layouts available", 'wp-magazine'); ?></td></tr>
				
			<tbody>
			<tfoot>
				<tr><td></td><td colspan="2"><a href="<?php echo esc_url( 'https://wpmagplus.com/wp-magazine-plus/' ); ?>" target="_blank" class="btn btn-success"><?php esc_html_e( 'Upgrade to Pro Version', 'wp-magazine' ); ?></a></td></tr>
			</tfoot>
		</table>
		
	</div>

	<div class="das-wrap">
		<h1><?php esc_html_e("FAQ's", 'wp-magazine'); ?></h1>
		<h3><?php esc_html_e("1. What is the difference between Free and Pro?", 'wp-magazine'); ?></h3>
		<p><?php esc_html_e("Both Free and Pro version of the themes are well-built. If you are looking for more features, layout options, color options, font options, whitelabeling and more, then you can upgrade to pro.", 'wp-magazine'); ?></p>
		<p><?php esc_html_e("The premium version lets you have better control over the theme as it comes with more customization options. Not just that, the theme also has more sections and layout options as compared to the free version. You can find out more about the difference between Free and Pro versions", 'wp-magazine'); ?> <a href="<?php echo esc_url( 'https://wpmagplus.com/wp-magazine-plus/' ); ?>" target="_blank"><?php esc_html_e("here", 'wp-magazine'); ?></a>.</p>
		<hr>
		<h3><?php esc_html_e("2. What are the advantages of upgrading to the Premium version?", 'wp-magazine'); ?></h3>
		<p><?php esc_html_e("With Premium version, besides the extra features and frequent updates, you get premium support. If you run into any theme issues, you will get a lot quicker response compared to the free support.", 'wp-magazine'); ?></p>
		<hr>
		<h3><?php esc_html_e("3. How do I change the copyright text?", 'wp-magazine'); ?></h3>
		<p><?php esc_html_e("You can change the copyright text going to", 'wp-magazine'); ?> <a href="<?php echo esc_url (admin_url( '/customize.php' ));?>"><?php esc_html_e("Appearance > Customize > Footer Options", 'wp-magazine'); ?></a>. <?php esc_html_e("Upgrade to the", 'wp-magazine'); ?> <a href="<?php echo esc_url( 'https://wpmagplus.com/wp-magazine-plus/' ); ?>" target="_blank"><?php esc_html_e("Pro version", 'wp-magazine'); ?></a> <?php esc_html_e("to unlock this feature.", 'wp-magazine'); ?></p>
		<hr>

		<h2><?php esc_html_e("For more help, read our documentation", 'wp-magazine'); ?></h2>
		<a href="<?php echo esc_url( 'https://wpmagplus.com/docs/' ); ?>" target="_blank" class="button button-primary"><?php esc_html_e("View Documentation", 'wp-magazine'); ?></a>


		<div class="wp-magazine-panel">
			<div class="wp-magazine-panel-content">
				<div class="theme-title">
					<h4><?php esc_html_e( 'If you like the theme, please leave a review or Contact us for technical support.', 'wp-magazine' ); ?></h4>
				</div>
				<a href="<?php echo esc_url( 'https://wordpress.org/support/theme/wp-magazine/reviews/#new-post' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Rate this theme', 'wp-magazine' ); ?></a> <a href="<?php echo esc_url( 'https://wpmagplus.com/support/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Contact Us', 'wp-magazine' ); ?></a> 
			</div>
		</div>

	</div>
</div>
	<?php
}