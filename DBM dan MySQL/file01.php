<?php 
//menyambungkan database
//yang kita butuhkan host,user,password,database
//host '127.0.0.1',user'roor',pass 'root',nama database
$link = mysqli_connect('localhost','root','','belajar');

//menguji error
//menutup koneksi
if(!$link) {
    die ('ada error ' . mysqli_connect_error());
}

//membuat database
// $query = "CREATE DATABASE belajarkoding";

// if(mysqli_query($link,$query)) {
//     echo "database berhasil dibuat";
// } else {
//     echo "GAGAL";
// }

//menampilkan database
$query = "SELECT * FROM murid";
$hasil = mysqli_query($link,$query);

if(mysqli_num_rows($hasil) > 0){
    while($data = mysqli_fetch_assoc($hasil)) {
        echo $data['id'] . $data['nama']  . $data['umur'] .  "<br>";
    }
}

//menutup koneksi
mysqli_close($link);

?>