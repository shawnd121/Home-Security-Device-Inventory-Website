<?php
require_once('homesecurityproduct.php');
$products = HomeSecurityProduct::getProducts();
foreach ($products as $product) {
    $productID = $product->productID;
    $productCode = $product->productCode;
    $productName = $product->productName;
    $listPrice = $product->listPrice;

    echo "ID: $productID, Code: $productCode, Name: $productName, List Price: $listPrice<br>";
}
?>
