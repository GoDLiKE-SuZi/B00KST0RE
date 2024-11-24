<?php
require_once 'db/pdo.php';
require_once 'layouts/header.php';
session_start();
$search=$_GET['search'];
$books=$conn->query("SELECT * FROM books WHERE name LIKE '%$search%';")->fetchAll();
?>
<div class="container">
  <h2>کتاب ها</h2>
  <p></p>            
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Book Name</th>
        <th>Author</th>
        <th>Count</th>
        <th>Published_at</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach($books as $book){     
    ?>
      <tr>
        <td><?= $book['name']?></td>
        <td><?= $book['author']?></td>
        <td><?= $book['count']?></td>
        <td><?= $book['published_at']?></td>
        <td><img src="uploads/<?= $book['image'] ?>" width="50px" alt=""></td>
      </tr>

    <?php
    }
    ?>
    </tbody>
  </table>
</div>







<?php
require_once 'layouts/footer.php'
?>
