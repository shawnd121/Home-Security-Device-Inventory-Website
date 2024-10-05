<?php
/*  Shawn Daniel
    10/5/24
    IT202-003
    Phase 1 Assignment: Login and Logout
    sd2257@njit.edu
*/
require_once('database.php');
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
$query = "SELECT pronouns, firstName, lastName FROM HomeSecurityDevicesManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($pronouns, $firstName, $lastName);
$fetched = $stmt->fetch();
$name = "$firstName $lastName";
if ($fetched && isset($name)) {
   $_SESSION['login'] = $name;
   $_SESSION['emailAddress'] = $emailAddress;
   $_SESSION['firstName'] = $firstName;
   $_SESSION['lastName'] = $lastName;
   $_SESSION['pronouns'] = $pronouns;
   header("Location: index.php");
} else {
   echo "<h2>Sorry, login incorrect for Home Security Devices Store Inventory Helper</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
?>
