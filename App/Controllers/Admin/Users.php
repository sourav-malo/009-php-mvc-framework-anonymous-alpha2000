<?php
  namespace App\Controllers\Admin; 
  
  class Users extends \Core\Controller {
    public function indexAction() {
      echo 'Hello from the index action in the User controller';
    }

    public function before() {
      echo '(before) ';
    }

    public function after() {
      echo ' (after)';
    }
  }
?>