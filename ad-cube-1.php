<?php
  $adCubeOneA = "field_57dec202e7396";
  $adCubeOneB = "field_585062f3a90ab";
  $adCubeOneC = "field_585062e3a90aa";
  $adCubeOneUrlA = "field_57decb8ff85bc";
  $adCubeOneUrlB = "field_58506349d6ea4";
  $adCubeOneUrlC = "field_58506345d6ea3";

  $post_id = "14";

  $adCubeOneImageA = get_field($adCubeOneA, $post_id);
  $adCubeOneTheUrlA = get_field($adCubeOneUrlA, $post_id);
  $adCubeOneImageB = get_field($adCubeOneB, $post_id);
  $adCubeOneTheUrlB = get_field($adCubeOneUrlB, $post_id);
  $adCubeOneImageC = get_field($adCubeOneC, $post_id);
  $adCubeOneTheUrlC = get_field($adCubeOneUrlC, $post_id);
?>
<div dir="rtl" class="ads-banners">
  <div class="ads-cube-one-overflow-hidden">
    <div>
      <a href="<?php echo $adCubeOneTheUrlA ?>">
        <img src="<?php echo $adCubeOneImageA['url']; ?>" alt="<?php echo $adCubeOneImageA['alt']; ?>">
      </a>
    </div>

    <div>
      <a href="<?php echo $adCubeOneTheUrlB ?>">
        <img src="<?php echo $adCubeOneImageB['url']; ?>" alt="<?php echo $adCubeOneImageB['alt']; ?>">
      </a>
    </div>

    <div>
      <a href="<?php echo $adCubeOneTheUrlC ?>">
        <img src="<?php echo $adCubeOneImageC['url']; ?>" alt="<?php echo $adCubeOneImageC['alt']; ?>">
      </a>
    </div>
  </div>
</div>
