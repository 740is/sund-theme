<?php include('header.php'); ?>

<div id="hero-image" class="hero-image-area">
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
  <?php $frontPageContent = new WP_Query( array('post_type' => 'frontpage')); ?>
  <?php if ($frontPageContent->have_posts()) : $frontPageContent->the_post(); ?>
  <?php $post_id = get_the_ID(); ?>
  <?php
    $swimming_pools = 'field_57deba9e10726';
    $open_now = "field_57debe3774a7b";
    $locations = "field_57debeac74a7d";
    $announcements = "field_57debe7c74a7c";
    $latestHeadline = "field_57ec215cd1882";
    $sundKennslaTexti = "field_583f402e1edbe";
    if($post_id === 14) {
      $post_id_buttons_latest = '13';
      $landshlutar = esc_url( get_permalink(73));
      $heitar_laugar = esc_url( get_permalink(33));
      $afgreidslutimi = '#';
      $tilkynningar = esc_url( get_permalink(37));
      $sund_kennsla = esc_url( get_permalink(271));
    } elseif($post_id === 140) {
      $post_id_buttons_latest = '140';
      $en_buttons_class = 'buttons-text-banner-en';
      $landshlutar = esc_url( get_permalink(143));
      $heitar_laugar = esc_url( get_permalink(124));
      $afgreidslutimi = '#';
      $tilkynningar = esc_url( get_permalink(122));
      $sund_kennsla = esc_url( get_permalink(273));
    }

    // $mobile_ad1 = get_field($mobile_ad1_key, $post_id);
    // $ad1_customer_url = get_field($ad1_customer_url_key, $post_id);
  ?>


  <div class="selection-buttons">
    <a href="<?php echo $landshlutar; ?>">
      <div id="swimming-pools" class="selection-button">
        <div class="selection-buttons-icon swimming-pools-icon front-page-button">
          <?php get_template_part('assets/icons/inline', 'swimmer.svg'); ?>
        </div>
        <div class="buttons-text-banner swimming-pools-text-banner <?php echo $en_buttons_class; ?>">
            <p><?php echo get_field($swimming_pools, $post_id_buttons_latest); ?></p>
        </div>
      </div>
    </a>

    <a href="<?php echo $heitar_laugar; ?>">
      <div id="locations" class="selection-button">
        <div class="selection-buttons-icon locations-icon front-page-button">
          <?php get_template_part('assets/icons/inline', 'hot-spring.svg'); ?>
        </div>
        <div class="buttons-text-banner locations-text-banner <?php echo $en_buttons_class; ?>">
          <p><?php echo get_field($locations, $post_id_buttons_latest); ?></p>
        </div>
      </div>
    </a>

    <!-- <a href="<?php echo $afgreidslutimi; ?>">
      <div id="opening-hours" class="selection-button">
        <div class="selection-buttons-icon opening-hours-icon front-page-button">
          <?php get_template_part('assets/icons/inline', '24-hours-open.svg'); ?>
        </div>
        <div class="buttons-text-banner opening-hours-text-banner <?php echo $en_buttons_class; ?>">
          <p><?php echo get_field($open_now, $post_id_buttons_latest); ?></p>
        </div>
      </div>
    </a> -->

    <a href="<?php echo $sund_kennsla; ?>">
      <div id="sund-kennsla" class="selection-button">
        <div class="selection-buttons-icon opening-hours-icon front-page-button">
          <?php get_template_part('assets/icons/inline', 'swim-lesson.svg'); ?>
        </div>
        <div class="buttons-text-banner sund-kennsla-text-banner <?php echo $en_buttons_class; ?>">
          <p><?php echo get_field($sundKennslaTexti, $post_id_buttons_latest); ?></p>
        </div>
      </div>
    </a>

    <a href="<?php echo $tilkynningar; ?>">
      <div id="announcements" class="selection-button">
        <div class="selection-buttons-icon announcements-icon front-page-button">
          <?php get_template_part('assets/icons/inline', 'loudspeaker.svg'); ?>
        </div>
        <div class="buttons-text-banner announcements-text-banner <?php echo $en_buttons_class; ?>">
          <p><?php echo get_field($announcements, $post_id_buttons_latest); ?></p>
        </div>
      </div>
    </a>
  </div>
</div>
</div>


<?php include('ad-banner-1.php'); ?>

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
      <a href="<?php echo $tilkynningar; ?>">
        <?php get_template_part('assets/icons/inline', 'loudspeaker.svg'); ?>
        <p><?php echo get_field($announcements, $post_id_buttons_latest); ?></p>
      </a>
    </button>
  </div>

</div>

<div class="ad-cubes-area">
  <div class="ad-cubes-area-content">
    <?php include('ad-cube-1.php'); ?>
    <?php include('ad-cube-2.php'); ?>
  </div>
</div>
<?php endif; wp_reset_postdata();?>

<?php include('footer.php'); ?>
