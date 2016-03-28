<?php
 session_start();
ob_start();
 include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');

 $lastProcess=$_POST['lastProcess1'];

	if(!empty($lastProcess))
{
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$result = $pdo->prepare("SELECT table_name,table_select_sql FROM submenu WHERE submenu_name='$lastProcess'");
	$result->execute();
	$row = $result->fetch();
	$tableName=$row['table_name'];
     Database::disconnect();			
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$result = $pdo->prepare("SELECT MAX(Last_Id) AS Last_Id FROM download_log WHERE Table_name='$tableName'");
	$result->execute();
	$row = $result->fetch();
	$Last_Id=$row['Last_Id'];
	
	if($row>0)
	    {
	        echo $Last_Id;
	    }
	else
	   { 
           echo "error";
	   }
	Database::disconnect();	
}
?>
