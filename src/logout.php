[01:25] Ilunga Michel Muembo
<?php

include('../controller/authLoginController.php');

// destroy session

unset($_SESSION["name"]);
unset($_SESSION["email"]);
// redirect to index with login and register btn

header("Location:index.php");

?>

