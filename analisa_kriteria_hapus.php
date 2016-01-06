<?php 
include 'inc/koneksi.php';

$id_kriteria = $_GET['id_kriteria'];
$query = mysql_query("DELETE FROM perbandingan_kriteria WHERE id_kriteria='$id_kriteria'") or die(mysql_error());
if ($query) {
	?>
	<script language="JavaScript">
	alert('Data Kriteria Berhasil dihapus');
	document.location = 'analisa_kriteria.php';
	</script>
	<?php
}
?>