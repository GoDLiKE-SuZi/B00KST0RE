<?php
require_once 'db/pdo.php';
session_start();
if(!empty($_POST['submit'])){
    $email=$_POST['email'];
    $password=md5($_POST['password1']);
    $user=$conn->query("SELECT * FROM `users` WHERE email='$email'")->fetch();
    if($user){
        if($password==$user['password']){
            $_SESSION['active']=$_POST['email'];
            header("Location: http://localhost/bookstore/index.php");
        }
        else{
            echo "رمز اشتباه است";
        }
    }
    else{
        echo "ثبتنام کنید";
    }
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <title>BookStore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>ورود کاربر</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-12" for="email">ایمیل:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-12" for="pwd">رمز:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password1">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" value="submit"name="submit" class="btn btn-default">ثبت</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
