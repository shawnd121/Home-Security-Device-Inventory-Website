<?php
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
