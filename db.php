<table class="table table-bordered">
        <thead>
          <tr>
            <th>Text</th>
          </tr>
        </thead>
        <tbody>
      
            
    

<?php

require_once 'config.php';


$db_connection = new PDO( "mysql:host=" . $hostname . ";dbname=" . $database, $user, $pass );

$results = $db_connection->query( 'SELECT data FROM hello_world' );

foreach ( $results as $row ) {
	echo '<tr><th>' . $row['data'] . '</th></tr>';

}


// Close the connection
$db_connection = null;
?>
  
        </tbody>
      </table>