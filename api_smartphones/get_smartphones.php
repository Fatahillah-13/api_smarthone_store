<?php
include 'db.php';

$sql = "SELECT * FROM smartphones";
$result = $conn->query($sql);

$smartphones = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $smartphones[] = $row;
    }
}

echo json_encode($smartphones);

$conn->close();
?>
