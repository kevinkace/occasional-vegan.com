<?php

/**
 * Title: Home Page - Sidebar ( Food Blog FSE )
 * Slug: food-blog-fse/page-home-sidebar
 * Categories: featured, fresh-blog-lite-patterns
 * Keywords: page, starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1340
 * Description: Homepage Sidebar Pattern.
 */
?>

<!-- wp:pattern {"slug":"food-blog-fse/hero-lite"} /-->
<!-- wp:pattern {"slug":"food-blog-fse/food-categories-lite"} /-->
<!-- wp:pattern {"slug":"food-blog-fse/pattern-essential-lite"} /-->
<!-- wp:pattern {"slug":"food-blog-fse/newsletter-lite"} /-->

<!-- wp:columns {"metadata":{"name":"Layout"},"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|52"},"margin":{"top":"var:preset|spacing|52","bottom":"var:preset|spacing|52"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--52);margin-bottom:var(--wp--preset--spacing--52)"><!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"0"}}} -->
  <div class="wp-block-column" style="flex-basis:70%">
    <!-- wp:pattern {"slug":"food-blog-fse/hidden-blog-title-sidebar"} /-->
    <!-- wp:pattern {"slug":"food-blog-fse/hidden-query-loop-sidebar"} /-->
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"0"}}} -->
  <div class="wp-block-column" style="flex-basis:30%">
    <!-- wp:template-part {"slug":"sidebar","tagName":"aside","area":"uncategorized"} /-->
  </div>
  <!-- /wp:column -->
</div>
<!-- /wp:columns -->
