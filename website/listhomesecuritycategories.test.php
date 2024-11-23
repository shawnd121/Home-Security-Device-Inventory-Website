<?php
require_once('homesecuritycategory.php');
$categories = HomeSecurityCategory::getCategories();
foreach ($categories as $category) {
    $categoryID = $category->categoryID;
    $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName;
    echo "$name<br>";
}
?>
