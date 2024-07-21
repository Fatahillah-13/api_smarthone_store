<?php
include 'db.php';

$sql = "SELECT p.id_pembelian, p.id_barang, p.nama_barang, p.jumlah_pembelian, s.gambar, s.harga
        FROM pemesanan p
        JOIN smartphones s ON p.id_barang = s.id_barang";

$result = $conn->query($sql);

$pemesanan = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pemesanan[] = $row;
    }
}else {
    echo json_encode(["message" => "No records found"]);
    exit;
}

header('Content-Type: application/json');
echo json_encode($pemesanan);

$conn->close();
?>
