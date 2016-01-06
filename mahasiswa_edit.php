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
			<!-- <div class="logo"><a href="index.php" title=""><img src=""></a></div> -->
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

			<?php 
			$id_mhs = $_GET['id_mhs'];
			$query = mysql_query("SELECT * FROM tbl_mhs WHERE id_mhs='$id_mhs'");
			$data = mysql_fetch_array($query);
			 ?>
			 
			 <!-- Right labels -->
			 <form class="form-horizontal" action="mahasiswa_edit.php" method="post" role="form">
			 	<div class="panel panel-default">
			 		<div class="panel-heading"><h6 class="panel-title">MAHASISWA EDIT</h6></div>
			 		<div class="panel-body">
			 			
			 			<div class="form-group">
			 				<label class="col-sm-2 control-label text-right">ID MAHASISWA</label>
			 				<div class="col-sm-10">
			 					<input type="text" name="id_mhs" value="<?php echo $data['id_mhs']; ?>" class="form-control" required>
			 				</div>
			 			</div>

			 			<div class="form-group">
			 				<label class="col-sm-2 control-label text-right">NIM:</label>
			 				<div class="col-sm-10">
			 					<input type="text" name="nim" maxlength="10" value="<?php echo $data['nim']; ?>" required class="form-control">
			 				</div>
			 			</div>

			 			<div class="form-group">
			 				<label class="col-sm-2 control-label text-right">NAMA DOSEN</label>
			 				<div class="col-sm-10">
			 					<input type="text" name="nama" value="<?php echo $data['nama']; ?>" required class="form-control">
			 				</div>
			 			</div>

			 			<div class="form-group">
			 				<label class="col-sm-2 control-label text-right">ALAMAT:</label>
			 				<div class="col-sm-10">
			 					<input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required class="form-control">
			 				</div>
			 			</div>

			 			<div class="form-action text-right">
			 				<input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
			 				<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
			 			</div>

			 		</div>
			 	</div>
			 </form>
			 <?php 
			 if (isset($_POST['ubah'])) {
			 	$id_mhs = $_POST['id_mhs'];
			 	$nim 			= $_POST['nim'];
			 	$nama 		= $_POST['nama'];
			 	$alamat 	= $_POST['alamat'];

			 	$query = mysql_query("UPDATE tbl_mhs SET nim='$nim', nama='$nama', alamat='$alamat' WHERE id_mhs='$id_mhs'") or die(mysql_error());
			 	if ($query) {
			 		echo "<script>window.alert('Data Mahasiswa berhasil diubah');
			 					window.location=(href='mahasiswa.php')</script>";
			 	}}
			 ?>
			 <!-- /right labels -->
			 <?php include "footer.php"; ?>