<?php
include("../conexion.php");

$start = 0;
$rows_per_page= 12; 

$records = $con->query("SELECT * FROM trabajos");
$nr_of_rows = $records->num_rows;

$pages = ceil($nr_of_rows / $rows_per_page);

if(isset($_GET['page-nr'])){
  $page = $_GET['page-nr'] - 1;
  $start = $page * $rows_per_page;
}

$result = $con->query("SELECT * FROM trabajos LIMIT $start, $rows_per_page");
 
mysqli_close($con);
?> 