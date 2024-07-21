<?php
include 'db.php';

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah_pembelian = $_POST['jumlah_pembelian'];

$sql = "INSERT INTO pemesanan (id_barang, nama_barang, jumlah_pembelian) VALUES ('$id_barang', '$nama_barang', '$jumlah_pembelian')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Order added successfully"]);
} else {
    echo json_encode(["message" => "Error: " . $sql . "<br>" . $conn->error]);
}

$conn->close();
?>
