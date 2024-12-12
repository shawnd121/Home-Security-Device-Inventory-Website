<?php
/*  Shawn Daniel
    12/11/24
    IT202-003
    Phase 4 Assignment: Input Filtering and CSS Styling 
    sd2257@njit.edu
*/
if (isset($_SESSION['login'])) {
    $productID = filter_input(INPUT_POST, 'productID', FILTER_VALIDATE_INT);
    if ((trim($productID) == '') or (!is_int($productID))) {
        echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
    } else if (HomeSecurityProduct::findProduct($productID)) {
        echo "<h2>Sorry, A product with the ID #$productID already exists</h2>\n"; 
    } else {
        $productCode = htmlspecialchars($_POST['productCode']);
        $productName = htmlspecialchars($_POST['productName']);
        $description = htmlspecialchars($_POST['description']);
        $model = htmlspecialchars($_POST['model']);
        $categoryID = htmlspecialchars($_POST['categoryID']);
        $wholesalePrice = htmlspecialchars($_POST['wholesalePrice']);
        $listPrice = htmlspecialchars($_POST['listPrice']);
        $product = new HomeSecurityProduct($productID, $productCode, $productName, $description, $model, $categoryID, $wholesalePrice, $listPrice);
        $result = $product->saveProduct();
        if ($result) {
            echo "<h2>New Home Security Product #$productID successfully added</h2>\n";
            echo "<h2>$product</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding that product</h2>\n";
        }
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
