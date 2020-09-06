<?php 
//program memeriksa suatu fungsi tersedia di PHP atau tidak
if (function_exists('exif_read_data')) {
    echo "fungsi exif_read_data() ada di PHP.<br />\n";
} else {
    echo "Fungsi exif_read_data() tidak ada di PHP. <br />\n";
}

?>