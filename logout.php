<?php
session_start();
session_destroy();
header("Location: http://localhost/bookstore/index.php");
?>