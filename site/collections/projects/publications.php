<?php

return function ($publications) {
  return page('projects')
    ->children()
    ->listed()
    ->filterBy('categories', 'publications', ',');
};