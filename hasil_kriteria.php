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
							<?php 
							error_reporting(E_ALL^(E_NOTICE|E_WARNING));
							$query1 = mysql_query("SELECT * FROM perbandingan_kriteria where id_kriteria='B01'");
							$query2 = mysql_query("SELECT * FROM perbandingan_kriteria where id_kriteria='B02'");
							$query3 = mysql_query("SELECT * FROM perbandingan_kriteria where id_kriteria='B03'");
							$query4 = mysql_query("SELECT * FROM perbandingan_kriteria where id_kriteria='B04'");
							$b1 = mysql_fetch_array($query1);
							$b2 = mysql_fetch_array($query2);
							$b3 = mysql_fetch_array($query3);
							$b4 = mysql_fetch_array($query4);
							?>

			<!-- Hover rows data table inside panel -->
			<div class="panel panel-default">
				<div class="panel-heading"><h6 class="panel-title">TABEL PERHITUNGAN HASIL KRITERIA</h6></div>
				<div class="">
				<form class="form-horizontal" action="hasil_kriteria_akhir.php" method="post" role="form">
					<table class="table table-hover">
						<thead>
							<tr>
							<th></th>
								<th>Kriteria</th>
								<th><?php echo $b1['kriteria1']; ?></th>								
								<th><?php echo $b2['kriteria1']; ?></th>
								<th><?php echo $b3['kriteria1']; ?></th>
								<th><?php echo $b4['kriteria1']; ?></th>
								<th></th>
								<th></th>
							</tr>
						</thead>

						<tbody>
							<tr>
							<td></td>
								<th><?php echo $b1['kriteria1']; ?></th> <!-- Baris Umur -->
								<td align="center"><?php echo $b1['nilai_banding']; ?></td>
								<td>
									<select name="nm_banding1" data-placeholder="Pilih Perbandingan..." class="required select">
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
								</td>
								<td>
									<select name="nm_banding2" data-placeholder="Pilih Perbandingan..." class="required select">
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
								</td>
								<td>
									<select name="nm_banding3" data-placeholder="Pilih Perbandingan..." class="required select">
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
								</td>
								<td colspan="2"></td>
							</tr>

							<tr>
							<td></td>
								<th><?php echo $b2['kriteria1']; ?></th> <!-- Baris IPK -->
								<td align="center"><font color="red">0</font></td>
								<td align="center"><?php echo $b2['nilai_banding']; ?></td>
								<td>
									<select name="nm_banding4" data-placeholder="Pilih Perbandingan..." class="required select">
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
								</td>
								<td>
									<select name="nm_banding5" data-placeholder="Pilih Perbandingan..." class="required select">
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
								</td>
								<td></td>
							</tr>

							<tr>
							<td></td>
								<th><?php echo $b3['kriteria1']; ?></th> <!-- baris Penghasilan Orangtua -->
								<td align="center"><font color="red">0</font></td>
								<td align="center"><font color="red">0</font></td>
								<td align="center"><?php echo $b3['nilai_banding']; ?></td>
								<td>
									<select name="nm_banding6" data-placeholder="Pilih Perbandingan..." class="required select">
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
								</td>
								<td colspan="2"></td>
							</tr>
				
							<tr>
								<td></td>
								<th><?php echo $b4['kriteria1']; ?></th> <!-- baris semester -->
								<td align="center"><font color="red">0</font></td>
								<td align="center"><font color="red">0</font></td>
								<td align="center"><font color="red">0</font></td>
								<td colspan="3" align="center"><?php echo $b4['nilai_banding']; ?></td>
							</tr>
							
							<tr>
								<td colspan="6">
									<div class="form-action text-right">
									<input type="submit" name="simpan" value="Proses" class="btn btn-primary">
									<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
									</div>
								</td>
								<td colspan="3"></td>
							</tr>
						</tbody>
					</table>

					</form>

		
			<?php include "footer.php"; ?>