<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Id</td>
            <td>Nama Siswa</td>
            <td>Alamat</td>
            <td>JK</td>
            <td>Agama</td>
            <td>Asal Sekolah</td>
            <td>Aksi</td>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($konek, "SELECT * FROM data_fahmi"); 
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td> 
            <td><?php echo $data['id_siswa']; ?></td>
            <td><?php echo $data['nama_siswa']; ?></td>
            <td><?php echo $data['alamat_siswa']; ?></td>
            <td><?php echo $data['jk_siswa']; ?></td>
            <td><?php echo $data['agama_siswa']; ?></td>
            <td><?php echo $data['asal_sekolah']; ?></td>
            <td>
                <a href="">Edit</a> <a href="">Hapus</a>    
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>