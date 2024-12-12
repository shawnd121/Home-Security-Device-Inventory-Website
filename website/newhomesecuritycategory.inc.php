<!--Shawn Daniel
    11/23/24
    IT202-003
    Phase 3 Assignment: HTML Website Layout
    sd2257@njit.edu
-->
<h2>Enter New Category Information</h2>
<form name="newcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Category ID:</td>
           <td><input type="number" name="categoryID" size="4" min="100" max="999" required></td>
       </tr>
       <tr>
           <td>Category Code:</td>
           <td><input type="text" name="categoryCode" size="20" placeholder="XXX" minlength="3" maxlength="10" required></td>

       </tr>
       <tr>
           <td>Category Name:</td>
           <td><input type="text" name="categoryName" size="50" minlength="5" maxlength="100" required></td>
       </tr>
       <tr>
           <td>Aisle Number:</td>
           <td><input type="number" name="aisleNumber" size="4" min="1" max="10" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addhomesecuritycategory">
</form>