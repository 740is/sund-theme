<?php
	/* Template Name: Landshlutar */
?>

<?php include('header.php'); ?>

<div class="region-buttons-area wrapper">
	<div class="region-buttons-content">
		<!-- ========== WP Page: Landshlutar =========  -->
	  <div>
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	      <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
	    <?php endwhile; endif; ?>
	  </div>

	 <!-- ========== Custom Post Type: Landshlutar ========== -->
		<?php
			$args = array(
				'post_type' => 'landshlutar',
				'orderby'		=> 'modified',
				'order'			=> 'ASC'
			);
			$query = new WP_Query( $args );
		?>

  	<ul class="region-buttons">
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<?php
			$cat_array = get_the_category();
			$catName = $cat_array[0]->category_nicename;
		?>
			<a href="<?php echo get_permalink(); ?>?category=<?php echo the_title(); ?>"><li>
        <div id="ss" class="iceland-area">
          <div class="swimming-pools-icon">
						<?php
							$iceland_region = 'iceland-' . $catName . '.svg';
							get_template_part('assets/svg/inline', $iceland_region);
						?>
          </div>
        	<div class="iceland-area-name">
          	<p><?php echo the_title(); ?></p>
        	</div>
        </div>
      </li></a>

			<?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
	</div>
</div>
<?php include('footer.php'); ?>
