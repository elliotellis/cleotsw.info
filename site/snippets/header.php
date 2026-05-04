<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>
      <?php if ($page->title()->html() != "Home"): ?>
        <?= $page->title()->html() ?> &ndash;
      <?php endif; ?>
      <?= $site->title()->html() ?>
    </title>
    <?php snippet('styles/base'); ?>
	</head>
	<body>
    <?php $pageSlug = $page->slug(); ?>

    <div class="grid">

    <header class="header">
      <nav class="main-navigation">
        <h1 class="site-name <?php if ($pageSlug === 'home') echo 'current'; ?>">
          <a href="<?= $site->url() ?>">
            <?= str_replace('TSW', '<span class="allcaps">TSW</span>', $site->title()->html()) ?>
          </a>
        </h1>
        <ul class="projects-navigation">
          <li class="<?php if ($pageSlug === 'identities') echo 'current'; ?>"><a href="<?= $site->url() ?>/identities">Identities</a></li>
          <li class="<?php if ($pageSlug === 'publications') echo 'current'; ?>"><a href="<?= $site->url() ?>/publications">Publications</a></li>
          <li class="<?php if ($pageSlug === 'websites') echo 'current'; ?>"><a href="<?= $site->url() ?>/websites">Websites</a></li>
          <li class="<?php if ($pageSlug === 'ephemera') echo 'current'; ?>"><a href="<?= $site->url() ?>/ephemera">Ephemera</a></li>
        </ul>
        <ul class="pages-navigation">
          <li class="<?php if ($pageSlug === 'texts') echo 'current'; ?>"><a href="<?= $site->url() ?>/texts">Texts</a></li>
          <li class="<?php if ($pageSlug === 'information') echo 'current'; ?>"><a href="<?= $site->url() ?>/information">Information</a></li>
        </ul>
      </nav>
      <nav class="footer-navigation">
        <ul>
          <?php foreach ($site->children()->listed()->filterBy('template', 'link') as $link): ?>
            test
            <?= $link->url() ?>
          <?php endforeach; ?>
          <li><a href="https://o-c.info" target="_blank">Off Course</a></li>
          <li><a href="mailto:cleotsw@gmail.com">Email</a></li>
        </ul>
      </nav>
    </header>