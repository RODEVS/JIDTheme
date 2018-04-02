<?php get_header(); ?>
<!-- Posts -->
<div class="container container-homepage">
	<div class="row">
		<?php get_sidebar(); ?>  <!-- col-md-3 is in sidebar.php file -->

		<div class="col-md-9">
			<!-- Main post loop -->
			<div class="row">
				<div class="col-md-12">
				<?php
					//Here is the metaslider tag to add slideshow to homepage.
				 	echo do_shortcode('[metaslider id="182"]'); 
				 ?>
				</div>
			</div>
			<?php
				$count = (int)1; //Counter for post initialized in one. Set in 1  avoid featured post and set 0 to enable it.
				while (have_posts()) : the_post();
				if ($count == 0) {
			?>
				<div class="row">
				<div class="col-md-12 main-featured-post">
					<a class="title-thumbnails" href="<?php the_permalink(); ?>">
						<h4><?php the_title() ;?></h4>
					</a>
					
					<div class="main-featured-p row">
						<div class="col-md-5">
							<?php the_post_thumbnail(array(340, 280)); ?>
						</div>
						<div class="col-md-7">
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
				</div>
			<?php
				}
			?>
			<?php
				if ($count == 1) {
					echo "<div class='row row-main-posts'>";
				}
				if ($count >= 1 && $count <= 3) {
			?>
					<div class="col-md-4 col-post-style">
						<a div class="thumbnails-post"><?php the_post_thumbnail(array(220, 120)); ?></a>
						<a href="<?php the_permalink(); ?>"><h4 class="title-thumbnails"><?php the_title() ;?></h4></a>
						<?php the_excerpt(); ?>
					</div>
			<?php
				} //End $count == 1 || $count == 2 || $count == 3
				if ($count == 3) {
					echo "</div>";
				}
				if ($count == 3) {
					$count = 1;	
				} else {
					$count++;
				}
			?>
 			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>