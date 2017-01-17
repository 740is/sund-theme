<?php
  $mobile_ad1_key = "field_57debfd2e7395";
  $ad1_customer_url_key = "field_57decb11f85bb";
  $post_id = "14";
  $mobile_ad1 = get_field($mobile_ad1_key, $post_id);
  $ad1_customer_url = get_field($ad1_customer_url_key, $post_id);
?>
<div class="ads-banners">
  <div class="ad-banner-one">
    <a href="<?php echo $ad1_customer_url ?>">
      <img src="<?php echo $mobile_ad1['url']; ?>" alt="<?php echo $mobile_ad1['alt']; ?>">
    </a>
  </div>
</div>
