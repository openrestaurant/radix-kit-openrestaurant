<?php
/**
 * @file
 * Theme and preprocess functions for nodes.
 */

/**
 * Implements template_preprocess_node().
 */
function RADIX_SUBTHEME_MACHINE_NAME_preprocess_node(&$variables) {
  $node = $variables['node'];

  // Allow bundle type preprocess callbacks.
  $function = __FUNCTION__ . '__' . $node->bundle();
  if (function_exists($function)) {
    $function($variables);
  }
}
