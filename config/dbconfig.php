<?php
require_once('./products/operations.php');

//Configurando o DB
class Dbconfig
{
  public $connection;

  public function __construct()
  {
    $this->db_connection();
  }

  //Conectando no DB
  public function db_connection()
  {
    $host = "database-1.cegsjvmeg9bl.us-east-2.rds.amazonaws.com";
    $user = "admin";
    $password = "twjrjyAxc";
    $db = "test";

    $this->connection = mysqli_connect($host, $user, $password, $db);
    if (mysqli_connect_error()) {
      die("Connect Failed");
    }
  }

  //Função para limpar as strings quando as mesmas forem registradas no BD, para não passar coisas como: \n,',"
  public function check($a)
  {
    $return = mysqli_real_escape_string($this->connection, $a);
    return $return;
  }
}
