<?php include('header.php'); ?>

<?php
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
        <h2><?php the_field('field_57f40974fd4fa'); ?></h2>
        <a href="#google-map"><h4><?php get_template_part('assets/icons/inline', 'location-in-circle.svg'); ?><?php the_field('field_57f546e7798b8'); ?></h4></a>
      </div>

      <div class="swp-images swp-images-display">
        <?php the_field('field_57f54ff01c83b'); ?>
      </div>

      <div class="swp-contact-info mobile-width">
        <p><?php get_template_part('assets/svg/inline', $phoneIcon); ?><?php the_field('field_57f561fd0c57b'); ?></p>
        <p><?php get_template_part('assets/svg/inline', $emailIcon); ?><a href="mailto:<?php the_field('field_57f561e00c57a'); ?>?subject=Fyrirspurn%20af%20sundlaugar.is%20/%20Inquiry%20from%20swimminginiceland.is"><?php the_field('field_57f561e00c57a'); ?></a></p>
        <p><?php get_template_part('assets/svg/inline', $webIcon); ?><a href="<?php the_field('field_57f5620d0c57c'); ?>" target="_blank"><?php the_field('field_585060433a3e3'); ?></a></p>
        <p><?php get_template_part('assets/svg/inline', $facebookIcon); ?><a href="<?php the_field('field_5850550b2b2be'); ?>" target="_blank"><?php the_field('field_58505810f64c3'); ?></a></p>
      </div>

      <div class="swp-opening-hours mobile-width">
        <?php
          $field_key = 'field_57f409b5fd4fb';
          $fieldLable = get_field_object($field_key);
          if( $fieldLable ):
            echo '<h4>' . $fieldLable['label'] . '</h4>';
           endif;

        ?>

        <?php the_field('field_57f409b5fd4fb'); ?>
      </div>

      <div class="swp-price-list mobile-width">
        <?php
        $table = get_field( 'field_57f5498f798b9' );

          $field_key = 'field_57f5498f798b9';
          $fieldLable = get_field_object($field_key);
          if( $fieldLable ):
            echo '<h4>' . $fieldLable['label'] . '</h4>';
           endif;

        if ( $table ) {
            echo '<table border="0">';
                if ( $table['header'] ) {
                    echo '<thead>';
                        echo '<tr>';
                            foreach ( $table['header'] as $th ) {

                                echo '<th>';
                                    echo $th['c'];
                                echo '</th>';
                            }
                        echo '</tr>';
                    echo '</thead>';
                }
                echo '<tbody>';
                    foreach ( $table['body'] as $tr ) {
                        echo '<tr>';
                            foreach ( $tr as $td ) {
                                echo '<td>';
                                    echo $td['c'];
                                echo '</td>';
                            }
                        echo '</tr>';
                    }
                echo '</tbody>';
            echo '</table>';
        }
        ?>
      </div>

      <div class="swp-images swp-images-mobile">
        <?php
          $field_key = 'field_57f54ff01c83b';
          $fieldLable = get_field_object($field_key);
          if( $fieldLable ):
            echo '<h4>' . $fieldLable['label'] . '</h4>';
           endif;
        ?>

        <?php the_field('field_57f54ff01c83b'); ?>
      </div>

      <div class="swp-description">
        <?php
          $field_key = 'field_57f409fefd4fc';
          $fieldLable = get_field_object($field_key);
          if( $fieldLable ):
            echo '<h4>' . $fieldLable['label'] . '</h4>';
           endif;
        ?>

        <?php the_field('field_57f409fefd4fc'); ?>
      </div>
      <div id="google-map"></div>

    <?php endwhile; endif; ?>
  </div>
  </div>

<!-- </div> -->
<?php include('google-map.php'); ?>
<?php include('footer.php'); ?>
