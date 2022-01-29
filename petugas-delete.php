<?php
           
        
    if(isset($_GET['hapus'])){
        $id = $_GET['id'];
        $query_delete = mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas = '$id'");
       if ($query_delete) {
        // header('refresh:1 URL=http://localhost/23_website_12RPL2/admin.php?page=petugas');
          ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Berhasil Di Hapus
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
       }
       }
?>