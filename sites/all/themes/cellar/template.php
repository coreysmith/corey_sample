<?php

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */

function cellar_preprocess_page(&$variables, $hook) {
  
  // Setup breadcrumbs
  
  $variables['cellarbreadcrumbs'] = theme_get_setting('cellarbreadcrumbs');
  
  // Setup sidebar widths on site
  
  $firstsidebar = theme_get_setting('firstsidebar');

  $firstclasses = 'testing ';
  
  switch ($firstsidebar) {
    case 0:
      $firstclasses .= '';
      break;
    case 1:
      $firstclasses .= 'one column';
      break;
    case 2:
      $firstclasses .= 'two columns';
      break;
    case 3:
      $firstclasses .= 'three columns';
      break;
    case 4:
      $firstclasses .= 'four columns';
      break;
    case 5:
      $firstclasses .= 'five columns';
      break;
    case 6:
      $firstclasses .= 'six columns';
      break;
    case 7:
      $firstclasses .= 'seven columns';
      break;
    case 8:
      $firstclasses .= 'eight columns';
      break;
  }
  


  $variables['firstclasses'] = $firstclasses;

  $secondsidebar = theme_get_setting('secondsidebar');

  $secondclasses = 'testing ';
  
  switch ($secondsidebar) {
    case 0:
      $secondclasses .= '';
      break;
    case 1:
      $secondclasses .= 'one column';
      break;
    case 2:
      $secondclasses .= 'two columns';
      break;
    case 3:
      $secondclasses .= 'three columns';
      break;
    case 4:
      $secondclasses .= 'four columns';
      break;
    case 5:
      $secondclasses .= 'five columns';
      break;
    case 6:
      $secondclasses .= 'six columns';
      break;
    case 7:
      $secondclasses .= 'seven columns';
      break;
    case 8:
      $secondclasses .= 'eight columns';
      break;
  }

  $variables['secondclasses'] = $secondclasses;

  $contentclass = '';

  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_last'])) {
    $sidebarwidths = $firstsidebar + $secondsidebar;
  } elseif (empty($variables['page']['sidebar_first']) && empty($variables['page']['sidebar_last'])) {
    $contentclass .= 'alpha omega ';
    $sidebarwidths = 0;
  } elseif (empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_last'])) {
    $contentclass .= 'alpha ';
    $sidebarwidths = $secondsidebar;
  } elseif (!empty($variables['page']['sidebar_first']) && empty($variables['page']['sidebar_last'])) {
    $contentclass .= 'omega ';
    $sidebarwidths = $firstsidebar;
  }

  switch ($sidebarwidths) {
    case 0:
      $contentclass .= 'sixteen columns';
      break;
    case 1:
      $contentclass .= 'fifteen columns';
      break;
    case 2:
      $contentclass .= 'fourteen columns';
      break;
    case 3:
      $contentclass .= 'thirteen columns';
      break;
    case 4:
      $contentclass .= 'twelve columns';
      break;
    case 5:
      $contentclass .= 'eleven columns';
      break;
    case 6:
      $contentclass .= 'ten columns';
      break;
    case 7:
      $contentclass .= 'nine columns';
      break;
    case 8:
      $contentclass .= 'eight columns';
      break;
    case 9:
      $contentclass .= 'seven columns';
      break;
    case 10:
      $contentclass .= 'six columns';
      break;
    case 11:
      $contentclass .= 'five columns';
      break;
    case 12:
      $contentclass .= 'four columns';
      break;
    case 13:
      $contentclass .= 'three columns';
      break;
    case 14:
      $contentclass .= 'two columns';
      break;
    case 15:
      $contentclass .= 'one column';
      break;
    case 15:
      $contentclass .= 'sixteen columns';
      break;
  }

  $variables['contentclass'] = $contentclass;

  // dpr($variables);

  $login_link = '';

  if (!$variables['logged_in']) { 
    $login_link = ' | <a href="/user">Login</a>.';
  }

  $variables['login_link'] = $login_link;
 }


 function cellar_breadcrumb($variables) {
   $breadcrumb = $variables['breadcrumb'];
   $breadcrumb[] = drupal_get_title();
   if (!empty($breadcrumb)) {
     // Provide a navigational heading to give context for breadcrumb links to
     // screen-reader users. Make the heading invisible with .element-invisible.
     $output = '<div class="breadcrumb-title">' . t('Location:') . '</div>';
     $crumbs = '<ul class="breadcrumbs clearfix">';
     $array_size = count($breadcrumb);
     $i = 0;
     while ( $i < $array_size) {
       $crumbs .= '<li class="breadcrumb-' . $i;
       if ($i == 0) {
         $crumbs .= ' first';
       }
       if ($i+1 == $array_size) {
         $crumbs .= ' last';
       }
       $crumbs .=  '">' . $breadcrumb[$i] . '</li>';
       $i++;
     }
     $crumbs .= '</ul>';
     return $output . $crumbs;
   }
 }
 
 function THEMENAME_preprocess_html(&$variables){
 // This function looks for node 1 and only adds the javascript for this.
 // However it can be extended in different ways if required
     if ($variables['node']['nid'] = 1){
         drupal_add_js('misc/form.js');
         drupal_add_js('misc/collapse.js');
     }
 }