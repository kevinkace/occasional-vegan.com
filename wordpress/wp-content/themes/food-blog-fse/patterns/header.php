<?php

/**
 * Title: Header Default ( Food Blog FSE )
 * Slug: food-blog-fse/header
 * Categories: header, fresh-blog-lite-patterns
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","className":"is-style-default","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-default"><!-- wp:group {"className":"is-style-section-6 is-style-section-4","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group is-style-section-6 is-style-section-4" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-text-aware-1 is-style-link-aware-1 is-style-text-note-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
        <p class="is-style-text-aware-1 is-style-link-aware-1 is-style-text-note-3 has-base-color has-text-color has-link-color">
          <?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
          echo sprintf(esc_html__('%1$sAbout%2$s', 'food-blog-fse'), '<a href="' . esc_url('#') . '" data-type="internal" data-id="#">', '</a>');
          ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"is-style-text-aware-1 is-style-text-note-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
        <p class="is-style-text-aware-1 is-style-text-note-3 has-base-color has-text-color has-link-color"><?php esc_html_e('/', 'food-blog-fse'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"is-style-text-aware-1 is-style-link-aware-1 is-style-text-note-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
        <p class="is-style-text-aware-1 is-style-link-aware-1 is-style-text-note-3 has-base-color has-text-color has-link-color">
          <?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
          echo sprintf(esc_html__('%1$sContact%2$s', 'food-blog-fse'), '<a href="' . esc_url('#') . '" data-type="internal" data-id="#">', '</a>');
          ?>
        </p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group"><!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|12"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#!","service":"x"} /-->

          <!-- wp:social-link {"url":"#!","service":"facebook","label":""} /-->

          <!-- wp:social-link {"url":"#!","service":"instagram"} /-->

          <!-- wp:social-link {"url":"#!","service":"linkedin","label":""} /-->
        </ul>
        <!-- /wp:social-links -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|24"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--24);padding-bottom:var(--wp--preset--spacing--24)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
      <div class="wp-block-group"><!-- wp:site-logo {"width":28,"shouldSyncIcon":false,"align":"center","style":{"color":{"duotone":"var:preset|duotone|primary-and-base"}}} /-->

        <!-- wp:site-title {"level":0,"textAlign":"center","className":"is-style-text-lead","fontFamily":"secondary"} /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:site-tagline {"textAlign":"center","className":"is-style-text-summary-2"} /-->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"is-style-default","layout":{"type":"constrained"}} -->
  <div class="wp-block-group is-style-default"><!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|secondary","width":"2px"},"bottom":{"color":"var:preset|color|secondary","width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--secondary);border-top-width:2px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12)"><!-- wp:navigation {"metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"is-style-navigation-starter is-style-navigation-theme-base is-style-navigation-theme-base-border z-90 nav-xs-hide nav-sm-hide nav-md-hide","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"minute"} -->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Home', 'food-blog-fse'); ?>","url":"<?php echo esc_url(home_url('/')); ?>","kind":"custom"} /-->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Recipes', 'food-blog-fse'); ?>","url":"#!","kind":"custom"} /-->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Desserts', 'food-blog-fse'); ?>","url":"#!","kind":"custom"} /-->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Drinks', 'food-blog-fse'); ?>","url":"#!","kind":"custom"} /-->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Food', 'food-blog-fse'); ?>","url":"#!","kind":"custom"} /-->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Salads', 'food-blog-fse'); ?>","url":"#!","kind":"custom"} /-->
      <!-- wp:navigation-link {"label":"<?php esc_html_e('Appetizers', 'food-blog-fse'); ?>","url":"#!","kind":"custom"} /-->
      <!-- /wp:navigation -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
