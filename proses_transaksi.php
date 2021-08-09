<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
	  $id_petugas    = $_POST['id_petugas'];
  	$nisn          = $_POST['nisn'];
  	$tgl_bayar     = $_POST['tgl_bayar'];
  	$bulan_dibayar = $_POST['bulan_dibayar'];
  	$tahun_dibayar = $_POST['tahun_dibayar'];
  	$id_spp        = $_POST['id_spp'];
  	$jumlah_bayar  = $_POST['jumlah_bayar'];
  	
 


                  $query = "INSERT INTO pembayaran VALUES ('','$id_petugas', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar
                  ', '$id_spp', '$jumlah_bayar')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='transaksi.php';</script>";
                  }

            ?>