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
				$query1 = mysql_query("SELECT * FROM perb_alternatif where id_alternatif='A01'");
				$query2 = mysql_query("SELECT * FROM perb_alternatif where id_alternatif='A02'");
				$query3 = mysql_query("SELECT * FROM perb_alternatif where id_alternatif='A03'");
				$query4 = mysql_query("SELECT * FROM perb_alternatif where id_alternatif='A04'");
				$query5 = mysql_query("SELECT * FROM perb_alternatif where id_alternatif='A05'");
				$b1 = mysql_fetch_array($query1);
				$b2 = mysql_fetch_array($query2);
				$b3 = mysql_fetch_array($query3);
				$b4 = mysql_fetch_array($query4);
				$b5 = mysql_fetch_array($query5);
			?>


			<!-- Hover rows data table inside panel -->
			<div class="panel panel-default">
				<div class="panel-heading"><h6 class="panel-title">HITUNG ALTERNATIF IPK</h6></div>
				<div class="">
				<form class="form-horizontal" action="hasil_alternatif_akhir.php" method="post" role="form">
					<table class="table table-hover">
						<thead>
							<tr align="center">
							<th></th>
								<th>Alt</th>
								<td><?php echo $b1['alternatif1']; ?></td>
								<td><?php echo $b2['alternatif1']; ?></td>
								<td><?php echo $b3['alternatif1']; ?></td>
								<td><?php echo $b4['alternatif1']; ?></td>
								<td><?php echo $b5['alternatif1']; ?></td>
							</tr>
						</thead>
						<tbody>
							<tr align="center">
							<td></td>
								<td><?php echo $b1['alternatif1']; ?></td>
								<td><?php echo $b1['nb_db']; ?></td>
								<td>
									<select name="nb1" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb2" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb3" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb4" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b2['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b2['nb_db']; ?></td>
								<td>
									<select name="nb5" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb6" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb7" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b3['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
								<td>
									<select name="nb8" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb9" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b4['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
								<td>
									<select name="nb10" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b5['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
							</tr>
							
						</tbody>
					</table>

				</div>
			</div>



			<!-- Hover rows data table inside panel -->
			<div class="panel panel-default">
				<div class="panel-heading"><h6 class="panel-title">HITUNG ALTERNATIF PENGHASILAN ORTU</h6></div>
				<div class="">				
					<table class="table table-hover">
						<thead>
							<tr align="center">
							<th></th>
								<th>Alt</th>
								<td><?php echo $b1['alternatif1']; ?></td>
								<td><?php echo $b2['alternatif1']; ?></td>
								<td><?php echo $b3['alternatif1']; ?></td>
								<td><?php echo $b4['alternatif1']; ?></td>
								<td><?php echo $b5['alternatif1']; ?></td>
							</tr>
						</thead>
						<tbody>
							<tr align="center">
							<td></td>
								<td><?php echo $b1['alternatif1']; ?></td>
								<td><?php echo $b1['nb_db']; ?></td>
								<td>
									<select name="nb11" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb12" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb13" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb14" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b2['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b2['nb_db']; ?></td>
								<td>
									<select name="nb15" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb16" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb17" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b3['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
								<td>
									<select name="nb18" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb19" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b4['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
								<td>
									<select name="nb20" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b5['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
							</tr>
							
						</tbody>
					</table>

				</div>
			</div>


			<!-- Hover rows data table inside panel -->
			<div class="panel panel-default">
				<div class="panel-heading"><h6 class="panel-title">HITUNG ALTERNATIF TANGUNGAN</h6></div>
				<div class="">				
					<table class="table table-hover">
						<thead>
							<tr align="center">
							<th></th>
								<th>Alt</th>
								<td><?php echo $b1['alternatif1']; ?></td>
								<td><?php echo $b2['alternatif1']; ?></td>
								<td><?php echo $b3['alternatif1']; ?></td>
								<td><?php echo $b4['alternatif1']; ?></td>
								<td><?php echo $b5['alternatif1']; ?></td>
							</tr>
						</thead>
						<tbody>
							<tr align="center">
							<td></td>
								<td><?php echo $b1['alternatif1']; ?></td>
								<td><?php echo $b1['nb_db']; ?></td>
								<td>
									<select name="nb21" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb22" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb23" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb24" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b2['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b2['nb_db']; ?></td>
								<td>
									<select name="nb25" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb26" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb27" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b3['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
								<td>
									<select name="nb28" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb29" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b4['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
								<td>
									<select name="nb30" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b5['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
							</tr>
							
						</tbody>
					</table>

				</div>
			</div>


			<!-- Hover rows data table inside panel -->
			<div class="panel panel-default">
				<div class="panel-heading"><h6 class="panel-title">HITUNG ALTERNATIF SEMESTER</h6></div>
				<div class="">
					<table class="table table-hover">
						<thead>
							<tr align="center">
							<th></th>
								<th>Alt</th>
								<td><?php echo $b1['alternatif1']; ?></td>
								<td><?php echo $b2['alternatif1']; ?></td>
								<td><?php echo $b3['alternatif1']; ?></td>
								<td><?php echo $b4['alternatif1']; ?></td>
								<td><?php echo $b5['alternatif1']; ?></td>
							</tr>
						</thead>
						<tbody>
							<tr align="center">
							<td></td>
								<td><?php echo $b1['alternatif1']; ?></td>
								<td><?php echo $b1['nb_db']; ?></td>
								<td>
									<select name="nb31" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb32" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb33" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb34" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b2['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b2['nb_db']; ?></td>
								<td>
									<select name="nb35" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb36" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb37" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b3['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
								<td>
									<select name="nb38" data-placeholder="Pilih Perbandingan..." class="required select">
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
									<select name="nb39" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b4['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
								<td>
									<select name="nb40" data-placeholder="Pilih Perbandingan..." class="required select">
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
							</tr>
							<tr align="center">
							<td></td>
								<td><?php echo $b5['alternatif1']; ?></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><font color="red">0</font></td>
								<td><?php echo $b3['nb_db']; ?></td>
							</tr>
							
							<tr>
								<td colspan="5">
									<div class="form-action text-right">
									<input type="submit" name="simpan" value="Proses" class="btn btn-primary">
									<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
									</div>
								</td>
								<td colspan="2"></td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>

					</form>
					

			<?php include "footer.php"; ?>