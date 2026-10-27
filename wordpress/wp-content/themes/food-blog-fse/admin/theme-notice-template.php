<?php

// Exit if accessed directly.
if (! defined('ABSPATH')) {
  exit;
}

// Essential Links
$pro_url = "https://designorbital.com/wordpress-theme/food-blog-recipe-wordpress-theme-food-blog-fse-pro/";
?>

<div class="notice notice-info is-dismissible food-blog-fse-notice">
  <h2><?php esc_html_e('Food Blog FSE Pro', 'food-blog-fse'); ?></h2>
  <p><?php esc_html_e('Use the discount code WPLOVE to upgrade to the Pro version today! The Pro version includes 220+ pre-designed patterns and 30+ powerful blocks & extensions.', 'food-blog-fse'); ?></p>
  <p>
    <a href="<?php echo esc_url($pro_url); ?>" class="button button-primary" target="_blank">
      <?php esc_html_e('Food Blog FSE Pro', 'food-blog-fse'); ?>
    </a>
    <a href="<?php echo esc_url(admin_url('themes.php?page=food-blog-fse-page')); ?>" class="button button-secondary">
      <?php esc_html_e('Theme Info', 'food-blog-fse'); ?>
    </a>
  </p>
</div>
