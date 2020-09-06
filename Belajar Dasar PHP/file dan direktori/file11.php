<?php
//program memeriksa keadaan suatu file
$filename = "data.txt";
if (file_exists($filename)) {
 echo "File $filename ADA";
} else {
 echo "File $filename TIDAK ADA";
}
?> 