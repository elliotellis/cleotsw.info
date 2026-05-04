<main class="main projects">
  <?php foreach ($kirby->collection('projects/all') as $project): ?>
    <div class="project">
      <?php if ($project->works()): ?>
        <?php foreach ($project->content()->works()->toStructure() as $work): ?>
          <figure class="project-image piw-<?= $work->width(); ?>">
            <?php if ($work->image()): ?>
              <picture>
                <?php /*  AVIF not seeming to work on Uberspace server so disabling for now
                <source
                  srcset="<?= $work->image()->toFile()->srcset('avif'); ?>"
                  type="image/avif"
                > */ ?>
                <source
                  srcset="<?= $work->image()->toFile()->srcset('webp'); ?>"
                  type="image/webp"
                >
                <img
                  alt="<?= $work->title()->value() ?>"
                  src="<?= $work->image()->toFile()->resize(480)->url() ?>"
                  srcset="<?= $work->image()->toFile()->srcset(); ?>"
                >
              </picture>
            <?php endif; ?>
            <?php if ($work->text()): ?>
              <figcaption><?php print($work->caption()->kt()); ?></figcaption>
            <?php endif; ?>
          </figure>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</main>