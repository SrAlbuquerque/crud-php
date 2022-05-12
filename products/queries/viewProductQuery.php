<?php

require_once('./config/dbconfig.php');
$db = new Dbconfig();


class ViewProductQuery
{
  //Mostra os produtos salvos no DB
  public function view()
  {
    global $db;
    $query = "SELECT * FROM produto ";
    $result = mysqli_query($db->connection, $query);

    return $result;
  }
}
