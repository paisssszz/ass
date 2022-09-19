<?php

include 'koneksi.php';

if(isset($_POST['Simpan_Data_Perubahan'])) 
 
{
    $no = $_POST['no']; 
    $id_siswa = $_POST['id_siswa']; 
    $nama_siswa= $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    

    $sql = 
        "UPDATE assemnt SET nama_siswa='$nama_siswa', kelas='$kelas', jurusan='$jurusan' WHERE id_siswa='$id_siswa'";
    $query = mysqLi_query($connect, $sql); 

if($query){
    header('Location: index.php'); 
}else{
    header('Location: updet.php?status=gagal'); 
}
}
?>