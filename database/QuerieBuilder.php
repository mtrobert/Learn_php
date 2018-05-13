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

  
}
