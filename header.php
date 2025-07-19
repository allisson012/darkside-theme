<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package darkside-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'darkside-theme' ); ?></a>

	<header class="top-bar">
		<div class="logo-icons">
		<div class="container">
			
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/logo-webforce.png" alt="Logo do site" />
				</a>
			</div>

			
			<nav class="menu">
				<a href="<?php echo home_url(); ?>">Home</a>
				<a href="<?php echo home_url('/about'); ?>">About</a>
				<a href="<?php echo home_url('/services'); ?>">Services</a>
				<a href="<?php echo home_url('index.php/contact'); ?>">Contact</a>
			</nav>
		</div>
			
		</div>
	</header>
