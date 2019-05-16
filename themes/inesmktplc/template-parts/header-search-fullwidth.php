<?php
?>

<!--================================
        START SEARCH AREA
    =================================-->
<section class="search-wrapper">
    <div class="search-area2 bgimage">
        <div class="bg_image_holder">
            <img src="" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="search">
                        <div class="search__title">
                            <?php
                            /**
                             * trying to create and
                             * retrieve custom field
                             * subtitle
                             * and make title dynamic
                             * to make this template
                             * fully usable in other pages
                             * but shop
                             * 
                             */
                            // if (have_posts()) :
                            //     /* Start the Loop */
                            //     while (have_posts()) :
                            //         the_post();
                            //         $subtitle = get_post_meta(get_the_ID(), 'subtitle', true);
                            //     endwhile;
                                ?>
                                <!-- <h3><?php //woocommerce_page_title(); ?></h3> -->
                                <!-- <p><?php //echo 'sub is ' . $subtitle; ?></p> -->
                                <h3>
                                    <?php _e('Integrate <span>INES</span> with all your tools', 'inesmktplc');  ?>
                                </h3>
                                <!-- <br> -->
                                <p>
                                    <?php _e('Simply connect your <span>CRM</span> to your Tools', 'inesmktplc');  ?>
                                </p>
                            </div>
                        <?php //endif; ?>
                        <div class="search__field">
                            <?php
                            get_template_part('template-parts/search-form-large');
                            ?>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <?php woocommerce_breadcrumb(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.search-area2 -->
</section>
<!--================================
        END SEARCH AREA
    =================================-->