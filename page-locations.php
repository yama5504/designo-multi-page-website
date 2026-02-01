<?php get_header(); ?>

<main>
    <section class="locations">
        <div class="location">
            <picture>
                <source media="(min-width:768px) and (max-width:1439px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/locations/tablet/image-map-canada.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/locations/desktop/image-map-canada.png" alt="">
            </picture>
            <div class="back-common beige">
                <div class="text-wrap">
                    <h2>Canada</h2>
                    <div class="info">
                        <p>
                            <span>Designo Central Office</span><br>
                            3886 Wellington Street<br>
                            Toronto, Ontario M9C 3J5
                        </p>
                        <p>
                            <span>Contact</span><br>
                            P : +1 253-863-8967<br>
                            M : contact@designo.co
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="location">
            <picture>
                <source media="(min-width:768px) and (max-width:1439px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/locations/tablet/image-map-australia.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/locations/desktop/image-map-australia.png" alt="">
            </picture>
            <div class="back-common beige">
                <div class="text-wrap">
                    <h2>Australia</h2>
                    <div class="info">
                        <p>
                            <span>Designo AU Office</span><br>
                            19 Balonne Street<br>
                            New South Wales 2443
                        </p>
                        <p>
                            <span>Contact</span><br>
                            P : (02) 6720 9092<br>
                            M : contact@designo.au
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="location">
            <picture>
                <source media="(min-width:768px) and (max-width:1439px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/locations/tablet/image-map-uk.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/locations/desktop/image-map-united-kingdom.png" alt="">
            </picture>
            <div class="back-common beige">
                <div class="text-wrap">
                    <h2>United Kingdom</h2>
                    <div class="info">
                        <p>
                            <span>Designo UK Office</span><br>
                            13 Colorado Way<br>
                            Rhyd-y-fro SA8 9GA
                        </p>
                        <p>
                            <span>Contact</span><br>
                            P : 078 3115 1400<br>
                            M : contact@designo.uk
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>