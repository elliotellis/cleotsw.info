<?php snippet('header'); ?>

<main class="main texts">
  <?php foreach ($page->children()->listed() as $text): ?>
    <div class="text">
      <div class="text-container">
        <h3><?= $text->title()->html(); ?> (<?= $text->date()->toDate('Y'); ?>)</h3>
        <?= $text->text()->kt(); ?>
      </div>
    </div>
  <?php endforeach; ?>
</main>

<?php snippet('footer'); ?>