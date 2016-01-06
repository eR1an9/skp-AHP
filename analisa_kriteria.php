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
			<!-- <div class=""></div> -->
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

			<!-- Hover rows data table inside panel -->
			<div class="panel panel-default">
				<div class="panel-heading"><h6 class="panel-title">ANALISA KRITERIA</h6></div>
				<a href="analisa_kriteria_tambah.php"><input type="submit" value="Tambah Kriteria" class="btn btn-info"></a>
				<div class="datatable">
					<table class="table table-hover">
						<thead>
							<tr>
								<th></th>
								<th>Nama Kriteria</th>
								<th>Nilai Perbandingan</th>
								<th>Nama Kriteria</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$nomor=0;
							$tampil = mysql_query("SELECT * FROM perbandingan_kriteria");
							while ($data = mysql_fetch_array($tampil)) {
								?>
								<tr>
									<td><?php $nomor=$nomor+1; ?></td>
									<td><?php echo $data['kriteria1']; ?></td>
									<td><?php echo $data['nm_banding']; ?></td>
									<td><?php echo $data['kriteria2']; ?></td>	
									<td>
										<a href="analisa_kriteria_hapus.php?id_kriteria=<?php echo $data['id_kriteria']; ?>">
										<i class="fa fa-eraser"></i>
										</a>
									</td>								
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /hover rows datatable inside panel -->
			<?php include "footer.php"; ?>