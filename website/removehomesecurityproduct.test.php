<?php
require_once('homesecurityproduct.php');
$productID = $_GET['productID'];
$product = HomeSecurityProduct::findProduct($productID);
$result = $product->removeProduct();

if ($result) {
    echo "<h2>Home Security Product $productID removed</h2>\n";
} else {
    echo "<h2>Sorry, problem removing product $productID</h2>\n";
}
?>
