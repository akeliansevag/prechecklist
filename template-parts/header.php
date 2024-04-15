<div class="mobile-menu-wrapper">
  <div class="menu-overlay"></div><!--full-overlay-->
  <div class="mobile-menu">
    <div class="menu-close">
      <span class="mc-left"></span>
      <span class="mc-right"></span>
    </div>
    <div class="mobile-logo">
      <a href="<?= home_url(); ?>">
        <img src="<?= get_field("logo", "options"); ?>" width="100%" />
      </a>
    </div><!--logo-->
    <div class="m-menu">
      <?= html5blank_nav('mobile-menu'); ?>
    </div>
  </div>
</div><!--mobile-menu-wrapper-->

<header>
  <div class="container">
    <div class="header-content">
      <div class="logo mx-auto py-3">
        <a href="<?= home_url(); ?>">
          <img src="<?= get_field("logo", "options"); ?>" width="100%" />
        </a>
      </div><!--logo-->
    </div><!--header-content-->
  </div><!--container-->
</header>