<?php snippet('nav') ?>
<div class="">
  <?php foreach($page->children()->listed() as $post) : ?>
    <h1><?= $post->title() ?></h1>
  <?php endforeach ?>
</div>
<?php snippet('footer') ?>