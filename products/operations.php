<?php

require_once('./config/dbconfig.php');
require_once('./products/functions/productFunctionView.php');
require_once('./products/functions/productFunctionDelete.php');
require_once('.//products/functions/productFunctionUpdate.php');
require_once('./products/functions/productFunctionInsert.php');

$db = new Dbconfig();
$productView = new ProductFunctionView();
$productDelete = new ProductFunctionDelete();
$productUpdate = new ProductFunctionUpdate();
$productinsert = new ProductFunctionCreate();


class Operations extends Dbconfig
{
  //Insere os produtos salvos no DB
  public function create()
  {
    global $productinsert;
    return $productinsert->create_product();
  }

  //Mostra os produtos salvos no DB
  public function view()
  {
    global $productView;
    return $productView->view_product();
  }

  //Atualiza o produto
  public function update()
  {
    global $productUpdate;
    return $productUpdate->update_product();
  }

  //Deleta o produto
  public function delete()
  {
    global $productDelete;
    $idProduto = $_GET['D_ID'];
    return $productDelete->delete_product($idProduto);
  }
}
