<?php
    // Mengarahkan pengguna ke dashboard.com dengan menyertakan pesan logout sebagai parameter URL
    $logoutMessage = "Anda telah berhasil logout";
    header("Location: http://dashboard.com?logout_message=" . urlencode($logoutMessage));
    exit();
?>