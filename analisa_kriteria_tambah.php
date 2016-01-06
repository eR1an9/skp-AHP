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
			<form class="form-horizontal" action="analisa_kriteria_tambah.php" method="post" role="form">
				<div class="panel panel-default">
					<div class="panel-heading"><h6 class="panel-title">Tambah Perbandingan</h6></div>
					<div class="panel-body">
						
						<div class="form-group">
							<label class="col-sm-2 control-label text-right">ID Perbandingan:</label>
							<div class="col-sm-10">
								<input type="text" name="id_kriteria" class="form-control" value="<?php echo kdauto('perbandingan_kriteria','B'); ?>" readonly="true" required>
							</div>
						</div>

						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Nama Kriteria:</label>
                            <div class="col-sm-10">
								<select name='kriteria1' data-placeholder="Pilih Kriteria..." class="required select">
									<option></option>					
										<?php	
											$query = "SELECT * FROM tbl_kriteria";
											$hasil = mysql_query($query);
											while ($data = mysql_fetch_array($hasil))
											{
												echo "<option value='".$data['nama_kriteria']."'>".$data['nama_kriteria']."</option>";
											}
										?>
								</select>
                            </div>
                        </div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Perbandingan:</label>
							<div class="col-sm-10">
								<select name="nm_banding" data-placeholder="Pilih Perbandingan..." class="required select">
									<option></option>
									<option value="1">1. Sama penting dengan</option>
									<option value="2">2. Mendekati sedikit lebih penting dari</option>
									<option value="3">3. Sedikit lebih penting dari</option>
									<option value="4">4. Mendekati lebih penting dari</option>
									<option value="5">5. Lebih penting dari</option>
									<option value="6">6. Mendekati sangat penting dari</option>
									<option value="7">7. Sangat penting dari</option>
									<option value="8">8. Mendekati mutlak dari</option>
									<option value="9">9. Mutlak sangat penting dari</option>
								</select>
							</div>
						</div>

						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Nama Kriteria:</label>
                            <div class="col-sm-10">
								<select name='kriteria2' data-placeholder="Pilih Kriteria..." class="required select">
									<option></option>					
										<?php	
											$query = "SELECT * FROM tbl_kriteria";
											$hasil = mysql_query($query);
											while ($data = mysql_fetch_array($hasil))
											{
												echo "<option value='".$data['nama_kriteria']."'>".$data['nama_kriteria']."</option>";
											}
										?>
								</select>
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
				$nm_banding = $_POST['nm_banding'];				
				$kriteria1 	= $_POST['kriteria1'];
				$kriteria2	= $_POST['kriteria2'];

				if ($nm_banding==1) {
					$nilai = 1;
					$nama = "1. Sama penting dengan";
				} elseif ($nm_banding==2) {
					$nilai = 2;
					$nama = "2. Mendekati sedikit lebih penting dari";
				} elseif ($nm_banding==3) {
					$nilai = 3;
					$nama = "3. Sedikit lebih penting dari";
				} elseif ($nm_banding==4) {
					$nilai = 4;
					$nama = "4. Mendekati lebih penting dari";
				} elseif ($nm_banding==5) {
					$nilai = 5;
					$nama = "5. Lebih penting dari";
				} elseif ($nm_banding==6) {
					$nilai = 6;
					$nama = "6. Mendekati sangat penting dari";
				} elseif ($nm_banding==7) {
					$nilai = 7;
					$nama = "7. Sangat penting dari";
				} elseif ($nm_banding==8) {
					$nilai = 8;
					$nilai = "8. Mendekati mutlak dari";
				} elseif ($nm_banding==9) {
					$nilai = 9;
					$nama = "9. Mutlak sangat penting dari";
				}

				$sql = "INSERT INTO perbandingan_kriteria values 
				('$id_kriteria','$nilai','$kriteria1','$nama','$kriteria2')";
				$query = mysql_query($sql) or die(mysql_error());
				if ($query) {
					echo "<script>window.alert('Kriteria  Berhasil ditambah');
								window.location=(href='analisa_kriteria.php')</script>";
				}}
			?>
			<!-- /right labels -->
			<?php include "footer.php"; ?>