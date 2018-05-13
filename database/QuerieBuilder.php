<?php

/**
 * class for bulding diffrent types of queries
 */
class QuerieBuilder
{

  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    $statement = $this->pdo->prepare('select * from {$table}');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'User');

  }
}
