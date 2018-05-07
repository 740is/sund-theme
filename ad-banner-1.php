<?php
  $adBannerOne = "field_57debfd2e7395";
  $adBannerTwo = "field_585061bd81b32";
  $adBannerThree = "field_585061f062f68";
  $adBannerOneUrl = "field_57decb11f85bb";
  $adBannerTwoUrl = "field_5850621a493a8";
  $adBannerThreeUrl = "field_58506219493a7";

  $post_id = "14";

  $adBannerOneImage = get_field($adBannerOne, $post_id);
  $adBannerOneTheUrl = get_field($adBannerOneUrl, $post_id);
  $adBannerTwoImage = get_field($adBannerTwo, $post_id);
  $adBannerTwoTheUrl = get_field($adBannerTwoUrl, $post_id);
  $adBannerThreeImage = get_field($adBannerThree, $post_id);
  $adBannerThreeTheUrl = get_field($adBannerThreeUrl, $post_id);
?>
<div dir="ltr" class="ads-banners">
  <div class="ads-banners-overflow-hidden">
    <div>
      <div class="ad-banner-one">
        <a href="<?php echo $adBannerOneTheUrl ?>">
          <img src="<?php echo $adBannerOneImage['url']; ?>" alt="<?php echo $adBannerOneImage['alt']; ?>">
        </a>
      </div>
    </div>

    <div>
      <div class="ad-banner-one">
        <a href="<?php echo $adBannerTwoTheUrl ?>">
          <img src="<?php echo $adBannerTwoImage['url']; ?>" alt="<?php echo $adBannerTwoImage['alt']; ?>">
        </a>
      </div>
    </div>

    <div>
      <div class="ad-banner-one">
        <a href="<?php echo $adBannerThreeTheUrl ?>">
          <img src="<?php echo $adBannerThreeImage['url']; ?>" alt="<?php echo $adBannerThreeImage['alt']; ?>">
        </a>
      </div>
    </div>
  </div>
</div>
