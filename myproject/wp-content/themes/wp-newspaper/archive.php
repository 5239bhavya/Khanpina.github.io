<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP Newspaper
 */

get_header(); ?>
<?php
    global $wp_query;
    $max_pages = $wp_query->max_num_pages;
?>


<div class="post-list content-area">
  <div class="container">
  	<?php
  		if( have_posts() ) :
  	        the_archive_title( '<h1 class="category-title">', '</h1>' );
  	        the_archive_description( '<div class="taxonomy-description">', '</div>' );
  	    endif;
    ?>
    <div class="row">
      
      <div id="main-content" class="col-sm-9">
        <div class="list-view blog-list-block">
          <?php if ( have_posts() ) : ?>
               
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content' ); ?>
                <?php endwhile; ?> 

        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
          <?php endif; ?>
        </div>
        <?php                                    
          if (  $wp_query->max_num_pages > 1 ) {
            if( get_theme_mod( 'pagination_type', 'ajax-loadmore' ) == 'ajax-loadmore' ) { ?>
              <button class="loadmore"><?php esc_html_e( 'More posts', 'wp-newspaper' ); ?></button>
            <?php }
            if( get_theme_mod( 'pagination_type', 'ajax-loadmore' ) == 'number-pagination' ) {
              the_posts_pagination();
            }
          }
        ?>
      </div>  
     
      
      <div class="col-sm-3"><?php get_sidebar(); ?></div>
      

    </div>
  </div>
</div>
<?php get_footer(); ?>
