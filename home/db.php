 <!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
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



<table class="table table-bordered">
        <thead>
          <tr>
            <th>Project Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Link</th>
          </tr>
        </thead>
        <tbody>
<?php

require_once 'config.php';


$db_connection = new PDO( "mysql:host=" . $hostname . ";dbname=" . $database, $user, $pass );

$results = $db_connection->query( 'SELECT name  FROM projects' );

foreach ( $results as $row ) {
	echo '<tr> <th>' . $row['name'] . '</th>';
}
$results = $db_connection->query( 'SELECT description  FROM projects' );

foreach ( $results as $row ) {
	echo '<th>' . $row['description'] . '</th>';
}
$results = $db_connection->query( 'SELECT status  FROM projects' );

foreach ( $results as $row ) {
	echo '<th>' . $row['status'] . '</th>';
}
$results = $db_connection->query( 'SELECT link  FROM projects' );

foreach ( $results as $row ) {
	echo '<th>' . $row['link'] . '</th> </tr>';
}


// Close the connection
$db_connection = null;
?>
  
        </tbody>
    </table>
</body>