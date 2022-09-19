<?php
include "koneksi.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="pojokkiri">
        <div class="logo">
            <h1>Paiss<span>zz</span></h1> <br>
        </div>
        <div class="siswa">
            <a href=""><p>Data Siswa</p></a> <br>  
        </div>
        <div class="barang">
            <a href=""><p>Data Barang</p></a>
        </div>
    </div>
        <div class="nav">
            <p>Data Siswa</p> 
        </div>
        <div class="tambah">
            <h4><a href="tambahdata.html">[+] Tambah Data Siswa</a></h4>
        </div> 
        <br> 
    <table border="1">
            <tr>
                <th>no </th>   
                <th>Id Siswa</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Action</th> 
            </tr>
        
        
        <?php
        // memilih semua dari table pelanggan 
        $sql = " SELECT * FROM assemnt ";
        // mysqli query adalah untuk mengambil data hasil dari sql
        $query = mysqli_query ($connect, $sql);
        // array ini sebagai penyimpan dari query dan berubah menjadi variable pel
        while($pel = mysqli_fetch_array($query)){
            // WHILE PENGUlangan 
         echo"
            <tr>
                <td>$pel[no]</td>
                <td>$pel[id_siswa]</td>
                <td>$pel[nama_siswa]</td>
                <td>$pel[kelas]</td>
                <td>$pel[jurusan]</td>
                <td>
                    <a href='formedit.php?id_siswa=".$pel['id_siswa']."'>Edit</a>
                    <a href='hapus.php?id_siswa=".$pel['id_siswa']."'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>