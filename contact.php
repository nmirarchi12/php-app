<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('10.88.100.140', 'user1', 'mypa55','mileage_calculator');

// get the post records
$txtMonth = $_POST['txtMonth'];
$txtMileage = $_POST['txtMileage'];

// get the expecte mileage variable
//$txtExpected = 
$query = "SELECT expected_mileage from mileage order by expected_mileage DESC limit 1 ";
$result=mysqli_query($con, $query);
if (!$result){
    die("BAD!");
}
if (mysqli_num_rows($result)==1){
    $row = mysqli_fetch_array($result);
    //echo "Testing Expected Mileage:  " . $row['expected_mileage'];
    $txtExpected=$row['expected_mileage']+833;
    //echo "Testing expected mileage:  ". $txtExpected;
}
else{
    echo "not found!";
}
$txtDifference=$txtMileage-$txtExpected;
$tmpCost=$txtDifference*0.26;
$txtCost='$' . (string)$tmpCost;


// database insert SQL code
$sql = "INSERT INTO `mileage` (`month`, `actual_mileage`, `expected_mileage`, `over_under`, `extra_cost`) VALUES ('$txtMonth', '$txtMileage', '$txtExpected', '$txtDifference', '$txtCost')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "New Mileage Record Inserted Successfully";
}
?>
<html>
        <p>&nbsp;</p>
	<a href="index.php">Back to Home</a>
</html>
