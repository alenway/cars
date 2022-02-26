<?php

/*

template Name: live auctions

*/

get_header();



?>

<div style="background-color:#ededed;padding-top:44px">
<div class="container">
			<h4 style="text-align: center">Live Auctions</h4>
			<div class="row">
				<div class="" >
				
						<?php	$args = array(
						'post_type'=> 'post',
						'orderby'    => 'ID',
						'post_status' => 'publish',
						'category_name' => 'Live',
						'order'    => 'DESC',
						'posts_per_page' => -1 // this will retrive all the post that is published 
						);
						$result = new WP_Query( $args );
						if ( $result-> have_posts() ) : ?><?php while ( $result->have_posts() ) : $result->the_post(); ?>

					<div class="card col-4">
						<div class="top">
							<h6><?php the_title(); ?></h6>
							<span>Lightly driven with every available addon package</span>
						</div>
						<div class="mid">
							<?php the_post_thumbnail();?>
						</div>
						<div class="last">
							<div class="uplast">
								<i class="far fa-clock"> Time Left:</i>
								<span style="color: white;padding-right: 10px">20:37:46</span>
								<i class="fas fa-dollar-sign"> Highest Bid:</i>
								<span style="color: white">$45,000</span>
							</div>
							<div class="lolast">
								<i class="fas fa-map-marker-alt"> Location:</i>
								<span> Gurnee, IL </span>
								<button style="float:right" class="btn btn-primary"><i style="color:white" class="fas fa-cog"></i> see details</button>
							</div>
						</div>
					</div>
					
					<?php endwhile; ?><?php endif; wp_reset_postdata(); ?>
				</div>
					
			</div>
		</div>

</div>


<?php


get_footer();
?>