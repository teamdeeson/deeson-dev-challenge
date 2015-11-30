<?php

/**
 * @file
 * Aliases for different environments.
 */

$site = 'drupal_publishing';

/* Dev Desktop */
$aliases['local'] = array(
  'parent' => '@parent',
  'site' => 'deeson-dev-challenge',
  'env' => 'vdd',
  'scope' => 'local',
  'uri' => 'deeson-dev-challenge.dd',
);

$envs = array(
  'dev',
);

foreach ($envs as $env) {
  if (!file_exists($aliases[$env]['root'])) {
    $aliases[$env]['parent'] = '@parent,@remote';
  }
  else {
    unset($aliases[$env]['remote-host']);
  }
}
