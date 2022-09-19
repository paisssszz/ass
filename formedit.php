<?php
include 'koneksi.php';
    $id_siswa = $_GET['id_siswa'];
    // get itu adalah sebagai metode pengeriman url
    $sql = "SELECT * FROM assemnt WHERE id_siswa='$id_siswa'";  
    // memilih semua dari table pelanggan kondisi kondisi nya itu id
    $query = mysqLi_query($connect, $sql); 
    // perintah untuk menangkap data dari hasil sql,connedt nya itu buat mengkonekan ke database
    $pel = mysqli_fetch_assoc($query); 
    // assoy ini sama seperti array yaitu mengambil data dari query dan mengubah nya ke variable pel

if(mysqli_num_rows($query) < 1 ){ 
    // ruws itu bariss jika baris nya kosong dia akan muncul die 
    die("data tidak ditemukan...");
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="updet.php" method="post">
        <h3>Update Data Siswa : </h3> 
        <div>
                <label for="number">No :</label>
                <input type="number" name="no" required="required">
            </div>
            <br>
            <div>
                <label for="number">id siswa :</label>
                <input type="hidden" name="id_siswa required="required">
            </div>
            <br>
            <div>
                <label for="text">nama siswa :</label>
                <input type="text" name="nama_siswa" required="required">
            </div>
            <br>
            <div>
                <label for="text">kelas :</label>
                <input type="text" name="kelas" required="required"> 
            </div>
            <br>
            <div>
                <label for="text">jurusan:</label>
                <input type="text" name="jurusan" required="required">
            </div>
            <br>
<input type="submit" name="Simpan_Data_Perubahan" value="simpan"> 
</form>

</body>
</html>