<?php
//--------------koneksi-------------//
include("koneksi.php");
//---------------------------------//
$id = $_GET['id_toko'];
//---------------query-------------//
$sql= "DELETE FROM tb_toko WHERE id_toko=$id";
$query = mysqli_query($db, $sql);
//----------------------------------------------//
$sql= "DELETE FROM tb_bahan WHERE id_bahan=$id";
$query = mysqli_query($db, $sql);
//---------------------------------------------//
if($query){
    header("location:tampil.php?status=sukses");
}else{
    die("akses dilarang");
}
?>