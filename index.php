<?php

require_once 'config.php';

try {
    $oConn = new PDO('mysql:host='.$sHost.';dbname='.$sDb, $sUsername, $sPassword);
    $oConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo '1'
    $oStmt = $oConn->prepare('SELECT data FROM `hello_world`');
    $oResult = $oStmt->fetchAll();
echo '2'
    foreach ($oResult as $aRow) {
        print_r($aRow['data']);
    }
echo '3'
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    echo '4'
}

echo 'Hello World!'

?>