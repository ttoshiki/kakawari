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
            <a href="<?php echo home_url('/contact/'); ?>" class="footer__bannerLink">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/footer_banner.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/footer_banner.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/footer_banner.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/footer_banner@2x.jpg 2x " alt="">
                </picture>
                <div class="footer__bannerContents">
                    <div class="footer__bannerTextJp"><?php echo file_get_contents(get_template_directory() . '/dist/images/contact_ja.svg'); ?></div>
                    <div class="footer__bannerTextEn">
                        <span class="linkText">CONTACT</span>
                        <span class="linkCircle"></span>
                    </div>
                </div>
            </a>
        </div>
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/footer_logo.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/footer_logo.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/footer_logo.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/footer_logo.jpg 2x " alt="" class="footer__logo">
        </picture>
        <div class="footer__menu">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary'
                ));
            ?>
        </div>
        <div class="footer__copyrightWrapper">
            <small class="footer__copyright">© KAKAWARI All Rights Reserved</small>
        </div>
    </footer>
</div><!-- #page -->

<script src="<?php bloginfo('template_url'); ?>/js/wow.js"></script>

<?php wp_footer(); ?>

</body>
</html>

