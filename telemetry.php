<?php

include_once('telemetry_settings.php');

$ip=($_SERVER['REMOTE_ADDR']);
$ua=($_SERVER['HTTP_USER_AGENT']);
$lang=($_SERVER['HTTP_ACCEPT_LANGUAGE']);
$dl=($_POST["dl"]);
$ul=($_POST["ul"]);
$ping=($_POST["ping"]);
$jitter=($_POST["jitter"]);
$log=($_POST["log"]);


$odbc="sqlsrv:Server=$SqlServer_hostname;";
$conn = new PDO($odbc, $SqlServer_username, $SqlServer_password) or die("1");
$conn->exec("
    if not exists (select * from sys.tables t where t.name = '$SqlServer_databasename')
        create table $SqlServer_databasename (
            id            int IDENTITY(1,1) PRIMARY KEY,
            timestamp     ,
            ip            text NOT NULL,
            ua            text NOT NULL,
            lang          text NOT NULL,
            dl            text,
            ul            text,
            ping          text,
            jitter        text,
            log           text
        );

");
$stmt = $conn->prepare("INSERT INTO $SqlServer_databasename (ip,ua,lang,dl,ul,ping,jitter,log) VALUES (?,?,?,?,?,?,?,?)") or die("2");
$stmt->execute(array($ip,$ua,$lang,$dl,$ul,$ping,$jitter,$log)) or die("3");
$conn = null;

?>
