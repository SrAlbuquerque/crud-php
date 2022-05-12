<?php

require_once('./products/queries/deleteProductQuery.php');
$deleteProduct = new DeleteProductQuery();


class ProductFunctionDelete
{
  //Deleta o produto
  public function delete_product($idProduto)
  {
    global $deleteProduct;
    return $deleteProduct->delete($idProduto);
  }
}
