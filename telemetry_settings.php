<?php

$db_type="mysql"; //Type of db: "mysql", "sqlite" or "postgresql"

// Sqlite3 settings
$Sqlite_db_file = "../telemetry.sql";

// Mysql settings
$MySql_username= .$ENV["MYSQL_USERNAME"];
$MySql_password=.$ENV["MYSQL_PASSWORD"];
$MySql_hostname=.$ENV["MYSQL_SERVICE_NAME"];
$MySql_databasename=.$ENV["MYSQL_DATABASE_NAME"];

// Postgresql settings
$PostgreSql_username="USERNAME";
$PostgreSql_password="PASSWORD";
$PostgreSql_hostname="DB_HOSTNAME";
$PostgreSql_databasename="DB_NAME";

?>
