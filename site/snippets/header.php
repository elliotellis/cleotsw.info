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
      --colour-grey: #aaa;

      --typeface-main: 'EB Garamond', serif;
      --typeface-texts: 'Courier New', monospace;
      --font-stroke: .5px;
      --fontweight-reg: 400;
      --fontweight-bold: 700;
      --leading-base: 1.5em;

      --typesize-body: 1.125rem;
      --typesize-nav: 1.5rem;

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

    ::selection {
      color: red;
      background-color: var(--colour-grey);
    }

    em { font-style: italic; }
    strong { font-weight: var(--fontweight-bold); }
    .bold { font-weight: var(--fontweight-bold); }

    a { 
      color: inherit; 
      text-decoration: none;
      font-variant-caps: all-small-caps;
      -moz-font-feature-settings: "smcp";
      -webkit-font-feature-settings: "smcp";
      font-feature-settings: "smcp";
      letter-spacing: 0.05em;
    }

    a:hover {
      text-decoration: underline;
      text-decoration-thickness: 0.09em;
      text-underline-offset: 0.2em;
    }

    p { margin: 0; }

    p:not(:first-child) {
      margin: 1rem 0 0;
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

    .header, .main {
      display: flex;
      flex-direction: column;
      padding: var(--margin-base);
      overflow-x: hidden;
    }

    @media only screen and (42rem < width) {
      .header { 
        grid-column: col-start / span 4; 
        position: sticky;
        top: 0;
        min-height: 100vh;
        max-height: 100vh;
        overflow-y: scroll;
      }
      .main { grid-column: 5 / span 8; }
    }

    .header {
      /*
      position: sticky;
      top: 0;
      max-height: 100vh;
      overflow-y: scroll;*/
      justify-content: space-between;
    }

    .main-navigation {
      font-size: var(--typesize-nav);
      margin-bottom: 2rem;
    }

    .main-navigation > * {
      margin-bottom: calc(0.5 * var(--margin-base));
    }

    .site-name {
      margin-top: -0.15em;
      font-size: inherit;
      font-weight: inherit;
    }

    .site-name a, 
    .projects-navigation a, 
    .pages-navigation a,
    .about-page a {
      font-variant-caps: normal;
      -moz-font-feature-settings: normal;
      -webkit-font-feature-settings: normal;
      font-feature-settings: normal;
      letter-spacing: 0;
    }

    .site-name a:hover, 
    .projects-navigation a:hover, 
    .pages-navigation a:hover {
      text-decoration: none;
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

    .site-name::after { content: '\a0\2012\2012\2012'; }
    .pages-navigation li::after { content: '\a0\a0\a0\2012\2012\2012'; }

    .site-name::after, .pages-navigation li::after {
      letter-spacing: -0.05em;
      opacity: 0;
    }

    .site-name:hover::after, .pages-navigation li:hover::after,
    .site-name.current::after, .pages-navigation li.current::after {
      opacity: 1;
    }

    .footer-navigation ul {
      list-style-type: none;
      display: flex;
      flex-direction: row;
    }

    .footer-navigation li:not(:last-child) {
      margin-right: 0.25em;
    }

    .footer-navigation li:not(:last-child)::after {
      content: ",";
    }

    figure {
      margin: 0;
    }

    figure img {
      display: block;
      width: 100%;
      margin: 0 auto;
    }

    .project-image {
      margin-bottom: var(--margin-base);
    }

    @media only screen and (42rem < width) {
      .piw-full img { width: 100%; }
      .piw-threeq img { width: 75%; }
      .piw-half img { width: 50%; }
    }

    .page {
      display: flex;
      flex-direction: column;
    }

    .page .text-container {
      padding-top: 4rem;
      font-family: serif;
      text-align: justify;
      letter-spacing: 0.05em;
      line-height: 1.75;
    }

    @media only screen and (42rem < width) {
      .page .text-container {
        padding-top: 0;
      }
    }

    .page p {
      margin: 1em auto 0;
      max-width: 40em;
      font-size: 0.9rem;
    }

    .page a {
      color: red;
      letter-spacing: inherit;
    }

    </style>
	</head>
	<body>
    <?php $pageSlug = $page->slug(); ?>

    <div class="grid">

    <header class="header">
      <nav class="main-navigation">
        <h1 class="site-name <?php if ($pageSlug === 'home') echo 'current'; ?>">
          <a href="<?= $site->url() ?>">
            <?= $site->title()->html() ?>
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
          <li class="<?php if ($pageSlug === 'about') echo 'current'; ?>"><a href="<?= $site->url() ?>/about">About</a></li>
        </ul>
      </nav>
      <nav class="footer-navigation">
        <ul>
          <li><a href="https://o-c.info" target="_blank">Off Course</a></li>
          <li><a href="mailto:">Email</a></li>
        </ul>
      </nav>
    </header>