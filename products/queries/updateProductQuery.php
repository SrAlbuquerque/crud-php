<?php

require_once('./config/dbconfig.php');
$db = new Dbconfig();

class UpdateProductQuery
{
  public function update()
  {
    global $db;

    if (isset($_POST['btn_update'])) {

      $idProduto = $_POST['idproduto'];
      $nome = $_POST['nome'];
      $categoria = $_POST['categoria'];
      $preco = $_POST['preco'];

      $query = "UPDATE produto SET nome='$nome', categoria='$categoria', preco='$preco' WHERE idproduto='$idProduto'";
      $result = mysqli_query($db->connection, $query);

      if ($result) {
        header("Location: viewPage.php");
        return true;
      } else {
        header("Location: editPage.php");
        return false;
      }
    }
  }
}
