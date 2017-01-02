<div id="mobile-menu" class="mobile-menu">
  <div class="mobile-menu-items">


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
            <div class="selection-buttons-icon swimming-pools-icon">
              <?php get_template_part('assets/icons/inline', 'swimmer.svg'); ?>
            </div>
            <div class="buttons-text-banner swimming-pools-text-banner <?php echo $en_buttons_class; ?>">
                <p><?php echo get_field($swimming_pools, $post_id_buttons_latest); ?></p>
            </div>
          </div>
        </a>

        <a href="<?php echo $heitar_laugar; ?>">
          <div id="locations" class="selection-button">
            <div class="selection-buttons-icon locations-icon">
              <?php get_template_part('assets/icons/inline', 'hot-spring.svg'); ?>
            </div>
            <div class="buttons-text-banner locations-text-banner <?php echo $en_buttons_class; ?>">
              <p><?php echo get_field($locations, $post_id_buttons_latest); ?></p>
            </div>
          </div>
        </a>

        <!-- <a href="<?php echo $afgreidslutimi; ?>">
          <div id="opening-hours" class="selection-button">
            <div class="selection-buttons-icon opening-hours-icon">
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
            <div class="selection-buttons-icon announcements-icon">
              <?php get_template_part('assets/icons/inline', 'loudspeaker.svg'); ?>
            </div>
            <div class="buttons-text-banner announcements-text-banner <?php echo $en_buttons_class; ?>">
              <p><?php echo get_field($announcements, $post_id_buttons_latest); ?></p>
            </div>
          </div>
        </a>
      </div>
      <?php endif; wp_reset_postdata();?>
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
