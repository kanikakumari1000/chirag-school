<?php
session_start();
if(isset($_POST['submit']))
unset($_SESSION['email']);
unset($_SESSION['id']);
header('location:index.php');
exit();

?>
