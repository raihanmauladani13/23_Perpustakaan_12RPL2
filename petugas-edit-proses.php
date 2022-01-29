<!-- Proses Update -->
<?php
    $id             = $_POST['id_petugas'];
    $nama            = $_POST['nama'];
    $jabatan        = $_POST['jabatan']; 
    $nomor_telepon  = $_POST['nomor_telepon'];
    $alamat         = $_POST['alamat'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];      
     
    $options = [
        'cost' => 12,
    ];
    $hash = password_hash($password , PASSWORD_BCRYPT, $options);

    $query_update = mysqli_query($koneksi,"UPDATE petugas SET  nama          = '$nama',
                                                            jabatan          = '$jabatan',
                                                            nomor_telepon    = '$nomor_telepon', 
                                                            alamat           = '$alamat', 
                                                            username         = '$username', 
                                                            password         = '$password' 
                                                            WHERE id_petugas = '$id'");

if($query_update){
        ?>
        <script>
            alert('Data berhasil diubah');
        window.location.href='http://localhost/23_website_12RPL2/admin.php?page=petugas';
        </script>
        <?php
    }else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Diupdate !!!!!!!!!
            </div>
        <?php
    }

////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>