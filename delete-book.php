<?php
$book_id = $_GET['book_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Book</title>
</head>
<body>
  <h2> Are you sure you want to Delete?</h2>
  <button><a href="delete-book-process.php?book_id=<?php echo $book_id; ?>">Yes</a></button>
  <button><a href="index.php">No</a></button>

</body>
</html>
