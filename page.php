<?php
/*
 * The template for displaying all single posts and attachments
 */
 
get_header(); ?>
 
    <div id="primary" class="container">
        <main id="main" class="row" role="main">
        <div class="col-md-12">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>
            <center>
                <h2 class="title-page"><?php the_title(); ?></h2>
            </center>
            <div class="single-post-style single-post-style-text"><?php the_content(); ?></div>
            
            <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>

        <?php       
        // End the loop.
        endwhile;
        ?>
        </div>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>