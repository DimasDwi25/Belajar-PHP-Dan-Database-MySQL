<?php 
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user == "dimas" && $pass == "rahasia123") {
        echo "<h2>Login Berhasil,SEMANGAT TERUS!!!</h2>";
    } else {
        echo "<h2>Login Gagal,BELAJAR LAGI!!!!</h2>";
    }
}
?>