<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data yang dikirim dari formulir
    $id = $_POST['id'];
    $kodeRekeningBelanja = $_POST['Kode_Rekening_Belanja'];
    $kodeBarang = $_POST['Kode_Barang'];
    $namaJenisBarang = $_POST['Nama_Jenis_Barang'];
    $merkType = $_POST['Merk_Type'];
    $spesifikasi = $_POST['Spesifikasi'];
    $hargaPerolehanSatuanBarang = $_POST['Harga_Perolehan_Satuan_Barang'];
    $jumlahBarang = $_POST['Jumlah_Barang'];
    $nomorBAPPPHPBAST = $_POST['Nomor_BAP_PPHP_BAST'];
    $tanggalBAPPPHPBAST = $_POST['Tanggal_BAP_PPHP_BAST'];
    $keterangan = $_POST['Keterangan'];

    // Koneksi ke database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "inventaris";

    $koneksi = new mysqli($host, $username, $password, $database);

    // Periksa koneksi
    if ($koneksi->connect_error) {
        die("Koneksi database gagal: " . $koneksi->connect_error);
    }

    // Prepared statement untuk update data
    $stmt = $koneksi->prepare("UPDATE rbm_bos_data SET 
                    Kode_Rekening_Belanja = ?, 
                    Kode_Barang = ?, 
                    Nama_Jenis_Barang = ?, 
                    Merk_Type = ?, 
                    Spesifikasi = ?, 
                    Harga_Perolehan_Satuan_Barang = ?, 
                    Jumlah_Barang = ?, 
                    Nomor_BAP_PPHP_BAST = ?, 
                    Tanggal_BAP_PPHP_BAST = ?, 
                    Keterangan = ?
                    WHERE id = ?");
    $stmt->bind_param("ssssssssssi", $kodeRekeningBelanja, $kodeBarang, $namaJenisBarang, $merkType, $spesifikasi, $hargaPerolehanSatuanBarang, $jumlahBarang, $nomorBAPPPHPBAST, $tanggalBAPPPHPBAST, $keterangan, $id);

    // Eksekusi query
    if ($stmt->execute()) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup koneksi
    $stmt->close();
    $koneksi->close();
} else {
    // Ambil ID dari URL
    $id = $_GET['id'];

    // Koneksi ke database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "inventaris";

    $koneksi = new mysqli($host, $username, $password, $database);

    // Periksa koneksi
    if ($koneksi->connect_error) {
        die("Koneksi database gagal: " . $koneksi->connect_error);
    }

    // Prepared statement untuk mengambil data dari tabel rbm_bos_data berdasarkan ID
    $stmt = $koneksi->prepare("SELECT * FROM rbm_bos_data WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    // Menutup koneksi database
    $stmt->close();
    $koneksi->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data RBM BOS</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        color: #333;
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
        color: #4CAF50;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
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
        display: block;
        width: 100%;
    }
    .form-group button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Edit Data RBM BOS</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <div class="form-group">
            <label for="Kode_Rekening_Belanja">Kode Rekening Belanja:</label>
            <input type="text" id="Kode_Rekening_Belanja" name="Kode_Rekening_Belanja" value="<?php echo $data['Kode_Rekening_Belanja']; ?>" required>
        </div>
        <div class="form-group">
            <label for="Kode_Barang">Kode Barang:</label>
            <input type="text" id="Kode_Barang" name="Kode_Barang" value="<?php echo $data['Kode_Barang']; ?>" required>
        </div>
        <div class="form-group">
            <label for="Nama_Jenis_Barang">Nama Jenis Barang:</label>
            <input type="text" id="Nama_Jenis_Barang" name="Nama_Jenis_Barang" value="<?php echo $data['Nama_Jenis_Barang']; ?>" required>
        </div>
        <div class="form-group">
            <label for="Merk_Type">Merk Type:</label>
            <input type="text" id="Merk_Type" name="Merk_Type" value="<?php echo $data['Merk_Type']; ?>" required>
        </div>
        <div class="form-group">
            <label for="Spesifikasi">Spesifikasi:</label>
            <textarea id="Spesifikasi" name="Spesifikasi" required><?php echo $data['Spesifikasi']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="Harga_Perolehan_Satuan_Barang">Harga Perolehan Satuan Barang (Rp.):</label>
            <input type="text" id="Harga_Perolehan_Satuan_Barang" name="Harga_Perolehan_Satuan_Barang" value="<?php echo $data['Harga_Perolehan_Satuan_Barang']; ?>" required>
        </div>
        <div class="form-group">
            <label for="Jumlah_Barang">Jumlah Barang:</label>
            <input type="number" id="Jumlah_Barang" name="Jumlah_Barang" value="<?php echo $data['Jumlah_Barang']; ?>" required>
        </div>
        <div class="form-group">
            <label for="Nomor_BAP_PPHP_BAST">Nomor BAP PPHP BAST:</label>
            <input type="text" id="Nomor_BAP_PPHP_BAST" name="Nomor_BAP_PPHP_BAST" value="<?php echo $data['Nomor_BAP_PPHP_BAST']; ?>" required>
        </div>
        <div class="form-group">
            <label for="Tanggal_BAP_PPHP_BAST">Tanggal BAP PPHP BAST:</label>
            <input type="date" id="Tanggal_BAP_PPHP_BAST" name="Tanggal_BAP_PPHP_BAST" value="<?php echo $data['Tanggal_BAP_PPHP_BAST']; ?>" required>
        </div>
        <div class="form-group">
            <label for="Keterangan">Keterangan:</label>
            <textarea id="Keterangan" name="Keterangan" required><?php echo $data['Keterangan']; ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit">Update Data</button>
        </div>
    </form>
</div>
</body>
</html>
<?php
}
?>
