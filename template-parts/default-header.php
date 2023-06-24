<?php
/**
 * A basic template for any page. Only contains a blue background 
 * and page title.
 * @version:		1.0
 *
 * @author: 		Hannah Moats
*/
?>
    <div class="default-header blue-dark-bkg-color">
        <h1>
            <?php 
            $title = get_the_title();
            if ($title == "") {
                echo "404";
            } else {
                echo $title;
            }
            ?>
        </h1>
    </div>
</header>