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

// Memeriksa data login dari formulir
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Mencegah SQL Injection
$username = mysqli_real_escape_string($koneksi, $username);

// Memeriksa kredensial pengguna di database
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($koneksi, $query);

if ($result && mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $storedPassword = $row['password'];
    if (password_verify($password, $storedPassword)) {
        // Login berhasil, arahkan ke home.php
        session_start();
        $_SESSION['username'] = $username;
        header("Location: http://localhost/inventaris/HOME/homee.php");
        exit();
    } else {
        echo "Password yang dimasukkan salah";
    }
} else {
    echo "username tidak ditemukan";
}

mysqli_close($koneksi);
?>
