<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'peeramysql.mysql.database.azure.com', 'peeratop02@peeramysql', 'MVPTop02', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['NewName'];
$comment = $_POST['NewComment'];
$link = $_POST['NewLink'];
$id = $_POST['id'];


$sql = "UPDATE guestbook SET Name='$name' WHERE id='$id'";
$sql = "UPDATE guestbook SET Comment='$comment' WHERE id='$id'";
$sql = "UPDATE guestbook SET Link='$link' WHERE id='$id'";


if (mysqli_query($conn, $sql)) 
  {
    echo"<script>alert('Update record $name completed! Going back to Database Table'); window.location = 'show.php';</script>";
  }
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>