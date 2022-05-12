<?php

require_once('./config/dbconfig.php');
require_once('./products/queries/insertProductQuery.php');
$db = new Dbconfig();
$insertProduct = new InsertProductQuery();


class ProductFunctionCreate
{
  //Insere os produtos salvos no DB
  public function create_product()
  {
    global $db;
    global $insertProduct;
    if (isset($_POST['btn_save'])) {
      $nomeProduto = $db->check($_POST['nome']);
      $categoriaProduto = $db->check($_POST['categoria']);
      $precoProduto = $db->check($_POST['preco']);

      if ($insertProduct->insert($nomeProduto, $categoriaProduto, $precoProduto)) {
        echo '<div class="alert alert-success"> Seu Produto Foi Salvo! </div>';
      } else {
        echo '<div class="alert alert-danger"> Não Salvou! </div>';
      }
    }
  }
}
