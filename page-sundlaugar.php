<?php
	/* Template Name: Sundlaugar */
?>

<?php include('header.php'); ?>

<div class="latest-posts wrapper">
  <?php include('swimmer.php'); ?>
  <!-- ========== WP Page: Sundlaugar =========  -->
  <div class="a">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
    <?php endwhile; endif; ?>
  </div>


 <!-- ========== Custom Post Type: Sundlaugar ========== -->
  <div class="">

    <?php
      $args = array(
        'post_type' => 'sundlaugar'
      );
      $query = new WP_Query( $args );
    ?>
    <?php echo '<ul class="latest-flex-container">'; ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php
      echo '<li class="latest-flex-item">';
        echo '<a href="';
          echo get_permalink();
        echo '">';
          echo '<div>';
            echo '<h1 class="latest-post-title">';
              echo get_the_title();
            echo '</h1>';
            echo '<div class="latest-post-excerpt">';
              echo the_excerpt();
            echo '</div>';
            echo '<i class="latest-post-date">';
              echo get_the_date('d/m/Y | G:i');
            echo '</i>';
          echo '</div>';
        echo '</a>';
      echo '</li>';
      ?>
    <?php endwhile; endif; wp_reset_postdata(); ?>
    <?php echo '</ul>'; ?>
  </div>
</div>
<?php include('footer.php'); ?>
