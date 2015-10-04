<?php
/**
 * Created by PhpStorm.
 * User: stevecoppin
 * Date: 04/10/15
 * Time: 13:06
 */
?>
<div class="contextual-links-region">
  <?php print render($title_suffix); ?>
  <article>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
      <div class="media">
        <div class="pull-left">
          <?php print render($content['field_image']); ?>
        </div>
        <div class="media-body">
          <h1><?php print $linked_title; ?></h1>
          <?php print render($content['body']); ?>
        </div>
      </div>
    </div>
  </article>
</div>
