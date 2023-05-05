<?php
$book_id = $_GET['book_id'];

include("db-con.php");

$sql = "DELETE FROM books WHERE book_id = $book_id";

if($conn->query($sql) === true ){
  header("Location:index.php?delete=success");
}
else{
  echo "Error";
}

?>