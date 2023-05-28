<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP Newspaper
 */



get_header(); ?>

<div id="content">

  <?php global $wp_query; ?>
 
  <?php if ( have_posts() ) { ?>

      <div class="home-archive inside-page post-list">
          <div class="container">
              <div class="row">
                
                  <div class="col-sm-9">
                      <?php $archive_title = get_theme_mod( 'homepage_blog_section_title' ); ?>
                        <?php if( ! empty( $archive_title ) ) { ?><h2 class="news-heading"><?php echo esc_html( $archive_title ); ?></h2><?php } ?>
                    <div class="list-view blog-list-block">                                         
                      
                          <?php /* Start the Loop */ ?>
                          <?php while ( have_posts() ) : the_post(); ?>
                              <?php

                                  /*
                                   * Include the Post-Format-specific template for the content.
                                   * If you want to override this in a child theme, then include a file
                                   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                   */
                                  get_template_part( 'template-parts/content' );
                              ?>
                          <?php endwhile; ?>
                      
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
                  <?php wp_reset_postdata(); ?>
                  
                  <div class="col-sm-3"><?php get_sidebar(); ?></div>
                
              </div>
          </div>
      </div>
    </div>

  <?php }

get_footer();