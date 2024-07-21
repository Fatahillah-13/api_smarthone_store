<?php
include 'db.php';

$id_pembelian = $_POST['id_pembelian'];
$jumlah_pembelian = $_POST['jumlah_pembelian'];

$sql = "UPDATE pemesanan SET jumlah_pembelian = ? WHERE id_pembelian = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $jumlah_pembelian, $id_pembelian);

if ($stmt->execute()) {
    echo json_encode(["message" => "Order updated successfully"]);
} else {
    echo json_encode(["message" => "Failed to update order"]);
}

$stmt->close();
$conn->close();
?>
