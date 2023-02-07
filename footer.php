<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Live_Art_Network_Africa
 */

?>

	<footer class="site-footer container-fluid">
		<div class="container footer-el">
			<div class="row">
				<div class="col-12 text-center text-md-start">
					<?php 
					$logo = get_field('expanded_logo', 11);
					if( !empty( $logo ) ): ?>
						<a href="<?php echo get_home_url() ?>">
							<img id="footer-logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-light">
				<div class="container footer-el">
					<div class="row footer-prompts">
						<div class="col-12 col-md-6">
						<button class="btn btn-lg btn-solid btn-teal btn-square ">
							<i class="fa-regular fa-envelope"></i> Subscribe
						</button>
						</div>
						<div class="col-12 col-md-6">
						<button class="btn btn-lg btn-solid btn-orange btn-square">
							<i class="fa-brands fa-instagram"></i> Instagram
						</button>
						</div>
						<br>
					</div>
					<div class="footer-links">
					<?php 
						$primaryNav = wp_get_nav_menu_items('2');
						foreach ( $primaryNav as $navItem ) {
							if(!$navItem->menu_item_parent){
								echo '<a class="parent btn btn-line btn-blue btn-square" id="'.$navItem->title.'" href="'.$navItem->url.'" ><i class="fa-solid fa-arrow-pointer"></i> '.$navItem->title.'</a><br>';
								$secondaryNav = wp_get_nav_menu_items('2');

							}
						}
					?>
					</div>
				</div>
		</div>
		<div class="container footer-bottom">
			<div class="row">
				<div class="col-12 my-2">
				Copyright © 2023, Institute for Creative Arts, University of Cape Town. All rights reserved.
				</div>
				<div class="col-12 row my-4">
					<div class="col-4 col-md-2 col-lg-1">
						<img class="rounded img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/LAS-logo.png" alt="">
					</div>
					<div class="col-8 attribution-text">
						<p>Website brought to you by <br> <a class="pink" href="https://lauraannseal.com">Laura Ann Seal</a></p>
						
					</div>
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- form -->
<script src="<?php echo get_template_directory_uri() ?>/js/menu.js"></script>
<!-- <script src="<?php echo get_template_directory_uri() ?>/js/form.js"></script> -->
<script src="<?php echo get_template_directory_uri() ?>/js/data-save.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/carousel.js"></script>

<!-- bootstrap dropdown -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
