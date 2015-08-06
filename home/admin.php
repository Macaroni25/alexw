<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Projects</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Alex Weininger</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li class=""><a href="projects.php">Projects</a></li>
       <li><a href="about.php">About</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a class="active" href="admin.php">Admin Portal</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
     
<form action="" method="post">
<table class="table table-bordered">

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
echo "<td>" . '<a href="' . $row['link'] .'">Go to Project</a>' . "</td>";
echo "</tr>";
}

mysqli_close($con);

?>
  </table>
  </form>
 </div>
<?php if (($_SERVER['HTTP_REFERER']=="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']) && (!empty($_POST))){ extract($_POST);} ?>
<html><head></head><body>
<p><font face=Arial>
<?php
if ($Submit): ?>
<?php
$dbcnx = @mysql_connect( "us-cdbr-azure-northcentral-a.cleardb.com","b3262821ada9ac","cacb753a");
mysql_select_db("alexwdb");
$inssql = "INSERT INTO projects SET " .
"name='$name', " .
"description='$description', " .
"status='$status', " .
"link='$link';";
if (mysql_query($inssql)) { echo("<P>New Record Added.<br>");
} else {
echo("<P>Error adding new record. Query error below:<br>" .
mysql_error() . "<br>"); } ?>
Add a<?php if ($Submit){ echo "nother";} ?> record<br>
<? else: ?>
Add a record:<? endif; ?><form name="insform" method="POST" action="<? echo $_SERVER['PHP_SELF'];?>">
name <input name="name" type="text"><br>
description <input name="description" type="text"><br>
status <input name="status" type="text"><br>
link <input name="link" type="text"><br>
<input type="Submit" value="Submit" name="Submit"><br>
</font>
<div class="container">
     

<table class="table table-bordered">



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>
