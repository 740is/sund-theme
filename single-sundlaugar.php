<?php include('header.php'); ?>

<?php
  $phoneIcon = "phone-call.svg";
  $emailIcon = "email.svg";
  $webIcon = "worldwide.svg";
?>

<!-- <div class="latest-posts wrapper"> -->
  <div class="swp-single-posts-area wrapper">
    <p>single sundlaugar</p>
    <div class="swp-single-post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="swp-headlines">
        <h2><?php the_field('field_57f40974fd4fa'); ?></h2>
        <h4><?php the_field('field_57f546e7798b8'); ?></h4>
      </div>

      <div class="swp-images swp-images-display">
        <?php the_field('field_57f54ff01c83b'); ?>
      </div>

      <div class="swp-contact-info mobile-width">
        <p><?php get_template_part('assets/svg/inline', $phoneIcon); ?><?php the_field('field_57f561fd0c57b'); ?></p>
        <p><?php get_template_part('assets/svg/inline', $emailIcon); ?><?php the_field('field_57f561e00c57a'); ?></p>
        <p><?php get_template_part('assets/svg/inline', $webIcon); ?><a href="<?php the_field('field_57f5620d0c57c'); ?>"><?php the_field('field_57f5620d0c57c'); ?></a></p>
      </div>

      <div class="swp-opening-hours mobile-width">
        <?php the_field('field_57f409b5fd4fb'); ?>
      </div>

      <div class="swp-price-list mobile-width">
        <?php the_field('field_57f5498f798b9'); ?>
      </div>

      <div class="swp-images swp-images-mobile">
        <?php the_field('field_57f54ff01c83b'); ?>
      </div>

      <div class="swp-description">
        <?php the_field('field_57f409fefd4fc'); ?>
      </div>

    <?php endwhile; endif; ?>
  </div>
  </div>
<!-- </div> -->

<?php include('footer.php'); ?>
