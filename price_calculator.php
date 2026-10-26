<?php
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

$subtotal = $price * $quantity;
$tax = $subtotal * $tax_rate;
$total = $subtotal + $tax;

echo "商品名: $product_name <br>"; 
echo "単価: $price <br>";
echo "数量: $quantity <br>";
echo "小計: $subtotal <br>";
echo "消費税(10%): $tax <br>";
echo "合計金額: $total <br>"

?>
