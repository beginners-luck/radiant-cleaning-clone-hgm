<?php
/**
 * Front Page
 * @version:	1.0
 *
 * @author: 	John Starr
 * @author:		Hannah Moats
 */

get_header(); 
get_template_part('template-parts/hero-header'); 
?>

<!-- begin content -->
<div id="content" role="main" class="container-fluid">

	<div id="home-features-container" class="container-large animatedParent animateOnce" data-sequence="200">
	<?php $count = 1; ?>
	<?php if ( have_rows('features_section') ) : while ( have_rows('features_section') ) : the_row(); ?> 
		<div class="feature animated fadeIn" data-id="<?php echo $count ?>">
			<div class="feature-header">
				<h2><span class="icon-check" aria-hidden="true"></span></h2>
				<h2><?php echo get_sub_field('feature_title'); ?></h2>
			</div>
			<p class="feature-content"><?php echo get_sub_field('feature_content'); ?></p>
		</div>
		<?php $count += 1; ?>
	<?php endwhile; else:?>
	<?php endif; ?>		
	</div>

	<div id="home-service-areas-container" class="animatedParent animateOnce" data-sequence="200">
	<?php $about_services = get_field('about_services_section') ; ?>
		<div class="container animated fadeInUp" data-id="1">
			<div class="wp-content">
			<?php the_field('about_services'); ?>
			</div>
		</div>
		<div class="service-areas-container container-large">
		<?php $count = 2; ?>
		<?php if ( have_rows('service_areas') ) : while ( have_rows('service_areas') ) : the_row(); ?>
			<div class="service-area animated fadeIn" data-id="<?php echo $count ?>">
				<img class="lazy" src="<?php echo get_sub_field('service_area_image'); ?>">
				<p><?php echo get_sub_field('service_area_name'); ?></p>
			</div>
			<?php $count += 1; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
		<a class="button blue animated fadeInUp" data-id="<?php echo $count; ?>" href="#contact">Contact Us</a>
	</div>

	<div id="home-testimonial-container" class="blue-dark-bkg-color">
		<!-- Slider main container -->
        <div class="swiper mySwiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
				<?php if ( have_rows('testimonials_section') ) : while ( have_rows( 'testimonials_section' ) ) : the_row(); ?>
					<div class="swiper-slide">
						<div class="wp-content">
							<?php echo get_sub_field('testimonial_content'); ?>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
            </div>

			<div class="icon-back-arrow"></div>
			<div class="icon-forward-arrow"></div>    
        </div>

		<img class="gleam lazy" src="<?php echo get_template_directory_uri(); ?>/images/gleam-180.png" />
	</div>

	<div id="home-satisfaction-container" class="container animatedParent animateOnce">
		<div class="wp-content animated fadeInUp">
		<?php the_field('about_section'); ?>
		</div>
	</div>

	<div id="home-hiring-cta-container" class="blue-bkg-color container-large">
	<?php $hiring_section = get_field('hiring_cta_section'); ?>
		<div class="hiring-image-container">
			<img class="lazy" src="<?php echo $hiring_section['hiring_image']; ?>">
		</div>
		<div class="hiring-content">
			<div class="wp-content">
			<?php echo $hiring_section['hiring_content']; ?>
			</div>
			<img class="lazy gleam" src="<?php echo get_template_directory_uri(); ?>/images/gleam-90.png" />
		</div>
	</div>

	<div id="contact" class="container">
		<div class="wp-content">
		<?php the_field('contact_us_section'); ?>
		</div>
	</div>
</div> 

<div id="application-form1" class="container" style="display: none;">
	<div class="wp-content">
	<?php the_field('popup_content', 'option'); ?>
	</div>
</div>
<!-- end #content -->

<?php get_footer(); ?>