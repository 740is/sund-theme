
<?php
	/* Template Name: Landshluti */
?>

<?php
  $args = array(
    'category_name' => 'landshluti'
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
