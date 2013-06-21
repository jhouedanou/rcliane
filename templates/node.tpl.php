<?php

?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
     <h2<?php print $title_attributes; ?>><a rel="dofollow" class="liane-titre" href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
    <!--date de soumission et auteurs-->
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>
  <!--contenu de l article-->
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
<?php
if($teaser){
      print l(t('En savoir plus'), '../' . $node_url, array('attributes' => array('class' => t('btn btn-success'))));
  }
?>
  <?php //print render($content['links']); ?>

  <?php //print render($content['comments']); ?>

</div>
