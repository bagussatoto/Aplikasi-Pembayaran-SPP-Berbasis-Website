<?php
	include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN</title>

</head>
<body>

	<?php

	include ('tampilan/header.php');
	include ('tampilan/footer.php');
	include ('tampilan/sidebar.php');
?>

		<!-- Main Content -->
      <div class="main-content bg-primary">
        <section class="section">
          <div class="section-header">
            <h1>LAPORAN</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item text-primary">Laporan</div>
            </div>
          </div>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>LAPORAN TRANSAKSI</h4>
                    <div class="card-header-form">
                    </div>
                  </div>
              <form method="POST" action="ekspor.php" enctype="multipart/form-data" >
        <div>
          <label>Dari Tanggal</label>
          <input type="date" name="daritanggal" autofocus="" required="" />
        </div>
        <div>
          <label>Sampai Tanggal</label>
         <input type="date" name="sampaitanggal" required=""/>
        </div>
        
        <div>
         <button type="submit">Ekspor ke Word</button>
        </div>
        </section>
      </form>
</body>
</html>