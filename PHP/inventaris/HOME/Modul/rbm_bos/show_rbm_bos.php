<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tampilkan Data RBM BOS</title>
<style>
    /* CSS styling untuk tabel dan layout umum */
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 1200px; /* Lebar maksimal kontainer */
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
    .result-table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }
    .result-table th, .result-table td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }
    .result-table th {
        background-color: #f2f2f2;
    }
    .result-table td {
        background-color: #fff;
    }
    .result-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .result-table tr:nth-child(odd) {
        background-color: #fff;
    }
    .result-table th:first-child, .result-table td:first-child {
        min-width: 50px;
        padding-left: 20px;
    }
    .result-table th:last-child, .result-table td:last-child {
        padding-right: 20px;
    }
    
    /* Gradasi warna untuk baris tabel */
    .result-table tr:nth-child(even) {
        background: linear-gradient(to right, #f0f0f0, #ffffff);
    }
    .result-table tr:nth-child(odd) {
        background: linear-gradient(to right, #ffffff, #f0f0f0);
    }

    /* Responsiveness */
    @media only screen and (max-width: 600px) {
        .container {
            padding: 10px;
        }
        .result-table th, .result-table td {
            padding: 8px;
            font-size: 14px;
        }
        .result-table th:first-child, .result-table td:first-child {
            min-width: auto;
            padding-left: 10px;
        }
        .result-table th:last-child, .result-table td:last-child {
            padding-right: 10px;
        }
    }

    @media only screen and (max-width: 400px) {
        .container {
            padding: 5px;
        }
        .result-table th, .result-table td {
            padding: 6px;
            font-size: 12px;
        }
    }
</style>
</head>
<body>
<div class="container">
    <h2>Data RBM BOS</h2>
    <?php
    // Konfigurasi koneksi ke MySQL
    $host = "localhost"; // Host database
    $username = "root"; // Username database
    $password = ""; // Password database
    $database = "inventaris"; // Nama database

    // Membuat koneksi ke database
    $koneksi = mysqli_connect($host, $username, $password, $database);

    // Memeriksa koneksi
    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Query untuk mengambil data dari tabel rbm_bos
    $query_select = "SELECT *, (Harga_Perolehan_Satuan_Barang * Jumlah_Barang) AS Jumlah_Harga FROM rbm_bos_data";

    // Menjalankan query
    $result = mysqli_query($koneksi, $query_select);

    if (mysqli_num_rows($result) > 0) {
        echo "<div style='overflow-x:auto;'>";
        echo "<table class='result-table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>No</th>"; // Kolom nomor urut
        echo "<th>Kode Rekening Belanja</th>";
        echo "<th>Kode Barang</th>";
        echo "<th>Nama / Jenis Barang</th>";
        echo "<th>Merk / Type</th>";
        echo "<th>Spesifikasi</th>";
        echo "<th>Harga Perolehan Satuan Barang (Rp.)</th>";
        echo "<th>Jumlah Barang</th>";
        echo "<th>Jumlah Harga (Rp.)</th>";
        echo "<th>Nomor BAP / PPHP / BAST</th>";
        echo "<th>Tanggal BAP / PPHP / BAST</th>";
        echo "<th>Keterangan</th>";
        echo "<th>Aksi</th>"; // Kolom tambahan untuk Edit dan Hapus
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        
        $nomor = 1; // Inisialisasi nomor urut
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $nomor++ . "</td>"; // Menampilkan nomor urut
            echo "<td>" . $row['Kode_Rekening_Belanja'] . "</td>";
            echo "<td>" . $row['Kode_Barang'] . "</td>";
            echo "<td>" . $row['Nama_Jenis_Barang'] . "</td>";
            echo "<td>" . $row['Merk_Type'] . "</td>";
            echo "<td>" . $row['Spesifikasi'] . "</td>";
            echo "<td>Rp. " . number_format($row['Harga_Perolehan_Satuan_Barang'], 0, ',', '.') . "</td>";
            echo "<td>" . $row['Jumlah_Barang'] . "</td>";
            echo "<td>Rp. " . number_format($row['Jumlah_Harga'], 0, ',', '.') . "</td>";
            echo "<td>" . $row['Nomor_BAP_PPHP_BAST'] . "</td>";
            echo "<td>" . date('d M Y', strtotime($row['Tanggal_BAP_PPHP_BAST'])) . "</td>";
            echo "<td>" . $row['Keterangan'] . "</td>";
            // Tombol Edit
            echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | ";
            // Tombol Hapus
            echo "<a href='hapus.php?id=" . $row['id'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<p>Tidak ada data yang tersedia.</p>";
    }

    // Menutup koneksi database
    mysqli_close($koneksi);
    ?>
</div>
</body>
</html>
