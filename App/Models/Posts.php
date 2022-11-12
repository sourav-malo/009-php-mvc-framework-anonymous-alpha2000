<?php
  namespace App\Models; 

  use PDO;
  
  class Posts extends \Core\Model {
    public static function getAll() {
      $db = self::getDB();
      $stmt = $db->query('SELECT * FROM posts;');
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }
  }
?>