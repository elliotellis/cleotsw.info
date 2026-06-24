<?php

return function ($websites) {
  return page('projects')
    ->children()
    ->listed()
    ->filterBy('categories', 'web', ',');
};