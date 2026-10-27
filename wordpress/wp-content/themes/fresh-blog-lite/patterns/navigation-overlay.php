<?php

/**
 * Title: Navigation Overlay ( Fresh Blog )
 * Slug: fresh-blog-lite/navigation-overlay
 * Categories: navigation, fresh-blog-lite-patterns
 * Block Types: core/template-part/navigation-overlay
 */
?>
<!-- wp:group {"metadata":{"name":"navigation-overlay","patternName":"fresh-blog-lite/navigation-overlay"},"className":"is-style-default","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"blockGap":"var:preset|spacing|0","margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"},"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32","left":"var:preset|spacing|32","right":"var:preset|spacing|32"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="min-height:100vh;margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0);padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--32)"><!-- wp:group {"layout":{"type":"default"}} -->
  <div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
      <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-title {"level":0,"className":"is-style-text-lead-3","style":{"typography":{"textTransform":"none","lineHeight":"1","fontStyle":"normal","fontWeight":"400"}}} /--></div>
        <!-- /wp:group -->

        <!-- wp:group {"align":"wide","className":"is-style-section-5","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":{"topLeft":"2px","topRight":"2px","bottomLeft":"2px","bottomRight":"2px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
        <div class="wp-block-group alignwide is-style-section-5" style="border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-left-radius:2px;border-bottom-right-radius:2px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--6)"><!-- wp:navigation-overlay-close {"displayMode":"text","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"minuscule"} /--></div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:separator -->
      <hr class="wp-block-separator has-alpha-channel-opacity" />
      <!-- /wp:separator -->

      <!-- wp:group {"layout":{"type":"default"}} -->
      <div class="wp-block-group"><!-- wp:navigation {"showSubmenuIcon":false,"submenuVisibility":"always","overlayMenu":"never","className":"is-style-navigation-overlay-starter is-style-navigation-overlay-theme-base is-style-navigation-overlay-theme-base-border","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"none"},"spacing":{"blockGap":"var:preset|spacing|16"}},"fontSize":"compact","layout":{"type":"flex","orientation":"vertical"}} -->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Home', 'fresh-blog-lite'); ?>","url":"<?php echo esc_url(home_url('/')); ?>","kind":"custom"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Shop', 'fresh-blog-lite'); ?>","url":"#!","kind":"custom"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 'fresh-blog-lite'); ?>","url":"#!","kind":"custom"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('About', 'fresh-blog-lite'); ?>","url":"#!","kind":"custom"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact', 'fresh-blog-lite'); ?>","url":"#!","kind":"custom"} /-->
        <!-- /wp:navigation -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:separator -->
    <hr class="wp-block-separator has-alpha-channel-opacity" />
    <!-- /wp:separator -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"typography":{"lineHeight":"1"},"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group" style="line-height:1"><!-- wp:group {"className":"is-style-section-3","style":{"border":{"radius":"50%"},"spacing":{"padding":{"top":"var:preset|spacing|2","bottom":"var:preset|spacing|2","left":"var:preset|spacing|2","right":"var:preset|spacing|2"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-section-3" style="border-radius:50%;padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)"><!-- wp:image {"width":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
          <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/avatar-lite.webp" alt="" class="" style="aspect-ratio:1;object-fit:cover;width:80px" /></figure>
          <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-text-summary","style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"400","textTransform":"none"}}} -->
          <p class="is-style-text-summary" style="font-style:normal;font-weight:400;line-height:1.2;text-transform:none"><?php esc_html_e('Emily Scott', 'fresh-blog-lite'); ?></p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"is-style-text-aware-1 is-style-text-note","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-800"}}},"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"400","textTransform":"none"}},"textColor":"secondary-800"} -->
          <p class="is-style-text-aware-1 is-style-text-note has-secondary-800-color has-text-color has-link-color" style="font-style:normal;font-weight:400;line-height:1;text-transform:none"><?php esc_html_e('CEO &amp; Founder', 'fresh-blog-lite'); ?></p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:separator -->
    <hr class="wp-block-separator has-alpha-channel-opacity" />
    <!-- /wp:separator -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
      <div class="wp-block-group"><!-- wp:heading {"className":"is-style-text-summary-2","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"}}} -->
        <h2 class="wp-block-heading is-style-text-summary-2" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Follow Me', 'fresh-blog-lite'); ?></h2>
        <!-- /wp:heading -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"layout":{"type":"default"}} -->
      <div class="wp-block-group"><!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-social-links-1","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|12"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <ul class="wp-block-social-links has-small-icon-size is-style-social-links-1"><!-- wp:social-link {"url":"#!","service":"facebook","label":"\u003c?php esc_attr_e('', 'fresh-blog-lite');?\u003e"} /-->

          <!-- wp:social-link {"url":"#!","service":"twitter","label":"\u003c?php esc_attr_e('', 'fresh-blog-lite');?\u003e"} /-->

          <!-- wp:social-link {"url":"#!","service":"wordpress"} /-->
        </ul>
        <!-- /wp:social-links -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
