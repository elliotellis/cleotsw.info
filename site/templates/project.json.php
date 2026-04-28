<?php

$kirby->response()->json();


$data = [
  'title' => $page->headline()->value()->or($page->title()->value()),
  'tags' => $page->tags()->value(),
];

echo json_encode($data);