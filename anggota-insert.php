<?php

if (isset($_POST['save'])) {
     $nis            = $_POST['nis'];
     $nama           = $_POST['nama'];
     $jk             = $_POST['jenis_kelamin']; 
     $kelas          = $_POST['id_kelas'];
     $jurusan        = $_POST['id_jurusan'];
     $tempat_lahir   = $_POST['tempat_lahir'];
     $tanggal_lahir  = $_POST['tanggal_lahir'];
     $nomor_telepon  = $_POST['nomor_telepon'];
     $alamat         = $_POST['alamat'];
     
     
     
        
    $query_insert = mysqli_query($koneksi,"INSERT INTO anggota VALUES('','$nis','$nama','$jk','$kelas','$jurusan','$tempat_lahir','$tanggal_lahir','$nomor_telepon','$alamat')");

    if($query_insert)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Disimpan
            </div>
        <?php
        header('refresh:2; URL=http://localhost/23_mywebsite_12RPL2/admin.php?page=anggota');
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