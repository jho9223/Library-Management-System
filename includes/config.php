<?php 
define('DB_HOST','librarysystemproject.atwebpages.com');
define('DB_USER','4717989');
define('DB_PASS','JosephProject1');
define('DB_NAME','4717989_library');

try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>