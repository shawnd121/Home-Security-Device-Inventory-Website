<!--Shawn Daniel
    12/11/24
    IT202-003
    Phase 4 Assignment: Input Filtering and CSS Styling 
    sd2257@njit.edu
-->
<table width="100%" cellpadding="3">
   <?php
   if (!isset($_SESSION['login'])) {
   ?>
       <tr>
           <td>
              <!-- <hr /> -->
           </td>
       </tr>
   <?php
   } else {
       echo "<td><h3>Welcome, {$_SESSION['login']}</h3></td>\n";
   ?>
       <tr>
           <td><img src="images/home.png" alt="Home Icon" width="12" height="12">&nbsp;
                <a href="index.php"><strong>Home</strong></a></td>
       </tr>
       <tr>
           <td><img src="images/categories.png" alt="Categories Icon" width="12" height="12">&nbsp;
                <strong>Categories</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listhomesecuritycategories">
                   <strong>List Categories</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newhomesecuritycategory">
                   <strong>Add New Category</strong></a></td>
       </tr>
       <tr>
           <td><img src="images/items.png" alt="Items Icon" width="12" height="12">&nbsp;
                <strong>Products</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listhomesecurityproducts">
                   <strong>List Products</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newhomesecurityproduct">
                   <strong>Add New Product</strong></a></td>
       </tr>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
       <tr>
           <td><a href="index.php?content=logout">
                <img src="images/logout.png" alt="Logout Icon" width="12" height="12"></a>&nbsp;
                <a href="index.php?content=logout">
                   <strong>Logout</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;</td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Product:</label><br>
                   <input type="text" name="productID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="updatehomesecurityproduct" />
               </form>
           </td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Category:</label><br>
                   <input type="text" name="categoryID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="displayhomesecuritycategory" />
               </form>
           </td>
       </tr>
   <?php
   }
   ?>
</table>
