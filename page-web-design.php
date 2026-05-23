<?php get_header(); ?>

<main class="design web">
    <section class="design-mv">
        <div class="text-wrap">
            <h1><?php the_title(); ?></h1>
            <p>We build websites that serve as powerful marketing tools and bring memorable brand experiences.</p>
        </div>
    </section>

    <section class="achievements wrap leaf">
        <div class="achievements-list">
            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design/desktop/image-express.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">EXPRESS</h3>
                    <p>A multi-carrier shipping website for ecommerce businesses</p>
                </div>
            </div>

            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design/desktop/image-transfer.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">TRANSFER</h3>
                    <p>Site for low-cost money transfers and sending money within seconds</p>
                </div>
            </div>

            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design/desktop/image-photon.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">PHOTON</h3>
                    <p>A state-of-the-art music player with high-resolution audio and DSP effects</p>
                </div>
            </div>

            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design/desktop/image-builder.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">BUILDER</h3>
                    <p>Connects users with local contractors based on their location</p>
                </div>
            </div>

            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design/desktop/image-blogr.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">BLOGR</h3>
                    <p>Blogr is a platform for creating an online blog or publication</p>
                </div>
            </div>

            <div class="achievement">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design/desktop/image-camp.jpg" alt="express">
                <div class="achievement-des">
                    <h3 class="peach">CAMP</h3>
                    <p>Get expert training in coding, data, design, and digital marketing</p>
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
            <a href="<?php echo esc_url( home_url('/graphic-design/') ); ?>" class="projects-link graphic">
                <p class="design-name">GRAPHIC DESIGN</p>
                <p class="link">VIEW PROJECTS<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/icon-right-arrow.svg"></p>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
  