 <!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
  
   
    <title>Home</title>
    

    <link href="css/style.css" rel="stylesheet">

  </head>
 
 <body>

 <nav class="navbar">
				<a id="" class="nodebutton" href="index.html">Home</a>
				<a id="" class="nodebutton" href="projects.php">Projects</a>
				<a id="" class="nodebutton" href="#">About</a>
			</nav>

<div class="container">
     
<table>

<?php
$con=mysqli_connect("us-cdbr-azure-northcentral-a.cleardb.com","b3262821ada9ac","cacb753a","alexwdb");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM projects");

echo '
<tr>
<th>Project Name</th>
<th>Description</th>
<th>Status</th>
<th>Link</th>
</tr>';

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "<td>" . '<a class="nodebutton" href="' . $row['link'] .'">Go to Project</a>' . "</td>";
echo "</tr>";
}

mysqli_close($con);
?>
  </table>
 </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>