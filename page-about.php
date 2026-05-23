<?php get_header(); ?>

<main>
    <section class="about-us">
        <picture>
            <source media="(min-width:1440px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/desktop/image-about-hero.jpg">
            <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/tablet/image-about-hero.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mobile/image-about-hero.jpg" alt="">
        </picture>
        <div class="back-common">
            <div class="text-wrap">
                <h1><?php the_title(); ?></h1>
                <p>Founded in 2010, we are a creative agency that produces lasting results for our clients. We’ve partnered with many startups, corporations, and nonprofits alike to craft designs that make real impact. We’re always looking forward to creating brands, products, and digital experiences that connect with our clients' audiences.</p>
            </div>
        </div>
    </section>
    
    <div class="leaf"></div>
    <section class="talent">
        <picture>
            <source media="(min-width:1440px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/desktop/image-world-class-talent.jpg">
            <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/tablet/image-world-class-talent.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mobile/image-world-class-talent.jpg" alt="">
        </picture>
       
        <div class="back-common beige">
            <div class="text-wrap">
                <h2>World-class talent</h2>
                <p>
                    We are a crew of strategists, problem-solvers, and technologists. Every design is thoughtfully crafted from concept to launch, ensuring success in its given market. We are constantly updating our skills in a myriad of platforms.<br><br>
                    Our team is multi-disciplinary and we are not merely interested in form — content and meaning are just as important. We give great importance to craftsmanship, service, and prompt delivery. Clients have always been impressed with our high-quality outcomes that encapsulates their brand’s story and mission.
                </p>
            </div>
        </div>
    </section>

    <section class="location-links wrap leaf">
        <div class="locations-links-wrap">
            <div class="location-link">
                <div class="illust"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/illustration-canada.svg" alt=""></div>
                <h3>CANADA</h3>
                <a href="" class="cv-btn2">SEE LOCATION</a>
            </div>
            <div class="location-link">
                <div class="illust"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/illustration-australia.svg" alt=""></div>
                <h3>AUSTRALIA</h3>
                <a href="" class="cv-btn2">SEE LOCATION</a>
            </div>
            <div class="location-link">
                <div class="illust"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shared/desktop/illustration-united-kingdom.svg" alt=""></div>
                <h3>UNITED KINGDOM</h3>
                <a href="" class="cv-btn2">SEE LOCATION</a>
            </div>
        </div>
    </section>

    <section class="deal">
        <picture>
            <source media="(min-width:1440px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/desktop/image-real-deal.jpg">
            <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/tablet/image-real-deal.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mobile/image-real-deal.jpg" alt="">
        </picture>
        <div class="back-common beige">
            <div class="text-wrap">
                <h2>The real deal</h2>
                <p>
                    As strategic partners in our clients’ businesses, we are ready to take on any challenge as our own. Solving real problems require empathy and collaboration, and we strive to bring a fresh perspective to every opportunity. We make design and technology more accessible and give you tools to measure success.<br><br>
                    We are visual storytellers in appealing and captivating ways. By combining business and marketing strategies, we inspire audiences to take action and drive real results.
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>