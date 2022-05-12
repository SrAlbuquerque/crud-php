<?php

require_once('./products/queries/updateProductQuery.php');
$updateProduct = new UpdateProductQuery();


class ProductFunctionUpdate
{
  //Edita o produto
  public function update_product()
  {
    global $updateProduct;
    return $updateProduct->update();
  }
}
