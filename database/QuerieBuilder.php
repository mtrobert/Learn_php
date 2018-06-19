<?php
/**
 * class for bulding diffrent types of queries
 */

namespace App\Database;
use \PDO;

class QuerieBuilder
{

  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }



  public function selectAll(string $table, $inToClass)   //gets all data from the specified table
  {
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, $inToClass);
  }



  public function insert($tableName, array $parameters)
  {

    $sql = sprintf('insert into %s (%s ) values(%s )',
        $tableName,
        implode(', ', array_keys($parameters)),
        ':' . implode(', :', array_keys($parameters))
      );
try {

  $statement = $this->pdo->prepare($sql);
  $statement->execute($parameters);

} catch (Exception $e) {

  die('Whoops something went wrong');

}


  }
}
