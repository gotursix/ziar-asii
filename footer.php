<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ziarul_de_ASII
 */

?>

	</div><!-- #content -->
<hr>
	<footer id="colophon" class="site-footer">
        <nav class="site-nav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
            ) );
            ?>
        </nav><!-- #site-navigation -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
