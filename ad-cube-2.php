<?php
  $adCubeTwoA = "field_581f346449d05";
  $adCubeTwoB = "field_58506486cfcaa";
  $adCubeTwoC = "field_58506486cfca9";
  $adCubeTwoUrlA = "field_581f34a353e5f";
  $adCubeTwoUrlB = "field_585064efdbfde";
  $adCubeTwoUrlC = "field_585064ecdbfdd";

  $post_id = "14";

  $adCubeTwoImageA = get_field($adCubeTwoA, $post_id);
  $adCubeTwoTheUrlA = get_field($adCubeTwoUrlA, $post_id);
  $adCubeTwoImageB = get_field($adCubeTwoB, $post_id);
  $adCubeTwoTheUrlB = get_field($adCubeTwoUrlB, $post_id);
  $adCubeTwoImageC = get_field($adCubeTwoC, $post_id);
  $adCubeTwoTheUrlC = get_field($adCubeTwoUrlC, $post_id);
?>
<div dir="ltr" class="ads-banners">
  <div class="ads-cube-two-overflow-hidden">
    <div>
      <div class="ad-cube-two">
        <a href="<?php echo $adCubeTwoTheUrlA ?>">
          <img src="<?php echo $adCubeTwoImageA['url']; ?>" alt="<?php echo $adCubeTwoImageA['alt']; ?>">
        </a>
      </div>
    </div>

    <div>
      <div class="ad-cube-two">
        <a href="<?php echo $adCubeTwoTheUrlB ?>">
          <img src="<?php echo $adCubeTwoImageB['url']; ?>" alt="<?php echo $adCubeTwoImageB['alt']; ?>">
        </a>
      </div>
    </div>

    <div>
      <div class="ad-cube-two">
        <a href="<?php echo $adCubeTwoTheUrlC ?>">
          <img src="<?php echo $adCubeTwoImageC['url']; ?>" alt="<?php echo $adCubeTwoImageC['alt']; ?>">
        </a>
      </div>
    </div>
  </div>
</div>
