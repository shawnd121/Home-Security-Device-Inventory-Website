<?php
/*  Shawn Daniel
    12/11/24
    IT202-003
    Phase 4 Assignment: Input Filtering and CSS Styling 
    sd2257@njit.edu
*/
if (isset($_SESSION['login'])) {
    $categoryID = filter_input(INPUT_POST, 'categoryID', FILTER_VALIDATE_INT);
    if ((trim($categoryID) == '') or (!is_int($categoryID))) {
        echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
    } else if (HomeSecurityCategory::findCategory($categoryID)) {
        echo "<h2>Sorry, A category with the ID #$categoryID already exists</h2>\n";
    } else {
        $categoryCode = htmlspecialchars($_POST['categoryCode']);
        $categoryName = htmlspecialchars($_POST['categoryName']);
        $aisleNumber = htmlspecialchars($_POST['aisleNumber']);
        $category = new HomeSecurityCategory($categoryID, $categoryCode, $categoryName, $aisleNumber);
        $result = $category->saveCategory();
        if ($result) {
            echo "<h2>New Home Security Category #$categoryID successfully added</h2>\n";
            echo "<h2>$category</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding that category</h2>\n";
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>  
