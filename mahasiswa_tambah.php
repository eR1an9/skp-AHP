<?php 
include "head.php";
?>
<body>
	<!-- Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                

                <ul class="nav navbar-nav navbar-left-custom">
                    <li class="user dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">                           
                            <span>Sistem Penunjang Keputusan AHP</span>                            
                        </a>
                    </li>
                    <li><a class="nav-icon sidebar-toggle"><i class="fa fa-bars"></i></a></li>
                </ul>

            </div>
        </div>
    </div>
    <!-- /navbar -->

	<!-- Page header -->
	<div class="container-fluid">
		<div class="page-header">
			
		</div>
	</div>
	<!-- /page header -->

	<!-- Page container -->
	<div class="page-container container-fluid">
		
		<?php include "sidebar.php"; ?>

		<!-- Page content -->
		<div class="page-content">
			
		<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-bars"></i> Halaman Admin</h5>
			</div>
			<!-- /page title -->

			<!-- Right labels -->
			<form class="form-horizontal" action="mahasiswa_tambah.php" method="post" role="form">
				<div class="panel panel-default">
					<div class="panel-heading"><h6 class="panel-title">Tambah Mahasiswa</h6></div>
					<div class="panel-body">
						
						<div class="form-group">
							<label class="col-sm-2 control-label text-right">ID Mahasiswa:</label>
							<div class="col-sm-10">
								<input type="text" name="id_mhs" class="form-control" value="<?php echo kdauto('tbl_mhs','mhs-'); ?>" readonly="true" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">NIM:</label>
							<div class="col-sm-10">
								<input type="text" name="nim" maxlength="10" required class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nama Mahasiswa</label>
							<div class="col-sm-10">
								<input type="text" name="nama" required class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Alamat:</label>
							<div class="col-sm-10">
								<input type="text" name="alamat" required class="form-control">
							</div>
						</div>

						<div class="form-action text-right">
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
						</div>

					</div>
				</div>
			</form>
			<?php 
			if (isset($_POST['simpan'])) {
				$id_mhs = $_POST['id_mhs'];
				$nim 		= $_POST['nim'];
				$nama 		= $_POST['nama'];
				$alamat 	= $_POST['alamat'];

				$sql = "INSERT INTO tbl_mhs values 
				('$id_mhs','$nim','$nama','$alamat')";
				$query = mysql_query($sql) or die(mysql_error());
				if ($query) {
					echo "<script>window.alert('Mahasiswa  Berhasil ditambah');
								window.location=(href='mahasiswa.php')</script>";
				}}
			?>
			<!-- /right labels -->
			<?php include "footer.php"; ?>