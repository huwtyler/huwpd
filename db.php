<?php
	
$db = getenv ('DATABASE_HOST');
$db_user = getenv ('DATABASE_USER');
$db_pass = getenv ('DATABASE_PASS');
$db_name = 'db0ecnjs12gf06';

// Connecting, selecting database
$dbconn = pg_connect("host=$db dbname=$db_name user=$db_user password=$db_pass")
    or die('Could not connects: ' . pg_last_error());
  
// Closing connection
pg_close($dbconn);  
?>