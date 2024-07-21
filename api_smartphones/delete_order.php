<?php
include 'db.php';

$id_pembelian = $_POST['id_pembelian'];

$sql = "DELETE FROM pemesanan WHERE id_pembelian = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_pembelian);

if ($stmt->execute()) {
    echo json_encode(["message" => "Order deleted successfully"]);
} else {
    echo json_encode(["message" => "Failed to delete order"]);
}

$stmt->close();
$conn->close();
?>
