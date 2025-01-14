<?php
$file = $_GET['file'];

// Güvenlik açığı: Kullanıcılar, URL parametrelerini manipüle ederek başka dosyalara erişebilir
echo "Dosya: " . $file;
?>
