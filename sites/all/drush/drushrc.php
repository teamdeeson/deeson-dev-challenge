<?php

/**
 * @file
 * Drush configuration file
 */

ini_set('memory_limit', '1024M');

$command_specific['dl'] = array('destination' => 'sites/all/modules/contrib');
$command_specific['fe'] = array('destination' => 'sites/all/modules/custom');

