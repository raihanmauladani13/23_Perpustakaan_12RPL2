<!-- Proses Update -->
<?php
    $id              = $_POST['id'];
    $nis             = $_POST['nis'];
    $nama            = $_POST['nama'];
    $jenis_kelamin   = $_POST['jenis_kelamin'];
    $tempat_lahir    = $_POST['tpt_lahir'];
    $tgl_lahir       = $_POST['tgl_lahir'];
    $kelas           = $_POST['kelas'];
    $jurusan         = $_POST['jurusan'];
    $nomor_telepon   = $_POST['nomor_telepon'];
    $alamat          = $_POST['alamat'];

    $query_update = mysqli_query($koneksi,"UPDATE anggota SET nis              = '$nis', 
                                                            nama             = '$nama',
                                                            jenis_kelamin    = '$jenis_kelamin',
                                                            tempat_lahir     = '$tempat_lahir', 
                                                            tanggal_lahir    = '$tgl_lahir', 
                                                            id_kelas         = '$kelas', 
                                                            id_jurusan       = '$jurusan', 
                                                            nomor_telepon    = '$nomor_telepon', 
                                                            alamat           = '$alamat'
                                                            WHERE id_anggota = '$id'");

if($query_update)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Diupdate !!!
            </div>
        <?php
        ('refresh:3; URL=http://localhost/23_website_12RPL2/admin.php?page=anggota');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Diupdate !!!!!!!!!
            </div>
        <?php
    }

////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>