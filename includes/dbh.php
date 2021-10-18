<?php

$serverName="localhost";
$dbUsername="root";
$dbPassword="lili";
$dbName="projetWeb";

$connect=mysqli_connect($serverName,$dbUsername, $dbPassword ,$dbName);

if (! $connect) {

    die("Connection failed !! :" . mysqli_connect_error());
}


















?>