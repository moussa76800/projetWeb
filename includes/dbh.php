<?php

$serverName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="projetWeb";

$connect=mysql_connect($serverName,$dbUsername, $dbPassword ,$dbName);

if (! $connect) {

    die("Connection failed !!".mysql_connect.error());
}


















?>