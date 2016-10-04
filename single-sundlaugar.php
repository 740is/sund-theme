<?php include('header.php'); ?>

<div class="a">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?>aaaa</h2>
  <?php endwhile; endif; ?>
</div>

<?php include('footer.php'); ?>
