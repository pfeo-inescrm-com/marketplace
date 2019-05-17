<?php
/**
 * Template Name: Contact
 *
 * @package Ines CRM Marketplace
 * @subpackage inesmktplc
 * @since version 0.1.0
 */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrum-area-fullwidth'); ?>

<!--================================
    START MAIN WRAPPER
    =================================-->
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="contact-area section--padding">
            <div class="container">

                <div class="row">
                    <!-- start col-md-12 -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1>
                                <?php _e('How can We <span class="highlighted">Help?</span>', 'inesmktplc'); ?>
                            </h1>
                            <p>
                                <?php _e('Subtitle here', 'inesmktplc'); ?>
                            </p>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact_tile">
                            <span class="tiles__icon lnr lnr-map-marker"></span>
                            <h4 class="tiles__title">
                                <?php _e('Office Address', 'inesmktplc'); ?>
                            </h4>
                            <div class="tiles__content">

                                <p><?php _e('54 bis rue Sala, 69002 Lyon', 'inesmktplc'); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-lg-4 col-md-6 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="contact_tile">
                            <span class="tiles__icon lnr lnr-phone"></span>
                            <h4 class="tiles__title">
                                <?php _e('Phone Number', 'inesmktplc'); ?>
                            </h4>
                            <div class="tiles__content">
                                <p>0 825 157 825</p>
                            </div>
                        </div>
                        <!-- end /.contact_tile -->
                    </div>
                    <!-- end /.col-lg-4 col-md-6 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="contact_tile">
                            <span class="tiles__icon lnr lnr-inbox"></span>
                            <h4 class="tiles__title">
                                <?php _e('E-Mail', 'inesmktplc'); ?>
                            </h4>
                            <div class="tiles__content">
                                <p>bonjour@inescrm.com</p>
                            </div>
                        </div>
                        <!-- end /.contact_tile -->
                    </div>
                    <!-- end /.col-lg-4 col-md-6 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="contact_form cardify">
                            <div class="contact_form__title">
                                <h3><?php _e('Leave Your Messages', 'inesmktplc'); ?></h3>
                            </div>

                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="contact_form--wrapper">
                                        <!-- <form action="<?php the_permalink(); ?>" id="contact-form" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="contact-first-name" id="contact-first-name" placeholder="<?php _e('First Name', 'inesmktplc'); ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="contact-last-name" id="contact-last-name" placeholder="<?php _e('Last Name', 'inesmktplc'); ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" name="contact-email" id="contact-email" placeholder="<?php _e('Email', 'inesmktplc'); ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="tel" name="contact-phone" id="contact-phone" placeholder="<?php _e('Phone', 'inesmktplc'); ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <textarea cols="30" rows="10" name="contact-comments" id="contact-comments" placeholder="<?php _e('Your text here', 'inesmktplc'); ?>"></textarea>

                                            <div class="sub_btn">
                                                <button type="submit" class="btn btn--round btn--default">
                                                    <?php _e('Send', 'inesmktplc'); ?>
                                                </button>
                                            </div>
                                            <input type="hidden" name="submitted" id="submitted" value="true" />
                                        </form> -->
                                        <?php
                                        /**
                                         * Ninja Forms plugin
                                         * required
                                         */
                                        echo do_shortcode('[ninja_form id=1]');
                                        ?>
                                    </div>
                                </div>
                                <!-- end /.col-md-8 -->
                            </div>
                            <!-- end /.row -->
                        </div>
                        <!-- end /.contact_form -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

            </div>
            <!-- end /.container -->
        </section>

    </main>
</div>
<!--================================
                    END MAIN WRAPPER
                    =================================-->

<?php get_footer(); ?>