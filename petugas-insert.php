<?php

if (isset($_POST['save'])) {
    
     $nama           = $_POST['nama'];
     $jabatan        = $_POST['jabatan']; 
     $nomor_telepon  = $_POST['nomor_telepon'];
     $alamat         = $_POST['alamat'];
     $username       = $_POST['username'];
     $password       = $_POST['password'];      
     
     $options = [
        'cost' => 12,
    ];
    $hash = password_hash($password , PASSWORD_BCRYPT, $options);
     
        
    $query_insert = mysqli_query($koneksi,"INSERT INTO petugas VALUES('','$nama','$jabatan','$nomor_telepon','$alamat','$username','$hash')");

    if($query_insert)
    {
        ?>
            <script>
                    alert("Data Berhasil Disimpan");
                    window.location.href='http://localhost/23_website_12RPL2/admin.php?=petugas';
                </script>
        <?php
        
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