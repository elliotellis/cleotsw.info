<?php

$kirby->response()->json();

foreach ($page->children()->listed() as $project) {
  $projects[] = [
    'url'   => (string)$project->url(),
    'title' => (string)$project->title(),
    'slug'  => (string)$project->slug(),
  ];
}

$data = [
  'title' => $page->title()->value(),
];

echo json_encode($data + $projects);

/*

  <ul class="projects"<?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
    <?php foreach ($page->children()->listed() as $project): ?>
    <li>
      <a href="<?= $project->url() ?>">
        <figure>
          <?= $project->images()->findBy("template", "cover") ?>
          <figcaption><?= $project->title() ?> <small><?= $project->year() ?></small></figcaption>
        </figure>
      </a>
    </li>
    <?php endforeach ?>
  </ul>*/