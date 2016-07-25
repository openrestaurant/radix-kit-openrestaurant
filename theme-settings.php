<?php

/**
 * @file
 * Settings for theme.
 */

use Drupal\file\Entity\File;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function RADIX_SUBTHEME_MACHINE_NAME_form_system_theme_settings_alter(&$form, FormStateInterface &$form_state, $form_id = NULL) {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  // Hide extra theme settings.
  $form['theme_settings']['#access'] = FALSE;

  // Add layout settings.
  $form['layout_settings'] = [
    '#type' => 'details',
    '#title' => t('Layout settings'),
    '#open' => TRUE,
  ];

  $form['layout_settings']['toggle_sizzle_layout_width'] = [
    '#title' => t('Width'),
    '#type' => 'radios',
    '#options' => [
      'boxed' => t('Boxed'),
      'full' => t('Full width'),
    ],
    '#default_value' => theme_get_setting('features.layout_width') ?? 'boxed',
  ];
}
