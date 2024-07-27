<?php
$stu_id = $_GET['id'];

$conn =  mysqli_connect("localhost:3307","root","","crud") or die("Connection failed");


$sql = "DELETE FROM student WHERE sid = {$stu_id}";

$result = mysqli_query($conn, $sql) or die ("Query Unsuccessfull");
header("location: http://localhost/crud%20operation/index.php");
mysqli_close($conn);
?>