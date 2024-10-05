<?php
/*  Shawn Daniel
    10/5/24
    IT202-003
    Phase 1 Assignment: Login and Logout
    sd2257@njit.edu
*/
if (isset($_SESSION['login'])) {
   session_unset();
   session_destroy();
}
header("Location: index.php");
?>

