<?php 
get_header(); 
get_template_part('template-parts/default-header');
?>

<!-- begin content -->
<div id="content" role="main" <?php post_class(); ?>>
    <div class="container wp-content">
    <?php the_field('404_page_content', 'options'); ?>			
    </div>	
</div> <!-- end #content -->
<?php get_footer(); ?>