<?php
include("db-con.php");

$book_id = $_POST['book_id'];
$book_isbn = $_POST['book_isbn'];
$book_title = $_POST['book_title'];
$book_author = $_POST['book_author'];
$book_year = $_POST['book_year'];


$sql = "UPDATE books SET book_isbn='$book_isbn', book_title='$book_title', book_author ='$book_author',book_year='$book_year' WHERE book_id =$book_id";

if($conn->query($sql) === true){
  header("Location:index.php?update=success");
}
else{
  echo "SQL Failed: " . $conn->error;
}

$conn->close();


?>