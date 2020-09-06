<?php 
//program passing by value dalam fungsi
function tambah_string ($str) {
    $str =$str . ", Jakarta";
    return $str;
}
//pemanggilan fungsi
$str = "Universitas Budi Luhur";
echo "\$str = $str<br>";
echo tambah_string ($str). "<br>";
echo "\$str = $str<br>";

?>