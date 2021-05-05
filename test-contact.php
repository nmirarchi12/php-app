<?php
//Step1
 $db = mysqli_connect('10.88.100.126','user1','mypa55','mileage_calculator')
 or die('Error connecting to MySQL server.');

//Step2

$query = "SELECT expected_mileage from mileage order by expected_mileage DESC limit 1 ";
$result=mysqli_query($db, $query);
if (!$result){
    die("BAD!");
}
if (mysqli_num_rows($result)==1){
    $row = mysqli_fetch_array($result);
    echo "Expected Mileage:  " . $row['expected_mileage'];
    $txtExpected=$row['expected_mileage']+833;
    echo "Next month expected mileage:  ". $txtExpected;
}
else{
    echo "not found!";
}
?>
<html>
<a href="index.php">Back to Home</a>
</html>

