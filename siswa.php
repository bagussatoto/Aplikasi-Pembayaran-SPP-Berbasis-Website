<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
  
  </head>
<body>

	<?php

  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>
  <!-- Main Content -->
      <div class="main-content bg-primary">
        <section class="section">
          <div class="section-header">
            <h1>DATA SISWA</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
              <div class="breadcrumb-item text-primary">Data Siswa</div>
            </div>
          </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>LIST SISWA</h4>
                    <div class="card-header-form">
                      <form>
                          <div class="input-group-btn">
                            <a href="tambah_siswa.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0 ">
                  <div class="col-md-12">
                    <div class="table-responsive ">
                      <table class="table table-striped ">
                       <thead>
                          <tr>
                          <th>NO</th>
                          <th>NISN</th>
                          <th>NIS</th>
                          <th>NAMA</th>
                          <th>ID KELAS</th>
                          <th>ALAMAT</th>
                          <th>NO TELP</th>
                          <th>ID SPP</th>
                           <th>ACTION</th>   
                        </tr>
                        </thead>
                         <tbody>
                           <?php
                              // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                              $query = "SELECT * FROM siswa,kelas,spp where siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER BY nisn ASC";
                        $result = mysqli_query($koneksi, $query);
                              //mengecek apakah ada error ketika menjalankan query
                              if(!$result){
                                die ("Query Error: ".mysqli_errno($koneksi).
                                   " - ".mysqli_error($koneksi));
                              }

                              //buat perulangan untuk element tabel dari data mahasiswa
                              $no = 1; //variabel untuk membuat nomor urut
                              // hasil query akan disimpan dalam variabel $data dalam bentuk array
                              // kemudian dicetak dengan perulangan while
                              while($row = mysqli_fetch_assoc($result))
                              {
                              ?>
                        <tr>  
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row['nisn']; ?></td>
                           <td><?php echo $row['nis']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                             <td><?php echo $row['id_kelas']; ?></td>  
                              <td><?php echo $row['alamat']; ?></td>
                               <td><?php echo $row['no_telp']; ?></td>
                                <td><?php echo substr ($row['id_spp'], 0, 20); ?></td>
                          <td>
                          <a href="edit_siswa.php?id=<?php echo $row['nisn']; ?>"class="btn btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="proses_hapussiswa.php?id=<?php echo $row['nisn']; ?>" class="btn btn-danger" onClick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                         <?php
                           $no++; //untuk nomor urut terus bertambah 1
                           }
                         ?>
                         </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        </section>
      </div>
</body>
</html>