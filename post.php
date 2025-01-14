<?php
$comment = $_POST['comment'];
echo "<div>$comment</div>";  // XSS açığı: kullanıcıdan alınan veri temizlenmeden doğrudan ekleniyor.
?>
