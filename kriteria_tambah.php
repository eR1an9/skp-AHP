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
			<form class="form-horizontal" action="kriteria_tambah.php" method="post" role="form">
				<div class="panel panel-default">
					<div class="panel-heading"><h6 class="panel-title">Tambah Kriteria</h6></div>
					<div class="panel-body">
						
						<div class="form-group">
							<label class="col-sm-2 control-label text-right">ID Kriteria:</label>
							<div class="col-sm-10">
								<input type="text" name="id_kriteria" class="form-control" value="<?php echo kdauto('tbl_kriteria','krt-'); ?>" readonly="true" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Kode Kriteria:</label>
							<div class="col-sm-10">
								<input type="text" name="kd_kriteria" maxlength="10" required class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nama Kriteria</label>
							<div class="col-sm-10">
								<input type="text" name="nama_kriteria" required class="form-control">
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
				$id_kriteria = $_POST['id_kriteria'];
				$kd_kriteria 		= $_POST['kd_kriteria'];
				$nama_kriteria 		= $_POST['nama_kriteria'];

				$sql = "INSERT INTO tbl_kriteria values 
				('$id_kriteria','$kd_kriteria','$nama_kriteria')";
				$query = mysql_query($sql) or die(mysql_error());
				if ($query) {
					echo "<script>window.alert('Kriteria  Berhasil ditambah');
								window.location=(href='kriteria.php')</script>";
				}}
			?>
			<!-- /right labels -->
			<?php include "footer.php"; ?>