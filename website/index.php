<?php
/*  Shawn Daniel
    12/11/24
    IT202-003
    Phase 4 Assignment: Input Filtering and CSS Styling 
    sd2257@njit.edu
*/
session_start();
include("homesecuritycategory.php");
include("homesecurityproduct.php");
?>
<!DOCTYPE html>
<html>
<head>
   <title>Home Security Devices Store</title>
   <link rel="stylesheet" type="text/css" href="ih_styles.css">
   <link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>
   <header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 375px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>
