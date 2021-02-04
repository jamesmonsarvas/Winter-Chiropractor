<?php
/**
 * Template parts for displaying the footer widgets/columns
 */
?>

<div class="footer-row">
    <div class="footer-column footer-col-1">
        <?php dynamic_sidebar( 'footer-column-1' ); // Get the data from the widget area ?>
    </div>
    <div class="footer-column footer-col-2">
        <?php dynamic_sidebar( 'footer-column-2' ); // Get the data from the widget area ?>
    </div>
</div>

<div class="footer-row">
    <div class="footer-column footer-col-3">
        <?php dynamic_sidebar( 'footer-column-3' ); // Get the data from the widget area ?>
    </div>
    <div class="footer-column footer-col-4">
        <?php dynamic_sidebar( 'footer-column-4' ); // Get the data from the widget area ?>
    </div>
</div>