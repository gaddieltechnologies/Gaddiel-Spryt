<?php 
include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');
$id = $_GET['id'];


        $pdo = Database::connect();
	$sql = "DELETE FROM submenu WHERE submenu_id= '$id'";
	$query =  $pdo->prepare( $sql );
	$query->execute();

	// This is to regenerate  menu/menu.php file after the update
	include($_SERVER['DOCUMENT_ROOT'].'/include/generate_submenu.php');
	
	echo '<script type="text/javascript">
		window.location.href = "listSubmenu.php";
		</script>';
	
?>