<?php
  $mobile_ad2_key = "field_57dec202e7396";
  $ad2_customer_url_key = "field_57decb8ff85bc";
  $post_id = "14";
  $mobile_ad = get_field($mobile_ad2_key, $post_id);
  $ad_customer_url = get_field($ad2_customer_url_key, $post_id);
?>

<div class="ads-banners">
  <div class="ad-banner-two">
    <a href="<?php echo $ad_customer_url ?>">
      <img src="<?php echo $mobile_ad['url']; ?>" alt="<?php echo $mobile_ad['alt']; ?>">
    </a>
  </div>
</div>
