<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header id="header">
		<div class="header-inner">
			<div class="logo">
	            <a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/logo-dark.png" alt="">
	            </a>
	        </div>
	
			<nav class="header-nav">
				<button class="menu-toggle"></button>
				<ul>
					<li><a href="<?php echo esc_url( home_url('/about/') ); ?>">OUR COMPANY</a></li>
					<li><a href="<?php echo esc_url( home_url('/locations/') ); ?>">LOCATIONS</a></li>
					<li><a href="<?php echo esc_url( home_url('/contact/') ); ?>">CONTACT</a></li>
				</ul>
				<div class="menu-overlay"></div>
			</nav>
		</div>
	</header>
