<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simpan data login Anda di sini, seperti dalam database

    // Contoh sederhana untuk keperluan demonstrasi
    $validUsername = "contoh_username";
    $validPassword = "contoh_password";

    if ($username === $validUsername && $password === $validPassword) {
        // Login berhasil
        echo "Login berhasil. Selamat datang, $username!";
    } else {
        // Login gagal
        echo "Login gagal. Silakan coba lagi.";
    }
}
?>
