<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 12/11/2018
 * Time: 16:09
 */
require 'controller/productController.php';

$product = new productController();
$product->invoke();