<?php
/**
 * @file
 * Template for Panopoly Whelan.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display whelan clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>
  <section class="section">
    <div class="row">
      <div class="col-md-<?php print kalatheme_grid_size(KALATHEME_GRID_FOURTH, 3); ?> whelan-column-content-region-1">
        <?php print $content['column1']; ?>
      </div>
      <div class="col-md-<?php print kalatheme_grid_size(KALATHEME_GRID_HALF, 3); ?> whelan-column-content-region-2">
        <?php print $content['contentmain']; ?>
      </div>
      <div class="col-md-<?php print kalatheme_grid_size(KALATHEME_GRID_FOURTH, 3); ?> whelan-column-content-region-3">
        <?php print $content['column2']; ?>
      </div>
    </div>
  </section>
</div><!-- /.whelan -->
