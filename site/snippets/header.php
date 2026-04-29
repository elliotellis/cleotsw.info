<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="text-scale" content="scale" />
		<title><?= $site->title()->html() ?></title>
    <style>
    @font-face {
      
    }

    *, *::before, *::after {
      box-sizing: border-box;
    }

    :root {
      --colour-white: #fff;
      --colour-black: #000;

      --typeface-main: 'EB Garamond', serif;
      --typeface-texts: 'Courier New', monospace;
      --font-stroke: .2px;
      --fontweight-reg: 400;
      --fontweight-bold: 700;
      --leading-base: 1.5em;

      --typesize-body: 1.5rem;
      --leading-body: 2.25rem;

      --margin-base: 2rem;
    }

    body {
      --background: var(--colour-white);
      --text-colour: var(--colour-black);
      font-family: var(--typeface-main);
      font-size: var(--typesize-body);
      -webkit-text-stroke: var(--font-stroke);
      line-height: var(--leading-main);
      text-rendering: optimizeLegibility;
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      background: var(--background);
      color: var(--text-colour);
      min-width: 320px;
      min-height: 100vh;
      margin: 0;
      display: grid;
      grid-template-rows: 1fr auto;
      position: relative;
    }

    em { font-style: italic; }
    strong { font-weight: var(--fontweight-bold); }
    .bold { font-weight: var(--fontweight-bold); }

    a { 
      color: inherit; 
      text-decoration: none;
    }

    h1 {
      margin: 0;
    }

    ul {
      padding: 0;
      list-style-type: none;
    }

    .header {
      padding: 2rem;
    }

    .site-name {
      font-size: inherit;
      font-weight: inherit;
    }
    </style>
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
          <li><a href="<?= $site->url() ?>/projects/identities">Identities</a></li>
          <li><a href="<?= $site->url() ?>/projects/publications">Publications</a></li>
          <li><a href="<?= $site->url() ?>/projects/websites">Websites</a></li>
          <li><a href="<?= $site->url() ?>/projects/ephemera">Ephemera</a></li>
        </ul>
        <ul class="pages-navigation">
          <li><a href="<?= $site->url() ?>/texts">Texts</a></li>
          <li><a href="<?= $site->url() ?>/about">About</a></li>
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