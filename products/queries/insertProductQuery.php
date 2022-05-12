<?php
require_once('./config/dbconfig.php');
$db = new Dbconfig();

class InsertProductQuery
{
  //Query para inserir o produto no DB
  function insert($nome, $categoria, $preco)
  {
    global $db;
    $query = "INSERT INTO produto(nome,categoria,preco) values('$nome','$categoria','$preco')";
    $result = mysqli_query($db->connection, $query);

    if ($result) {
      return true;
    } else {
      return false;
    }
  }
}
