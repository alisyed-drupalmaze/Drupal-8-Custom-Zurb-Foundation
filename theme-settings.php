<?php

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */

function DrupalMaze_sub_form_system_theme_settings_alter(&$form, &$form_state) {
      // ------ Main settings wrapper ------
      $form['advanced'] = array(
        '#type' => 'vertical_tabs',
        '#title' => t('Theme Custom Settings'),
        '#description'  => t('These are custom options of DrupalMaze Sub theme.'),
      );

      // ------ Header ------
      $form['base'] = array(
        '#type' => 'details',
        '#title' => t('Custom Header Settings'),
        '#group' => 'advanced',
      );
      $form['base']['dm_sub_header'] = array(
        '#type'         => 'checkbox',
        '#title'        => t('Header messages'),
        '#default_value' => theme_get_setting('dm_sub_header'),
        '#description'  => t('This will print out Header messages from dm_sub_header.html.twig.'),
        '#open' => FALSE,
      );

      // ------ Sticky Footer ------
      $form['sticky_footer'] = array(
        '#type' => 'details',
        '#title' => t('Custom Sub footer Settings'),
        '#group' => 'advanced',
      );
      $form['sticky_footer']['dm_sub_sticky_footer'] = array(
        '#type'         => 'checkbox',
        '#title'        => t('Custom footer'),
        '#default_value' => theme_get_setting('dm_sub_sticky_footer'),
        '#description'  => t('This will print out footer messages from dm_sub_sticky_footer.html.twig.'),
        '#open' => FALSE,
      );

      // ------ Custom footer Settings ------
      $form['footer_info'] = array(
        '#type' => 'details',
        '#title' => t('Custom footer Settings'),
        '#group' => 'advanced',
      );

      $form['footer_info']['dm_sub_footer_1'] = array(
        '#type' => 'textarea',
        '#title' => 'Page With Footer Style 1',
        '#default_value' => theme_get_setting('dm_sub_footer_1'),
      );

      $form['footer_info']['dm_sub_footer_2'] = array(
        '#type' => 'textarea',
        '#title' => 'Page With Footer Style 2',
        '#default_value' => theme_get_setting('dm_sub_footer_2'),
      );

      $form['footer_info']['dm_sub_footer_3'] = array(
        '#type' => 'textarea',
        '#title' => 'Page With Footer Style 3',
        '#default_value' => theme_get_setting('dm_sub_footer_3'),
      );

    }