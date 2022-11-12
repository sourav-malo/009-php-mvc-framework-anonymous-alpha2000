<?php
  namespace App\Controllers; 

  use \Core\View;
  
  class Home extends \Core\Controller {
    public function indexAction() {
      // View::render('Home/index.php', [
      //   'name' => 'Mohammad Salah',
      //   'colors' => ['Blue', 'White', 'Red']
      // ]);

      View::renderTemplate('Home/index.html', [
        'name' => 'Mohammad Salah',
        'colors' => ['Blue', 'White', 'Red']
      ]);
    }

    public function before() {
      echo '(before) ';
    }

    public function after() {
      echo ' (after)';
    }
  }
?>