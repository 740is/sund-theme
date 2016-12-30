<!-- BEGIN: ACF Google Map -->
<?php
  $location = get_field('field_5863f424678a5');

  if( !empty($location) ):
?>
<div class="acf-map-container">
  <div class="location-icon">
    <?php get_template_part('assets/icons/inline', 'location-in-circle.svg'); ?>
  </div>
  <div class="acf-map">
    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
  </div>
  <div class="direction">
    <a href="https://www.google.com/maps/place/<?php echo $location['address']; ?>" target="_blank"><?php _e('Get Directions','roots'); ?></a>
  </div>
</div>
<?php endif; ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALN6B-y54zn1ukWuodf2z9Ntwe3kl1p2M"></script>

<!-- END: ACF Google Map -->
