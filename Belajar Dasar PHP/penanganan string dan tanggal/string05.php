<?php
//program penggunaan fungsi chr untuk menampilkan 256 karakter ASCII
echo "Menampilkan bilangan ASCII";
for ($i=1; $i<=256; $i++) {
 echo "<br>$i.\t". chr($i);
}
?>