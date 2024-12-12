<?php
/*  Shawn Daniel
    11/22/24
    IT202-003
    Phase 2 Assignment: CRUD Categories and Products
    sd2257@njit.edu
*/
require_once('homesecuritycategory.php');
$categoryID = $_GET['categoryID'];
$category = HomeSecurityCategory::findCategory($categoryID);
$category->categoryCode = $_GET['categoryCode'];
$category->categoryName = $_GET['categoryName'];
$category->aisleNumber = $_GET['aisleNumber'];
$result = $category->updateCategory();

if ($result) {
    echo "<h2>Home Security Category $categoryID updated</h2>\n";
} else {
    echo "<h2>Problem updating category $categoryID</h2>\n";
}
?>
