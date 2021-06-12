<?php get_header(); ?>


<!-- Content
    ============================================= -->
<section id="content">

    <div class="content-wrap">


        <div class="container clearfix">

            <!-- Post Content
          ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <div class="single-post nobottommargin">

                    <?php

                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            global $post;
                    ?>


                            <!-- Single Post
                        ============================================= -->
                            <div class="entry clearfix">

                                <!-- Entry Title
                                ============================================= -->
                                <div class="entry-title">
                                    <h2><?php the_title(); ?></h2>
                                </div><!-- .entry-title end -->

                                <!-- Entry Content
                                ============================================= -->
                                <div class="entry-content notopmargin">
                                
                                <a href="<?php echo $post->guid; ?>"> <?php _e('Direct Download', 'julia'); ?> </a>

                                <img src="<?php echo $post->guid;  ?>" alt="" class="image-responsive">

                                    <?php the_content(); ?>

                                    <div class="clear"></div>


                                </div><!-- .entry end -->

                                <div class="line"></div>

                                <?php

                                if (comments_open() || get_comments_number()) {

                                    comments_template();
                                }


                                ?>




                            </div>



                </div><!-- .postcontent end -->


        <?php
                        }
                    }

        ?>

            </div>


            <?php get_sidebar(); ?>

        </div>

</section><!-- #content end -->


<?php get_footer(); ?>