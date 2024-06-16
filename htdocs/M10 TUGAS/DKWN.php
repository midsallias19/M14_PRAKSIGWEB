<h3> Data Kewarganegaraan </h3>
<link rel="stylesheet" href="cssd.css">
<table border="1">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>Pekerjaan</th>
    </tr>
    
    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($koneksi, "SELECT * FROM tbkwn");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>{$no}</td>
            <td>{$tampil['username']}</td>
            <td>{$tampil['password']}</td>
            <td>{$tampil['nama']}</td>
            <td>{$tampil['tempat_lahir']}</td>
            <td>{$tampil['tanggal_lahir']}</td>
            <td>{$tampil['alamat']}</td>
            <td>{$tampil['agama']}</td>
            <td>{$tampil['pekerjaan']}</td>
        </tr>";
        $no++;
    }
    ?>
</table>