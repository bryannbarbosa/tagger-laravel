<?php
require_once 'src/Tagger.php';

$app = new Tagger();
$file = $app->clear($argv);
$content = $app->read($file);
$app->tag('Route', ';', $content);

foreach($app->routes[0] as $route) {
  echo $route;
}
//$test = $app->getRoutes("'", "'", $content, $routes);
