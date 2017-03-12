<?php include('header.php'); ?>

<?php include('ad-banner-1.php'); ?>
<div class="latest-posts">
  <!-- ========== WP Page: Sundlaugar =========  -->
  <div class="a">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
    <?php endwhile; endif; ?>
  </div>
  <?php include('swimmer.php'); ?>

  <?php
    $region = 'field_5823a933e9b66';
    $post_id = get_the_ID();
    $category = get_field($region, $post_id);
  ?>

 <!-- ========== Custom Post Type: Sundlaugar ========== -->
  <div class="swp-listing">
    <?php
      $args = array(
        'post_type' => 'sundlaugar',
				'category_name' => $category,
				'orderby'		=> 'title',
				'order'			=> 'ASC'
      );
      $query = new WP_Query( $args );
    ?>

    <?php echo '<ul class="latest-flex-container">'; ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <?php
      echo '<li class="latest-flex-item swp-listing-bkg lighter-box-shadow">';
        echo '<a href="';
          echo get_permalink();
        echo '">';
          echo '<div class="feature-image">';
            echo the_post_thumbnail();
          echo '</div>';
          echo '<div>';
            echo '<h4 class="swp-listing-title">';
              echo get_the_title();
            echo '</h4>';
            $excerpt = wp_trim_words( get_field('field_57f409fefd4fc' ), $num_words = 17, $more = ' [...]' );
            echo '<p>' . $excerpt . '</p>';
            //echo the_field('field_57f409fefd4fc');
          echo '</div>';
        echo '</a>';
      echo '</li>';
      ?>
    <?php endwhile; endif; wp_reset_postdata(); ?>
    <?php echo '</ul>'; ?>
  </div>

</div>

<div class="ad-cubes-area">
  <div class="ad-cubes-area-content">
    <?php include('ad-cube-1.php'); ?>
    <?php include('ad-cube-2.php'); ?>
  </div>
</div>

<?php include('footer.php'); ?>
