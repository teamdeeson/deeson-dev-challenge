<?php
/**
 * Created by PhpStorm.
 * User: stevecoppin
 * Date: 04/10/15
 * Time: 13:06
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <article>
    <div class="media">
      <div class="pull-right">
        <?php print render($content['field_image']); ?>
      </div>
      <div class="media-body">
        <h1><?php print $title; ?></h1>
        <?php print render($content['body']); ?>
      </div>
    </div>
  </article>
</div>
