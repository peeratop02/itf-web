<html>
<head>
<title>Database Table</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
  .btn{
    margin-left: 20px ;
  }
</style>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070126_test', 'test123456', 'testtable', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<h2 class="text-center" style="margin-top: 0px;background: #2a2a2a;color: rgb(241,241,241);padding-top: 6px;padding-bottom: 12px;margin-bottom: 0px;">ITFLab Database</h2>
<table width="600" class="table table-dark table-bordered">
  <tr>
    <th width="100"> <div align="center">A</div></th>
    <th width="100"> <div align="center">B</div></th>
    <th width="100"> <div align="center">C</div></th>
    
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['A'];?></td>
    <td><?php echo $Result['B'];?></td>
    <td><?php echo $Result['C'];?></td>

  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<div class="text-center">
  <a type="button" class="btn btn-primary" href="index.html">BACK</a>
</div>

</body>
</html>