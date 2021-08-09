<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $nisn   = $_POST['nisn'];
  $nis     = $_POST['nis'];
  $nama    = $_POST['nama'];
  $id_kelas   = $_POST['id_kelas'];
  $alamat    = $_POST['alamat'];
  $telp     = $_POST['no_telp'];
  $tahun     = $_POST['tahun'];


                  $query = "INSERT INTO siswa VALUES ('$nisn', '$nis','$nama', '$id_kelas', '$alamat', '$telp', '$tahun')";
                  $result = mysqli_query($koneksi, $query); 
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='siswa.php';</script>";
                  }

            ?>