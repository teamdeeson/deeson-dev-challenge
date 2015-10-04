<?php
/**
 * @file
 * ddc_system.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function ddc_system_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
