<?php

include "../db_connect/db_connection.php";

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

$countQuery = "SELECT COUNT(*) AS totalusers FROM users";
$countResult = mysqli_query($conn, $countQuery);
$countRow = mysqli_fetch_assoc($countResult);
$totalUsers = $countRow["totalusers"];


