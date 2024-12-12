<!--Shawn Daniel
    11/29/24
    IT202-003
    Phase 3 Assignment: HTML Website Layout
    sd2257@njit.edu
-->
<h2>Select Product</h2>
<form name="products" method="post">
    <select name="productID" size="20">
        <?php
        $products = HomeSecurityProduct::getProducts();
        foreach ($products as $product) {
            $productID = $product->productID;
            $productCode = $product->productCode;
            $productName = $product->productName;
            $listPrice = $product->listPrice;
            $option = $productID . " - " . $productCode . " - " . $productName . " - " . $listPrice;
            echo "<option value=\"$itemID\">$option</option>\n";
        }
        ?>
    </select>
</form>