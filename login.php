<?php
// Kullanıcıdan alınan veriler
$username = $_POST['username'];
$password = $_POST['password'];

// Veritabanı bağlantısı (bu örnekte güvenlik önlemi yok)
$connection = mysqli_connect("localhost", "root", "", "test_db");

// Güvenlik açığı: Kullanıcı verisi doğrudan sorguya ekleniyor
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    echo "Giriş başarılı!";
} else {
    echo "Geçersiz kullanıcı adı veya şifre.";
}
?>
