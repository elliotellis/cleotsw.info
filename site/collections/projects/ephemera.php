<?php

return function ($ephemera) {
  return page('projects')
    ->children()
    ->listed()
    ->filterBy('categories', 'ephemera', ',');
};