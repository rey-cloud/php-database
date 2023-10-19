<?php

require $_SERVER["DOCUMENT_ROOT"] . '/dbconnect/config/database.php';


$stmt = $conn->prepare("UPDATE users 
    SET deleted_at = ?
    WHERE id = ?");

$stmt->bind_param("ss", $deleted_at, $id );

$deleted_at = date("Y-m-d H:i:s");
$id = $_GET["id"];
$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../../index.php?save-success=true");