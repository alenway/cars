<?php

/*

template Name: Home

*/

get_header();

?>



<main id="site-content" role="main">

	<div style="background-color:#ededed;padding-top:44px">
			
		<div class="first" style="margin-bottom: 20px">
			<div class="container">
				<div class="row">
					<div class="col-1">
						<label style="padding-top: 10px;font-size:19px;font-weight:700">Auction</label>
					</div>
					<div class="col-5" style="padding: 0 5px 0 0">
						<input type="text" style="height:40px;border-radius:5px" placeholder="Search Auctions">
					</div>
					<div class="col-1" style="padding: 0;">
						<button class="upperbtn"><i class="fas fa-search"></i></button>
					</div>
					<div class="col-1" style="padding: 0;">
						<label style="float:right;padding-top:10px;border-radius: 4px;font-size:14px;font-weight:700">sort by</label>
					</div>
					<div class="col-3" style="padding: 0 10px;">
						<input type="text" style="height:40px;border-radius:5px" placeholder="Search Auctions">
					</div>
					<div class="col-1" style="padding: 0;">
						<button class="upperbtn"><i class="fas fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="container">	
			<div class="row">
				<div class="" >
				
						<?php	$args = array(
						'post_type'=> 'post',
						'orderby'    => 'ID',
						'post_status' => 'publish',
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
							<?php the_post_thumbnail('full');?>
						</div>
						<div class="last">
							<div class="uplast">
								<div class="row">
									<div class="col-6">
										<span style="color:#b98b35"><i class="far fa-clock"></i> Time Left:</span>
										<span style="color: white;padding-right: 10px">20:37:46</span>
									</div>
									
									<div class="col-6">
										<span style="color:#b98b35"><i class="fas fa-dollar-sign"></i> Highest Bid:</span>
										<span style="color: white">$45,000</span>
									</div>
								</div>
								
								
							</div>
							<div class="lolast">
								<span style="color:#b98b35"><i style="margin-top: 10px" class="fas fa-map-marker-alt"></i> Location:</span>
								<span> Gurnee, IL </span>
								<a id="dd" style="float:right" href="<?php the_permalink();?>" class=""><i style="color:white" class="fas fa-cog"></i> See Details</a>
							</div>
						</div>
					</div>
					
					<?php endwhile; ?><?php endif; wp_reset_postdata(); ?>
				</div>
					
			</div>
		</div>	
	</div>		
				
			
				
			
	
	<div style="background-image: url('<?php bloginfo('template_url'); ?>/images/secbg.jpg');image-repeate:no repeate">
		<div class="container" style="padding-bottom: 67px;position: relative">
			<div class="row">
				<h2 style="color:white;font-size:36px;text-align:center;margin:15px 0 15px 0;padding: 35px 0 61px 0">How it Works</h2>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="con" style="padding:65px 75px 30px 75px;background-color:#edd4a6;border-radius:10px">
						<h3 class="section_subheading" style="color:#3b3d42;font-size:22px;width:130px;background-color:#edd4a6;margin-top:-100px;padding:4px 22px;border-radius:4px 4px 0 0">Buying</h3>
						<ul style="margin:0">
							<li style="text-align:center">
								
								<div id="backlogo">
									<div style="background-color:#272727;height:40px;width:40px;border-radius:50%;padding-top:6px"><span style="color:white;padding-top:10px">1</span></div>
								</div>
								<div><span style="color:#3b3d42;font-size:16px;font-weight:bold;padding-right:55px">Register to Bid</span></div>
								<div><p> Lorem Ipsum is simply dummy text 
								of the printing and typesetting industry. 
								Lorem Ipsum has been the industry's standard 
								dummy text ever since the 1500s, when an 
								unknown printer took a galley of type and 
								scrambled it to make a type specimen book. 
								</p></div>
							</li>
							
							<li style="text-align:center">
								<div id="backlogo">
									<div style="background-color:#272727;height:40px;width:40px;border-radius:50%;padding-top:6px"><span style="color:white;padding-top:10px">2</span></div>
								</div>
								<div><span style="color:#3b3d42;font-size:16px;font-weight:bold;padding-right:55px">Bidding</span></div>
								<div><p> Lorem Ipsum is simply dummy text 
								of the printing and typesetting industry. 
								Lorem Ipsum has been the industry's standard 
								dummy text ever since the 1500s, when an 
								unknown printer took a galley of type and 
								scrambled it to make a type specimen book. 
								</p></div>
							</li>
							
							<li style="text-align:center">
								<div id="backlogo">
									<div style="background-color:#272727;height:40px;width:40px;border-radius:50%;padding-top:6px"><span style="color:white;padding-top:10px">3</span></div>
								</div>
								<div><span style="color:#3b3d42;font-size:16px;font-weight:bold;padding-right:55px">Winning</span></div>
								<div><p> Lorem Ipsum is simply dummy text 
								of the printing and typesetting industry. 
								Lorem Ipsum has been the industry's standard 
								dummy text ever since the 1500s, when an 
								unknown printer took a galley of type and 
								scrambled it to make a type specimen book. 
								</p></div>
							</li>
							<div>
								<a href="#" class="centerbtn">Register Now</a>
							</div>
						</ul>
					</div>
				</div>
				
				<div class="col-6">
					<div class="con" style="padding:65px 75px 30px 75px;background-color:#272727;border-radius:10px">
						<h3 style="font-size:22px;width:130px;background-color:#272727;color:#b98b35;margin-top:-100px;padding:4px 22px;border-radius:4px 4px 0 0">Selling</h3>
						<ul style="margin:0">
							<li style="text-align:center">
								<div id="backlogoright">
									<div style="background-color:#b98b35;height:40px;width:40px;border-radius:50%;padding-top:6px"><span style="color:white;padding-top:10px">1</span></div>
								</div>
								<div><span style="color:#b98b35;padding-right: 49px;font-size:16px;font-weight:bold">Submit your Vehicle</span></div>
								<div><p style="color:white"> Lorem Ipsum is simply dummy text 
								of the printing and typesetting industry. 
								Lorem Ipsum has been the industry's standard 
								dummy text ever since the 1500s, when an 
								unknown printer took a galley of type and 
								scrambled it to make a type specimen book. 
								</p></div>
							</li>
							
							<li style="text-align:center">
								<div id="backlogoright">
									<div style="background-color:#b98b35;height:40px;width:40px;border-radius:50%;padding-top:6px"><span style="color:white;padding-top:10px">2</span></div>
								</div>
								<div><span style="color:#b98b35;padding-right: 49px;font-size:16px;font-weight:bold">Final Approval</span></div>
								<div><p style="color:white"> Lorem Ipsum is simply dummy text 
								of the printing and typesetting industry. 
								Lorem Ipsum has been the industry's standard 
								dummy text ever since the 1500s, when an 
								unknown printer took a galley of type and 
								scrambled it to make a type specimen book. 
								</p></div>
							</li>
							
							<li style="text-align:center">
								<div id="backlogoright">
									<div style="background-color:#b98b35;height:40px;width:40px;border-radius:50%;padding-top:6px"><span style="color:white;padding-top:10px">3</span></div>
								</div>
								<div><span style="color:#b98b35;padding-right: 49px;font-size:16px;font-weight:bold">Buy Now!</span></div>
								<div><p style="color:white"> Lorem Ipsum is simply dummy text 
								of the printing and typesetting industry. 
								Lorem Ipsum has been the industry's standard 
								dummy text ever since the 1500s, when an 
								unknown printer took a galley of type and 
								scrambled it to make a type specimen book. 
								</p></div>
							</li>
							<div>
								<a href="#" class="centerbtn">Register Now</a>
							</div>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</main><!-- #site-content-->



<?php
get_footer();
?>
