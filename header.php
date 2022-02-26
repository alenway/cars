<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

		<link rel="profile" href="https://gmpg.org/xfn/11">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		
		<link rel="stylesheet" href = "<?php bloginfo('template_url'); ?>/custom.css">
		
		<?php wp_head(); ?>
		
	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>
		
		<?php// get_template_part('template-parts/header/site-header'); ?>
		
		<header>
		
		
		
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
				  <div class="container-fluid">
					<a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
					<div class="ii">
						<?php wp_nav_menu( array( 'menu' => 'header-menu', 'menu_class'=>'') );?>
					</div>
				  </div>
				  
				</nav>
			</div>
		</header>
		
		
		
		
		
		
		
		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
		
