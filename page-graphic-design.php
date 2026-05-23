<?php get_header(); ?>

<main class="design graphic">
    <section class="design-mv">
        <div class="text-wrap">
            <h1><?php the_title(); ?></h1>
            <p>We deliver eye-catching branding materials that are tailored to meet your business objectives.</p>
        </div>
    </section>

    <section class="achievements wrap leaf">
        <div class="achievements-list">
            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/graphic-design/desktop/image-change.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">TIM BROWN</h3>
                    <p>A book cover designed for Tim Brown’s new release, ‘Change’</p>
                </div>
            </div>

            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/graphic-design/desktop/image-boxed-water.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">BOXED WATER</h3>
                    <p>A simple packaging concept made for Boxed Water</p>
                </div>
            </div>

            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/graphic-design/desktop/image-science.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">SCIENCE!</h3>
                    <p>A poster made in collaboration with the Federal Art Project</p>
                </div>
            </div>
        </div>
    </section>

    <section class="projects wrap">
        <div class="projects-wrap">
            <a href="<?php echo esc_url( home_url('/app-design/') ); ?>" class="projects-link app">
                <p class="design-name">APP DESIGN</p>
                <p class="link">VIEW PROJECTS<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/icon-right-arrow.svg"></p>
            </a>
            <a href="<?php echo esc_url( home_url('/web-design/') ); ?>" class="projects-link design">
                <p class="design-name">WEB DESIGN</p>
                <p class="link">VIEW PROJECTS<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/icon-right-arrow.svg"></p>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
  