<?php
require_once('homesecurityproduct.php');
$productID = $_GET['productID'];
$product = HomeSecurityProduct::findProduct($productID);
$product->productCode = $_GET['productCode'];
$product->productName = $_GET['productName'];
$product->description = $_GET['description'];
$product->model = $_GET['model'];
$product->categoryID = $_GET['categoryID'];
$product->wholesalePrice = $_GET['wholesalePrice'];
$product->listPrice = $_GET['listPrice'];
$result = $product->updateProduct();

if ($result) {
    echo "<h2>Home Security Product $productID updated</h2>\n";
} else {
    echo "<h2>Problem updating product $productID</h2>\n";
}
?>
