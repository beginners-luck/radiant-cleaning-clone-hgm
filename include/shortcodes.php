<?php 
/**
 * Takes the button shortcode and returns html for the button. 
 */
function get_button_html($attributes) {
    $defaults = array(
        'title' => 'Do Not Press',
        'type' => '', 
        'link' => '#',
        'new' => 'no'
    ); 
    
    $a = shortcode_atts( $defaults, $attributes); 

    $popup = ''; 
    $target = '_self'; 
    if ($a['new'] == 'yes') {
        $target = '_blank'; 
    } else if ($a['new'] == 'popup') {
        $popup = 'wplightbox'; 
    }

    return '<a class="button ' . $a['type'] . ' ' . $popup . '" target="' . $target . '" href="' . $a['link'] . '">' . $a['title'] . '</a>'; 
}

add_shortcode( 'button', 'get_button_html'); 

?>
