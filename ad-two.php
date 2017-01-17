<?php
  $mobile_ad2_key = "field_57dec202e7396";
  $ad2_customer_url_key = "field_57decb8ff85bc";
  $post_id = "14";
  $mobile_ad2 = get_field($mobile_ad2_key, $post_id);
  $ad_customer_url2 = get_field($ad2_customer_url_key, $post_id);

  $mobile_ad3_key = "field_581f346449d05";
  $ad3_customer_url_key = "field_581f34a353e5f";
  $mobile_ad3 = get_field($mobile_ad3_key, $post_id);
  $ad_customer_url3 = get_field($ad3_customer_url_key, $post_id);
?>

<div class="ads-banners">
  <div class="ads-banners-bottom">
    <div class="ad-banner-two">
      <a href="<?php echo $ad_customer_url2 ?>">
        <img src="<?php echo $mobile_ad2['url']; ?>" alt="<?php echo $mobile_ad2['alt']; ?>">
      </a>
    </div>
    <div class="ad-banner-two">
      <a href="<?php echo $ad_customer_url3 ?>">
        <img src="<?php echo $mobile_ad3['url']; ?>" alt="<?php echo $mobile_ad3['alt']; ?>">
      </a>
    </div>
  </div>
</div>
