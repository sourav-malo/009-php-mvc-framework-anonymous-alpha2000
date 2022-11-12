<?php
  namespace Core;

  abstract class Controller {
    protected $routeParams;

    public function __construct($routeParams) {
      $this->routeParams = $routeParams;
    }

    public function __call($method, $args) {
      $method = $method . 'Action';

      if(method_exists($this, $method)) {
        if($this->before() !== false) {
          call_user_func_array([$this, $method], $args);
          $this->after();
        }
      } else {
        echo 'Method '. $method .'not found in controller '. get_class($this); 
      }
    }

    protected function before() {
      
    }

    protected function after() {
      
    }
  }
?>