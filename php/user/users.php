<?php

require $_SERVER["DOCUMENT_ROOT"] . '/dbconnect/config/database.php';

$sql = "SELECT * FROM users WHERE deleted_at IS null";
$result = $conn->query($sql);

$conn->close();