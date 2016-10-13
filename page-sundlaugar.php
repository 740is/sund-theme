<?php
	/* Template Name: Sundlaugar á landshluta */
?>

<?php include('header.php'); ?>

<div class="latest-posts-area wrapper">
	<div class="latest-posts-content">
		  <!-- ========== WP Page: Sundlaugar =========  -->
	  <div class="a">
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	      <h2><?php the_title(); ?></h2>
	    <?php endwhile; endif; ?>
	  </div>
		<?php include('swimmer.php'); ?>

		 <!-- ========== Custom Post Type: Sundlaugar ========== -->
	  <div class="swp-listing">
	    <?php
	      $args = array(
	        'post_type' => 'sundlaugar',
					'category_name' => 'vesturland',
					'orderby'		=> 'title',
					'order'			=> 'ASC'
	      );
	      $query = new WP_Query( $args );
	    ?>

	    <?php echo '<ul class="latest-flex-container">'; ?>
	    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	    <?php
	      echo '<li class="latest-flex-item swp-listing-bkg">';
	        echo '<a href="';
	          echo get_permalink();
	        echo '">';
	          echo '<div>';
	            echo '<h4 class="swp-listing-title">';
	              echo get_the_title();
	            echo '</h4>';
	          echo '</div>';
	        echo '</a>';
	      echo '</li>';
	    ?>
	    <?php endwhile; endif; wp_reset_postdata(); ?>
	    <?php echo '</ul>'; ?>
	  </div>
	</div>
</div>
<?php include('footer.php'); ?>
