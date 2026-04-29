<?php

$kirby->response()->json();

$data = [
  'siteTitle' => $site->title()->value(),
  'title' => $page->title()->value(),
  'projects' => $pages->children()->listed(),
];

echo json_encode($data);