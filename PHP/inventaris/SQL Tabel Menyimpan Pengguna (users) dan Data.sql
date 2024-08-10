CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
INSERT INTO users (username, nama_lengkap, password) 
VALUES ('admin', 'Administrator', 'admin_password');


CREATE TABLE rbm_bos_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Kode_Rekening_Belanja VARCHAR(50) NOT NULL,
    Kode_Barang VARCHAR(50) NOT NULL,
    Nama_Jenis_Barang VARCHAR(100) NOT NULL,
    Merk_Type VARCHAR(100) NOT NULL,
    Spesifikasi TEXT NOT NULL,
    Harga_Perolehan_Satuan_Barang DECIMAL(15,2) NOT NULL,
    Jumlah_Barang INT NOT NULL,
    Nomor_BAP_PPHP_BAST VARCHAR(50) NOT NULL,
    Tanggal_BAP_PPHP_BAST DATE NOT NULL,
    Keterangan TEXT NOT NULL,
    Sumber VARCHAR(50) NOT NULL,
    Kondisi_Barang VARCHAR(20) NOT NULL,
    Keterangan_Kondisi TEXT NOT NULL
);
