<?php

/**
 * Title: Hidden Query Loop, Sidebar
 * Slug: food-blog-fse/hidden-query-loop-sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Main QL"},"layout":{"type":"default"}} -->
<section class="wp-block-group"><!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":10},"layout":{"type":"default"}} -->
  <div class="wp-block-query"><!-- wp:post-template {"className":"is-style-post-template-tf is-style-post-template-1 is-style-post-template-2 is-style-default","layout":{"type":"default","columnCount":null,"minimumColumnWidth":"300px"}} -->
    <!-- wp:columns {"isStackedOnMobile":false,"className":"cols-xs-stack","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|16","right":"var:preset|spacing|16"}},"border":{"width":"1px","color":"#e8e8e7","radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
    <div class="wp-block-columns is-not-stacked-on-mobile cols-xs-stack has-border-color" style="border-color:#e8e8e7;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--16)"><!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","align":"center","className":"is-style-image-shine-2","style":{"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}}}} /--></div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"verticalAlignment":"stretch"} -->
      <div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"className":"is-style-default","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|16","right":"var:preset|spacing|16"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
        <div class="wp-block-group is-style-default" style="min-height:100%;padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--16)"><!-- wp:group {"className":"is-style-default","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
          <div class="wp-block-group is-style-default"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|12"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

              <!-- wp:post-title {"isLink":true,"className":"is-style-text-subtitle"} /-->

              <!-- wp:post-excerpt {"excerptLength":10} /-->
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
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"paginationArrow":"arrow","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
    <!-- wp:query-pagination-previous {"label":"<?php esc_attr_e('Prev', 'food-blog-fse'); ?>"} /-->

    <!-- wp:query-pagination-numbers /-->

    <!-- wp:query-pagination-next {"label":"<?php esc_attr_e('Next', 'food-blog-fse'); ?>"} /-->
    <!-- /wp:query-pagination -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('No posts were found.', 'food-blog-fse'); ?></p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
  </div>
  <!-- /wp:query -->

  <!-- wp:spacer {"height":"1px","className":"is-style-spacer-none-up-lg","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|52"}}}} -->
  <div style="margin-bottom:var(--wp--preset--spacing--52);height:1px" aria-hidden="true" class="wp-block-spacer is-style-spacer-none-up-lg"></div>
  <!-- /wp:spacer -->
</section>
<!-- /wp:group -->
