<?php include('header.php'); ?>

<?php
  $facebookUrl = get_field('field_588e7abe203d4');
  $emailUrl = get_field('field_588e7b1c203d7');
  $webUrl = get_field('field_588e7b0b203d6');


  $phoneIcon = "phone-call.svg";
  $emailIcon = "email.svg";
  $webIcon = "worldwide.svg";
  $facebookIcon = "facebook.svg";
?>

<!-- <div class="latest-posts wrapper"> -->
  <div class="swp-single-posts-area wrapper">
    <div class="swp-single-post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="swp-headlines">
        <h2><?php the_title(); ?></h2>
      </div>

      <div class="swp-contact-info mobile-width">
        <p><?php get_template_part('assets/svg/inline', $phoneIcon); ?><?php the_field('field_588e7af9203d5'); ?></p>
        <?php
          if(!$emailUrl) {
            echo '';
          } else {
            echo '<p>';
            get_template_part('assets/svg/inline', $emailIcon);
            echo '<a href="mailto:';
            the_field('field_588e7b1c203d7');
            echo '?subject=Fyrirspurn%20af%20sundlaugar.is%20/%20Inquiry%20from%20swimminginiceland.is">';
            the_field('field_588e7b1c203d7');
            echo '</a></p>';
          }
        ?>

        <?php
          if(!$webUrl) {
            echo '';
          } else {
            echo '<p>';
            get_template_part('assets/svg/inline', $webIcon);
            echo '<a href="';
            the_field('field_588e7b0b203d6');
            echo '" target="_blank">';
            the_field('field_588e7f2c8aa83');
            echo '</a></p>';
          }
        ?>

        <?php
          if(!$facebookUrl) {
            echo '';
          } else {
            echo '<p>';
            get_template_part('assets/svg/inline', $facebookIcon);
            echo '<a href="';
            the_field('field_588e7b0b203d6');
            echo '" target="_blank">';
            the_field('field_588e7f448aa84');
            echo '</a></p>';
          }
        ?>
      </div>

      <div class="swp-description">
        <?php the_content(); ?>
      </div>

    <?php endwhile; endif; ?>
  </div>
  </div>
<!-- </div> -->

<?php include('footer.php'); ?>
