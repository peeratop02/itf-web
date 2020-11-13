<?php 

$name = $_GET['name'];


$conn = mysqli_init();
mysqli_real_connect($conn, 'peeramysql.mysql.database.azure.com', 'peeratop02@peeramysql', 'MVPTop02', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, "DELETE FROM guestbook WHERE Name='$name'");

if ($res){
    echo"<script>alert('Record Deleted. Going back to Database Table'); window.location = 'show.php'</script>";
    
}
else{
    echo"<script>alert('Sorry. Unable to delete the record.); window.location = 'show.php';</script>";;
}
?>