<?php

require_once 'config.php';


$db_connection = new PDO( "mysql:host=" . $hostname . ";dbname=" . $database, $user, $pass );

$results = $db_connection->query( 'SELECT data FROM hello_world' );

foreach ( $results as $row ) {
	echo '<p>' . $row['data'] . '</p>';

}
$sql = "INSERT INTO hello_world (data)
 VALUES ('hi')";

// Close the connection
$db_connection = null;