<?php
/**
 *Class to connect to a database
 */
class ConnectToADatabase
{

  public static function ConnectToDb(){           //static method for easy access 
    try {

      return $pdo = new PDO('mysql:host=localhost;dbname=learning', 'root', '');

    } catch (PDOException $e) {

      die($e->getMessage() . "</br></br>" . 'Could not connect to a database. Please try again.');

    }
  }
}
