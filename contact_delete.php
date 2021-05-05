<?php
$con = mysqli_connect('10.88.100.140', 'user1', 'mypa55','mileage_calculator');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// get the post records
$txtMonth = $_POST['month'];
//echo "$txtMonth";

// database insert SQL code
$sql = "DELETE from mileage where month=('$txtMonth')";

// remove in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Mileage Record Deleted Successfully";
}
?>
<html>
        <p>&nbsp;</p>
	<a href="index.php">Back to Home</a>
</html>
