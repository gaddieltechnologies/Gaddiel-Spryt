<?php
		// Generate EDIT File
		$target_filename_edit  = $_SERVER['DOCUMENT_ROOT'].'/screen/edit_' . $target_screen_name;
		$template_filename = $_SERVER['DOCUMENT_ROOT'].'/screen/add_' . $target_screen_name;
		$target_file_handler_edit   = fopen($target_filename_edit, "w") or die("Unable to open file: " . $target_file_handler_edit);
		$file_handle = fopen($template_filename, "r") or die("Unable to open template file: " . $template_filename);
		while(!feof($file_handle)) {
          $tags = fgets($file_handle);		  
		  		switch(trim($tags) ) { 
				case '//<###INSERT>':
					fwrite($target_file_handler_edit,'			$q = $pdo->prepare("' . $sql_update . '");' . "\n");
					fwrite($target_file_handler_edit,'			$q->execute(array(' .  $sql_update_value_param_vars . '));' . "\n"); 
					$tags = fgets($file_handle);
					$tags = fgets($file_handle);
					$tags = fgets($file_handle);
				break;
				case '//<###ELSE>':
					fwrite($target_file_handler_edit,'else {' . "\n");
					fwrite($target_file_handler_edit,'$ID = $_GET[\'id\'];' . "\n");
			        fwrite($target_file_handler_edit,'$pdo = Database::connect();' . "\n");
					fwrite($target_file_handler_edit,'$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);' . "\n");
					// This variable ($sql_select) comes from include/generate_screen_list.php file 

					fwrite($target_file_handler_edit,'$result = $pdo->prepare("' . $sql_select . '");' . "\n");
	                fwrite($target_file_handler_edit,'$result->bindParam(\':id\', $ID);' . "\n");
	                fwrite($target_file_handler_edit,'$result->execute();' . "\n");
					fwrite($target_file_handler_edit,'Database::disconnect();' . "\n");	
	                fwrite($target_file_handler_edit,'for($i=0; $row = $result->fetch(); $i++)' . "\n");
					fwrite($target_file_handler_edit,'{' . "\n");					
					fwrite($target_file_handler_edit, $edit_select_db_col_name_assignment_vars . "\n"); 
					fwrite($target_file_handler_edit,'}' . "\n");
					fwrite($target_file_handler_edit,'}' . "\n");
					break;
				default: 
					fwrite($target_file_handler_edit, $tags);
				break;
			}	  
		} //end of while
		fclose($file_handle); // CLOSE THE add FILE	
		
		fclose($target_file_handler_edit); // Close the output file		
?>