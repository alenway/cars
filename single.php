<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>


<div class="singleback">

<main id="site-content" role="main">


	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
?>
		<h2><?php the_post();?></h2>
<?php
			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>
	
	



</main><!-- #site-content -->

</div>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
