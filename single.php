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
                <h3 class="title-thumbnails"><?php the_title(); ?></h3>
                <small>Posted on 
                       <?php the_time('F jS, Y'); ?> by
                       <?php the_author_posts_link(); ?> in 
                       <?php the_category( ', ' ); ?>
                </small>
            </center>
            <div class="single-post-style single-post-style-text"><?php the_content(); ?></div>
 
        <?php
        // End the loop.
        endwhile;
        ?>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>

        </div>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>