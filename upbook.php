<?php
require_once 'db/pdo.php';
require_once 'layouts/header.php';
require_once 'checklogin.php';
$id=$_GET['id'];
$book=$conn->query("SELECT * FROM books WHERE id='$id'")->fetch();
if(!empty($_POST['submit'])){
    $query="UPDATE books SET `name`=? , `author`=? , `count`=? , `published_at`=? WHERE id=$id";
    $stm=$conn->prepare($query);
    $stm->execute([$_POST['name'] , $_POST['author'] , $_POST['count'], $_POST['published_at']]);
    header("Location: http://localhost/bookstore/index.php");
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
  <form action="" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-12" for="email">نام کتاب:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="<?= $book['name'] ?>" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-12" for="pwd">نویسنده:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="<?= $book['author'] ?>" name="author">
      </div>
    </div>
    <label class="control-label col-sm-12" for="pwd">تعداد:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="<?= $book['count'] ?>" name="count">
      </div>
    </div>
    <label class="control-label col-sm-12" for="pwd">نوشته:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="pwd" placeholder="<?= $book['published_at'] ?>" name="published_at">
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
