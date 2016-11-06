<?php include('header.php'); ?>

<div class="hero-image-area">
  <div class="hero-image">
    <div>
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/hero1.jpg" alt="Strákur að stökkva út í laug.">
    </div>
    <div>
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/hero2.jpg" alt="Strákur að stökkva út í laug.">
    </div>
    <div>
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/hero3.jpg" alt="Strákur að stökkva út í laug.">
    </div>
  </div>

<div id="selection-buttons-clearfix">

  <?php
    $swimming_pools = "field_57deba9e10726";
    $open_now = "field_57debe3774a7b";
    $locations = "field_57debeac74a7d";
    $announcements = "field_57debe7c74a7c";
    $latestHeadline = "field_57ec215cd1882";
    $post_id_buttons_latest = "13";
    // $mobile_ad1 = get_field($mobile_ad1_key, $post_id);
    // $ad1_customer_url = get_field($ad1_customer_url_key, $post_id);
  ?>


  <div class="selection-buttons">
    <a href="<?php bloginfo('url'); ?>/landshlutar-yfirlit/">
      <div id="swimming-pools" class="selection-button">
        <div class="selection-buttons-icon swimming-pools-icon">
          <?php get_template_part('assets/icons/inline', 'swimmer.svg'); ?>
        </div>
        <div class="buttons-text-banner swimming-pools-text-banner">
            <p><?php echo get_field($swimming_pools, $post_id_buttons_latest); ?></p>
        </div>
      </div>
    </a>

    <a href="<?php bloginfo('url'); ?>/heitar-laugar/">
      <div id="locations" class="selection-button">
        <div class="selection-buttons-icon locations-icon">
          <?php get_template_part('assets/icons/inline', 'hot-spring.svg'); ?>
        </div>
        <div class="buttons-text-banner locations-text-banner">
          <p><?php echo get_field($locations, $post_id_buttons_latest); ?></p>
        </div>
      </div>
    </a>

    <a href="#">
      <div id="opening-hours" class="selection-button">
        <div class="selection-buttons-icon opening-hours-icon">
          <?php get_template_part('assets/icons/inline', '24-hours-open.svg'); ?>
        </div>
        <div class="buttons-text-banner opening-hours-text-banner">
          <p><?php echo get_field($open_now, $post_id_buttons_latest); ?></p>
        </div>
      </div>
    </a>

    <a href="<?php bloginfo('url'); ?>/tilkynningar">
      <div id="announcements" class="selection-button">
        <div class="selection-buttons-icon announcements-icon">
          <?php get_template_part('assets/icons/inline', 'loudspeaker.svg'); ?>
        </div>
        <div class="buttons-text-banner announcements-text-banner">
          <p><?php echo get_field($announcements, $post_id_buttons_latest); ?></p>
        </div>
      </div>
    </a>
  </div>
</div>
</div>


<?php include('ad-one.php'); ?>

<div class="latest-posts-area">
  <div class="latest-posts">

    <h2><?php echo get_field($latestHeadline, $post_id_buttons_latest); ?></h2>
    <?php
    $number_of_posts = 4;

    // The Query
    $the_query = new WP_Query( array(
      'post_type' => 'post',
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
  <div class="button-more-announcement-area">
    <button class="button-more-announcement lighter-box-shadow">
      <a href="<?php bloginfo('url'); ?>/tilkynningar">
        <?php get_template_part('assets/icons/inline', 'loudspeaker.svg'); ?>
        <p><?php echo get_field($announcements, $post_id_buttons_latest); ?></p>
      </a>
    </button>
  </div>

</div>
<?php include('ad-two.php'); ?>
<?php include('footer.php'); ?>
