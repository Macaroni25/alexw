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
	echo '<tr><th>' . $row['name'] . '</th></tr>';
}

$results = $db_connection->query( 'SELECT name  FROM projects' );

foreach ( $results as $row ) {
        echo '<tr><th>' . $row['description'] . '</th></tr>';
}

$results = $db_connection->query( 'SELECT name  FROM projects' );

foreach ( $results as $row ) {
        echo '<tr><th>' . $row['status'] . '</th></tr>';
}

$results = $db_connection->query( 'SELECT name  FROM projects' );

foreach ( $results as $row ) {
        echo '<tr><th>' . $row['link'] . '</th></tr>';

}


// Close the connection
$db_connection = null;
?>
  
        </tbody>
      </table>