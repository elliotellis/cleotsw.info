<?php snippet('header'); ?>

<?php if ($page->slug() === "responsivetest"): ?>
  <?php snippet('projects/responsivetest'); ?>
<?php else: ?>

<main class="main page">
  <div class="text-container">
    <?= $page->text()->kt() ?>
  </div>
</main>

<?php endif; ?>

<?php snippet('footer'); ?>