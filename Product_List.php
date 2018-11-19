<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 12/11/2018
 * Time: 15:49
 */
echo '<table border="1">';
foreach ($products as $product) {
    echo '<tr>';
    echo '<td><a href="/?id=' . $product->id . '">'. $product->name .  '</a></td>';
    echo '<td>'. $product->price . '</td>';
    echo '<td>'. $product->producer . '</td>';
    echo '</tr>';
}
echo '</table>';