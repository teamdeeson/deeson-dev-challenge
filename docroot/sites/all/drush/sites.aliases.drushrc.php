<?php

/**
 * @file
 * Aliases for different environments.
 *
 * In order for the @stage and @prod aliases to work you will need to add the following in to your ~/.ssh/config:
 *
 * Host cw-prod-web1
 *   User <username>
 *
 * Host cw-test-web1
 *   User <username>
 *
 * Note: <username> will need to be the username you have been given to the Wilmington Stage and Production VM clusters
 * Note: It may be necessary to add a line similar to the following to each SSH alias if you are using an SSH key other than the default:
 *
 * IdentityFile ~/.ssh/cw_rsa
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
