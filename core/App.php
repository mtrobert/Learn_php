<?php
/**
 * Dependancy injection container
 */
class App
{

  protected static $registry = [];


  public static function bind($key, $value)
  {

    static::$registry[$key] = $value;

  }
}
