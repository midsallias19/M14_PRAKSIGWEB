<h3> Input Data Kewarganegaraan</h3> 
<link rel="stylesheet" type="text/css" href="coba.css">
<form action="" method="post">
<table>
    <tr>
        <td width="130">Username</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td><input type="text" name="tempat_lahir"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="date" name="tanggal_lahir"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>Agama</td>
        <td><input type="text" name="agama"></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td><input type="text" name="pekerjaan"></td>
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
    mysqli_query($koneksi, "insert into tbkwn set
    username ='$_POST[username]',
    password ='$_POST[password]',
    nama ='$_POST[nama]',
    tempat_lahir ='$_POST[tempat_lahir]',
    tanggal_lahir ='$_POST[tanggal_lahir]',
    alamat ='$_POST[alamat]',
    agama ='$_POST[agama]',
    pekerjaan='$_POST[pekerjaan] '");

    echo "Berhasil! Data kewarganegaraan telah tersimpan.";
}
?>