<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070126_test', 'test123456', 'testtable', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$num_a = $_POST['number_a'];
$num_b = $_POST['number_b'];
$num_c = $num_a + $num_b;


$sql = "INSERT INTO testtable (A, B, C) VALUES ('$num_a', '$num_b', '$num_c')";


if (mysqli_query($conn, $sql)) {
    echo"<script>alert('Record Added. Going back to Form page'); window.location = 'index.html';</script>";
  }
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>