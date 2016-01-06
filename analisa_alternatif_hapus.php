<?php 
include 'inc/koneksi.php';
$id_alternatif = $_GET['id_alternatif'];
$query = mysql_query("DELETE FROM perb_alternatif WHERE id_alternatif='$id_alternatif'") or die(mysql_error());
if ($query) {
	?>
	<script language="JavaScript">
	alert('Data Alternatif Berhasil dihapus');
	document.location = 'analisa_alternatif.php';
	</script>
	<?php
}
?>