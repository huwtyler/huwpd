<?php
	
$db = getenv ('DATABASE_HOST');
$db_user = getenv ('DATABASE_USER');
$db_pass = getenv ('DATABASE_PASS');
$db_name = 'db0ecnjs12gf06';

// Connecting, selecting database
$dbconn = pg_connect("host=$db dbname=$db_name user=$db_user password=$db_pass")
    or die('Could not connect: ' . pg_last_error());
    
// Performing SQL query
$query = 'SELECT * FROM users';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

var_dump($result);
  
// Closing connection
pg_close($dbconn);  
?>