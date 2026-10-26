<?php

/**
 * Title: Essential Pattern Lite
 * Slug: food-blog-fse/pattern-essential-lite
 * Categories: posts, fresh-blog-lite-patterns
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Essential Pattern Lite"},"align":"full","className":"is-style-default","layout":{"type":"constrained","contentSize":""}} -->
<section class="wp-block-group alignfull is-style-default"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|12"}},"layout":{"type":"default"}} -->
  <div class="wp-block-group alignwide"><!-- wp:heading {"className":"is-style-text-cue-3"} -->
    <h2 class="wp-block-heading is-style-text-cue-3"><?php esc_html_e('Featured', 'food-blog-fse'); ?></h2>
    <!-- /wp:heading -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
  <div class="wp-block-group alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":8,"pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"layout":{"type":"default"}} -->
    <div class="wp-block-query"><!-- wp:post-template {"className":"cols-xs-1 cols-sm-2 cols-md-2","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
      <!-- wp:group {"className":"is-style-default","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|16","right":"var:preset|spacing|16"}}},"borderColor":"secondary-100","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
      <div class="wp-block-group is-style-default has-border-color has-secondary-100-border-color" style="border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--16)"><!-- wp:group {"className":"is-style-default","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-default"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","align":"center","className":"is-style-image-1","style":{"border":{"radius":"6px"}}} /-->

          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|12"}},"layout":{"type":"constrained"}} -->
          <div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

            <!-- wp:post-title {"isLink":true,"className":"is-style-text-subtitle"} /-->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6","padding":{"top":"var:preset|spacing|16"}},"border":{"top":{"color":"var:preset|color|secondary","style":"solid","width":"2px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--secondary);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--16)"><!-- wp:group {"style":{"typography":{"lineHeight":"1"},"spacing":{"blockGap":"var:preset|spacing|4"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
          <div class="wp-block-group" style="line-height:1"><!-- wp:post-date {"format":"M j, Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"fontSize":"minute"} /--></div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
      <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->
