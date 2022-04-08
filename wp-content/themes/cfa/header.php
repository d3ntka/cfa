<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.typekit.net/rmy2tuu.css">
	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'cfa' ); ?></a>

<div id="app">
	<header>
		<nav id="header" class="navbar navbar-expand-lg <?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container navbar-container">
			<!-- <div class=""> -->
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/build/img/logo-cfa.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'cfa' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse">
					<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav mx-auto',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);
					?>
				</div><!-- /.navbar-collapse -->
				<div id="navbar" class="collapse navbar-collapse ms-auto">
						<div class="nav-socials">
							<a href="" class="">
								<svg xmlns="http://www.w3.org/2000/svg" width="19.922" height="16.231" viewBox="0 0 19.922 16.231">
									<path id="Path_233" data-name="Path 233" d="M6.583,214.291H5.917a.846.846,0,0,0-.095-.013,10.783,10.783,0,0,1-1.23-.107,11.548,11.548,0,0,1-4.525-1.653c-.023-.015-.045-.033-.067-.049l.005-.018a8.242,8.242,0,0,0,3.157-.254,7.938,7.938,0,0,0,2.819-1.433,4.384,4.384,0,0,1-1.618-.4,4.19,4.19,0,0,1-1.338-1,3.547,3.547,0,0,1-.8-1.458,3.87,3.87,0,0,0,1.761-.073,4.279,4.279,0,0,1-1.67-.805,4.055,4.055,0,0,1-1.15-1.438,3.783,3.783,0,0,1-.386-1.8,5.369,5.369,0,0,0,.868.338,3.374,3.374,0,0,0,.922.135A4.107,4.107,0,0,1,.9,201.782a4.063,4.063,0,0,1,.45-2.976,11.69,11.69,0,0,0,3.765,3.037,11.55,11.55,0,0,0,4.669,1.245c-.007-.049-.01-.08-.016-.111a3.963,3.963,0,0,1,.187-2.274,4.029,4.029,0,0,1,3.183-2.592c.123-.023.248-.034.372-.051h.561c.144.02.289.036.433.062a4.035,4.035,0,0,1,2.2,1.156.163.163,0,0,0,.177.054c.175-.047.353-.083.527-.131a8.128,8.128,0,0,0,1.847-.771c.031-.017.064-.03.1-.045l.016.021a4.176,4.176,0,0,1-1.728,2.2.182.182,0,0,0,.069,0,8.123,8.123,0,0,0,1.911-.5l.31-.121v.018c-.021.024-.043.047-.061.073a8.263,8.263,0,0,1-1.883,1.951.2.2,0,0,0-.092.19,11.439,11.439,0,0,1-.09,1.879,12.168,12.168,0,0,1-3.552,7.067,10.85,10.85,0,0,1-1.961,1.507,11.382,11.382,0,0,1-5.525,1.6c-.058,0-.116.01-.174.015" transform="translate(0 -198.06)" fill="#fff"/>
								</svg>
							</a>
							<a href="" class="">
								<svg xmlns="http://www.w3.org/2000/svg" width="9.828" height="18.899" viewBox="0 0 9.828 18.899">
									<path id="Path_5937" data-name="Path 5937" d="M541.606,203.779h-3.479c0-.05-.009-.1-.009-.151q0-4.164,0-8.328v-.148h-2.905v-3.365h2.905v-.14c0-.812,0-1.624,0-2.435a5.227,5.227,0,0,1,.307-1.8,3.636,3.636,0,0,1,1.855-2.085,4.444,4.444,0,0,1,1.968-.452c.734,0,1.469.036,2.2.062.2.007.394.036.589.055v3.027H544.9c-.536,0-1.073-.006-1.609,0a3.784,3.784,0,0,0-.689.068,1.1,1.1,0,0,0-.932.933,3.538,3.538,0,0,0-.055.615c-.007.674,0,1.348,0,2.022v.13h3.321l-.436,3.365h-2.885v.152q0,4.158,0,8.317c0,.05-.006.1-.009.151" transform="translate(-535.213 -184.88)" fill="#fff"/>
								</svg>
							</a>
							<a href="" class="">
								<svg xmlns="http://www.w3.org/2000/svg" width="16.688" height="18.899" viewBox="0 0 16.688 18.899">
									<path id="Union_1" data-name="Union 1" d="M14.63,17.117l-1.154-1.058-1.22-1.125.505,1.744H1.954A1.956,1.956,0,0,1,0,14.725V1.954A1.956,1.956,0,0,1,1.954,0H14.725a1.971,1.971,0,0,1,1.963,1.954V18.9ZM4.2,5.4a12.581,12.581,0,0,0-1.373,5.509,3.462,3.462,0,0,0,2.907,1.439s.352-.419.638-.782a2.98,2.98,0,0,1-1.668-1.115s.1.067.267.162c.01,0,.019.01.038.019s.057.028.086.048a5.586,5.586,0,0,0,.7.324,7.244,7.244,0,0,0,1.4.41,6.673,6.673,0,0,0,2.469.01,6.837,6.837,0,0,0,1.382-.41,5.457,5.457,0,0,0,1.1-.562,3.022,3.022,0,0,1-1.725,1.125c.286.353.629.762.629.762a3.492,3.492,0,0,0,2.907-1.43A12.584,12.584,0,0,0,12.581,5.4a4.7,4.7,0,0,0-2.669-.991l-.133.152a6.259,6.259,0,0,1,2.373,1.2,7.917,7.917,0,0,0-2.869-.905,8.058,8.058,0,0,0-1.925.019A.939.939,0,0,0,7.2,4.9a7.473,7.473,0,0,0-2.163.6c-.352.152-.562.267-.562.267a6.254,6.254,0,0,1,2.5-1.239l-.1-.114H6.861A4.758,4.758,0,0,0,4.2,5.4ZM9.121,8.978a.975.975,0,1,1,.972,1.049A1.007,1.007,0,0,1,9.121,8.978Zm-3.479,0a.975.975,0,1,1,1.944,0,1.007,1.007,0,0,1-.972,1.049A1.013,1.013,0,0,1,5.642,8.978Z" fill="#fff"/>
								</svg>
							</a>
						</div>
						<a class="btn btn-white" href="#contact">
							<?php _e("Kontakt","cfa-t") ;?>
						</a>
				</div>
			</div><!-- /.container -->
			<!-- </div> -->
		</nav><!-- /#header -->
	</header>

	<main id="main" class=""<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
		
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12">
		<?php
			endif;
		?>
