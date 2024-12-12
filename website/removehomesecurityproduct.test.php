<?php
/*  Shawn Daniel
    11/22/24
    IT202-003
    Phase 2 Assignment: CRUD Categories and Products
    sd2257@njit.edu
*/
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
