<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="text-scale" content="scale" />
		<title><?= $site->title()->html() ?></title>
    <?php css(['assets/css/core.css']) ?>
	</head>
	<body>

    <header class="header">
      <h1 class="site-name">
        <a href="<?= $site->url() ?>">
          <?= $site->title()->html() ?>
        </a>
      </h1>
      <nav class="main-navigation">
        <ul class="projects-navigation">
          <li><a href="<?= $site->url() ?>projects/identities">Identities</a></li>
          <li><a href="<?= $site->url() ?>projects/publications">Publications</a></li>
          <li><a href="<?= $site->url() ?>projects/websites">Websites</a></li>
          <li><a href="<?= $site->url() ?>projects/ephemera">Ephemera</a></li>
        </ul>
        <ul class="pages-navigation">
          <li><a href="<?= $site->url() ?>texts">Texts</a></li>
          <li><a href="<?= $site->url() ?>about">About</a></li>
          <li><a href="https://o-c.info">O-C</a></li>
          <!--
          <?php foreach ($pages as $page): ?>
            <li><a href="<?php $page->url() ?>"><?php $page->title()->html() ?></a></li>
          <?php endforeach; ?>
          -->
        </ul>
      </nav>
      <nav class="footer-navigation">
        <ul>
          <li><a href="mailto:">Email</a></li>
        </ul>
      </nav>
    </header>