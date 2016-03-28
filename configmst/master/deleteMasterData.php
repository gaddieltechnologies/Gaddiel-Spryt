<?php 
$id=$_GET['id'];

include($_SERVER['DOCUMENT_ROOT'].'/spryt/connection.php');

			
			  $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM KEY_VALUE WHERE ID=$id";		
			$q = $pdo->prepare($sql);
             $q->execute();
            Database::disconnect();
				echo "<div class='alert alert-info'> Successfully Deleted. </div>";
			echo '<script type="text/javascript">
						window.location.href = "masterData.php";
						</script>';
			
?>