<?php
include 'koneksi.php';

if(isset($_POST['Simpan_Data_Siswa'])){ 
        //isset mengecek  
    $no=$_POST['no'];    
    $id_siswa=$_POST['id_siswa'];
    $nama_siswa=$_POST['nama_siswa'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];

    $sql="INSERT INTO assemnt (no,id_siswa,nama_siswa,kelas,jurusan) VALUES ('$no','$id_siswa','$nama_siswa','$kelas','$jurusan')";
    
    $query = mysqli_query ($connect, $sql);

    if($query){
        header('Location: index.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }

}
?>