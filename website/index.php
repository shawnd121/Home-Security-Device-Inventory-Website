<?php
/*  Shawn Daniel
    10/5/24
    IT202-003
    Phase 1 Assignment: Login and Logout
    sd2257@njit.edu
*/
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Home Security Devices Store</title></head>
<body>
   <section id="container">
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
</body>
</html>

