<?php include('header.php'); ?>

<!-- <div class="latest-posts wrapper"> -->
  <div class="swp-single-posts-area wrapper">
    <?php include('swimmer.php'); ?>
    <div class="swp-single-post">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>

      <?php the_content(); ?>

    <?php endwhile; endif; ?>
  </div>
  </div>
<!-- </div> -->

<?php include('footer.php'); ?>
