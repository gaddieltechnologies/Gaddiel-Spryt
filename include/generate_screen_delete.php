<?php
		// Generate Delete File
		$target_filename_delete  = $_SERVER['DOCUMENT_ROOT'].'/screen/delete_' . $target_screen_name;
		$target_file_handler_delete   = fopen($target_filename_delete, "w") or die("Unable to open file: " . $target_file_handler_delete);
		
		fwrite($target_file_handler_delete,'<?php' . "\n");
		fwrite($target_file_handler_delete,'$id = $_GET[\'id\'];' . "\n");	
		fwrite($target_file_handler_delete,'include($_SERVER[\'DOCUMENT_ROOT\'].\'/include/connection.php\');' . "\n");		
		fwrite($target_file_handler_delete,'$pdo = Database::connect();' . "\n");	
		fwrite($target_file_handler_delete,'$sql = "DELETE FROM ' . $TABLE_NAME . '  WHERE id= $id" ; ' . "\n");	
		fwrite($target_file_handler_delete,'$query =  $pdo->prepare( $sql );' . "\n");
		fwrite($target_file_handler_delete,'$query->execute();' . "\n");
		fwrite($target_file_handler_delete,'echo \'<script type="text/javascript"> window.location.href = "' . 'list_' . $target_screen_name . '"; </script>\';' . "\n");
		fwrite($target_file_handler_delete,'?>' . "\n");
		
		fclose($target_file_handler_delete); // Close the output file		
?>