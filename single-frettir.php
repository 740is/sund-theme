<?php include('header.php'); ?>

<!-- <div class="single-posts-area"> -->
<!-- <div class="breadcrumb"><?php get_breadcrumb(); ?></div> -->
<?php  ?>

    <?php


    if ( have_posts() ) {

    	while ( have_posts() ) {
    		the_post();
          $frettirTextTwo = "field_5862e0f0e2985";

          $post_id = get_the_ID();

          $frettirTextTwoText = get_field($frettirTextTwo, $post_id);

          echo '<div class="single-posts-area">';

            echo '<div id="frettir" class="single-post">';
              include('ad-banner-1.php');
              echo '<h2>';
                echo the_title();
              echo '</h2>';
              echo '<i class="latest-post-date">';
                echo get_the_date('d/m/Y');
              echo '</i>';
              include('swimmer.php');
              echo '<div class="feature-image feature-image-begin-of-post">';
                echo '<a href="';
                  echo the_post_thumbnail_url();
                echo '">';
                  echo the_post_thumbnail();
                echo '</a>';
              echo '</div>';
              echo the_content();
              echo '<div class="ad-cubes-area">';
                echo '<div class="ad-cubes-area-content">';
                  include('ad-cube-1.php');
                  include('ad-cube-2.php');
                echo '</div>';
              echo '</div>';
              echo '<div class="frettir-texti-tvo">';
              echo $frettirTextTwoText;
              echo '</div>';
        }


    	/* Restore original Post Data */
    	wp_reset_postdata();

    } else {
    	_e( 'Því miður er ekkert til að birta hér.' );
    }
    //posts_nav_link();
    echo '<div class="previous-link">';
      previous_post_link('%link', '<< Fyrri');
    echo '</div>';
    echo '<div class="next-link">';
      next_post_link('%link', 'Næsta >>');
    echo '</div>';
    // echo '</div>';
    // echo '</div>';
    ?>


<!-- </div> -->

<?php include('footer.php'); ?>
