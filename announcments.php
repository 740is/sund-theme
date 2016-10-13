<?php
	/* Template Name: Tilkynningar */
?>

<?php include('header.php'); ?>

<div class="latest-posts announcements-bkg wrapper">
  <?php include('swimmer.php'); ?>
  <h2><?php the_title(); ?></h2>
  <?php
  $number_of_posts = 16;

  // The Query
  $the_query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => $number_of_posts
  ));

  // The Loop
  if ( $the_query->have_posts() ) {
    echo '<ul class="latest-flex-container">';
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      $categories = get_the_category();

      if ( ! empty( $categories ) ) {
        echo '<li class="' . esc_html( $categories[0]->slug ) . ' latest-flex-item">';
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
                echo get_the_date('d/m/Y');
              echo '</i>';
            echo '</div>';
          echo '</a>';
        echo '</li>';
      }
    }
    echo '</ul>';
    /* Restore original Post Data */
    wp_reset_postdata();
  } else {
    // no posts found
  }
  ?>

</div>
<?php include('footer.php'); ?>
