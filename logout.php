<?php
//include api config file
require_once 'config.php';

//revoke token & destroy session
$client->revokeToken();
session_destroy();

//redirect to the homepage
header("Location:index.php"); exit;
?>
