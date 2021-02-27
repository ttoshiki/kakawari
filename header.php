<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package media_wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php if (is_mymobile()):?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php else: ?>
    <meta name="viewport" content="width=1200" />
    <?php endif; ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link href="<?php bloginfo('template_url'); ?>/css/reset.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/css/page.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/css/page-responsive.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">


  <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action('bbhb_header') ?>
    <?php if (!( is_home() || is_front_page() )) : ?>
    <div class="breadcrumbs">
        <div class="container">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
    </div>
    <?php endif; ?>
