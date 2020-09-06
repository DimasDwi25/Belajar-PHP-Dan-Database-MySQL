<?php
/* PHP mendukung 8 tipe data antara lain :
1.boolean
2.integer 
3.float 
4.string 
5.array 
6.object 
7.resource 
8.NULL 
*/

$nim = "0411500400";
$nama = "Dimas Dwi Susanto";
$umur = 23;
$nilai = 82.25;
$status = TRUE;

echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>",$nilai);
if($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";
?>