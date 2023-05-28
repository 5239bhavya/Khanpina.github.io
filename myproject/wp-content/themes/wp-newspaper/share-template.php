<?php
	$social_share = get_theme_mod( 'wp_newspaper_social_share', array( 'facebook', 'twitter', 'pinterest', 'linkedin', 'email' ) );
?>
<script type="text/javascript">
	var fb = '<?php esc_attr__( "Facebook", "wp-newspaper" ); ?>';
	var twitter = '<?php esc_attr__( "Twitter", "wp-newspaper" ); ?>';
	var pinterest = '<?php esc_attr__( "Pinterest", "wp-newspaper" ); ?>';
	var linkedin = '<?php esc_attr__( "Linkedin", "wp-newspaper" ); ?>';
</script>

<?php if( $social_share ) : ?>

	<div class="social-box">

		<?php if( in_array( 'facebook', $social_share ) ) { ?>
			<a class="facebook-icon" href="<?php echo esc_url( 'https://www.facebook.com/sharer/sharer.php?u=' . $url ); ?>" onclick="return ! window.open( this.href, fb, 'width=500, height=500' )">
			    <i class="fa fa-facebook-f"></i>
			</a>
		<?php } ?>

		<?php if( in_array( 'twitter', $social_share ) ) { ?>
			<a class="twitter-icon" href="<?php echo esc_url( 'https://twitter.com/intent/tweet?text=' . esc_attr( $title ) . '&amp;url='. $url . '&amp;via=' . esc_attr( $twitter_id ) ); ?>" onclick="return ! window.open( this.href, twitter, 'width=500, height=500' )">
			   <i class="fa fa-twitter"></i>
			</a>
		<?php } ?>

		<?php if( in_array( 'pinterest', $social_share ) ) { ?>
			<a class="pinterest-icon" href="<?php echo esc_url( 'http://pinterest.com/pin/create/button/?url=' . $url . '&amp;media='.$media.'&amp;description=' . esc_attr( $title ) ); ?>" onclick="return ! window.open( this.href, pinterest, 'width=500, height=500' )">
			    <i class="fa fa-pinterest"></i>
			</a>
		<?php } ?>

		<?php if( in_array( 'linkedin', $social_share ) ) { ?>
			<a class="linkedin-icon" href="<?php echo esc_url( 'https://www.linkedin.com/shareArticle?mini=true&url=' . $url . '&title=' . esc_attr( $title ) ); ?>" onclick="return ! window.open( this.href, linkedin, 'width=500, height=500' )">
			    <i class="fa fa-linkedin"></i>
			</a>
		<?php } ?>

		<?php if( in_array( 'email', $social_share ) ) { ?>
			<a class="mail-icon" href="<?php echo esc_url( 'mailto:?subject=' . esc_attr( $title ) . '&body=' . esc_attr( $title ) . " " . $url ); ?>" target="_blank">
			    <i class="fa fa-envelope"></i>
			</a>
		<?php } ?>


	</div>

<?php endif;