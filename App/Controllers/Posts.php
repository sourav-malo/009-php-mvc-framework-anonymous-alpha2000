<?php
  namespace App\Controllers; 
  
  use \Core\View;
  use \App\Models\Posts as PostsModel; 
  
  class Posts extends \Core\Controller {
    public function indexAction() {
      $posts = PostsModel::getALl();

      View::renderTemplate('Posts/index.html', [
        'posts' => $posts
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