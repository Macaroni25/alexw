<?php
$con=mysqli_connect("us-cdbr-azure-northcentral-a.cleardb.com","b3262821ada9ac","cacb753a","alexwdb");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM projects");

echo "<table border='1'>
<tr>
<th>Project Name</th>
<th>Description</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>