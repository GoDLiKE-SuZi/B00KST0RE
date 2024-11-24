<?php
require_once 'db/pdo.php';
require_once 'layouts/header.php';
require_once 'checklogin.php';

if(!empty($_POST['submit'])){
    $name=$_POST['name'];
    $author=$_POST['author'];
    $count=$_POST['count'];
    $image=$_FILES['image']['name'];
    $published_at=$_POST['published_at'];
    $query="INSERT INTO `books` (`name`,`author`,`image`,`count`,`published_at`) VALUES (?,?,?,?,?)";
    $stm=$conn->prepare($query);
    $stm->execute([$name,$author,$image,$count,$published_at]);
    move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/".$_FILES['image']['name']);
    ("Location: http://localhost/bookstore/index.php");
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
  <h2>ثبت نام کاربر</h2>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-12" for="email">نام کتاب:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-12" for="pwd">نویسنده:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="" name="author">
      </div>
    </div>
    <label class="control-label col-sm-12" for="pwd">تصویر:</label>
      <div class="col-sm-10">          
        <input name="image" type="file" class="form-control" id="pwd" placeholder="">
      </div>
    </div>
    <label class="control-label col-sm-12" for="pwd">تعداد:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="" name="count">
      </div>
    </div>
    <label class="control-label col-sm-12" for="pwd">نوشته:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="pwd" placeholder="" name="published_at">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" value="submit" name="submit" class="btn btn-default">ثبت</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>







<?php
require_once 'layouts/footer.php'
?>
