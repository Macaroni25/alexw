<table class="table table-bordered">
        <thead>
          <tr>
            <th>Text</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
    

<?php

require_once 'config.php';


$db_connection = new PDO( "mysql:host=" . $hostname . ";dbname=" . $database, $user, $pass );

$results = $db_connection->query( 'SELECT data FROM hello_world' );

foreach ( $results as $row ) {
	echo '<th>' . $row['data'] . '</th>';

}


// Close the connection
$db_connection = null;
?>
    </tr>
        </tbody>
      </table>