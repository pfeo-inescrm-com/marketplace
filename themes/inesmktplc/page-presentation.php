<?php
/**
 * Template Name: Presentation
 *
 * @package Ines CRM Marketplace
 * @subpackage inesmktplc
 * @since version 1.0
 */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrum-area-fullwidth'); ?>


<!--================================
    START MAIN WRAPPER
    =================================-->
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!--================================
    START TIMELINE AREA
    =================================-->
        <section class="timeline_area section--padding">
            <div class="container">

                <div class="row">

                    <?php if (is_active_sidebar('inesmktplc-sidebar-main')) : ?>
                        <!-- start col-lg-9 -->
                        <div class="col-lg-9 col-12">
                        <?php else : ?>
                            <!-- start col-12 -->
                            <div class="col-12">
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title text-left">
                                        <h1>
                                            Comment ça <span class="highlighted">fonctionne ?</span>
                                        </h1>
                                        <!-- <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid
                            est laborum dolo rumes fugats untras.</p> -->
                                    </div>
                                </div>
                                <!-- end /.col-md-12 -->
                            </div>
                            <!-- end /.row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="timeline">
                                        <li class="happening">
                                            <div class="happening--period">
                                                <p>Création d'un compte INES</p>
                                            </div>
                                            <div class="happening--detail">
                                                <h4 class="title">Vous n'êtes pas encore client INES ?</h4>
                                                <p>INES CRM est une plateforme CRM & ERP ouverte favorisant
                                                    l’intégration et
                                                    la
                                                    convergence de vos solutions & applications. Notre objectif :</p>
                                                <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Register
                                                    Now</a>
                                            </div>
                                        </li>
                                        <li class="happening">
                                            <div class="happening--period">
                                                <p>Consultation du catalogue</p>
                                            </div>
                                            <div class="happening--detail">
                                                <h4 class="title">Recherchez vos connecteurs</h4>
                                                <p>INES CRM est une plateforme CRM & ERP ouverte favorisant
                                                    l’intégration et
                                                    la
                                                    convergence de vos solutions & applications. Notre objectif :</p>
                                                <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Call
                                                    to Action 2</a>
                                            </div>
                                        </li>
                                        <li class="happening">
                                            <div class="happening--period">
                                                <p>Activation du plugin</p>
                                            </div>
                                            <div class="happening--detail">
                                                <h4 class="title">Recherchez vos connecteurs</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex,
                                                    distinctio
                                                    nihil
                                                    perferendis tenetur quaerat a odit non et sit itaque repudiandae
                                                    numquam
                                                    magni
                                                    atque, deleniti maiores laudantium voluptate officia natus!</p>
                                                <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Call
                                                    to Action 3</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- end /.timeline -->
                                </div>
                                <!-- end /.col-md-12 -->
                            </div>
                            <!-- end /.row -->

                        </div>
                        <!-- end /.col if -->


                        <?php if (is_active_sidebar('inesmktplc-sidebar-main')) : ?>
                            <!-- start .col-lg-3 -->
                            <div class="col-lg-3 col-12 mt-5 mt-lg-0">
                                <!-- start aside -->
                                <aside class="sidebar product--sidebar">
                                    <?php dynamic_sidebar('inesmktplc-sidebar-main'); ?>
                                </aside>
                                <!-- end aside -->
                            </div>
                            <!-- end /.col-lg-3 -->
                        <?php endif; ?>



                    </div>

                </div>
                <!-- end /.container -->
        </section>
        <!--================================
    END TIMELINE AREA
=================================-->


    </main>
</div>
<!--================================
                    END MAIN WRAPPER
                    =================================-->

<?php get_template_part('template-parts/call-to-action-fullwidth'); ?>

<?php get_footer(); ?>