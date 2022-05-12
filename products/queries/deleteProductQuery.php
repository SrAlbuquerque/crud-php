<?php

require_once('./config/dbconfig.php');
$db = new Dbconfig();


class DeleteProductQuery
{
  //Deleta o produto
  public function delete($idProduto)
  {
    global $db;
    $query = "DELETE FROM produto WHERE idproduto='$idProduto'";
    $result = mysqli_query($db->connection, $query);
    if ($result) {
      header("Location: viewPage.php");
      return true;
    } else {
      header("Location: viewPage.php");
      return false;
    }
  }
}
