<?php
include("db-con.php");

$book_isbn = $_POST['book_isbn'];
$book_title = $_POST['book_title'];
$book_author = $_POST['book_author'];
$book_year = $_POST['book_year'];


$sql = "INSERT INTO books (book_isbn,book_title,book_author,book_year)
          VALUES ('$book_isbn','$book_title','$book_author','$book_year')";

if($conn->query($sql) === true){
  header("Location:add-book.php?output=success");
}
else{
  echo "SQL Failed: " . $conn->error;
}

$conn->close();


?>