<?php 
require_once 'includes/header.php';
?>

<?php 
session_destroy();
header('location: index.php')
?>