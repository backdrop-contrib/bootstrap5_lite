<?php
/**
 * @file
 * Display generic site information such as logo, site name, etc.
 *
 * Available variables:
 *
 * - $base_path: The base URL path of the Backdrop installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $front_page: The URL of the front page. Use this instead of $base_path, when
 *   linking to the front page. This includes the language domain or prefix.
 * - $site_name: The name of the site, empty when display has been disabled.
 * - $site_slogan: The site slogan, empty when display has been disabled.
 * - $menu: The menu for the header (if any), as an HTML string.
 */
?>
<header id="navbar" role="banner" class="<?php print implode(" ",$navbar_classes_array); ?>">
  <div class="<?php print $container_class;?>">
    <?php if ($site_name || $logo): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <?php if ($logo): ?>
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        <?php endif; ?>
        <?php if ($site_name): ?>
          <?php print $site_name; ?>
        <?php endif; ?>
      </a>
    <?php endif; ?>
    <button type="button" class="navbar-toggler <?php print ($navbar_menu_position == 'navbar-right') ? 'ms-auto' : ''; ?>" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if ($navigation or $menu): ?>
      <div class="navbar-collapse collapse" id="navbar-content">
        <?php if ($menu) print $menu; ?>
        <?php if ($navigation) print $navigation; ?>
      </div>
    <?php endif; ?>
  </div>
</header>
<header role="banner" id="page-header">
  <?php if (!empty($site_slogan)): ?>
    <p class="lead"><?php print $site_slogan; ?></p>
  <?php endif; ?>
</header> <!-- /#page-header -->
