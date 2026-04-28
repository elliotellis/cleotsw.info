<?php

$kirby->response()->json();

$data = [
  'siteTitle' => $site->title()->value(),
  'title' => $page->title()->value(),
];

echo json_encode($data);