<?php
/**
 *
 * Breadcrumbs
 *
 */
?>
<section id="breadcrumbs" class="section-border-bottom">
  <div class="row">
    <div class="small-12 columns">
      <?php
      if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('
      <p class="breadcrumbs"><span class="pre-breadcrumb">You are here: </span>','</p>
      ');
      }
      ?>
    </div>
  </div>
</section>
