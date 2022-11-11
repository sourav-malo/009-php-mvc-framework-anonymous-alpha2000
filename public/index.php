<?php
  require '../core/Router.php';

  $router = new Router();
  
  $router->add('', ['controller' => 'Home', 'action' => 'index']);
  $router->add('{controller}/{action}', ['controller' => 'Posts', 'action' => 'index']);
  $router->add('admin/{controller}/{action}', ['controller' => 'Posts', 'action' => 'new']);
  $router->add('{controller}/{id:12}/{action}', ['controller' => 'Posts', 'action' => 'new']);

  $url = $_SERVER['QUERY_STRING'];

  if($router->match($url)) {
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
  } else {
    echo 'No route found for URL "' . $url . '"'; 
  }
?>