<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shakewell
 */

?>

	<footer id="colophon"  class="site-footer flex flex-col items-center p-16 mt-auto gap-12">
        <!-- Logo -->
        <div class="w-16 h-16 p-2">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/footer-logo.png'; ?>" alt="ShakeWell Logo" >
        </div>

        <!-- Navigation -->
        <nav class="flex flex-col md:flex-row justify-center gap-6 md:gap-12">
            <a href="#home" class="text-white uppercase text-sm underline hover:opacity-80 transition-opacity">Home</a>
            <a href="#projects" class="text-white uppercase text-sm underline hover:opacity-80 transition-opacity">Projects</a>
            <a href="#about" class="text-white uppercase text-sm underline hover:opacity-80 transition-opacity">About</a>
            <a href="#contact" class="text-white uppercase text-sm underline hover:opacity-80 transition-opacity">Contact</a>
        </nav>
        
        <!-- Social Links -->
        <div class="my-8">
            <a href="#linkedin" aria-label="LinkedIn" class="opacity-80 hover:opacity-100 transition-opacity">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/social-media.png'; ?>" alt="LinkedIn">
            </a>
        </div>

        <!-- Copyright -->
        <div class="site-info text-gray-400 text-sm">
            ©ShakeWell Agency 2023. All Rights Reserved.
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

	<script>
        const html = document.documentElement;
        const body = document.body;
        const menuToggle = document.querySelector('.zx-menu-toggle');
        const mobileMenu = document.querySelector('.zx-mobile-menu');
        const menuIcon = document.querySelector('.zx-menu-icon');
        const closeIcon = document.querySelector('.zx-close-icon');
        let scrollPosition = 0;

        function preventDefault(e) {
            e.preventDefault();
        }

        function disableScroll() {
            scrollPosition = window.pageYOffset;
            
            html.classList.add('zx-no-scroll');
            body.classList.add('zx-no-scroll');
            
            body.style.top = `-${scrollPosition}px`;
            
            document.addEventListener('touchmove', preventDefault, { passive: false });
            document.addEventListener('wheel', preventDefault, { passive: false });
            document.addEventListener('scroll', preventDefault, { passive: false });
        }

        function enableScroll() {
            html.classList.remove('zx-no-scroll');
            body.classList.remove('zx-no-scroll');
            
            body.style.top = '';
            
            window.scrollTo(0, scrollPosition);
            
            document.removeEventListener('touchmove', preventDefault);
            document.removeEventListener('wheel', preventDefault);
            document.removeEventListener('scroll', preventDefault);
        }

        function toggleMenu(isOpen) {
            if (isOpen) {
                mobileMenu.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                disableScroll();
            } else {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                enableScroll();
            }
        }

        menuToggle.addEventListener('click', () => {
            const isMenuHidden = mobileMenu.classList.contains('hidden');
            toggleMenu(isMenuHidden);
        });

        document.querySelectorAll('.zx-menu-link').forEach(link => {
            link.addEventListener('click', () => {
                toggleMenu(false);
            });
        });

        window.addEventListener('resize', () => {
            if (!mobileMenu.classList.contains('hidden')) {
                body.style.top = `-${window.pageYOffset}px`;
            }
        });

        mobileMenu.addEventListener('touchmove', (e) => {
            e.preventDefault();
        }, { passive: false });
    </script>

	<script>
        const track = document.querySelector('.clients-track');
        const cards = document.querySelectorAll('.client-card');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');

        let cardWidth = cards[0].offsetWidth + 32; // 32px for gap-8
        const totalCards = cards.length;
        let currentIndex = 0;
        let isMobile = window.innerWidth <= 768;

        function updateSliderPosition() {
            cardWidth = cards[0].offsetWidth + 32;
            const maxPossibleIndex = Math.max(0, totalCards - (isMobile ? 2 : 4));
            
            track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
            
            // Update button states
            prevButton.style.opacity = currentIndex === 0 ? '0.5' : '1';
            nextButton.style.opacity = currentIndex >= maxPossibleIndex ? '0.5' : '1';
        }

        function moveLeft() {
            // Calculate the maximum possible index based on viewport
            const maxPossibleIndex = Math.max(0, totalCards - (isMobile ? 2 : 4));
            
            // Prevent scrolling beyond the last filled view
            if (currentIndex > 0 && currentIndex <= maxPossibleIndex) {
                currentIndex--;
                updateSliderPosition();
            }
        }

        function moveRight() {
            // Calculate the maximum possible index based on viewport
            const maxPossibleIndex = Math.max(0, totalCards - (isMobile ? 2 : 4));
            
            if (currentIndex >= maxPossibleIndex) {
                currentIndex = 0;
            } else {
                currentIndex++;
            }
            updateSliderPosition();
        }

        prevButton.addEventListener('click', moveLeft);
        nextButton.addEventListener('click', moveRight);

        window.addEventListener('resize', () => {
            isMobile = window.innerWidth <= 768;
            const maxIndex = isMobile ? totalCards - 2 : totalCards - 1;
            if (currentIndex > maxIndex) {
                currentIndex = maxIndex;
            }
            updateSliderPosition();
        });

        // Initial setup
        updateSliderPosition();


		// FORM

        // Simple button toggle functionality
        const buttons = document.querySelectorAll('.option-button');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                buttons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
            });
        });
    </script>

</body>
</html>
