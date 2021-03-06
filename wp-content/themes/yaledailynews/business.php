<?php
/*
Template name: Business
*/
?>
<?php get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

        <?php
         if ( get_post_type($post->ID) == 'video' ) {
           get_template_part( 'content', 'single-video' );
         } else {
           get_template_part( 'content', 'single' );
         }

        ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open()  ) {
            if (function_exists("dsq_is_installed") && dsq_is_installed() ) { echo '<h2 id="comments-title" class="comments-title">Comments</h2>'; } //if disqus is loaded, then put a comment header into the markup
            comments_template( '', true );
          }
        ?>

      <?php endwhile; // end of the loop. ?>

      </div><!-- #content -->
    </div><!-- #primary .site-content -->

    <?php get_sidebar(); ?>
<?php get_footer(); ?>
