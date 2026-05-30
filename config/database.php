<?php

$host = "home2.kerta.my.id";
$user = "u55_UJGc6mIkHo";
$pass = "AxrukmQlH7@AfFZI@7x3HOnz";
$db   = "s55_evrp";

$conn = new mysqli(
    $host,
    $user,
    $pass,
    $db
);

if ($conn->connect_error) {
    die("Connection failed");
}