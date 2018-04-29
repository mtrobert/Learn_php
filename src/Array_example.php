<?php
namespace src;


/**
 * Array example
 * Any logic that gets the data from a file or database
 */
class Array_example
{

  private $person;

  public function __construct()
  {
    $this->person = [];
  }

  public function addName($name = 'Robert')
  {
    $this->person['name'] = $name;
  }

  public function addAge($age = 34)
  {
    $this->person['age'] = $age;
  }

  public function addLearning($learning = true)
  {
    $this->person['learning'] = $learning;
  }
  public function returnPerson()
  {
    return $this->person;
  }
}
