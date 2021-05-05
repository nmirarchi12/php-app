<html>
    <head>
 	<h1>BMW Lease Mileage Calculator Application</h1>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
        <style type="text/css">
            tr.header
            {
                font-weight:bold;
            }
            tr.alt
            {
                background-color: #777777;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
               $('.striped tr:even').addClass('alt');
            });
        </script>
        <title></title>
    </head>
    <body>
        <?php
	     $db = mysqli_connect('10.88.100.140','user1','mypa55','mileage_calculator')
		 or die('Error connecting to MySQL server.');
	     $query ="select * from mileage";
	     $result = mysqli_query($db, $query);
        ?>
        <table class="striped">
            <tr class="header">
                <td>Month</td>
                <td>Expected Mileage</td>
		<td>Actual Mileage</td>
		<td>Over / Under</td>
		<td>Extra Cost</td>
            </tr>
            <?php
               while ($row = mysqli_fetch_array($result)) {
                   echo "<tr>";
                   echo "<td>".$row['month']."</td>";
                   echo "<td>".$row['expected_mileage']."</td>";
		   echo "<td>".$row['actual_mileage']."</td>";
		   echo "<td>".$row['over_under']."</td>";
		   echo "<td>".$row['extra_cost']."</td>";
	           echo "</tr>";
               }
	mysqli_close($db);
	?>
	</table>
	<p>&nbsp;</p>
	<a href="insert_form.html">Insert a New Entry</a>
	<p>&nbsp;</p>
	<a href="delete_form.php">Remove an Existing Entry</a>
    </body>
</html>
