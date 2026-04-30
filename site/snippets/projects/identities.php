<main class="main projects">
  <?php foreach ($kirby->collection('projects/identities') as $project): ?>
    <div class="project">
      <?php if ($project->works()): ?>
        <?php foreach ($project->content()->works()->toStructure()->filterBy('categories', 'identities', ',') as $work): ?>
          <figure class="project-image piw-<?= $work->width(); ?>">
            <img src="<?php print($work->image()->toFile()->url()); ?>" alt="<?php print($work->title()); ?>">
            <?php if ($work->text()): ?>
              <figcaption><?php print($work->caption()->kt()); ?></figcaption>
            <?php endif; ?>
          </figure>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</main>