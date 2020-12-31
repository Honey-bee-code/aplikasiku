<?php
if (!isset($_SESSION)) {
    session_start();
    }
include 'koneksi.php';
include 'csrf.php';
$id = $_POST['id_barang'];
$query = "SELECT * FROM tabel_barang WHERE id_barang=? ORDER BY id_barang DESC";
$dewan1 = $koneksi -> prepare($query);
$dewan1 -> bind_param('i', $id);
$dewan1 -> execute();
$res1 = $dewan1 -> get_result();
while ($row = $res1 -> fetch_assoc()) {
    $h['id_barang'] = $row['id_barang'];
    $h['nama_barang'] = $row['nama_barang'];
    $h['harga'] = $row['harga'];
    $h['jml_stok'] = $row['jml_stok'];
    $h['tgl_input'] = $row['tgl_input'];
}
echo json_encode($h);
$koneksi -> close();
?>