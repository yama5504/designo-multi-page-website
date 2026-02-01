<?php get_header(); ?>

<main class="design app">
    <section class="design-mv">
        <div class="text-wrap">
            <h1><?php the_title(); ?></h1>
            <p>Our mobile designs bring intuitive digital solutions to your customers right at their fingertips.</p>
        </div>
    </section>

    <section class="achievements wrap leaf">
        <div class="achievements-list">
            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-design/desktop/image-airfilter.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">AIRFILTER</h3>
                    <p>Solving the problem of poor indoor air quality by filtering the air</p>
                </div>
            </div>

            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-design/desktop/image-eyecam.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">EYECAM</h3>
                    <p>Product that lets you edit your favorite photos and videos at any time</p>
                </div>
            </div>

            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-design/desktop/image-faceit.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">FACEIT</h3>
                    <p>Get to meet your favorite internet superstar with the faceit app</p>
                </div>
            </div>

            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-design/desktop/image-todo.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">TODO</h3>
                    <p>A todo app that features cloud sync with light and dark mode</p>
                </div>
            </div>

            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-design/desktop/image-loopstudios.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">LOOPSTUDIOS</h3>
                    <p>A VR experience app made for Loopstudios</p>
                </div>
            </div>
        </div>
    </section>

    <section class="projects wrap">
        <div class="projects-wrap">
            <a href="<?php echo esc_url( home_url('/web-design/') ); ?>" class="projects-link design">
                <p class="design-name">WEB DESIGN</p>
                <p class="link">VIEW PROJECTS<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/icon-right-arrow.svg"></p>
            </a>
            <a href="<?php echo esc_url( home_url('/graphic-design/') ); ?>" class="projects-link graphic">
                <p class="design-name">GRAPHIC DESIGN</p>
                <p class="link">VIEW PROJECTS<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/icon-right-arrow.svg"></p>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
  