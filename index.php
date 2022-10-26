<?php get_header(); ?>

<main class="main">
    <!--=============== HOME ===============-->
    <section class="home section" id="home">
        <div class="home__container container grid">
            <img class="home__img" src="<?php echo wp_get_attachment_image_url( get_theme_mod('hero_img'), 'full' ); ?>" alt="">

            <div class="home__data">
                <h1 class="home__title" style="color: <?php echo get_theme_mod('header_title_color', '#222'); ?> ">
                    <?php echo get_theme_mod("header_title_settings"); ?>
                </h1>
                <p class="home__description" style="color: <?php echo get_theme_mod('header_desc_color', '#eee'); ?> ">
                    <?php echo get_theme_mod("header_desc_s"); ?>
                </p>

                <?php 

                    if(get_theme_mod("header_btn_s"))
                    { ?>
                         <a href="#" style="background: <?php echo get_theme_mod('header_btn_bg', 'yellow'); ?>;color: <?php echo get_theme_mod('header_btn_color', '#000'); ?>" class="button"><?php echo get_theme_mod("header_btn_s"); ?></a>
                  <?php  }

                 ?>

               

            </div>
        </div>
    </section>

    <!--=============== ABOUT ===============-->
    <section class="about section container" id="about">
        <div class="about__container grid">
            <div class="about__data">
                <h2 class="section__title-center"><?php echo get_theme_mod('about_header_s'); ?></h2>
                <p class="about__description">
                    <?php echo get_theme_mod('about_desc_s'); ?>
                </p>
            </div>

            <img class="about__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/2.png" alt="">
        </div>
    </section>

    <!--=============== SECURITY ===============-->
    <section class="security section container">
        <div class="security__container grid">
            <div class="security__data">
                <h2 class="section__title-center">Your Safety Is <br> Important</h2>
                <p class="security__description">When your order reaches you, we have the health safety protocols,
                    so that you are protected from any disease. Watch the video of how the delivery is made.
                </p>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.png" alt="">
        </div>
    </section>

    <!--=============== SERVICES ===============-->
    <section class="services section container" id="services">
        <h2 class="section__title">Some Services We <br> Offer</h2>
        <div class="services__container grid">
            <div class="services__data">
                <h3 class="services__subtitle">Payment Done</h3>
                <img class="services__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/5.png" alt="">
                <p class="services__description">Pay with a Visa or PayPal card and without much ado.</p>
                <div>
                    <a href="#" class="button button-link">Learn More</a>
                </div>
            </div>

            <div class="services__data">
                <h3 class="services__subtitle">Find Your Product</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/6.png" alt="">
                <p class="services__description">We offer sale of products through the Internet.</p>
                <div>
                    <a href="#" class="button button-link">Learn More</a>
                </div>
            </div>

            <div class="services__data">
                <h3 class="services__subtitle">Product Received</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/7.png" alt="">
                <p class="services__description">In our app you can see the delay time of your order.</p>
                <div>
                    <a href="#" class="button button-link">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!--=============== APP ===============-->
    <section class="app section container">
        <div class="app__container grid">
            <div class="app__data">
                <h2 class="section__title-center">Watch Your Delivery <br> At Any Time</h2>
                <p class="app__description">With our app you can view the route of your order, from our local headquarters to the
                    place where you are. Look for the app now!</p>
                <div class="app__buttons">
                    <a href="#" class="button button-flex">
                        <i class='bx bxl-apple button__icon'></i> App Store
                    </a>
                    <a href="#" class="button button-flex">
                        <i class='bx bxl-play-store button__icon' ></i> Google Play
                    </a>
                </div>
            </div>

            <img class="app__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4.png" alt="">
        </div>
    </section>

    <!--=============== CONTACT US ===============-->
    <section class="contact section container" id="contact">
        <div class="contact__container grid">
            <div class="contact__content">
                <h2 class="section__title-center">Contact Us From <br> Here</h2>
                <p class="contact__description">You can contact us from here, you can write to us,
                    call us or visit our service center, we will gladly assist you.</p>
            </div>

            <ul class="contact__content grid">
                <li class="contact__address">Telephone: <span class="contact__information">999 - 888 - 777</span></li>
                <li class="contact__address">Email:  <span class="contact__information">delivery@email.com</span></li>
                <li class="contact__address">Location: <span class="contact__information">Lima - Peru</span></li>
            </ul>

            <div class="contact__content">
                <a href="#" class="button">Contact Us</a>
            </div>
        </div>
    </section>
</main>

<!--=============== FOOTER ===============-->
<?php get_footer(); ?>