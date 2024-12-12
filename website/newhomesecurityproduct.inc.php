<!--Shawn Daniel
    12/11/24
    IT202-003
    Phase 4 Assignment: Input Filtering and CSS Styling 
    sd2257@njit.edu
-->
<h2>Enter New Product Information</h2>
<form name="newproduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="number" name="productID" size="4" min="1000" max="9999" required></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="productCode" size="20" placeholder="XXX" minlength="3" maxlength="20" required></td>
       </tr>
       <tr>
           <td>Product Name:</td>
           <td><input type="text" name="productName" size="50" minlength="10" maxlength="100" required></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="description" size="50" minlength="20" maxlength="255" required></td>
       </tr>
       <tr>
           <td>Model:</td>
           <td><input type="text" name="model" size="50" minlength="3" maxlength="50" required></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="number" name="categoryID" size="3" min="100" max="999" required></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="number" name="wholesalePrice" size="5" min="0.00" max="99999.99" step="0.01" required></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="number" name="listPrice" size="5" min="0.00" max="99999.99" step="0.01" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Product">
   <input type="hidden" name="content" value="addhomesecurityproduct">
</form>
