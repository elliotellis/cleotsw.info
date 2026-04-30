<?php

return function ($identities) {
  return page('projects')
    ->children()
    ->listed()
    ->filterBy('categories', 'identities', ',');
};