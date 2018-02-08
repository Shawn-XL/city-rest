<?php
  /* CONSTANTS */
  define("SITE_ROOT", __DIR__);

  /* Load the Twig Library */
    require_once SITE_ROOT.'/db.php';

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

  // Route 实现导航

  $params = $_GET['param'];

  $params_array = explode('/', $params);


  require_once SITE_ROOT. '/'. $params_array[0]. '.php';

  $controller = new  $params_array[0]();

  $action ="index";

  if(array_key_exists(1, $params_array)&&!empty($params_array[1])){
  	$action = $params_array[1];
  }

  $action = $action . 'Action';

  echo $controller->$action();



?>