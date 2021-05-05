<?php

$con = mysqli_connect('10.88.100.140', 'user1', 'mypa55','mileage_calculator');
if($con->connect_error) 
  die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
$query = "SELECT month from mileage";
$result=mysqli_query($con, $query);

echo '<form method="POST" action="new_webpage_action.php">';
echo '<select id="month" name="month"><OPTION>';
echo "Select a month to remove</OPTION>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['month'] . "'>" . $row['month'] . "</option>";
}
echo '</SELECT>';
echo '<input type="submit" name="submit" value="submit"/>';
echo '</form>';
?>

