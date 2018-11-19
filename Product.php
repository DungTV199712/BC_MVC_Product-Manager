<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 12/11/2018
 * Time: 15:43
 */
        if (!$product) {
            echo 'No product found!';
        } else {
            echo $product->id . ' - ' . $product->name . ' - ' . $product->price . ' - ' . $product->producer;
        }