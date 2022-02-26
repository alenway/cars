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



<main id="site-content" role="main">




	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
?>


<div class="service-back-img">
	<div class="container">
		<div class="breadcrum-container">
			<ul class="breadcrum">
				<li style="padding-right: 10px"><a href="#">HOME</a></li>
				<li style="margin-left: -5px;padding-left: 10px"><a href="#"><?php the_title();?></a></li>
			</ul>
			<h2 class="heading-title">Service II</h2>
		</div>
	</div>
</div>



		<?php the_post();?>
<?php
			
		}
	}

	?>
	
	<div class="matterial">
		<div class="matterial-container">
			<div class="row">
				<div class="col-8 sideways">
					<div class="matterial-firstblock-img">
						<img src="<?php the_field('bridge_construction_image'); ?>" width="100%">
					</div>
					
					<div class="matterial-firstblock-title">
						<h1><?php the_field('bridge_construction_title'); ?></h1>
					</div>
					
					<div class="matterial-firstblock-content">
						<p><?php the_field('bridge_construction_text'); ?></p>
						
						<div class="row">
							<div class="col-8">
								<div class="section-heading">
									<h2><?php the_field('audit_marketing_title'); ?></h2>
								</div>
								<div class="section-content">
									<p><?php the_field('audit_marketing_text'); ?></p>
								</div>
								<div class="section-list">
									<?php the_field('audit_marketing_list'); ?>
								</div>
							</div>
							<div class="col-4">
								<div class="section-image">
									<img src="<?php the_field('audit_marketing_image'); ?>">
								</div>
							</div>
						</div>
						
						<div class="benifits-services">
							<div class="benifits-heading">
								<h2><?php the_field('benefits_of_services_title'); ?></h2>
							</div>
							<div class="benifits-content">
								<p>
									<?php the_field('benefits_of_services_content'); ?>
								</p>
							</div>
						</div>
						
						<div class="projects">
							<div class="projects-title">
								<h2><?php the_field('those_scale_projects_title'); ?></h2>
							</div>
							
							<div class="projects-image">
								<div class="row">
									<div class="col-4 siro">
										<img src="<?php the_field('those_scale_projects_image1'); ?>">
									</div>
									<div class="col-4 siro">
										<img src="<?php the_field('those_scale_projects_image2'); ?>">
									</div>
									<div class="col-4 siro">
										<img src="<?php the_field('those_scale_projects_image3'); ?>">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 sideways">
					<div class="matterial-rightside">
						<div class="matterial-menu">
							<h3>
								<span>SERVICES</span>
							</h3>
							<div>
								<ul>
									<li><a href="#">Bridge construction</a></li>
									<li><a href="#">Power energies</a></li>
									<li><a href="#">Chemical research</a></li>
									<li><a href="#">Petrol and Gas</a></li>
									<li><a href="#">Mechanical engineering</a></li>
									<li><a href="#">Factory construction</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	


</main><!-- #site-content -->



<?php get_footer(); ?>




