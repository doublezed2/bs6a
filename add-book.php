<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Book</title>
</head>
<body>
  <h1>Add Book</h1>
  
  <form action="add-book-process.php" method="POST">
    <label>ISBN</label>
    <input type="text" name="book_isbn">
    <br>
    <br>
    <label>Title</label>
    <input type="text" name="book_title">
    <br>
    <br>
    <label>Author</label>
    <input type="text" name="book_author">
    <br>
    <br>
    <label>Year</label>
    <input type="text" name="book_year">
    <br>
    <br>
    <input type="submit" value="Save Book">
  </form>
  <?php
  
  if(isset($_GET['output'])){
    
    if($_GET['output'] == "success"){

      echo "<h3>Record inserted successfully!</h3>";
    
    }

  }

  
  ?>
  <br>
  <a href="index.php"><button>View all books</button></a>
</body>
</html>