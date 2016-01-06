<?php 
// session_start()
if ($_SESSION['username'] == null || $_SESSION['password'] == null) {
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	exit;
}
?>