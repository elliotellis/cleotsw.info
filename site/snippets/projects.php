<main class="main projects <?php /* logic for specific projects pages id/pubs/web/ephem etc */ ?>">
  <?php foreach ($kirby->collection('projects') as $project): ?>
    <div class="project">
      <?php if ($project->works()): ?>
        <?php foreach ($project->content()->works()->toStructure() as $work): ?>
          <figure class="project-image piw-<?php $work->width(); ?>">
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