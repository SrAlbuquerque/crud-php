<?php
require_once('./config/dbconfig.php');
$db = new Dbconfig();

class GetProductQuery
{
  //Pega a infos de um produto especifico
  public function get_record($idProduto)
  {
    global $db;
    $query = "SELECT * FROM produto WHERE idproduto='$idProduto'";
    $result = mysqli_query($db->connection, $query);

    return $result;
  }
}
