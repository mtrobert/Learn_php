<?php
/**
 * Class to fetch current browser requests
 */
class Request
{
  
  public static function uri()
  {
    return trim($_SERVER['REQUEST_URI'], '/');
  }

}
