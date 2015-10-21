<?php

class Db{

  public $mysql;

  function __construct(){
    $this->mysql = new mysqli('localhost', 'root', '', 'db2') or die("problem");
  }
}
