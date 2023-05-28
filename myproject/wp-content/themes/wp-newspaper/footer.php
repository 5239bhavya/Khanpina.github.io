<?php

/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after
*
* @package WP Newspaper
*/
?>


<footer class="main">
	<div class="container">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div>
</footer>
<div class="copyright text-center">
	<?php esc_html_e( "Powered by", 'wp-newspaper' );?> <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wp-newspaper' ) );
	?>"><?php esc_html_e( "WordPress", 'wp-newspaper' );
	?></a> | <a href="<?php echo esc_url( 'https://wpmagplus.com/' ) ;
	?>" target="_blank"  rel="nofollow"><?php 
	esc_html_e( 'WP Newspaper by WP Mag Plus', 'wp-newspaper' );
?></a>
<?php 
?>
</div>
<div class="scroll-top-wrapper"> <span class="scroll-top-inner"><i class="fa fa-2x fa-angle-up"></i></span></div>
<?php 
if ( has_action( 'wp-newspaper-layouts/layouts' ) ) {
	do_action( 'wp-newspaper-layouts/layouts' );
}
?>


<?php 
wp_footer();
?>
</body>
</html>