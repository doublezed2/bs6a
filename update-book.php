<?php
include ("db-con.php");
$book_id = $_GET["book_id"];
$sql = "SELECT * FROM books WHERE book_id = $book_id";

$result = $conn->query($sql);
$row = $result -> fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Book</title>
</head>
<body>
  <h1>Update Book</h1>
  
  <form action="update-book-process.php" method="POST">
    <label>ISBN</label>
    <input type="text" name="book_isbn" value="<?php echo $row['book_isbn']; ?>">
    <br>
    <br>
    <label>Title</label>
    <input type="text" name="book_title" value="<?php echo $row['book_title']; ?>">
    <br>
    <br>
    <label>Author</label>
    <input type="text" name="book_author" value="<?php echo $row['book_author']; ?>">
    <br>
    <br>
    <label>Year</label>
    <input type="text" name="book_year" value="<?php echo $row['book_year']; ?>">
    <br>
    <br>
    <input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
    
    <input type="submit" value="Update Book">
  </form>
  <?php
  
  if(isset($_GET['update'])){
    
    if($_GET['update'] == "success"){

      echo "<h3>Record updated successfully!</h3>";
    
    }

  }
  ?>
  <br>
  <a href="index.php"><button>View all books</button></a>
</body>
</html>