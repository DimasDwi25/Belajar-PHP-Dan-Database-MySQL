<?php
//program menampilkan file dan direktori dalam suatu direktori
$dir = "images";
if ($handle = opendir($dir)) {
 while (false !== ($file = readdir($handle))) {
 if ($file != "." && $file != "..") {
 echo "$file<br>";
 }
 }
 closedir($handle);
}
?> 