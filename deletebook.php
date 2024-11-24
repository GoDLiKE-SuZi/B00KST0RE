<?php
require_once 'db/pdo.php';
require_once 'checklogin.php';
$id=$_GET['id'];
$query="DELETE FROM books WHERE id=?";
$stm=$conn->prepare($query);
$stm->execute([$id]);
header("Location: http://localhost/bookstore/index.php");
?>
