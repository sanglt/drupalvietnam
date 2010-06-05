<?php

function drupalvietnam_preprocess_html(&$variables) {
  // Thêm blueprint css dành cho IE
  drupal_add_css(path_to_theme() . '/css/blueprint/ie.css', array('weight' => CSS_THEME, 'browsers' => array('IE' => 'lt IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
}