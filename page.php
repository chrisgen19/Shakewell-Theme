<?php
/**
 * Template Name: Default Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shakewell
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- Page Hero Section -->
        <section class="w-full max-w-[1320px] mx-auto mt-10 px-[20px] md:px-[60px] lg:px-0">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => 'w-full h-auto']); ?>
            <?php endif; ?>

            <h1 class="text-white font-medium text-4xl md:text-8xl leading-[48px] md:leading-[112px] uppercase mt-[24px] md:mt-[40px]">
                <?php the_title(); ?>
            </h1>
        </section>

        <!-- Main Content Section -->
        <section class="w-full max-w-[1320px] mx-auto mt-10 px-[20px] md:px-[60px] lg:px-0">
            <div class="content-area text-white">
                <?php the_content(); ?>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact w-full mx-auto text-white px-[20px] md:px-[60px] lg:px-0" style="background-color: #585858;">
            <div class="section-title w-full max-w-[1320px] mx-auto mt-10 text-white pt-10">
                <h2 class="font-medium text-4xl md:text-8xl leading-[48px] md:leading-[112px] uppercase">Let's Talk</h2>
            </div>

            <div class="w-full max-w-[1096px] mx-auto text-right">
                <p class="font-normal text-[20px] leading-[24px] md:text-[44px] md:leading-[48px] uppercase text-left inline-block">Drop us a message about<br/> your idea or project below</p>
            </div>

            <div class="form-container w-full max-w-[1096px] mx-auto pb-10">
                <?php 
                // You can replace this with your contact form shortcode
                if (shortcode_exists('contact-form-7')) {
                    echo do_shortcode('[contact-form-7 id="YOUR_FORM_ID"]');
                } else {
                    // Basic fallback form
                    ?>
                    <form method="post" class="mt-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group">
                                <label class="text-white mb-2 block">First Name</label>
                                <input type="text" name="first_name" class="w-full p-2" placeholder="Your first name">
                            </div>
                            
                            <div class="form-group">
                                <label class="text-white mb-2 block">Last Name</label>
                                <input type="text" name="last_name" class="w-full p-2" placeholder="Your last name">
                            </div>
                            
                            <div class="form-group">
                                <label class="text-white mb-2 block">Email</label>
                                <input type="email" name="email" class="w-full p-2" placeholder="Example@admin.com">
                            </div>
                            
                            <div class="form-group">
                                <label class="text-white mb-2 block">Company Name (Optional)</label>
                                <input type="text" name="company" class="w-full p-2" placeholder="Company Name">
                            </div>
                        </div>
                        
                        <div class="form-group mt-6">
                            <label class="text-white mb-2 block">Message</label>
                            <textarea name="message" rows="6" class="w-full p-2" placeholder="Tell us about your project"></textarea>
                        </div>
                        
                        <div class="mt-6">
                            <button type="submit" class="bg-white text-black px-8 py-3">Submit</button>
                        </div>
                    </form>
                    <?php
                }
                ?>
            </div>
        </section>

    </article>

    <?php endwhile; ?>
</main>

<?php
get_footer();