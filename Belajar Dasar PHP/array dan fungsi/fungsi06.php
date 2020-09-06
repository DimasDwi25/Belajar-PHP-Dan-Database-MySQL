<?php 
//program menampilkan defined-function yang didukung oleh PHP
function luas_lingkaran ($jari) {
    return 3.14 * $jari * $jari;
}

$arr = get_defined_functions();
echo "<pre>";
print_r ($arr);
echo"</pre>";

?>