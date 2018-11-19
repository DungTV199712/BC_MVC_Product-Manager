<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 12/11/2018
 * Time: 15:54
 */

class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $producer;
    public function __construct($id = null,$name = null,$price = null,$producer = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
//        $this->description = $description;
        $this->producer = $producer;
    }
    function getProductList()
    {
        return [
            new Product(1, 'car',100000,'VinFast'),
            new Product(2,'plain',2000000,'VN airLine'),
            new Product(3,'motorbike',1000,'HonDa')
        ];
    }
    function getProduct($id)
    {
        $productList = $this->getProductList();
        foreach ($productList as $product) {
            if ($product->id == $id) {
                return $product;
            }
        }
    }
}