<?php

if (isset($_POST['save'])) {

     $nis            = $_POST['nis'];
     $nama           = $_POST['nama'];
     $jenis_kelamin  = $_POST['jenis_kelamin']; 
     $id_kelas       = $_POST['id_kelas'];
     $id_jurusan     = $_POST['id_jurusan'];
     $tempat_lahir   = $_POST['tempat_lahir'];
     $tanggal_lahir  = $_POST['tanggal_lahir'];
     $nomor_telepon  = $_POST['nomor_telepon'];
     $alamat         = $_POST['alamat'];
     
     
     
        
    $query_insert = mysqli_query($koneksi,"INSERT INTO anggota VALUES('','$nis','$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$id_kelas','$id_jurusan','$nomor_telepon','$alamat')");

    if($query_insert)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Disimpan
            </div>
        <?php
        //header('refresh:1, URL=http://localhost/23_website_12RPL2/admin.php?page=anggota');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Disimpan !!!!!!!!!
            </div>
        <?php

    }
}
//// End of proses insert /////////////////////////////////////////////////////////
?>