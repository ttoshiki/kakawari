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

  <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="header" class="header">
		<div class="header__hammenu -sp<?php if(is_front_page()) { echo ' home'; } ?>">
			<?php
				the_custom_logo();
			?>
			<span class="header__trigger<?php if(is_front_page()) { echo ' home'; } ?>" href="#" @click="toggleMenu" id="trigger">
				<span></span>
				<span></span>
				<span></span>
			</span>
			<div class="header__hammenuWrapper">
				<div class="header__hammenuInner">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'sp_menu'
						));
					?>
				</div>
				<div class="header__otherServiceLinks">
					<?php get_template_part('template-parts/other-service-links') ?>
				</div>
			</div>
		</div>
		<nav class="header__nav -pc">
			<?php
				the_custom_logo();
			?>
			<?php
				wp_nav_menu(array(
					'theme_location' => 'primary'
				));
			?>
		</nav>
	</header>