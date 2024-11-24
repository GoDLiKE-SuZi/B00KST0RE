<!DOCTYPE html>
<html lang="en">
<head>
  <title>BookStore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/bookstore/index.php">خانه</a></li>
      <li><a href="Login.php">ورود</a></li>
      <li><a href="register.php">ثبت نام</a></li>
      <li><a href="viewbooks.php">تغییرات کتاب ها</a></li>
      <li><a href="addbook.php">ایجاد کتاب</a></li>
      <li><a href="logout.php">خروج</a></li>
==
    </ul>
    <form class="navbar-form navbar-left" action="searchindex.php" method="GET">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="جستجو" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
