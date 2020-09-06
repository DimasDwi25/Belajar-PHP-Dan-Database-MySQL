<?php
$value = 'Dimas';
$value2 = 'Dimas Dwi';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); //expired in 1 hour

echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='cookie02.php'>Disini</a> Untuk pemeriksaan cookies</h2>";
?>