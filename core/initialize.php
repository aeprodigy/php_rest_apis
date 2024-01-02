<?php
$db_user = "root";
$db_password ="";
$db_name = "php_rest";

//$db: This variable represents the PDO (PHP Data Objects) connection to the database.
$db = new PDO("mysql:host=127.0.0.1;dbname=".$db_name.";charset=utf8",$db_user,$db_password);

//set some db attributes
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*
    PDO::ATTR_EMULATE_PREPARES: This attribute disables the emulation of prepared statements. Emulation may lead to SQL injection vulnerabilities, so it's recommended to set this to false when using MySQL.

    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY: This attribute enables buffered queries. Buffered queries fetch the whole result set at once, which can be useful for large result sets.

    PDO::ATTR_ERRMODE: This attribute sets the error reporting mode. PDO::ERRMODE_EXCEPTION enables exceptions for errors, allowing you to handle database errors using try-catch blocks.
*/
define('APP_NAME', 'PHP REST APIs');

?>