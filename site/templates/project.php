<?php

$kirby->response()->json();

/*[
    'name' => $work->title()->value(),
    'image' => $work->image(),
  ];*/

$works = [];
foreach($page->works() as $key => $work) {
  $works[$key] = $work; // structure field format stores as yaml... any way to convert to json? or is there a different field type in kirby... array of objects? is that possible???
}


$data = [
  'title' => $page->title()->value(),
  'slug' => $page->slug(),
  'date' => $page->date()->value(),
  'categories' => $page->categories()->value(),
  'works' => $page->works()->value(),
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