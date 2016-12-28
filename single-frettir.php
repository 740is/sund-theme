<?php include('header.php'); ?>

<!-- <div class="single-posts-area"> -->
<!-- <div class="breadcrumb"><?php get_breadcrumb(); ?></div> -->
<?php  ?>

    <?php


    if ( have_posts() ) {

    	while ( have_posts() ) {
    		the_post();
          $frettirBanner = "field_5862de561fe26";
          $frettirBannerUrl = "field_5862df271fe27";
          $frettirTextTwo = "field_5862e0f0e2985";

          $post_id = get_the_ID();

          $frettirBannerImage = get_field($frettirBanner, $post_id);
          $frettirBannerTheUrl = get_field($frettirBannerUrl, $post_id);
          $frettirTextTwoText = get_field($frettirTextTwo, $post_id);

          echo '<div class="single-posts-area">';
          include('swimmer.php');
            echo '<div id="frettir" class="single-post">';
              echo '<h2>';
                echo the_title();
              echo '</h2>';
              echo '<i class="latest-post-date">';
                echo get_the_date('d/m/Y');
              echo '</i>';
              echo the_content();
              echo '<a href="' . $frettirBannerTheUrl . '" target="_blank">';
              echo '<img src="' . $frettirBannerImage['url'] . '" alt="' . $frettirBannerImage['alt'] . '">';
              echo '</a><p></p>';
              echo $frettirTextTwoText;
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
