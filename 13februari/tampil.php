<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bangunan</title>
</head>
<body>
    <center>
        <h4><a href=tambah.php>TAMBAH</a></h4>
        <table border="1">
        <tr>
            <td>NAMA TOKO</td>
            <td>ALAMAT</td>
            <td>NO SIUP</td>
            <td>NAMA PEMILIK</td>
            <td>NAMA BAHAN</td>
            <td>SATUAN</td>
            <td>HARGA</td>
            <td>AKSI</td>
</tr>

<?php
include("koneksi.php");

$sql="SELECT * FROM tb_bahan INNER JOIN tb_toko ON tb_bahan.id_bahan= tb_toko.id_bahan";
$query= mysqli_query($db, $sql);
while($row=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$row['nama_toko']."</td>";
    echo"<td>".$row['alamat']."</td>";
    echo"<td>".$row['no_siup']."</td>";
    echo"<td>".$row['nama_pemilik']."</td>";
    echo"<td>".$row['nama_bahan']."</td>";
    echo"<td>".$row['satuan']."</td>";
    echo"<td>".$row['harga']."</td>";
    echo"<td>";
    echo"<a href='edit.php?id_toko=".$row['id_toko']."'>Edit</a>|";
    echo"<a href='hapus.php?id_toko=".$row['id_toko']."'>Hapus</a>|";
    echo"</td>";
    echo"</tr>";
}
?>
</center>
</table>
</body>
</html>