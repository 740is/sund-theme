<?php
	/* Template Name: Fréttir */
?>

<?php include('header.php'); ?>
<?php include('ad-banner-1.php'); ?>
<div class="latest-posts announcements-bkg wrapper">

  <h2><?php the_title(); ?></h2>
  <?php
  $number_of_posts = 16;

  // The Query
  $the_query = new WP_Query( array(
    'post_type' => 'frettir',
    'posts_per_page' => $number_of_posts
  ));

  // The Loop
  if ( $the_query->have_posts() ) {
    echo '<ul class="latest-flex-container">';
		include('swimmer.php');
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      $categories = get_the_category();

      if ( ! empty( $categories ) ) {
        echo '<li class="' . esc_html( $categories[0]->slug ) . ' latest-flex-item lighter-box-shadow">';
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
<div class="ad-cubes-area">
  <div class="ad-cubes-area-content">
    <?php include('ad-cube-1.php'); ?>
    <?php include('ad-cube-2.php'); ?>
  </div>
</div>
<?php include('footer.php'); ?>
