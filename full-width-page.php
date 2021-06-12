<?php 
/*
    Template Name: full width page
    Template Post Type: 

*/


get_header(); 



?>


    <!-- Page Title
        ============================================= -->
    <section id="page-title">
        <div class="container clearfix">
            <h1><?php single_post_title(); ?></h1>
            <?php do_action('plugins/wp_subtitle/the_subtitle', array(
                        'before'        => '<span class="subtitle">',
                        'after'         => '</span>',
                        'post_id'       => get_the_ID(),
                        'default_value' => ''
                    ));
                    ?>
        </div>
    </section><!-- #page-title end -->

<?php


?>


<!-- Content
    ============================================= -->
<section id="content">

    <div class="content-wrap">


        <div class="container clearfix">

            <!-- Post Content
          ============================================= -->

                <div class="single-post nobottommargin">

                    <?php

                    while (have_posts()) {
                        the_post();
                        global $post;
                    ?>


                        <!-- Single Post
                        ============================================= -->
                        <div class="entry clearfix">

                            <!-- Entry Image
                                ============================================= -->
                            <div class="entry-image">
                                <a href="<?php the_permalink() ?>">
                                    <?php the_post_thumbnail('full'); ?>
                                </a>
                            </div>

                            <!-- .entry-image end -->



                            <!-- Entry Content
                                ============================================= -->
                            <div class="entry-content notopmargin">

                                <?php

                                the_content();

                                $defaults = array(
                                    'before'           => '<p class="text-center">' . __('Pages:'),
                                    'after'            => '</p>',

                                );

                                wp_link_pages($defaults);

                                ?>


                                <div class="clear"></div>


                            </div><!-- .entry end -->



                            <?php

                            if (comments_open() || get_comments_number()) {

                                comments_template();
                            }


                            ?>




                        </div>



                </div><!-- .postcontent end -->


            <?php
                    }

            ?>



        </div>

</section><!-- #content end -->


<?php get_footer(); ?>