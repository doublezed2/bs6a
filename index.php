<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Library</title>
</head>
<body>
  <div class="container">
    <h1>Welcome to my library</h1>

    <a href="add-book.php"><button>Add new book</button></a>

    <h3>List of Books</h3>
    <table cellpadding="1" border="1">
      <tr>
        <th>ISBN</th>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
      
      <?php
      include("db-con.php");

      $sql = "SELECT * FROM books";
      $result = $conn->query($sql);

      if($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
          echo "<tr>";
          echo "<td>".$row['book_isbn']."</td>";
          echo "<td>".$row['book_title']."</td>";
          echo "<td>".$row['book_author']."</td>";
          echo "<td>".$row['book_year']."</td>";

          echo "<td><a href='update-book.php?book_id=".$row['book_id']."'><button>Update</button></a></td>";
          echo "<td><a href='delete-book.php?book_id=".$row['book_id']."'><button>Delete</button></a></td>";
          
          echo "</tr>";
        } // End While
      } // End If
      ?>
    </table>

    <?php
    if(isset($_GET['delete'])){
      if($_GET['delete'] == "success"){
        echo "<h3>Record deleted successfully!</h3>";
      }
    }
    if(isset($_GET['update'])){
      if($_GET['update'] == "success"){
        echo "<h3>Record updated successfully!</h3>";
      }
    }
    ?>
  </div>
  
  
</body>
</html>