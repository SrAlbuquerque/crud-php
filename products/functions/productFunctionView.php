<?php

require_once('./products/queries/viewProductQuery.php');
$viewProduct = new ViewProductQuery();


class ProductFunctionView
{
  //Mostra os produtos salvos no DB
  public function view_product()
  {
    global $viewProduct;
    return $viewProduct->view();
  }
}
