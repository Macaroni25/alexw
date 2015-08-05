<?php if (($_SERVER['HTTP_REFERER']=="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']) && (!empty($_POST))){ extract($_POST);} ?>
<html><head></head><body>
<p><font face=Arial>
<?php
if ($Submit): ?>
<?php
$dbcnx = @mysql_connect( "us-cdbr-azure-northcentral-a.cleardb.com","b3262821ada9ac","cacb753a");
mysql_select_db("projects");
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
</body>
</html>
