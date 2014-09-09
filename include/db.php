<?php
$mysql_ini = parse_ini_file("$docRoot/.config/mysql.ini");
$dbHostName = $mysql_ini['server'];
$dbUserName = $mysql_ini['username'];
$dbPassword = $mysql_ini['password'];
$dbDatabaseName = $mysql_ini['database'];

