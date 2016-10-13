<?php
	/* Template Name: Landshlutar */
?>

<?php include('header.php'); ?>

<!-- <div id="selection-buttons-clearfix"> -->

  <?php
    $capitalArea = "Höfuðborgarsvæðið";
    $west = "Vesturland";
    $westFjords = "Vestfirðir";
    $northWest = "Norðvesturland";
    $northEast = "Norðausturland";
    $east = "Austurland";
    $south = "Suðurland";
    $reykjanes = "Reykjanes";
    $post_id_buttons_latest = "13";
    // $mobile_ad1 = get_field($mobile_ad1_key, $post_id);
    // $ad1_customer_url = get_field($ad1_customer_url_key, $post_id);

    $iceland_reg_capital = "iceland-capital.svg";
    $iceland_reg_west = "iceland-west.svg";
    $iceland_reg_westfjords = "iceland-westfjords.svg";
    $iceland_reg_northwest = "iceland-northwest.svg";
    $iceland_reg_northeast = "iceland-northeast.svg";
    $iceland_reg_east = "iceland-east.svg";
    $iceland_reg_south = "iceland-south.svg";
    $iceland_reg_reykjanes = "iceland-reykjanes.svg";
  ?>

<div class="region-buttons-area">
  <ul class="region-buttons">
      <a href="<?php bloginfo('url'); ?>/sundlaugar/"><li>
        <div id="capital-area" class="iceland-area capital-area">
          <div class="swimming-pools-icon">
            <?php get_template_part('assets/svg/inline', $iceland_reg_capital); ?>
          </div>
          <div class="iceland-area-name">
              <p><?php echo $capitalArea; ?></p>
              <!-- <p><?php echo get_field($capitalArea, $post_id_buttons_latest); ?></p> -->
          </div>
        </div>
      </li></a>

      <a href="#"><li>
        <div id="west" class="iceland-area west">
          <div class="opening-hours-icon">
            <?php get_template_part('assets/svg/inline', $iceland_reg_west); ?>
          </div>
          <div class="iceland-area-name">
            <p><?php echo $west; ?></p>
            <!-- <p><?php echo get_field($west, $post_id_buttons_latest); ?></p> -->
          </div>
        </div>
      </li></a>

      <a href="#"><li>
        <div id="westfjords" class="iceland-area westfjords">
          <div class="locations-icon">
            <?php get_template_part('assets/svg/inline', $iceland_reg_westfjords); ?>
          </div>
          <div class="iceland-area-name">
            <p><?php echo $westFjords; ?></p>
            <!-- <p><?php echo get_field($westFjords, $post_id_buttons_latest); ?></p> -->
          </div>
        </div>
      </li></a>

      <a href="#"><li>
        <div id="north-west" class="iceland-area north-west">
          <div class="announcements-icon">
            <?php get_template_part('assets/svg/inline', $iceland_reg_northwest); ?>
          </div>
          <div class="iceland-area-name">
            <p><?php echo $northEast; ?></p>
            <!-- <p><?php echo get_field($northEast, $post_id_buttons_latest); ?></p> -->
          </div>
        </div>
      </li></a>

      <a href="#"><li>
        <div id="north-east" class="iceland-area north-east">
          <div class="opening-hours-icon">
            <?php get_template_part('assets/svg/inline', $iceland_reg_northeast); ?>
          </div>
          <div class="iceland-area-name">
            <p><?php echo $northEast; ?></p>
            <!-- <p><?php echo get_field($northEast, $post_id_buttons_latest); ?></p> -->
          </div>
        </div>
      </li></a>

      <a href="#"><li>
        <div id="east" class="iceland-area east">
          <div class="locations-icon">
            <?php get_template_part('assets/svg/inline', $iceland_reg_east); ?>
          </div>
          <div class="iceland-area-name">
            <p><?php echo $east; ?></p>
            <!-- <p><?php echo get_field($east, $post_id_buttons_latest); ?></p> -->
          </div>
        </div>
      </li></a>

      <a href="#"><li>
        <div id="south" class="iceland-area south">
          <div class="announcements-icon">
            <?php get_template_part('assets/svg/inline', $iceland_reg_south); ?>
          </div>
          <div class="iceland-area-name">
            <p><?php echo $south; ?></p>
            <!-- <p><?php echo get_field($south, $post_id_buttons_latest); ?></p> -->
          </div>
        </div>
      </li></a>

      <a href="#"><li>
        <div id="reykjanes" class="iceland-area reykjanes">
          <div class="opening-hours-icon">
            <?php get_template_part('assets/svg/inline', $iceland_reg_reykjanes); ?>
          </div>
          <div class="iceland-area-name">
            <p><?php echo $reykjanes; ?></p>
            <!-- <p><?php echo get_field($reykjanes, $post_id_buttons_latest); ?></p> -->
          </div>
        </div>
      </li></a>

      <!-- <a href="#">
        <div id="highlands" class="iceland-area highlands">
          <div class="opening-hours-icon">
            <?php get_template_part('assets/svg/inline', $iceland_reg_all); ?>
          </div>
          <div class="iceland-area-name">
            <p><?php echo get_field($open_now, $post_id_buttons_latest); ?></p>
          </div>
        </div>
      </a> -->
    </ul>
</div>
<!-- </div> -->

<?php include('footer.php'); ?>
