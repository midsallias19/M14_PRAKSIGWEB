<h3> Input Data Mahasiswa UGM</h3> 
<form action="" method="post">
<table>
    <tr>
        <td width="130">Username</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td><input type="text" name="nama_lengkap"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan" name="proses"></td>
    </tr>
</table>
</form>
<?php
include "koneksi.php";
if (isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into tbmhs set
    username ='$_POST[username]',
    nama_lengkap ='$_POST[nama_lengkap]',
    email ='$_POST[email]',
    password='$_POST[password] '");

    echo "Berhasil! Data mahasiswa baru telah tersimpan.";
}
?>