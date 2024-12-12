<?php
/*  Shawn Daniel
    11/23/24
    IT202-003
    Phase 3 Assignment: HTML Website Layout
    sd2257@njit.edu
*/
if (isset($_SESSION['login'])) {
    $productID = $_POST['productID'];
    $answer = $_POST['answer'];
    if ($answer == "Update Product") {
        $product = HomeSecurityProduct::findProduct($productID);
        $product->$productID = $_POST['productID'];
        $product->productCode = $_POST['productCode'];
        $product->productName = $_POST['productName'];
        $product->description = $_POST['description'];
        $product->model = $_POST['model'];
        $product->categoryID = $_POST['categoryID'];
        $product->wholesalePrice = $_POST['wholesalePrice'];
        $product->listPrice = $_POST['listPrice'];
        $result = $product->updateProduct();
        if ($result) {
            echo "<h2>Home Security Product $productID updated</h2>\n";
        } else {
            echo "<h2>Problem updating product $productID</h2>\n";
        }
    } else {
        echo "<h2>Update Canceled for product $productID</h2>\n";
    }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>