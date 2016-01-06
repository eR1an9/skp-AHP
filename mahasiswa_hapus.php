<?php 
include 'inc/koneksi.php';
$id_mhs = $_GET['id_mhs'];
$query = mysql_query("DELETE FROM tbl_mhs WHERE id_mhs='$id_mhs'") or die(mysql_error());
if ($query) {
	?>
	<script language="JavaScript">
	alert('Data Mahasiswa Berhasil dihapus');
	document.location = 'mahasiswa.php';
	</script>
	<?php
}
?>