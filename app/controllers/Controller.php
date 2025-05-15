<?php

namespace app\controllers;

class Controller
{
  public function view($route, $data = [])
  {
    $route = str_replace('.', '/', $route);

    if (file_exists("../app/resources/views/$route.php")) {
      ob_start();
      include "../app/resources/views/$route.php";
      $content = ob_get_clean();

      return $content;
    }
  }
}
