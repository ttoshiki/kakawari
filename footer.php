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

    <footer class="footer">
        <div class="footer__banner">
            <a href="<?php echo home_url('/contact/'); ?>">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/footer_banner.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/footer_banner.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/footer_banner.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/footer_banner@2x.jpg 2x " alt="">
                </picture>
            </a>
        </div>
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/footer_logo.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/footer_logo.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/footer_logo.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/footer_logo.jpg 2x " alt="">
        </picture>
        <div class="footer__menu">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary'
                ));
            ?>
        </div>
        <small class="footer__copyright">© KAKAWARI All Rights Reserved</small>
    </footer>
</div><!-- #page -->

<script src="<?php bloginfo('template_url'); ?>/js/jquery.matchHeight.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/wow.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>

