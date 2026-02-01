<?php get_header(); ?>

<main class="top">
    <section class="mv">
        <div class="text-wrap">
            <h1>Award-winning custom designs and digital branding solutions</h1>
            <p>With over 10 years in the industry, we are experienced in creating fully responsive websites, app design, and engaging brand experiences. Find out more about our services.</p>
            <a href="" class="cv-btn">LEARN MORE</a>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/desktop/image-hero-phone.png" alt="">
    </section>
    
    <section class="projects wrap leaf">
        <div class="projects-wrap">
            <a href="<?php echo esc_url( home_url('/web-design/') ); ?>" class="projects-link design">
                <p class="design-name">WEB DESIGN</p>
                <p class="link">VIEW PROJECTS<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/icon-right-arrow.svg"></p>
            </a>
            <a href="<?php echo esc_url( home_url('/app-design/') ); ?>" class="projects-link app">
                <p class="design-name">APP DESIGN</p>
                <p class="link">VIEW PROJECTS<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/icon-right-arrow.svg"></p>
            </a>
            <a href="<?php echo esc_url( home_url('/graphic-design/') ) ?>" class="projects-link graphic">
                <p class="design-name">GRAPHIC DESIGN</p>
                <p class="link">VIEW PROJECTS<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/icon-right-arrow.svg"></p>
            </a>
        </div>
    </section>

    <section id="values" class="wrap leaf">
        <div class="values-wrap">
            <div class="value">
                <div class="illust"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/desktop/illustration-passionate.svg" alt=""></div>
                <div>
                    <h3>PASSIONATE</h3>
                    <p>Each project starts with an in-depth brand research to ensure we only create products that serve a purpose. We merge art, design, and technology into exciting new solutions.</p>
                </div>
            </div>
            <div class="value">
                <div class="illust"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/desktop/illustration-resourceful.svg" alt=""></div>
                <div>
                    <h3>RESOURCEFUL</h3>
                    <p>Everything that we do has a strategic purpose. We use an agile approach in all of our projects and value customer collaboration. It guarantees superior results that fulfill our clients’ needs.</p>
                </div>
            </div>
            <div class="value">
                <div class="illust"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/desktop/illustration-friendly.svg" alt=""></div>
                <div>
                    <h3>FRIENDLY</h3>
                    <p>We are a group of enthusiastic folks who know how to put people first. Our success depends on our customers, and we strive to give them the best experience a company can provide.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>