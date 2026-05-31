<?php get_header(); ?>

<main class="contact">
    <section class="form back-common">
        <div class="text-wrap">
            <h1><?php the_title(); ?></h1>
            <p>Ready to take it to the next level? Let’s talk about your project or idea and find out how we can help your business grow. If you are looking for unique digital experiences that’s relatable to your users, drop us a line.</p>
        </div>
        <?php the_content(); ?>
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
</main>

<?php get_footer(); ?>  

<style>
    .cv-area {
        display: none;
    }
    footer {
        margin-top: 0;
        padding: 17.07vw 6.4vw 17.07vw;
    }

    @media screen and (min-width:768px) {
        footer {
            padding: 10.42vw 5.08vw;
        }
    }

    @media screen and (min-width:1440px) {
        footer {
            padding: 72px 0;
        }
    }
</style>