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
					<?php echo do_shortcode('[ivory-search id="96" title="Custom Search Form"]') ?>
					<a href="<?php echo get_field('instagram_handle', 11) ?>" class="d-none d-lg-inline-flex btn form-btn-icon btn-pale">
						<i class="fa-brands fa-instagram"></i>
					</a>
			</div>
			<!-- menu button -->
			<div id="menu-btn-div"class="col-3 d-lg-4">
					<h4 class="menu-label">Menu</h4>
					<div class="menu-btn">
						<h4><i class="fa-solid fa-bars"></i></h4>
					</div>
			</div>
		</div>
	</header><!-- #masthead -->


	<script>
		const searchIcon = document.querySelector('.is-search-submit');
		searchIcon.innerHTML = '<i class="fa-solid fa-magnifying-glass"></i>'
	</script>