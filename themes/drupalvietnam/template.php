<?php

function drupalvietnam_preprocess_html(&$variables) {
  // Thêm blueprint css dành cho IE
  drupal_add_css(path_to_theme() . '/css/blueprint/ie.css', array('weight' => CSS_THEME, 'browsers' => array('IE' => 'lt IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
}


function drupalvietnam_preprocess_page(&$variables) {
  if (isset($variables['main_menu'])) {
    $variables['primary_nav'] = theme('links__system_main_menu', array(
      'links' => $variables['main_menu'],
      'attributes' => array(
        'class' => array('links', 'main-menu'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      )
    ));
  } else {
    $variables['primary_nav'] = FALSE;
  }
}