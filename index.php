<?php

$hostname = 'us-cdbr-azure-northcentral-a.cleardb.com';
$user = 'b3262821ada9ac';
$pass = 'cacb753a';
$database = 'alexwdb';

$db_connection = new PDO( "mysql:host=" . $hostname . ";dbname=" . $database, $user, $pass );

$results = $db_connection->query( 'SELECT data FROM hello_world' );

foreach ( $results as $row ) {
	echo '<p>' . $row['data'] . '</p>';

}

// Close the connection
$db_connection = null;