<?php

return function ($projects) {
  return page('projects')
    ->children()
    ->listed();
};