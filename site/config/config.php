<?php

return [
  'debug' => true,
  'thumbs' => [
    'srcsets' => [
      'default' => [
        '480w' => ['width' => 480],
        '720w' => ['width' => 720],
        '1280w' => ['width' => 1280],
        '1920w' => ['width' => 1920],
      ],
      /* AVIF not seeming to work on Uberspace server so disabling for now
      'avif' => [
        '480w' => ['width' => 480, 'quality' => 70, 'format' => 'avif'],
        '720w' => ['width' => 720, 'quality' => 70, 'format' => 'avif'],
        '1280w' => ['width' => 1280, 'quality' => 70, 'format' => 'avif'],
        '1920w' => ['width' => 1920, 'quality' => 70, 'format' => 'avif'],
      ],*/
      'webp' => [
        '480w' => ['width' => 480, 'quality' => 90, 'format' => 'webp'],
        '720w' => ['width' => 720, 'quality' => 90, 'format' => 'webp'],
        '1280w' => ['width' => 1280, 'quality' => 90, 'format' => 'webp'],
        '1920w' => ['width' => 1920, 'quality' => 90, 'format' => 'webp'],
      ],
    ]
  ]
];