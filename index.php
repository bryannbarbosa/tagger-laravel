<?php
require_once 'src/Tagger.php';

/* Initialize App */

$app = new Tagger();
/* Remove first parameter of ARGV array */

$file = $app->clear($argv);
/* Get content of file */

$content = $app->read($file);
/* Separe all route code as array */

$snippets = $app->tag('Route', ';', $content);
/* Initialize empty array */

$routes = [];

for($i = 0; $i < count($snippets); $i++) {
  /* Get all route Code and push then to specific array index */

  $routes[$i] = $app->tagString($snippets[$i], false);
}

for($i = 0; $i < count($routes); $i++) {
  /* Get Routes name in Route Code and replace by them */
  $routes[$i] = $routes[$i][0];
}

foreach($routes as $route) {
  /* Show all routes in file */
  echo $route . "\n";
}
