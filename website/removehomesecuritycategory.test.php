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
$result = $category->removeCategory();

if ($result) {
    echo "<h2>Home Security Category $categoryID removed</h2>\n";
} else {
    echo "<h2>Sorry, problem removing category $categoryID</h2>\n";
}
?>
