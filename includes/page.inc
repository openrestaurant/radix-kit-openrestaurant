<?php

/**
 * @file
 * Theme and preprocess functions for page.
 */

use Drupal\file\Entity\File;

/**
 * Implements template_preprocess_html().
 */
function RADIX_SUBTHEME_MACHINE_NAME_preprocess_html(&$variables) {
  // Add layout_width to template.
  $variables['layout']['width'] = theme_get_setting('features.layout_width') ?? 'boxed';
}
