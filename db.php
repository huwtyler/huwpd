<?php
	
$db = getenv ('DATABASE_URL');
$db_user = getenv ('DATABASE_USER');
$db_pass = getenv ('DATABASE_PASS');

// Connecting, selecting database
$dbconn = pg_connect("host=$db dbname=db0ecnjs12gf06 user=$db_user password=$db_pass")
    or die('Could not connects: ' . pg_last_error());
  
// Closing connection
pg_close($dbconn);  
?>