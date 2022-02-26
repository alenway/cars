<?php

/*

template Name: Services

*/

get_header();

?>


<div class="service-back-img">
	<div class="container">
		<div class="breadcrum-container">
			<ul class="breadcrum">
				<li style="padding-right: 10px"><a href="#">HOME</a></li>
				<li style="margin-left: -5px;padding-left: 10px"><a href="#">Service II</a></li>
			</ul>
			<h2 class="heading-title">Service II</h2>
		</div>
	</div>
</div>


<section>
	<div class="section-inner">
		<div class="container">
			<div class="container-inner">
				<div class="clearfix">
					<span>Awesome Services</span>
				</div>
				<h2 class="title">
					<span>Industri Services</span>
				</h2>
			</div>
		</div>
	</div>
	
	<div class="section-content">
		<div class="container">
			<div class="row">
					
				<?php $args = array('post_type' => 'services');
				$wp_query121 = new WP_Query($args);
				if( $wp_query121->have_posts() ) { ?>
				<?php while ($wp_query121->have_posts()) : $wp_query121->the_post();?> 
						
				<div class="card-main">
					<div class="card-img">
						<?php the_post_thumbnail();?>
					</div>
							
					<div class="card-block">
						<div class="card-title">
							<h3><?php the_title(); ?></h3>
						</div>
								
						<div class="card-content">
							<?php the_content();?>
						</div>
						
						<div class="readmore">
							<a href="<?php the_permalink();?>">
								<span>Read More</span>
							</a>
						</div>
					</div>
				</div>
						
				<?php endwhile; ?>
						
			</div>
		</div>
	</div>
		
</section>













<?php } wp_reset_query(); ?>








<?php

get_footer();

?>