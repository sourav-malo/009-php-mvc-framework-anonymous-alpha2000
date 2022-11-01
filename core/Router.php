<?php
  class Router {
    protected $routes;
    protected $params;

    public function add($route, $param) {
      $this->routes[$route] = $param;
    }

    public function getRoutes() {
      return $this->routes;
    }

    public function match($url) {
      foreach($this->routes as $route => $params) {
        if($route == $url) {
          $this->params = $params;
          return true;
        }
      }

      return false;
    }

    public function getParams() {
      return $this->params;
    }
  }
?>