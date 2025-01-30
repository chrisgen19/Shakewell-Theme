<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shakewell
 */

get_header();
?>

	<main id="primary" class="site-main">

		<style>
			.hero .header-text h1{
				font-family: "Space Grotesk", serif;
				/* font-optical-sizing: auto;
				font-style: normal;
				font-weight:500;
				line-height: 112px;
				font-size: 112px; */
				color:#FFF;
			}

			.hero h1{
				display: inline;
				margin: 0;
			}

			.slogan{    
				width: 336px;
				position: absolute;
				top: 205px;
			}

			@media (max-width: 767px) {
				.slogan{    
				width: 100%;
				position: relative;
				top: 0;
			}
			}

			/* Desktop layout */
			@media (min-width: 769px) {
				.hero h1:first-of-type:after {
					content: '\A';
					white-space: pre;
				}
			}

			@media (max-width: 768px) {
				.hero h1 {
					font-size: 56px;
					line-height: 64px;
				}
				
				.hero h1:first-of-type {
					display: block;
				}

				.hero h1:first-of-type:after {
					content: none;
				}
			}

		</style>

		<section class="hero hero-background w-full max-w-[1096px] mx-auto px-[20px] md:px-0 pt-[40px] pb-[40px] md:pt-[80px] md:pb-[80px]">
			<div class="container">
				<div class="header-text uppercase text-right">
					<h1 class="text-[112px] leading-[112px] font-medium font-normal">We're on a mission </h1>
					<h1 class="text-[112px] leading-[112px] font-medium font-normal">to build</h1>
				</div>
				<div class="header-text uppercase text-left">
					<h1 class="text-[112px] leading-[112px] font-medium font-normal">world class</h1>
					<h1 class="text-[112px] leading-[112px] font-medium font-normal">digital products</h1>
				</div>
				<p class="slogan font-normal text-[20px] leading-[24px] text-white py-6">
					Brands that lead by change; that aims to disrupt; that exists to shape the future of our world.
				</p>
			</div>
		</section>

		<section class="w-full max-w-[1096px] mx-auto mt-10 px-[20px] md:px-0">
			<div class="container flex items-center justify-between">
				<div class="col-v">
					<a href="#" class="text-white md:text-xl" >HOW CAN WE HELP</a>
				</div>
				<div class="col-v">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/lets-talk.png" alt="Hero Image">
				</div>
			</div>
		</section>

		<section class="w-full max-w-[1320px] mx-auto mt-10 px-[20px] md:px-[60px] lg:px-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/visual.png" alt="Hero Image">

			<p class="text-white font-normal text-[20px] leading-[24px] text-center md:text-[32px] md:leading-[40px] mt-[24px] md:mt-[40px]">Clarity and confidence through the power of brand strategy and design thinking.</p>

		</section>

		<section class="w-ful mx-auto px-[20px] md:px-[60px] lg:px-0" style="background-color: #585858;">
			<div class="section-title w-ful max-w-[1320px] mx-auto mt-10 text-white pl-0 md:pl-[224px] pt-10">
				<h2 class="font-medium text-4xl md:text-8xl leading-[48px] md:leading-[112px] uppercase">SERVICES</h2>
				<p class="font-normal text-[20px] leading-[24px] uppercase md:text-[44px] md:leading-[48px]">All things digital, brought to you by a strong, experienced team.</p>
			</div>
			<div class="max-w-6xl w-ful max-w-[1320px] mx-auto mt-10 text-white pl-0 md:pl-[224px] pb-10 pl-20 md:py-16 md:pl-56">
				<div class="flex flex-col md:flex-row justify-between py-8 border-b border-white/10">
					<h2 class="font-normal text-[20px] leading-[24px] md:text-[32px] md:w-2/5">Web & Mobile Development</h2>
					<div class="text-gray-200 md:w-1/2 mt-0 md:mt-4"  style="color:#C8C8C8;">
						<span>Frontend & Backend Development</span>
					</div>
				</div>

				<div class="flex flex-col md:flex-row justify-between py-8 border-b border-white/10">
					<h2 class="font-normal text-[20px] leading-[24px] md:text-[32px] md:w-2/5">Product Design</h2>
					<div class="text-gray-200 md:w-1/2 mt-0 md:mt-4"  style="color:#C8C8C8;">
						<span>Responsive Website Design</span>
						<span class="text-gray-400 mx-2">|</span>
						<span>Mobile Application Design</span>
						<span class="text-gray-400 mx-2">|</span>
						<span>Dashboard Management Design</span>
					</div>
				</div>

				<div class="flex flex-col md:flex-row justify-between py-8 border-b border-white/10">
					<h2 class="font-normal text-[20px] leading-[24px] md:text-[32px] md:w-2/5">Branding</h2>
					<div class="text-gray-200 md:w-1/2 mt-0 md:mt-4"  style="color:#C8C8C8;">
						<span>Logo Design</span>
						<span class="text-gray-400 mx-2">|</span>
						<span>Brand Identity</span>
					</div>
				</div>

				<div class="flex flex-col md:flex-row justify-between py-8 border-b border-white/10">
					<h2 class="font-normal text-[20px] leading-[24px] md:text-[32px] md:w-2/5">Consulting</h2>
					<div class="text-gray-200 md:w-1/2 mt-0 md:mt-4" style="color:#C8C8C8;">
						<span>Branding</span>
						<span class="text-gray-400 mx-2">|</span>
						<span>Rebranding</span>
						<span class="text-gray-400 mx-2">|</span>
						<span>Product Design</span>
					</div>
				</div>
			</div>
		</section>

		<section class="projects w-full max-w-[1320px] mx-auto mt-10 text-white px-[20px] md:px-[60px] lg:px-0">
			<div class="section-title flex flex-col gap-2 pb-10 md:flex-row md:items-end md:justify-between md:pb-24">
				<h1 class="font-medium text-4xl md:text-8xl leading-[48px] md:leading-[112px] uppercase">
					RECENT<br/>PROJECTS
				</h1>
				<a href="#" class="cursor-pointer text-white underline underline-offset-2 hover:text-gray-light" >SEE MORE</a>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
				<div>
					<img src="/wp-content/themes/shakewell/assets/images/cs-1.png" alt="Case Study 1" class="w-full h-auto" />
					<div class="md:hidden">
						<div>
							<h3 class="text-2xl uppercase text-white md:mb-2 md:text-3xl" >MUK</h3>
							<h4 class="mb-4 text-xl text-gray-light md:mb-10 font-normal text-[20px] leading-[24px]" >E-COMMERCE WEBSITE DESIGN</h4>
							<p class="pb-6 text-white"></p>
						</div>
						<div class="flex items-end justify-end md:justify-start">
							<button class="circular-btn group-hover:btn-active" href="" aria-label="OMP">
								<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5 12h14m0 0-6-6m6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</button>
						</div>
					</div>
				</div>
				<div>
					<img src="/wp-content/themes/shakewell/assets/images/cs-2.png" alt="Case Study 2" class="w-full h-auto" />
					<div class="md:hidden">
						<div>
							<h3 class="text-2xl uppercase text-white md:mb-2 md:text-3xl" >OMP</h3>
							<h4 class="mb-4 text-xl text-gray-light md:mb-10 font-normal text-[20px] leading-[24px]" >INTEGRATED MOBILE APP & CUSTOM DASHBOARD</h4>
							<p class="pb-6 text-white"></p>
						</div>
						<div class="flex items-end justify-end md:justify-start">
							<button class="circular-btn group-hover:btn-active" href="" aria-label="OMP">
								<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5 12h14m0 0-6-6m6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</button>
						</div>
					</div>
				</div>
				<div>
					<img src="/wp-content/themes/shakewell/assets/images/cs-3.png" alt="Case Study 3" class="w-full h-auto" />
					<div class="md:hidden">
						<div>
							<h3 class="text-2xl uppercase text-white md:mb-2 md:text-3xl" >SAFEPROUD</h3>
							<h4 class="mb-4 text-xl text-gray-light md:mb-10 font-normal text-[20px] leading-[24px]" >FULLY INTEGRATED WEBSITE, MOBILE APP, CUSTOM PORTAL</h4>
							<p class="pb-6 text-white"></p>
						</div>
						<div class="flex items-end justify-end md:justify-start">
							<button class="circular-btn group-hover:btn-active" href="" aria-label="OMP">
								<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5 12h14m0 0-6-6m6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</button>
						</div>
					</div>
				</div>
				<div>
					<img src="/wp-content/themes/shakewell/assets/images/cs-4.png" alt="Case Study 4" class="w-full h-auto" />
					<div class="md:hidden">
						<div>
							<h3 class="text-2xl uppercase text-white md:mb-2 md:text-3xl" >OMP</h3>
							<h4 class="mb-4 text-xl text-gray-light md:mb-10 font-normal text-[20px] leading-[24px]" >INTEGRATED MOBILE APP & CUSTOM DASHBOARD</h4>
							<p class="pb-6 text-white"></p>
						</div>
						<div class="flex items-end justify-end md:justify-start">
							<button class="circular-btn group-hover:btn-active" href="" aria-label="OMP">
								<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5 12h14m0 0-6-6m6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<style>
			.clients .header {
				display: flex;
				justify-content: space-between;
				align-items: center;
				margin-bottom: 4rem;
			}

			.clients .title {
				font-size: 4rem;
				font-weight: bold;
			}

			.nav-buttons {
				display: flex;
				gap: 1rem;
			}

			.nav-button {
				background: transparent;
				border: none;
				color: white;
				font-size: 1.5rem;
				cursor: pointer;
				padding: 0.5rem;
				transition: opacity 0.3s;
			}

			.nav-button:hover {
				opacity: 0.7;
			}

			.clients-slider {
				position: relative;
				overflow: hidden;
			}

			.clients-track {
				display: flex;
				gap: 2rem;
				transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			}

			.client-card {
				flex: 0 0 calc(25% - 1.5rem);
			}

			.client-logo {
				width: 120px;
				height: 120px;
				background-color: #ffffff;
				border-radius: 50%;
				margin: 0 auto 1.5rem;
				display: flex;
				align-items: center;
				justify-content: center;
			}

			.client-logo img {
				max-width: 60%;
				height: auto;
			}

			.client-name {
				font-size: 1.5rem;
				margin-bottom: 1rem;
				text-align: left;
			}

			.client-description {
				font-size: 0.9rem;
				line-height: 1.6;
				color: #cccccc;
				text-align: left;
			}

			@media (max-width: 1024px) {
				.client-card {
					flex: 0 0 calc(33.333% - 1.5rem);
				}
			}

			@media (max-width: 768px) {
				.client-card {
					flex: 0 0 calc(50% - 1rem);
				}
				.title {
					font-size: 3rem;
				}
				.header {
					flex-wrap: wrap;
					gap: 1rem;
				}
				.client-description {
					font-size: 0.85rem;
				}
			}

			@media (max-width: 480px) {
				.title {
					font-size: 2rem;
				}
			}
		</style>

		<section class="clients w-full max-w-[1320px] mx-auto mt-10 text-white px-[20px] md:px-[60px] lg:px-0">
			<div class="header">
				<h1 class="font-medium text-4xl md:text-8xl leading-[48px] md:leading-[112px] uppercase">OUR CLIENTS</h1>
				<div class="nav-buttons">
					<button class="nav-button prev">←</button>
					<button class="nav-button next">→</button>
				</div>
			</div>

			<div class="overflow-hidden">
				<div class="clients-track flex gap-8 transition-transform duration-300 ease-in-out">
					<div class="client-card flex-none w-[calc(25%-2rem)] md:w-[calc(50%-2rem)]">
						<div class="w-32 h-32 mb-6 flex items-center justify-center mx-auto">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/cl-1.png'; ?>" alt="CardX" />
						</div>
						<h2 class="text-2xl mb-4">CardX</h2>
						<p class="text-sm leading-relaxed text-gray-400">
							CardX worked with Shakewell to build a responsive playing card collection website and management seller and buyer dashboard.
						</p>
					</div>

					<div class="client-card flex-none w-[calc(25%-2rem)] md:w-[calc(50%-2rem)]">
						<div class="w-32 h-32 mb-6 flex items-center justify-center mx-auto">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/cl-2.png'; ?>" alt="Safeproud" />
						</div>
						<h2 class="text-2xl mb-4">Safeproud</h2>
						<p class="text-sm leading-relaxed text-gray-400">
							SafeProud partnered with Shakewell to aid companies in promoting OHS within their company and encourages staff members to be actively involved with compliance and safe working practices.
						</p>
					</div>

					<div class="client-card flex-none w-[calc(25%-2rem)] md:w-[calc(50%-2rem)]">
						<div class="w-32 h-32 mb-6 flex items-center justify-center mx-auto">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/cl-3.png'; ?>" alt="WSU" />
						</div>
						<h2 class="text-2xl mb-4">WSU</h2>
						<p class="text-sm leading-relaxed text-gray-400">
							WSU approached Shakewell to create a way for students to associate their life experiences with a Capacities framework. These experiences would build their resume, which can be shared with potential employers.
						</p>
					</div>

					<div class="client-card flex-none w-[calc(25%-2rem)] md:w-[calc(50%-2rem)]">
						<div class="w-32 h-32 mb-6 flex items-center justify-center mx-auto">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/cl-4.png'; ?>" alt="OMP" />
						</div>
						<h2 class="text-2xl mb-4">OMP</h2>
						<p class="text-sm leading-relaxed text-gray-400">
							Optimize Mind Performance teamed up with Shakewell to create a leading mental skills solution for athletes and teams across the world.
						</p>
					</div>
					<div class="client-card flex-none w-[calc(25%-2rem)] md:w-[calc(50%-2rem)]">
						<div class="w-32 h-32 mb-6 flex items-center justify-center mx-auto">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/cl-1.png'; ?>" alt="CardX" />
						</div>
						<h2 class="text-2xl mb-4">CardX</h2>
						<p class="text-sm leading-relaxed text-gray-400">
							CardX worked with Shakewell to build a responsive playing card collection website and management seller and buyer dashboard.
						</p>
					</div>

					<div class="client-card flex-none w-[calc(25%-2rem)] md:w-[calc(50%-2rem)]">
						<div class="w-32 h-32 mb-6 flex items-center justify-center mx-auto">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/cl-2.png'; ?>" alt="Safeproud" />
						</div>
						<h2 class="text-2xl mb-4">Safeproud</h2>
						<p class="text-sm leading-relaxed text-gray-400">
							SafeProud partnered with Shakewell to aid companies in promoting OHS within their company and encourages staff members to be actively involved with compliance and safe working practices.
						</p>
					</div>
				</div>
			</div>

		</section>

		<section class="contact w-ful mx-auto text-white px-[20px] md:px-[60px] lg:px-0" style="background-color: #585858;" >
			<div class="section-title w-ful max-w-[1320px] mx-auto mt-10 text-white pt-10">
				<h2 class="font-medium text-4xl md:text-8xl leading-[48px] md:leading-[112px] uppercase">Let's Talk</h2>
			</div>

			<div class="w-full max-w-[1096px] mx-auto text-right">
				<p class="font-normal text-[20px] leading-[24px] md:text-[44px] md:leading-[48px] uppercase text-left inline-block">Drop us a message about<br/> your idea or project below</p>
			</div>

			<div class="form-container w-full max-w-[1096px] mx-auto">
				<h1>What would you like to inquire for?</h1>
				
				<div class="button-group">
					<button class="option-button active">New Project</button>
					<button class="option-button">Consulting</button>
					<button class="option-button">Other Enquiries</button>
				</div>
				
				<form>
					<div class="form-grid">
						<div class="form-group">
							<label>First Name</label>
							<input type="text" placeholder="Your first name">
						</div>
						
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" placeholder="Your last name">
						</div>
						
						<div class="form-group">
							<label>Email</label>
							<input type="email" placeholder="Example@admin.com">
						</div>
						
						<div class="form-group">
							<label class="optional">Company Name</label>
							<input type="text" placeholder="Company Name">
						</div>
						
						<div class="form-group full-width">
							<label>Tell Us About The Project (Scope, Timeline, Budget)</label>
							<textarea placeholder="Placeholder"></textarea>
						</div>
					</div>
					
					<div class="submit-container">
						<button type="submit" class="submit-button">Submit</button>
					</div>
				</form>
			</div>

		</section>

	</main><!-- #main -->

<?php
get_footer();