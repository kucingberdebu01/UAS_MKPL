<?php
// Proses Hapus Data
if (isset($_GET['id'])) {
    // Ambil ID dari URL
    $id = $_GET['id'];

    // Koneksi ke database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "inventaris";

    $koneksi = mysqli_connect($host, $username, $password, $database);

    // Periksa koneksi
    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Query untuk hapus data
    $query_delete = "DELETE FROM rbm_bos_data WHERE id = $id";

    // Eksekusi query
    if (mysqli_query($koneksi, $query_delete)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $query_delete . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
}
?>
