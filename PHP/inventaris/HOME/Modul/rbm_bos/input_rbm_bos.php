<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Input Data RBM BOS</title>
<style>
    /* CSS styling untuk form */
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .form-group input, 
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .form-group textarea {
        height: 100px;
    }
    .form-group button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    .form-group button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Form Input Data RBM BOS</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
            <label for="Kode_Rekening_Belanja">Kode Rekening Belanja:</label>
            <input type="text" id="Kode_Rekening_Belanja" name="Kode_Rekening_Belanja" required>
        </div>
        <div class="form-group">
            <label for="Kode_Barang">Kode Barang:</label>
            <input type="text" id="Kode_Barang" name="Kode_Barang" required>
        </div>
        <div class="form-group">
            <label for="Nama_Jenis_Barang">Nama / Jenis Barang:</label>
            <input type="text" id="Nama_Jenis_Barang" name="Nama_Jenis_Barang" required>
        </div>
        <div class="form-group">
            <label for="Merk_Type">Merk / Type:</label>
            <input type="text" id="Merk_Type" name="Merk_Type" required>
        </div>
        <div class="form-group">
            <label for="Spesifikasi">Spesifikasi:</label>
            <textarea id="Spesifikasi" name="Spesifikasi" required></textarea>
        </div>
        <div class="form-group">
            <label for="Harga_Perolehan_Satuan_Barang">Harga Perolehan Satuan Barang (Rp.):</label>
            <input type="text" id="Harga_Perolehan_Satuan_Barang" name="Harga_Perolehan_Satuan_Barang" required>
        </div>
        <div class="form-group">
            <label for="Jumlah_Barang">Jumlah Barang:</label>
            <input type="number" id="Jumlah_Barang" name="Jumlah_Barang" required>
        </div>
        <div class="form-group">
            <label for="Nomor_BAP_PPHP_BAST">Nomor BAP / PPHP / BAST:</label>
            <input type="text" id="Nomor_BAP_PPHP_BAST" name="Nomor_BAP_PPHP_BAST" required>
        </div>
        <div class="form-group">
            <label for="Tanggal_BAP_PPHP_BAST">Tanggal BAP / PPHP / BAST:</label>
            <input type="date" id="Tanggal_BAP_PPHP_BAST" name="Tanggal_BAP_PPHP_BAST" required>
        </div>
        <div class="form-group">
            <label for="Keterangan">Keterangan:</label>
            <textarea id="Keterangan" name="Keterangan" required></textarea>
        </div>
        <div class="form-group">
            <label for="Sumber">Sumber:</label>
            <select id="Sumber" name="Sumber">
                <option value="BOS">BOS</option>
                <option value="BOSDA">BOSDA</option>
                <option value="Pembelian">Pembelian</option>
                <option value="Hibah">Hibah</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Kondisi_Barang">Kondisi Barang:</label>
            <select id="Kondisi_Barang" name="Kondisi_Barang">
                <option value="Baik">Baik</option>
                <option value="Rusak Ringan">Rusak Ringan</option>
                <option value="Rusak Berat">Rusak Berat</option>
                <option value="Hilang">Hilang</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Keterangan_Kondisi">Keterangan Kondisi:</label>
            <textarea id="Keterangan_Kondisi" name="Keterangan_Kondisi" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Simpan</button>
        </div>
    </form>
    <?php
    // Menjalankan script PHP untuk menyimpan data ke database
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        // Mengambil data dari formulir atau sumber lainnya
        $kodeRekeningBelanja = mysqli_real_escape_string($koneksi, $_POST['Kode_Rekening_Belanja']);
        $kodeBarang = mysqli_real_escape_string($koneksi, $_POST['Kode_Barang']);
        $namaJenisBarang = mysqli_real_escape_string($koneksi, $_POST['Nama_Jenis_Barang']);
        $merkType = mysqli_real_escape_string($koneksi, $_POST['Merk_Type']);
        $spesifikasi = mysqli_real_escape_string($koneksi, $_POST['Spesifikasi']);
        $hargaPerolehanSatuanBarang = mysqli_real_escape_string($koneksi, $_POST['Harga_Perolehan_Satuan_Barang']);
        $jumlahBarang = mysqli_real_escape_string($koneksi, $_POST['Jumlah_Barang']);
        $nomorBAPPPHPBAST = mysqli_real_escape_string($koneksi, $_POST['Nomor_BAP_PPHP_BAST']);
        $tanggalBAPPPHPBAST = mysqli_real_escape_string($koneksi, $_POST['Tanggal_BAP_PPHP_BAST']);
        $keterangan = mysqli_real_escape_string($koneksi, $_POST['Keterangan']);
        $sumber = mysqli_real_escape_string($koneksi, $_POST['Sumber']);
        $kondisiBarang = mysqli_real_escape_string($koneksi, $_POST['Kondisi_Barang']);
        $keteranganKondisi = mysqli_real_escape_string($koneksi, $_POST['Keterangan_Kondisi']);

        // Query untuk memasukkan data ke dalam tabel rbm_bos
        $query = "INSERT INTO rbm_bos_data (Kode_Rekening_Belanja, Kode_Barang, Nama_Jenis_Barang, Merk_Type, Spesifikasi, Harga_Perolehan_Satuan_Barang, Jumlah_Barang, Nomor_BAP_PPHP_BAST, Tanggal_BAP_PPHP_BAST, Keterangan, Sumber, Kondisi_Barang, Keterangan_Kondisi) 
                  VALUES ('$kodeRekeningBelanja', '$kodeBarang', '$namaJenisBarang', '$merkType', '$spesifikasi', '$hargaPerolehanSatuanBarang', '$jumlahBarang', '$nomorBAPPPHPBAST', '$tanggalBAPPPHPBAST', '$keterangan', '$sumber', '$kondisiBarang', '$keteranganKondisi')";

        // Menjalankan query dan memeriksa hasilnya
        if (mysqli_query($koneksi, $query)) {
            echo "<p>Data berhasil disimpan.</p>";
        } else {
            echo "<p>Error: " . $query . "<br>" . mysqli_error($koneksi) . "</p>";
        }

        // Menutup koneksi database
        mysqli_close($koneksi);
    }
    ?>
</div>
</body>
</html>
