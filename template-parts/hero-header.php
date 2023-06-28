<?php
/**
 * Template for the hero on the homepage. The header tag begins
 * in the header.php file and ends in this file.
 * 
 * @version:		1.0
 * @author: 		Hannah Moats
*/
?>   	
    <?php $hero = get_field('hero_section'); ?>

    <div id="home-hero-container" style="background-image: url('<?php echo $hero['hero_image']; ?>');">
        <div class="home-hero-content-container">
            <div class="wp-content animatedParent animateOnce" data-sequence="200" >
                <?php echo $hero['hero_content']; ?>
            </div>
        </div>
    </div>
    <img class="hidden-mobile mobile-full-width" src="<?php echo $hero['hero_image']; ?>" />
</header>
<!-- end header -->