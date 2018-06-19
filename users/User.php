<?php

/**
 * Class containing methods and properties for a user
 */

class User
{
  protected $name, $age, $learning, $id;

  public function getName(){
    return $this->name;
  }

  public function getAge(){
    return $this->age;
  }

  public function getLearning(){
    return $this->learning;
  }

  public function getId(){
    return $this->id;
  }

}
