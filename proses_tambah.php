<?php
include("koneksi.php");
if(isset($_POST['kirim_data'])){
    $kode=$_POST['id'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

    $sql="INSERT INTO tb_siswa.tb_jurusan.tb_spp(id, nama, kelas, jurusan, tahun, nominal) VALUES ('$kode','$nama', '$kelas', '$jurusan', tahun, nominal)";
    $query=mysqli_query($conn, $sql);

    if($query){
        header('location:komputer.php?status:sukses');
    }else{
        header('location:komputer.php?status:gagal'); 
    }
}
?>