<?php
 $namaserver  ="localhost";
 $namauser="root";
 $katasandi="";
 $nama_db="mauladani_23";

 $koneksi = mysqli_connect($namaserver,$namauser,$katasandi,$nama_db);

//  if(!$koneksi){
//      die("koneksi gagal".mysqli_connect_error());

//  } else{
//      echo "koneksi berhasil";
//  }

?>