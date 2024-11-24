<?php
session_start();
if (!$_SESSION['active']){
    header("Location: http://localhost/bookstore/login.php");
}
?>