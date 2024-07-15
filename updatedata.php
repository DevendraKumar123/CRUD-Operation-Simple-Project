<?php
$stu_sid = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$conn =  mysqli_connect("localhost:3307","root","","crud") or die("Connection failed");


$sql = " UPDATE student SET sname = '{$stu_name}' ,saddress = '{$stu_address}' ,sclass = '{$stu_class}',sphone = '{$stu_phone}' WHERE sid = {$stu_sid}";

$result = mysqli_query($conn, $sql) or die ("Query Unsuccessfull");

header("location: http://localhost/php_first/index.php");
mysqli_close($conn);

?>