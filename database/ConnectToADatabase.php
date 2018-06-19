<?php
/**
 *Class to connect to a database and return PDO object
 */

namespace App\Database;
use \PDO;

class ConnectToADatabase
{

  public static function ConnectToDb($config){           //static method for easy access
    try {

      return  new PDO(
        $config['connection'] . ';dbname=' . $config['name'],
        $config['username'],
        $config['password'],
        $config['options']
      );
    } catch (PDOException $e) {

      die($e->getMessage() . "</br></br>" . 'Could not connect to a database. Please try again.');

    }
  }
}
