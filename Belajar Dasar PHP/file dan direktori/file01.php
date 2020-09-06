<?php 
//program mengakses (membuka) file dengan mode r

$handle = fopen ($namafile, "r");
if(!$handle) {
    echo "<b>File tidak dapat dibuka atau belum ada</b>";
} else {
    echo "<b>File berhasil dibuka</b>";
}

?>