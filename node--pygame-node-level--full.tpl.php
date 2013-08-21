<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['pygame_leveldisplay']);
    hide($content['pygame_codeform']);
    hide($content['pygame_node_level_code_generate']);
    hide($content['pygame_node_level_code_run']);
	
	print(render($content));
	
	?>
<div class="csstable levelpaneltable"><div class="csstr" ><div class="csstd levelpanel" style="width: 50%"><?php
print(render($content['pygame_leveldisplay']));
?></div><div class="csstd levelpanel"><?php
print(render($content['pygame_codeform']));
?></div></div></div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
