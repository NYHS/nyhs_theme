<?php

/**
 * @file
 * Render a bunch of objects in a list or grid view.
 */
?>

<div class="islandora-objects clearfix islandora-basic-collection-wrapper">

<div class="collection-image-service-links-wrapper">

</div>
  <?php if (isset($collection_search) && !empty($collection_search)): ?>
  <div class="collection-view-collection-search-wrapper"><p><?php print $collection_search; ?></p></div>
  <?php endif; ?>

  <?php if (!empty($description)): ?>
  <div class="collection-view-about-this-collection">
    <h1 class="page__title title">About this collection</h1>
    <?php print $description; ?>
  </div>
  <?php endif; ?>

  <?php if (isset($collection_metadata) && !empty($collection_metadata)): ?>
  <div class="collection-view-descriptive-meta">
    <p><?php print $collection_metadata; ?></p>
  </div>
  <?php endif; ?>

  <div class="islandora-basic-collection clearfix">
  <span class="islandora-basic-collection-display-switch">
    <span class="islandora-objects-display-switch solr-sort">
      <?php print $solr_sort;?>
    </span>
  </span>
  <span class="islandora-basic-collection-display-switch">
    <span class="islandora-objects-display-switch">
      <?php print $solr_display_switch;?>
    </span>
  </span>
  <?php print $pager; ?>
  <?php print $content; ?>
  <?php print $pager; ?>
  </div>
</div>
