<?php include('mobile-menu.php'); ?>
<nav>
  <div class="homepage-icon nav-flex-item">
    <a href="<?php bloginfo('url'); ?>">
      <img src="<?php bloginfo('template_directory'); ?>/assets/svg/homepage.svg" alt="">
    </a>
  </div>
  <div id="menu-button" class="menu-button nav-flex-item">
    <div id="menu-closed">
      <div id="upper-stripe" class="upper-stripe"></div>
      <div id="middle-stripe" class="middle-stripe"></div>
      <div id="lower-stripe"  class="lower-stripe"></div>
    </div>
  </div>

  <div class="logo nav-flex-item nav-flex-item-2">
    <a href="<?php bloginfo('url'); ?>"><?php get_template_part('assets/logo/inline', 'logo.svg'); ?></a>
  </div>

  <div id="magnifier-tool" class="search nav-flex-item mobile-flags-padding">
    <?php get_template_part('assets/icons/inline', 'magnifier-tool.svg'); ?>
  </div>

  <div id="nav-search-form" class="close-search-form">
    <div id="nav-close-icon" class="close-search-field nav-flex-item">
      <?php get_template_part('assets/icons/inline', 'close.svg'); ?>
    </div>

    <div class="search-field nav-flex-item">
      <?php get_search_form(); ?>
    </div>
  </div>
</nav>
