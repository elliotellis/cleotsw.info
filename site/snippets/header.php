<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?= $site->title()->html() ?></title>
    <style>
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 400;
      src: url('/assets/fonts/ebgaramond-reg.woff2') format('woff2');
    }

    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 400;
      src: url('/assets/fonts/ebgaramond-ita.woff2') format('woff2');
    }

    *, *::before, *::after {
      box-sizing: border-box;
    }

    :root {
      --colour-white: #fff;
      --colour-black: #000;

      --typeface-main: 'EB Garamond', serif;
      --typeface-texts: 'Courier New', monospace;
      --font-stroke: .5px;
      --fontweight-reg: 400;
      --fontweight-bold: 700;
      --leading-base: 1.5em;

      --typesize-body: 1.5rem;
      --leading-body: 2.25rem;

      --margin-base: calc( (3vw + 3vh) / 2 );
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
      margin: 0;
      list-style-type: none;
    }

    .grid {
      display: grid;
  		grid-template-columns: repeat(12, [col-start] 1fr);
      grid-template-rows: 1fr auto;
    }

		.grid > * {
			grid-column: col-start / span 12;
		}

    .header {
      padding: var(--margin-base);
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .main-navigation > * {
      margin-bottom: calc(0.5 * var(--margin-base));
    }

    .site-name {
      margin-top: -0.15em;
      font-size: inherit;
      font-weight: inherit;
    }

    .site-name span {
      font-variant-caps: all-small-caps;
      -moz-font-feature-settings: "smcp";
      -webkit-font-feature-settings: "smcp";
      font-feature-settings: "smcp";
    }

    .projects-navigation li::before {
      content: '\2012\2012\2012\a0\a0\a0';
      letter-spacing: -0.05em;
      opacity: 0;
    }

    .projects-navigation li:hover::before,
    .projects-navigation li.current::before {
      opacity: 1;
    }

    </style>
	</head>
	<body>

    <div class="grid">

    <header class="header">
      <nav class="main-navigation">
        <h1 class="site-name">
          <a href="<?= $site->url() ?>">
            <?= $site->title()->html() ?>
            <!-- cleo <span>TSW</span> -->
          </a>
        </h1>
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