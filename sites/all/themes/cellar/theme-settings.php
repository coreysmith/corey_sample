<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function cellar_form_system_theme_settings_alter(&$form, &$form_state)  {

  // Create the form using Forms API: http://api.drupal.org/api/7

  $form['cellarsidebars'] = array(
    '#type'           => 'fieldset',
    '#title'          => t('Sidebar Widths'),
    '#weight'         => 1,
    '#description'    => t('Setup your sidebars here.'),
  );
  $form['cellarsidebars']['firstsidebar'] = array(
    '#type'          => 'radios',
    '#title'         => t('First Sidebar Width'),
    '#default_value' => theme_get_setting('firstsidebar'),
    '#options'       => array(
                          t('None'),
                          t('One Column'),
                          t('Two Columns'),
                          t('Three Columns'),
                          t('Four Columns'),
                          t('Five Columns'),
                          t('Six Columns'),
                          t('Seven Columns'),
                          t('Eight Columns'),
                          ),
    '#description'   => t('This sets the width of the First Sidebar.'),
  );
  $form['cellarsidebars']['secondsidebar'] = array(
    '#type'          => 'radios',
    '#title'         => t('Second Sidebar Width'),
    '#default_value' => theme_get_setting('secondsidebar'),
    '#options'       => array(
                          t('None'),
                          t('One Column'),
                          t('Two Columns'),
                          t('Three Columns'),
                          t('Four Columns'),
                          t('Five Columns'),
                          t('Six Columns'),
                          t('Seven Columns'),
                          t('Eight Columns'),
                          ),
    '#description'   => t('This sets the width of the Second Sidebar.'),
  );
  $form['cellarbreadcrumbs'] = array(
    '#type'           => 'fieldset',
    '#title'          => t('Breadcrumbs'),
    '#weight'         => 2,
    '#description'    => t('Set your breadcrumbs to show or not show.'),
  );
  $form['cellarbreadcrumbs']['cellarbreadcrumbs'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Enable Breadcrumbs'),
    '#default_value' => theme_get_setting('cellarbreadcrumbs'),
    '#description'   => t('Checking this will enable breadcrumbs.'),
  );
  
  // */


  // We are editing the $form in place, so we don't need to return anything.
}
