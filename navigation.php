<?php include('mobile-menu.php'); ?>
<nav>
  <div id="menu-button" class="menu-button nav-flex-item">
    <?php get_template_part('assets/icons/inline', 'bars.svg'); ?>
  </div>

  <div class="logo nav-flex-item">
    <?php get_template_part('assets/logo/inline', 'logo.svg'); ?>
  </div>

  <div id="magnifier-tool" class="search nav-flex-item">
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
