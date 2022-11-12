<?php
  namespace App\Controllers; 
  
  use \Core\View;
  
  class Posts extends \Core\Controller {
    public function indexAction() {
      View::renderTemplate('Posts/index.html', [
        'name' => 'Mohammad Salah',
        'colors' => ['Blue', 'White', 'Red']
      ]);
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