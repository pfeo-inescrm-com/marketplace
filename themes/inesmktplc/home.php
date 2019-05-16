<?php get_header(); ?>

<?php
// while (have_posts()) {
//     the_post();
// }
?>

<!--================================
    START ABOUT HERO AREA
    =================================-->
<section class="about_hero bgimage">
    <div class="bg_image_holder">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/57342418_l.png';  ?>" alt="background image">
    </div>

    <div class="container content_above">
        <div class="row">
            <div class="col-md-12">
                <div class="about_hero_contents">
                    <h1><?php _e('Welcome to INES Marketplace!', 'inesmktplc') ?></h1>
                    <!-- Bienvenue sur la Marketplace INES ! -->
                    <?php if (function_exists('the_subtitle')) : ?>
                        <!-- WP Subtitle Plugin needed for this to work
                                    https://wordpress.org/plugins/wp-subtitle/ -->
                        <p><?php the_subtitle(); ?></p>
                    <?php else : ?>
                        <p><?php _e('Simply connect your <span>CRM</span> to your Tools', 'inesmktplc') ?></p>
                    <?php endif; ?>
                    <!-- Connectez simplement votre CRM à vos Outils -->
                    <div class="about_hero_btns">
                        <!-- <a href="#" class="play_btn" data-toggle="modal" data-target="#myModal">
                            <img src="<?php //echo get_template_directory_uri() . '/assets/images/play_btn.png';  ?>" alt="pLay button">
                            <?php //_e('Discover in video', 'inesmktplc') ?> -->
                            <!-- Découvrir en vidéo -->
                        </a>
                        <a href="#" class="btn btn--white btn--lg btn--round">
                            <?php _e('Integration catalogue', 'inesmktplc') ?>
                            <!-- Catalogue d'intégrations -->
                        </a>
                    </div>
                </div>
                <!-- end /.about_hero_contents -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row-->
    </div>
    <!-- end /.container -->
</section>
<!--================================
    END ABOUT HERO AREA
    =================================-->

<!--================================
    START MAIN WRAPPER
    =================================-->
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!--================================
    START BLOCKS CONTENT AREA
    =================================-->
        <section class="section--padding">

            <div class="content_block3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 align-self-center">
                            <div class="area_image offset-image-bottom">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/spec-viuel-home-market-place-4.png';  ?>" alt="area images">
                            </div>
                        </div>


                        <div class="col-md-5 col-sm-12 align-self-center">
                            <div class="area_content">
                                <h2 class="content_area--title">Un catalogue d'intégrations</h2>
                                <p>Marketing Automation, ERP, solutions métiers, solutions de messagerie, emails
                                    marketing … Découvrez notre catalogue d'intégrations et renforcez votre expérience
                                    INES en connectant simplement votre CRM à vos outils.</p>
                                <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Découvrir
                                    Apps</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="content_block3 bgcolor">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 align-self-center">
                            <div class="area_content">
                                <h2>Intégrez votre CRM à votre écosystème</h2>
                                <p>
                                    Développez les possibilités de vos solutions INES en connectant votre CRM avec les
                                    applications les plus populaires du marché. Vous centralisez et gérez tous vos
                                    outils du même endroit pour simplifier la collaboration de vos équipes, gagner en
                                    efficacité et booster votre productivité commerciale.
                                </p>
                                <a href="#" class="btn btn--white btn--default btn--round">Solutions INES</a>
                            </div>
                        </div>
                        <!-- end /.col-md-12 -->

                        <div class="col-md-7 col-sm-12 align-self-center">
                            <div class="area_image">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/spec-viuel-home-market-place-2.png';  ?>" alt="area images">
                            </div>
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                </div>
            </div>

            <div class="content_block3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 align-self-center">
                            <div class="area_image">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/spec-viuel-home-market-place-3.png';  ?>" alt="area images">
                            </div>
                        </div>
                        <!-- end /.col-md-12 -->

                        <div class="col-md-5 col-sm-12 align-self-center">
                            <div class="area_content">
                                <h2>Développez votre intégration</h2>
                                <p>
                                    Vous souhaitez nous proposer une intégration ? Nos API's publiques vous permettent
                                    de construire simplement votre intégration et de la tester en environnement réel via
                                    un compte de Sandbox. Intégrez notre programme développeurs et accédez à notre
                                    documentation.
                                </p>
                                <a href="#" class="btn btn--default btn--white btn--round">En savoir plus</a>
                            </div>
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                </div>
            </div>

        </section>
        <!--================================
    END BLOCKS CONTENT AREA
    =================================-->

        <!--================================
    START SPACER
    =================================-->
        <!-- <div class="clearfix mt-5 mb-5"></div> -->
        <!--================================
    END SPACER
    =================================-->
    </main>
</div>
<!--================================
    END MAIN WRAPPER
    =================================-->

<?php get_template_part('template-parts/call-to-action-fullwidth'); ?>

<?php get_footer(); ?>