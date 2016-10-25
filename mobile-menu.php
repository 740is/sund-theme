<div id="mobile-menu" class="mobile-menu">
  <div class="mobile-menu-items">


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






    <?php //wp_nav_menu( array('menu' => 'Top Mobile Menu')); ?>
    <!-- <ul>
      <li><a href="#">Sundlaugar</a></li>
      <li><a href="#">Heitar laugar</a></li>
      <li><a href="#">Opnunartímar</a></li>
      <li><a href="#">Sundkennsla</a></li>
    </ul>
    <ul>
      <li><a href="#">Hafa samband</a></li>
      <li><a href="#">Auglýsingar</a></li>
      <li><a href="#">Senda inn frétt</a></li>
      <li><a href="#">Tilkynna villu</a></li>
    </ul>
    <ul>
      <li><a href="#">Fréttir / Tilkynningar</a></li>
      <li><a href="#">Tilgangur vefsins</a></li>
    </ul> -->
  </div>
</div>
