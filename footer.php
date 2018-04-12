
	<footer class="footer container">
      <div class="row">
        <div class="col-md-4">
          <?php if ( is_active_sidebar( 'footer-side-bar-1' ) ) : ?>
            <?php dynamic_sidebar( 'footer-side-bar-1' ); ?>
          <?php endif; ?>
        </div>

        <div class="col-md-4">
          <?php if ( is_active_sidebar( 'footer-side-bar-2' ) ) : ?>
            <?php dynamic_sidebar( 'footer-side-bar-2' ); ?>
          <?php endif; ?>
        </div>

        <div class="col-md-4">
          <?php if ( is_active_sidebar( 'footer-side-bar-3' ) ) : ?>
            <?php dynamic_sidebar( 'footer-side-bar-3' ); ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="row justify-content-center footer-font-style">
      	<center>
        	<?php bloginfo('title'); ?>
        	<br/>
        	2600 16th St NW <br/>
        	Washington, D.C. 20441
        </center>
    	</div>
  </footer>
	<?php wp_footer(); ?>
</body>
</html>