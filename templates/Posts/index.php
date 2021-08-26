<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[] $posts
 */
?>

<div class="content">
  <?php foreach ($posts as $post) : ?>
    <h3><?= $this->Text->autoParagraph(h($post->title)) ?></h3>
    <p><?= $this->Text->autoParagraph(h($post->created)) ?></p>
    <p><?= $this->Text->autoParagraph(h($post->description)) ?></p>
    <hr>
  <?php endforeach; ?>
</div>