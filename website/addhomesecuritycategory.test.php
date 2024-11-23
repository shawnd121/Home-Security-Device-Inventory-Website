<?php
require_once('homesecuritycategory.php');
$categoryID = $_GET['categoryID'];
$categoryCode = $_GET['categoryCode'];
$categoryName = $_GET['categoryName'];
$aisleNumber = $_GET['aisleNumber'];

if ((trim($categoryID) == '') or (!is_numeric($categoryID))) {
    echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
    $category = new HomeSecurityCategory($categoryID, $categoryCode, $categoryName, $aisleNumber);
    $result = $category->saveCategory();
    if ($result) {
        echo "<h2>New Home Security Category #$categoryID successfully added</h2>\n";
        echo "<h2>$category</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that category</h2>\n";
    }
}
?>
