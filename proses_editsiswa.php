<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id = $_POST['id'];

  $id_kelas = $_POST['id_kelas'];
  $nama     = $_POST['nama'];
  $alamat     = $_POST['alamat'];
  $no_telp     = $_POST['no_telp'];


  //cek dulu jika merubah gambar produk jalankan coding ini
  
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE siswa SET id_kelas = '$id_kelas',nama = '$nama',alamat = '$alamat',no_telp = '$no_telp'  WHERE nisn = '$id'";
                    // periska query apakah ada error
                    $result = mysqli_query($koneksi, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='siswa.php';</script>";
                    }
              
        
        ?>
