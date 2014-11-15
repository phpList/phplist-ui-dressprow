<?php

function print_styles($styles_path, $minified = false) {
  $output = ''; 
  if(!$minified) {
    foreach($styles_path['css'] as $style) {
      $output .= "<link rel='stylesheet' href='$style' />\n";
    }
  } else {
    foreach($styles_path['min'] as $style) {
	  $output_style =  $style . '?v='. filemtime($style);
      $output .= "<link rel='stylesheet' href='$output_style' />\n";
    }  
  }

  return $output;
}

function print_scripts($scripts_path, $minified = false) {
  $output = '';
  if(!$minified) {
    foreach($scripts_path['js'] as $script) {
      $output .= "<script language='Javascript' type='text/javascript' src='$script'></script>\n";
    }
  } else {
    foreach($scripts_path['min'] as $script) {
	  $output_script =  $script . '?v='. filemtime($script);
      $output .= "<script language='Javascript' type='text/javascript' src='$output_script'></script>\n";
    }  
  }

  return $output;
}

$styles_path = array(
  'css' => array(
    // Initial styles from basic application
    'css/reset.css',
    'css/jquery-ui-1.8.1.all.css',
    'css/app.css',
    'css/menu.css',
	// Now override the above with the styles from the UI theme
    'ui/dressprow/css/base.css',
	'ui/dressprow/css/layout.css',
	'ui/dressprow/css/skeleton.css',
	'ui/dressprow/css/style.css',
	'ui/dressprow/css/gray.css',
  ),
  'min' => array( //ui/dressprow/css/all.min.css?v=<?php echo filemtime(dirname(__FILE__).'/css/all.min.css');
    'ui/dressprow/css/all.min.css',
  ),
);

$scripts_path = array(
  'js' => array(
    // Initial scripts from basic application
    'js/jquery-1.7.1.min.js',
    'js/jquery-ui-1.8.1.all.min.js',
    'js/jquery.tools.scrollable.js',
    'js/phplistapp.js',
	// Now override the above with the scripts from the UI theme
    'ui/dressprow/js/jquery.tablednd.js',
    'ui/dressprow/js/phplist.js',
    'ui/dressprow/js/jcarousellite_1.0.1.min.js',

  ),
  'min' => array(
    'ui/dressprow/js/all.min.js',
  ),
);

$styles = print_styles($styles_path, USE_MINIFIED_ASSETS);
$scripts = print_scripts($scripts_path);
