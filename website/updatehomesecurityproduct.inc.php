<?php
/*  Shawn Daniel
    12/11/24
    IT202-003
    Phase 4 Assignment: Input Filtering and CSS Styling 
    sd2257@njit.edu
*/
if (!isset($_POST['productID']) or (!is_numeric($_POST['productID']))) {
?>
   <h2>You did not select a valid productID value</h2>
   <a href="index.php?content=listhomesecurityproducts">List products</a>
   <?php
} else {
   $productID = $_POST['productID'];
   $product = HomeSecurityProduct::findProduct($productID);
   if ($product) {
   ?>
       <h2>Update Product <?php echo $product->productID; ?></h2><br>
       <form name="products" action="index.php" method="post">
           <table>
               <tr>
                   <td>ProductID</td>
                   <td><?php echo $product->productID; ?></td>
               </tr>
               <tr>
               <td>Product Code</td>
                   <td><input type="text" name="productCode" value="<?php echo $product->productCode; ?>" size="20" placeholder="XXX" minlength="3" maxlength="20" required></td>
               </tr>
               <tr>
                   <td>Product Name</td>
               <td><input type="text" name="productName" value="<?php echo $product->productName; ?>" size="50" minlength="10" maxlength="100" required></td>
               </tr>
               <tr>
                   <td>Description</td>
                 <td><input type="text" name="description" value="<?php echo $product->description; ?>" size="50" minlength="20" maxlength="255" required></td>
               </tr>
               <tr>
                   <td>Model</td>
                 <td><input type="text" name="model" value="<?php echo $product->model; ?>" size="50" minlength="3" maxlength="50" required></td>
               </tr>
               <tr>
                   <td>Category ID</td>
                 <td><input type="number" name="categoryID" value="<?php echo $product->categoryID; ?>" size="3" min="100" max="999" required></td>
               </tr>
               <tr>
                   <td>Wholesale Price</td>
                 <td><input type="number" name="wholesalePrice" value="<?php echo $product->wholesalePrice; ?>" size="5" min="0.00" max="99999.99" step="0.01" required></td>
               </tr>
               <tr>
                   <td>List Price</td>
                 <td><input type="number" name="listPrice" value="<?php echo $product->listPrice; ?>" size="5" min="0.00" max="99999.99" step="0.01" required></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Product">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="productID" value="<?php echo $productID; ?>">
           <input type="hidden" name="content" value="changehomesecurityproduct">
       </form>
   <?php
   } else {
    ?>
        <h2>Sorry, product <?php echo $productID; ?> not found</h2>
        <a href="index.php?content=listhomesecurityproducts">List products</a>
 <?php
    }
 }
 ?>