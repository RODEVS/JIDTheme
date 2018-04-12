<?php get_header(); ?>
<!-- Posts -->
<div class="container container-homepage">
	<div class="row">
		<?php get_sidebar(); ?>  <!-- col-md-3 is in sidebar.php file -->
		<div class="col-md-9">
			<!-- Main post loop -->
			
			<?php
				$count = (int)1; //Counter for post initialized in one.
				
				while (have_posts()) : the_post();

				if ($count == 0) {
			?>
				<div class="row">
				<div class="col-md-12 main-featured-post">
					<a href="<?php the_permalink(); ?>"><h4 class="title-thumbnails"><?php the_title() ;?>
					</h4></a>
					<?php the_post_thumbnail(array(480, 240)); ?>
					<?php the_excerpt(); ?>
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
						<?php the_post_thumbnail(array(250, 180)); ?>
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

 		<div class="row">
 			<p class="col-md-12">
 			<hr/>
 				<?php 
 					posts_nav_link('|', 
 								"<< Pagina anterior ",
 								" Pagina siguiente >>"
 							); 
 				?>
 			</p>
 		</div>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>