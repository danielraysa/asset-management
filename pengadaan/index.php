<?php
	session_start();
	
	if (!isset($_SESSION['login_user'])) {
		header("location:../index.php");
        exit;
	}
	if(!isset($_SESSION['temp_item'])) {
		$_SESSION['temp_item'] = array();
		$_SESSION['temp_item_2'] = array();
	}
	$dir = basename(__DIR__);
	$file = basename(__FILE__);
?>

<!DOCTYPE html>
<html>
<head>
	<?php include "../connection.php"; ?>
	<?php include "../css-script.php"; ?>
</head>
<body class="hold-transition skin-purple sidebar-mini">
	<div class="wrapper">
	<?php
		include "../header.php";
		include "../main-sidebar.php";
		if($_SESSION['role'] == "Anggota MJ") {
			include "content.php";
		}
		if($_SESSION['role'] == "Ketua MJ") {
			include "approval.php";
		}
	?>

	<!-- /.content-wrapper -->
	<?php include "../footer.php"; ?>
	<?php include "../control-sidebar.php"; ?>
	</div>
	<?php include "modal.php"; ?>
	<?php include "js-script.php"; ?>
</body>
</html>