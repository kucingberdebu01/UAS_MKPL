<?php
// Konfigurasi koneksi ke MySQL
$host = "localhost"; // Host database
$username = "root"; // Username database
$password = ""; // Password database
$database = "inventaris"; // Nama database

$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Memeriksa data registrasi dari formulir
$nama_lengkap = isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Mencegah SQL Injection
$nama_lengkap = mysqli_real_escape_string($koneksi, $nama_lengkap);
$username = mysqli_real_escape_string($koneksi, $username);

// Mengecek apakah username sudah terdaftar sebelumnya
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($koneksi, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo "username sudah terdaftar";
} else {
    // Enkripsi password sebelum menyimpannya
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Menyimpan data ke dalam tabel users
    $insertQuery = "INSERT INTO users (nama_lengkap, username, password) VALUES ('$nama_lengkap', '$username', '$hashedPassword')";
    if (mysqli_query($koneksi, $insertQuery)) {
        // Pemberitahuan berhasil dan redirect ke halaman index.php
        echo '<script>alert("Registrasi berhasil. Silakan login dengan username dan password Anda.");</script>';
        echo '<script>window.location.href = "index.php";</script>';
    } else {
        // Pemberitahuan gagal
        echo '<script>alert("Registrasi gagal. Silakan coba lagi.");</script>';
    }
}

mysqli_close($koneksi);
?>
