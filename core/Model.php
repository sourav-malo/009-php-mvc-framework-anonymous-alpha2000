<?php
  namespace Core;
  
  use App\Config;
  use PDO; 

  abstract class Model {
    protected static function getDB() {
      try {
        $db = new PDO('mysql:host='. Config::DB_HOST .';dbname='. Config::DB_NAME .';charset=utf8', Config::DB_USER, Config::DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
  }
?>