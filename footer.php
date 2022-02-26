<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer>
				
				<div style="background-color:#4d6f96;padding-bottom: 40px;">
					<div class="container">
						
						<div class="row" >
							<div class="col-8">
								<form>
									<h5 style="color: white;font-size:22px;font-weight:500;margin-bottom: 0">Sign up for latest car listings</h5>
									<p style="color: white;font-size: 14px;line-height: 1.6;">Lorem Ipsum is simply dummy text of the printing and 
									typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an 
									unknown printer took a galley of type and scrambled it to make a type specimen book.
									</p>
									<div class="row">
										<div class="col-10">
											<div>
												<label for="newsletter" class="visually-hidden">Email address</label>
												<input id="newsletter" style="height:35px;border-radius: 8px" type="text"  placeholder="Your Email">	
											</div>
										</div>
										<div class="col-2" style="padding: 0">
											<button class="buttonwala" type="button">SIGN UP</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div style="background-color:#ededed;padding: 0 0 30px 0">
					<div class="container">
						<div class="">
							<div class="row under">
								<div class="col-3">
									<h5>NFI Auction</h5>
									<div class="auctinmenu">
										<?php wp_nav_menu( array( 'menu' => 'nfi auctions', 'menu_class'=>'') );?>
									</div>
								</div>
								<div class="col-3">
									<h5>NFI Company</h5>
									<div class="companymenu">
										<?php wp_nav_menu( array( 'menu' => 'nfi company', 'menu_class'=>'') );?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div style="background-color:#212121;color:white;font-size:12px;font-weight: 400;padding: 10px 0 0 0">
					<div class="container">
						<div class="d-flex justify-content-between py-4">
							<p>©2021 NFI Auction</p>
							<p>Powered by: All Auto Network</p>
						</div>
					</div>
				</div>
				
			</footer>

		<?php wp_footer(); ?>

	</body>
</html>
