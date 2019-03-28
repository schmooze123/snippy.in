<?php
define('DB_SERVER', '166.62.28.88');
define('DB_USERNAME', 'priyanshriv50');    // DB username
define('DB_PASSWORD', 'P9009039993p');    // DB password
define('DB_DATABASE', 'snippy');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>