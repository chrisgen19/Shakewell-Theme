<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shakewell
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..500&display=swap" rel="stylesheet">

	<?php wp_head(); ?>


    <style>
		h1,
		h2,
		h3,
		h4,
		p,
		a,
		nav a{
			font-family: "Space Grotesk", serif;
		}

        .nav-link {
            position: relative;
			font-family: "Space Grotesk", serif;
			font-optical-sizing: auto;
			font-style: normal;
			font-weight:500;
			line-height: 20px;
			font-size: 18px;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 1px;
            bottom: -2px;
            left: 0;
            background-color: white;
            transform: scaleX(0);
            transition: transform 0.2s ease-in-out;
        }
        .nav-link:hover::after {
            transform: scaleX(1);
        }


		.hero-background{
			position: relative;
		}

        .hero-background::before {
            content: url('/wp-content/themes/shakewell/assets/images/shape.png');
			width: 535px;
			height: 536px;
			position: absolute;
			top: 100px;
        }

		/* create me @media queries for mobile */

		@media (max-width: 769px) {
			.hero-background::before {
				content: url('/wp-content/themes/shakewell/assets/images/shape-sm.png');
				width: 200px;
				height: 200px;
				position: absolute;
				top: 0px;
			}
		}

		


        .hero-overlay {
            background: rgba(0, 0, 0, 0.7);
        }
    </style>
</head>

<body <?php body_class('m-0'); ?> style="background-color: #121212;">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'shakewell' ); ?></a>

	<header id="masthead" class="site-header mx-auto max-w-full px-0 md:px-[20px] lg:px-[60px]">

		<nav class="p-4">
			<div class="flex justify-between items-center">
				<!-- Logo -->
				<a href="/" class="flex items-center">
					<div class="flex items-center justify-center  z-50">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
					</div>
				</a>

				<!-- Desktop Navigation -->
				<div class="hidden md:flex items-center space-x-8">
					<a href="/projects" class="text-white hover:text-white nav-link">PROJECTS</a>
					<a href="/about" class="text-white hover:text-white nav-link">ABOUT</a>
				</div>

				<!-- Mobile Menu Button -->
				<button id="mobile-menu-button" class="md:hidden text-white p-2 zx-menu-toggle z-50" aria-label="Toggle menu">
					<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="icon-base zx-menu-icon">
						<path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
					<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="icon-base zx-close-icon text-white hidden">
						<path d="m6 6 12 12m0-12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</button>
			</div>
		</nav>

		<!-- Mobile Menu -->
		<nav class="zx-mobile-menu fixed inset-0 hidden z-40"  style="background-color: #121212;">
			<div class="zx-menu-content h-full flex flex-col justify-center px-8">
				<!-- Menu Items -->
				<ul class="zx-menu-items mb-16">
					<li><a href="/" class="zx-menu-link text-white text-2xl font-bold underline block">HOME</a></li>
					<li><a href="/about" class="zx-menu-link text-white text-2xl font-bold underline block">ABOUT US</a></li>
					<li><a href="/work" class="zx-menu-link text-white text-2xl font-bold underline block">OUR WORK</a></li>
					<li><a href="/services" class="zx-menu-link text-white text-2xl font-bold underline block">OUR SERVICES</a></li>
					<li><a href="/contact" class="zx-menu-link text-white text-2xl font-bold underline block">CONTACT US</a></li>
					<li><a href="/blog" class="zx-menu-link text-white text-2xl font-bold underline block">BLOG</a></li>
					<li><a href="/privacy" class="zx-menu-link text-white text-2xl font-bold underline block">PRIVACY POLICY</a></li>
				</ul>

				<!-- Contact Information -->
				<div class="zx-contact-info absolute bottom-8 left-8 text-gray-500 space-y-2">
					<p>hello@shakewell.agency</p>
					<p>0422 640 883</p>
					<p>493 Bourke St. Surry Hills NSW 2010. Sydney</p>
					<p>Australia</p>
				</div>
			</div>
		</nav>

		<div class="site-branding" style="display:none;">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$shakewell_description = get_bloginfo( 'description', 'display' );
			if ( $shakewell_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $shakewell_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation"  style="display:none;">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'shakewell' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
