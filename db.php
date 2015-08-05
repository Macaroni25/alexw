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
	echo '<tr> <th>' . $row['status'] . '</th>';
}
$results = $db_connection->query( 'SELECT link  FROM projects' );

foreach ( $results as $row ) {
	echo '<tr> <th>' . $row['link'] . '</th></tr>';
}


// Close the connection
$db_connection = null;
?>
  
        </tbody>
      </table>