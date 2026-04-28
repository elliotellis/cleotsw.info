<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="text-scale" content="scale" />
		<title><?= $site->title()->html() ?></title>
	</head>
	<body>

    <header class="header">
      <h1 class="site-name">
        <a href="<?= $site->url() ?>">
          <?= $site->title()->html() ?>
        </a>
      </h1>
    </header>
		
    <h1><?= $page->title() ?></h1>

	</body>
</html>