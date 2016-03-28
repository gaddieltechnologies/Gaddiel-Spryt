<?php
$id = $_GET['id'];
include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');
$pdo = Database::connect();
$sql = "DELETE FROM dyn_tbl_menu_4_submenu_5  WHERE id= $id" ; 
$query =  $pdo->prepare( $sql );
$query->execute();
echo '<script type="text/javascript"> window.location.href = "list_menu_4_submenu_5.php"; </script>';
?>
