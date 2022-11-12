<?php
  namespace App\Controllers; 

  class Posts extends \Core\Controller {
    public function indexAction() {
      echo 'Hello from the index action in the Posts controller';
    }

    public function addNewAction() {
      echo 'Hello from the addNew action in the Posts controller';
    }

    public function editAction() {
      echo '<pre>'. print_r($this->routeParams, true) .'</pre>';
    }

    public function before() {
      echo '(before) ';
    }

    public function after() {
      echo ' (after)';
    }
  }
?>