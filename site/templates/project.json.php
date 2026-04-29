<?php

$kirby->response()->json();

$works = [];
foreach($page->works()->toStructure() as $key => $work) {
  $works[$key] = [
    'name' => $work->title()->value(),
    'image' => $work->image()->url(), // this not giving url for some reason...
    'categories' => $work->categories()->value(), // currently just giving strings, will be a helper function somewhere
  ]; 
}


$data = [
  'title' => $page->title()->value(),
  'slug' => $page->slug(),
  'date' => $page->date()->value(),
  'categories' => $page->categories()->value(), // currently just giving strings, will be a helper function somewhere
  'works' => $works,
];

echo json_encode($data);

/*
    <header>
      <?php if ($cover = $page->images()->findBy("template", "cover")): ?>
      <figure class="project-cover">
        <?= $cover ?>
        <figcaption>
          <div>
            <h1><?= $page->headline()->or($page->title()) ?></h1>
            <?php if ($page->intro()->isNotEmpty()): ?>
            <div class="text">
              <?= $page->intro()->kt() ?>
            </div>
            <?php endif ?>
          </div>
        </figcaption>
      </figure>
      <?php endif ?>
    </header>

    <div class="project-text text">
      <time class="project-year"><?= $page->year() ?></time>
      <?= $page->text()->kt() ?>

      <?php if ($page->tags()->isNotEmpty()): ?>
      <p class="project-tags"># <?= $page->tags() ?></p>
      <?php endif ?>
    </div>

    <ul class="project-gallery"<?= attr(['data-even' => $gallery->isEven(), 'data-count' => $gallery->count()], ' ') ?>>
      <?php foreach ($gallery as $image): ?>
      <li>
        <figure>
          <?= $image->crop(800, 1000) ?>
        </figure>
      </li>
      <?php endforeach ?>
    </ul>
    */