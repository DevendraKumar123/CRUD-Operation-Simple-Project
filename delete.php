<?php include 'header.php'; 



if(isset($_POST['deletebtn'])){
    $conn =  mysqli_connect("localhost:3307","root","","crud") or die("Connection failed");
$stu_id = $_POST['sid'];

$sql = "DELETE FROM student WHERE sid = {$stu_id}";

$result = mysqli_query($conn, $sql) or die ("Query Unsuccessfull");
header("location: http://localhost/php_first/index.php");
mysqli_close($conn);
}
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
