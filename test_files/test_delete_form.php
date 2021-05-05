<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Remove a mileage entry</title>
</head>
<body>
<fieldset>
<legend>Remove a mileage entry</legend>


<?php
$con = mysqli_connect('10.88.100.140', 'user1', 'mypa55','mileage_calculator');
if($con->connect_error) 
  die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
$query = "SELECT month from mileage";
$result=mysqli_query($con, $query);

echo '<form method="POST" action="contact_delete.php">';
echo '<select id="month" name="month"><OPTION>';
echo "Select a month to remove</OPTION>";
while ($row = mysqli_fetch_array($result)) {
    $month=$row["month"];	
    echo "<OPTION value=\"$month\">$month</OPTION>";
}
echo '</SELECT>';
echo '<input type="submit" name="submit" value="submit"/>';
echo '</form>';
?>
<a href="index.php">Back to Home</a>
</form>
</fieldset>
</body>
</html>
