<?php
// SEMUGISHA Jean Paul_222009902
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to index.php
header("Location:index.php");
exit();
?>