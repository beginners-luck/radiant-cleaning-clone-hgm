<?php 
/**
 * index.php
 * 
 * Catch all for everything (posts, pages, etc)
 *
 * @author: 	John Starr
 * @author:		Hannah Moats
 */

get_header(); 
get_template_part('template-parts/default-header');
?>

<!-- begin content -->
<div id="content" role="main" <?php post_class(); ?>>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    	
    <div class="container wp-content">
    <?php the_content(); ?>
    </div>			
  <?php endwhile; else:?>
	<?php endif; ?>					
</div> <!-- end #content -->

<?php get_footer(); ?>