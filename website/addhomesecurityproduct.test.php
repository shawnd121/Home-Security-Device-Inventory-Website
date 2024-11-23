<?php
require_once('homesecurityproduct.php');
$productID = $_GET['productID'];
$productCode = $_GET['productCode'];
$productName = $_GET['productName'];
$description = $_GET['description'];
$model = $_GET['model'];
$categoryID = $_GET['categoryID'];
$wholesalePrice = $_GET['wholesalePrice'];
$listPrice = $_GET['listPrice'];

if ((trim($productID) == '') or (!is_numeric($productID))) {
    echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
} else {
    $product = new HomeSecurityProduct($productID, $productCode, $productName, $description, $model, $categoryID, $wholesalePrice, $listPrice);
    $result = $product->saveProduct();
    if ($result) {
        echo "<h2>New Home Security Product #$productID successfully added</h2>\n";
        echo "<h2>$product</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that product</h2>\n";
    }
}
?>
