<style>

/* ============================= *
 * FONT IMPORTS
 * ============================= */

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


/* ============================= *
 * ROOT, BODY, AND BASE STYLES
 * ============================= */

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
  --leading-base: 1.3;
  --tracking-base: 0.02em;
  --tracking-nav: 0.01em;
  --tracking-smcp: 0.05em;
  --tracking-texts: 0.05em;
  

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
  line-height: var(--leading-base);
  letter-spacing: var(--tracking-base);
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
  letter-spacing: var(--tracking-smcp);
}

a:hover {
  text-decoration: underline;
  text-decoration-thickness: 0.09em;
  text-underline-offset: 0.2em;
}

p { margin: 0; }

p:not(:first-child) { margin: 1rem 0 0; }

h1 { margin: 0; }

ul {
  padding: 0;
  margin: 0;
  list-style-type: none;
}

/* Hack for rules in the editor */
p:has(code) {
  width: 100%;
  border-top: 1px solid var(--text-colour);
  height: 0;
}

p > code { display: none; }

.allcaps { letter-spacing: calc(var(--tracking-base) + 0.01em); }


/* ============================= *
 * SITE GRID SYSTEM
 * ============================= */

.grid {
  display: grid;
  grid-template-columns: repeat(12, [col-start] 1fr);
  grid-template-rows: 1fr auto;
}

.grid > * {	grid-column: col-start / span 12;	}


/* ============================= *
 * HEADER/NAVIGATION
 * ============================= */

.header, .main {
  display: flex;
  flex-direction: column;
  padding: var(--margin-base);
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: none;
  scrollbar-width: none;
}

@media only screen and (42rem < width) {
  .header { 
    grid-column: col-start / span 5; 
    position: sticky;
    top: 0;
    min-height: 100vh;
    max-height: 100vh;
    overflow-y: scroll;
  }
  .main { grid-column: 6 / span 7; }
}

.header {
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

.site-name .allcaps { letter-spacing: calc(var(--tracking-nav) + 0.01em); }

.site-name a, 
.projects-navigation a, 
.pages-navigation a {
  font-variant-caps: normal;
  -moz-font-feature-settings: normal;
  -webkit-font-feature-settings: normal;
  font-feature-settings: normal;
  letter-spacing: var(--tracking-nav);
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

/* ============================= *
 * PROJECT IMAGES/STREAM
 * ============================= */

figure { margin: 0; }

figure img {
  display: block;
  width: 100%;
  height: auto;
  margin: 0 auto;
}

figcaption { padding-top: 0.5rem; }

.project-image { margin-bottom: var(--margin-base); }

@media only screen and (42rem < width) {
  .piw-full img { width: 100%; }
  .piw-threeq img { width: 75%; }
  .piw-half img { width: 50%; }
}

/* ============================= *
 * PAGE - About page etc. styles
 * ============================= */

.page {
  display: flex;
  flex-direction: column;
  padding-top: 4rem;
}

.page .text-container > * {
  max-width: 40rem;
}

.page .text-container > *:first-of-type {
  margin-top: 0;
}

@media only screen and (42rem < width) {
  .page {
    padding-top: var(--margin-base);
  }
}

/* ============================= *
 * TEXTS - section-specific styles
 * to refactor into separate snippet
 * ============================= */

.texts .text-container {
  font-family: serif;
  text-align: justify;
  letter-spacing: var(--tracking-texts);
  line-height: 1.75;
}

.texts p {
  margin: 1em auto 0;
  max-width: 40em;
  font-size: 0.9rem;
}

.texts a {
  color: red;
  letter-spacing: inherit;
}

.text:not(:first-of-type) {
  border-top: 2px solid var(--text-colour);
  margin-top: 2rem;
}

.text:first-of-type h3 {
  margin-top: 0;
}

</style>