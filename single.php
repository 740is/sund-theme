<?php include('header.php'); ?>

<!-- <div class="single-posts-area"> -->
<!-- <div class="breadcrumb"><?php get_breadcrumb(); ?></div> -->
<div class="swimmer">
  <?php get_template_part('assets/icons/inline', 'swimmer.svg'); ?>
</div>

    <?php

    // The Query
    $the_query = new WP_Query( array(
      'post_type' => 'post',
    ));

    // The Loop
    if ( have_posts() ) {

    	while ( have_posts() ) {
    		the_post();
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
          echo '<div class="' . esc_html( $categories[0]->slug ) . ' single-posts-area">';
            echo '<div class="single-post">';
              echo '<h2>' . get_the_title() . '</h2>';
              echo '<i class="latest-post-date">';
                echo get_the_date('d/m/Y | G:i');
                echo '</i>';
              echo the_content();
        }
    	}

    	/* Restore original Post Data */
    	wp_reset_postdata();

    } else {
    	_e( 'Því miður er ekkert til að birta hér.' );
    }
    posts_nav_link();
    echo '<div class="previous-link">';
      previous_post_link('%link', '<< Fyrri');
    echo '</div>';
    echo '<div class="next-link">';
      next_post_link('%link', 'Næsta >>');
    echo '</div>';
    echo '</div>';
    echo '</div>';
    ?>


<!-- </div> -->

<?php include('footer.php'); ?>
