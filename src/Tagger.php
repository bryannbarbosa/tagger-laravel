<?php

class Tagger {
  public $routes;

  public function __construct()
  {
      $this->routes = [];
  }

  // public function between($before, $after, $pool)
  // {
  //   $space = strpos($pool, $before) + strlen($before);
  //   $string = substr($pool, $space, strlen($pool));
  //   $distance = strpos($string, $after);
  //
  //   if($distance == 0) {
  //       $distance = strlen($string);
  //   }
  //
  //   return substr($string, 0, $distance);
  // }

  public function read($file)
  {
    return file_get_contents($file);
  }

  // public function filter($string, $substring)
  // {
  //   $pos = strpos($string, $substring);
  //   if ($pos === false)
  //    return $string;
  //   else
  //   $string = substr($string, $pos + strlen($substring));
  //   //$string = $this->between("'", "'", $string);
  //   array_push($this->used, $string);
  //   return $string;
  // }

  public function clear($array)
  {
    array_shift($array);
    return $array[0];
  }

  public function tag($tag, $end, $string)
  {
    preg_match_all("/${tag}(.*?)${end}/s", $string, $this->routes);
  }

  public function getRoutes($string, $array)
  {
    preg_match_all("/'(.*?)'/s", $string, $array);
    return $array;
  }
}
