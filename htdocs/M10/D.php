<h3> Data Mahasiswa UGM </h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Username</th>
        <th>Email</th>
    </tr>
    
    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($koneksi, "SELECT * FROM tbmhs");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>{$no}</td>
            <td>{$tampil['nama_lengkap']}</td>
            <td>{$tampil['username']}</td>
            <td>{$tampil['email']}</td>
        </tr>";
        $no++;
    }
    ?>
</table>