<?php

/**
 * Title: Hidden Sidebar
 * Slug: food-blog-fse/hidden-sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Sidebar"},"style":{"position":{"type":""},"dimensions":{"minHeight":""},"spacing":{"blockGap":"var:preset|spacing|32"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-default","style":{"border":{"width":"1px","color":"#e8e8e7","radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|16","right":"var:preset|spacing|16"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group is-style-default has-border-color" style="border-color:#e8e8e7;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--16)"><!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":3,"className":"is-style-heading-basic is-style-text-summary"} -->
      <h3 class="wp-block-heading is-style-heading-basic is-style-text-summary"><?php esc_html_e('Editor Picks', 'food-blog-fse'); ?></h3>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"default","columnCount":null,"minimumColumnWidth":"10rem"}} -->
      <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"var:preset|spacing|16"}}}} -->
      <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3.5","className":"is-style-image-shine"} /--></div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
          <div class="wp-block-group"><!-- wp:post-title {"isLink":true,"className":"is-style-text-summary"} /-->

            <!-- wp:post-date {"isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"fontSize":"minuscule"} /-->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
      <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"is-style-default","style":{"border":{"width":"1px","color":"#e8e8e7","radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|16","right":"var:preset|spacing|16"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group is-style-default has-border-color" style="border-color:#e8e8e7;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--16)"><!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":3,"className":"is-style-heading-basic is-style-text-summary"} -->
      <h3 class="wp-block-heading is-style-heading-basic is-style-text-summary"><?php esc_html_e('Categories', 'food-blog-fse'); ?></h3>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:categories {"showOnlyTopLevel":true,"showLabel":false,"className":"is-style-categories-1"} /-->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"is-style-default","style":{"border":{"width":"1px","color":"#e8e8e7","radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|16","right":"var:preset|spacing|16"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group is-style-default has-border-color" style="border-color:#e8e8e7;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--16)"><!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":3,"className":"is-style-heading-basic is-style-text-summary"} -->
      <h3 class="wp-block-heading is-style-heading-basic is-style-text-summary"><?php esc_html_e('Tags', 'food-blog-fse'); ?></h3>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:tag-cloud {"numberOfTags":10,"className":"is-style-outline"} /-->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
