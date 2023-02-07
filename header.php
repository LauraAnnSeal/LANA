<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Live_Art_Network_Africa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- bootstrap stylesheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/bootstrap/bootstrap.css">

	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/db2f528b42.js" crossorigin="anonymous"></script>

	<!-- social meta -->
	<!-- ????? -->

	<?php wp_head(); ?>
</head>


<!-- goggle analytics -->
<!-- ????? -->

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'live-art-network-africa' ); ?></a>






<!-- 
	HEADER
 -->

	<header id="masthead" class="site-header container-fluid">
		<div class="row">
			<!-- logo -->
			<div class="col-4">
				<?php 
				$logo = get_field('logo', 11);
				if( !empty( $logo ) ): ?>
					<a href="<?php echo get_home_url() ?>">
						<img id="site-logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
					</a>
				<?php endif; ?>
			</div>
			<!-- search bar -->
			<div id="ivory" class="d-none d-md-inline-flex col-md-5 col-lg-4">
					<?php echo do_shortcode('[ivory-search id="96" title="Header Search"]') ?>
			</div>
			<!--  -->
			<div class="data-saving-mode-button d-none col-2">
				<span class="text-end pe-1">Data Saving Mode</span>
				<button class="btn btn-icon btn-grey"><i class="fa-solid fa-power-off"></i></button>
			</div>
			<!-- menu button -->
			<div id="menu-btn-div"class="col-6 col-lg-4">
					<h4 class="menu-label d-none d-md-block">Menu</h4>
					<div class="menu-btn">
						<h4><i class="fa-sharp fa-solid fa-bars"></i></h4>
					</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div class="container-fluid d-md-none">
		<div class="row">
			<div id="ivory-mobile" class="col-12">
					<?php echo do_shortcode('[ivory-search id="96" title="Header Search"]') ?>
					<a href="<?php echo get_field('instagram_handle', 11) ?>" class=" btn btn-icon btn-grey">
						<i class="fa-brands fa-instagram"></i>
					</a>
			</div>
		</div>
	</div>



<div id="wrapper"></div>

	<!-- 
		MENU OPEN
	 -->
	<div class="container-fluid" id="menu-open">
		<div class="fixed-content">
			<div id="close-menu">
				<h4><i class="fa-sharp fa-solid fa-xmark"></i></h4>
			</div>
		</div>

		<div class="container-fluid menu-container">
			<div class="logo-container">
				<?php 
				$logo_in_white = get_field('logo_in_white', 11);
				if( !empty( $logo_in_white ) ): ?>
					<a href="<?php echo get_home_url() ?>">
						<img id="menu-logo" src="<?php echo esc_url($logo_in_white['url']); ?>" alt="<?php echo esc_attr($logo_in_white['alt']); ?>" />
					</a>
				<?php endif; ?>
			</div>

			<hr>
				

			<div class="row">
			<div class="data-saving-mode-button">
				<button class="btn btn-solid btn-data-save"><i class="fa-solid fa-power-off"></i> Data Saving Mode: <b>Off</b></button>
			</div>
				
				<div id="menu-row">
				<?php 
					$primaryNav = wp_get_nav_menu_items('2');
					foreach ( $primaryNav as $navItem ) {
						$active = 'active';
						if($navItem->title != get_the_title()){$active = '';};
						if(!$navItem->menu_item_parent){
							echo '<div class="dotted rounded"> <a class="parent btn btn-solid btn-white '.$active.' '.$navItem->ID.'" id="'.$navItem->title.'" href="'.$navItem->url.'" ><i class="fa-solid fa-circle"></i> '.$navItem->title.'</a><br>';
							$secondaryNav = wp_get_nav_menu_items('2');
							foreach ( $secondaryNav as $subItem ) {
								$active = 'active';
								if($subItem->title != get_the_title()){$active = '';};
								if($subItem->menu_item_parent == $navItem->ID){
									echo '<a class="child btn btn-line btn-white btn-sm '.$active.' '.$subItem->menu_item_parent.'" id="'.$subItem->title.'" href="'.$subItem->url.'" ><i class="fa-solid fa-circle"></i> '.$subItem->title.'</a><br>';
								}
							}
							echo '</div>';
						}
					}
				?>
				<div class="subscribe-div">
					<button class="btn btn-solid btn-orange">
					<i class="fa-regular fa-envelope"></i> Subscribe
					</button>
				</div>
				</div>
			</div>
		</div>
	</div>




	<script>
		const searchIcon = document.querySelectorAll('.is-search-submit');
		searchIcon.forEach(icon => {
			icon.innerHTML = '<i class="fa-solid fa-magnifying-glass"></i>'
		})
	</script>