<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package media_wp
 */

?>
<?php do_action('bbfb_footer') ?>

<!--
<p id="page-top">
    <a href="#wrap">
        Page Top
    </a>
</p>
-->

<script src="<?php bloginfo('template_url'); ?>/js/jquery.matchHeight.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/wow.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
