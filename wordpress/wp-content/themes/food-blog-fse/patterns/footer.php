<?php

/**
 * Title: Footer Default ( Food Blog FSE )
 * Slug: food-blog-fse/footer
 * Categories: footer, fresh-blog-lite-patterns
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","className":"is-style-default","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:group {"tagName":"section","className":"is-style-section-6 is-style-section-4","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32"}},"border":{"top":{"color":"var:preset|color|secondary-100","width":"1px"}}},"layout":{"type":"constrained"}} -->
  <section class="wp-block-group is-style-section-6 is-style-section-4" style="border-top-color:var(--wp--preset--color--secondary-100);border-top-width:1px;padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
          <div class="wp-block-group"><!-- wp:site-title {"level":0,"className":"is-style-text-label","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /--></div>
          <!-- /wp:group -->

          <!-- wp:site-tagline {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-100"}}}},"textColor":"secondary-100"} /-->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group"><!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-sm-aware-1 is-style-social-links-1","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|12"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <ul class="wp-block-social-links has-small-icon-size is-style-sm-aware-1 is-style-social-links-1"><!-- wp:social-link {"url":"#!","service":"x"} /-->

          <!-- wp:social-link {"url":"#!","service":"facebook","label":""} /-->

          <!-- wp:social-link {"url":"#!","service":"instagram"} /-->

          <!-- wp:social-link {"url":"#!","service":"linkedin","label":""} /-->
        </ul>
        <!-- /wp:social-links -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </section>
  <!-- /wp:group -->

  <!-- wp:group {"className":"is-style-section-6 is-style-section-4","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|32","top":"var:preset|spacing|32"}},"border":{"top":{"color":"var:preset|color|secondary-800","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group is-style-section-6 is-style-section-4" style="border-top-color:var(--wp--preset--color--secondary-800);border-top-width:1px;padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32)"><!-- wp:group {"align":"wide","className":"no-underline","style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide no-underline"><!-- wp:group {"layout":{"type":"default"}} -->
      <div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|12"}},"fontSize":"micro"} -->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Terms of Service', 'food-blog-fse'); ?>","url":"#!","kind":"custom"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Privacy Policy', 'food-blog-fse'); ?>","url":"#!","kind":"custom"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Cookie Notice', 'food-blog-fse'); ?>","url":"#!","kind":"custom"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Ad Choices', 'food-blog-fse'); ?>","url":"#!","kind":"custom"} /-->
        <!-- /wp:navigation -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
      <div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-text-aware-1 is-style-link-aware-1 is-style-text-note-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-200"}}}},"textColor":"secondary-200"} -->
        <p class="is-style-text-aware-1 is-style-link-aware-1 is-style-text-note-3 has-secondary-200-color has-text-color has-link-color">
          <?php
          printf(
            '%1$s %2$s <a href="%3$s">%4$s</a>. %5$s',
            esc_html__('&copy;', 'food-blog-fse'),
            esc_html(date_i18n(__('Y', 'food-blog-fse'))),
            esc_url(home_url('/')),
            esc_html(get_bloginfo('name')),
            esc_html__('All rights reserved.', 'food-blog-fse')
          );
          ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"is-style-text-aware-1 is-style-link-aware-1 is-style-text-note-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-200"}}}},"textColor":"secondary-200"} -->
        <p class="is-style-text-aware-1 is-style-link-aware-1 is-style-text-note-3 has-secondary-200-color has-text-color has-link-color">
          <?php
          printf(
            '<a href="%1$s" target="_blank">%2$s</a> &sdot; %3$s <a href="%4$s" target="_blank">%5$s</a>',
            esc_url('https://designorbital.com/wordpress-theme/free-food-blog-recipe-wordpress-theme-food-blog-fse/'),
            esc_html__('Food Blog FSE Theme', 'food-blog-fse'),
            esc_html__('Powered by', 'food-blog-fse'),
            esc_url(__('https://wordpress.org/', 'food-blog-fse')),
            esc_html__('WordPress', 'food-blog-fse')
          );
          ?>
        </p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
