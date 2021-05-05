<?php
//Step1
 $db = mysqli_connect('10.88.100.140','user1','mypa55','mileage_calculator')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>BMW X3MC Lease Mileage Calculator Application</h1>
 <h6>Month  |  Expected Mileage  |  Actual Mileage  |  Over/Under  |  Extra Cost</h6>

<?php
//Step2

$query = "SELECT * FROM mileage";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['month'] . ' | ' . $row['expected_mileage'] . ' | ' . $row['actual_mileage'] . ' | ' . $row['over_under'] . '  |  ' . $row['extra_cost'] . ' | ' . '<br />';
}

mysqli_close($db);
?>
<p>&nbsp;</p>
<a href="insert_form.html">Insert a new entry</a>
<p>&nbsp;</p>
<a href="removal_form.html">Remove an existing entry</a>
<p>&nbsp;</p>
<a href="test_delete_form.php">Test_Page</a>
</body>
</html>
