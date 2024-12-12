<!--Shawn Daniel
    11/23/24
    IT202-003
    Phase 3 Assignment: HTML Website Layout
    sd2257@njit.edu
-->
<h2>Select Category</h2>
<form name="categories" method="post">
   <select name="categoryID" size="20">
       <?php
        $categories = HomeSecurityCategory::getCategories();
        foreach ($categories as $category) {
            $categoryID = $category->categoryID;
            $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName;
            echo "<option value=\"$categoryID\">$name</option>\n";
        }
        ?>
    </select>
</form>
