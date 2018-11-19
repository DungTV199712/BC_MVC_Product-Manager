<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 12/11/2018
 * Time: 16:04
 */
require 'model/product.php';
class productController
{
    private $product;
    function __construct()
    {
        $this->product = new Product();
    }
    public function invoke()
    {
        if (!isset($_GET['id'])) {
            $products = $this->product->getProductList();
            include 'view/Product_List.php';
        } else {
            $product = $this->product->getProduct($_GET['id']);
            include 'view/Product.php';
        }
    }
}