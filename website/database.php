<?php
/*  Shawn Daniel
    10/5/24
    IT202-003
    Phase 1 Assignment: Login and Logout
    sd2257@njit.edu
*/
function getDB() {
   $host = 'sql1.njit.edu';
   $port = 3306;
   $dbname = 'sd2257';
   $username = 'sd2257';
   $password = 'BFLD.azAZ9090';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try {
       $db = new mysqli($host, $username, $password, $dbname, $port);
 error_log("You are connected to the $host database!");
       return $db;
   } catch (mysqli_sql_exception $e) {
       error_log($e->getMessage(), 0);
       echo $e->getMessage();
   }
}
?>

