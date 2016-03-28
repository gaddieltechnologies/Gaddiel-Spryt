<?php
/******* LIST SCREEN for the Dynamic SUBMENU ************************************
 *******
 ******* Generate Dynamic screen to list the table values
 ******* Open the file
 ******* Use  the list template to list the data 
 ******* Close the file
 *******
*********************************************************************************/
		$target_filename_list   = $_SERVER['DOCUMENT_ROOT'].'/screen/list_' . $target_screen_name;
		// echo "target_filename_list: $target_filename_list";
		$target_file_handler_list   = fopen($target_filename_list, "w") or die("Unable to open file: " . $target_file_handler_list);
		// echo " Opened " . $target_filename_list;
		
		$template_filename = $_SERVER['DOCUMENT_ROOT'].'/template/template_screen_list_1.php';
		$file_handle = fopen($template_filename, "r") or die("Unable to open Templete file: " . $template_filename);
		// echo " Opened " . $file_handle;
		while(!feof($file_handle)) {
			$tags = fgets($file_handle);
			// If it starts with "<###>" 
		  
			switch(trim($tags) ) { 
				case '<###1>':
					$tags = $MENU_NAME . '-->' . $SUBMENU_NAME;
					break;
				case '<###2>':
					$tags = 'add_' . $target_screen_name;
					break;
				case '<###3>':
					$tags = "../submenu/menu_" . $MENU_ID;
					break;
			}
			fwrite($target_file_handler_list, $tags);
		} //end of while
		fclose($file_handle); // CLOSE THE TEMPLATE FILE
		
		fwrite($target_file_handler_list,'<table class="table demo table-bordered " data-filter="#filter" data-page-size="5" data-page-previous-text="prev" data-page-next-text="next">');                   
		fwrite($target_file_handler_list,'<thead>');
		fwrite($target_file_handler_list,'<tr class="widget-header">');
		fwrite($target_file_handler_list,'<th> </th>');

		$sql = "SELECT REQUIRED_FLAG, DISPLAY_NAME, DB_COL_NAME, COL_LENGTH, DATA_ENTRY_TYPE, DATA_SAMPLE, LOV_SQL, HTML_INPUT_TAG, PHP_MANDATORY_CHECK, PHP_DATATYPE_CHECK 
								FROM screen 
								WHERE SYSTEM_FLAG = 'N' 
								AND   submenu_id = $SUBMENU_ID
								ORDER BY DISPLAY_ORDER";
		// echo "select SQL: " . $sql;
		$result = $pdo->prepare($sql);
								
		$result->execute();
		
		// Populate the title of the Table

		$sql = 'SELECT id,'; 
		$tbl = '<td><?php  echo $row[\'id\'];?></td>' . "\n";
		fwrite($target_file_handler_list, "<th>ID</th>");
		for($i=0; $row = $result->fetch(); $i++){									  								 				     		        
			fwrite($target_file_handler_list, "<th>" . $row['DISPLAY_NAME']. "</th>");
			$sql .= $row['DB_COL_NAME']. ',';
			$tbl .= '<td><?php  echo $row[' . "'" .   $row['DB_COL_NAME']. "'". '];?></td>' . "\n";
		}
		$sql = substr($sql, 0, -1); // Get rid of the last comma
		$sql .= " FROM " . $TABLE_NAME; 
		
		//Populate SELECT statement for reporting purposes in submenu table
		$update_sql =  'UPDATE submenu SET table_select_sql = \'' . $sql . '\' WHERE submenu_id = ' . $SUBMENU_ID;
		$result = $pdo->prepare($update_sql);							
		$result->execute();
		Database::disconnect();	
		
		
		fwrite($target_file_handler_list, '</tr>');		
		fwrite($target_file_handler_list, '</thead>');
		fwrite($target_file_handler_list, '<tbody id="gridvaluediv" class="mytable1">'. "\n");	
		
		fwrite($target_file_handler_list,  '                                 <?php' . "\n");			
		fwrite($target_file_handler_list,  '								  	$pdo = Database::connect();' . "\n");
		fwrite($target_file_handler_list, '									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);'. "\n");
		fwrite($target_file_handler_list,  '									$result = $pdo->prepare("' . $sql . '");'. "\n");
		fwrite($target_file_handler_list,  '		                            $result->execute();'. "\n");
		fwrite($target_file_handler_list,  '		                            Database::disconnect();'. "\n");
		fwrite($target_file_handler_list,  '		                            for($i=0; $row = $result->fetch(); $i++){'. "\n");					
		fwrite($target_file_handler_list,  '			 				      ?>'. "\n");
		fwrite($target_file_handler_list,  '			 				      <tr Style="cursor:pointer;">' . "\n");
        fwrite($target_file_handler_list,  '			 				      <td class="actions">' . "\n");										   
		fwrite($target_file_handler_list,  '			 				      <a href="edit_' . $target_screen_name . '?id=<?php echo $row[' . "'id'" .']; ?>" class="btn btn-small  "><i class="icon-pencil"></i></a>' . "\n");
		fwrite($target_file_handler_list,  '			 				      <a href="delete_' . $target_screen_name . '?id=<?php echo $row[' . "'id'". ']; ?>" class="btn btn-small " onclick="return confirm(' . "'Are you sure?'" . ')"><i class="icon-remove"></i></a>' . "\n\n");
		fwrite($target_file_handler_list,  '			 				      </td>' . "\n");
		fwrite($target_file_handler_list, $tbl);
		fwrite($target_file_handler_list,  '			 				      							</tr>' ."\n");
        fwrite($target_file_handler_list,  '			 				                             <?php }?>' ."\n");								  
		fwrite($target_file_handler_list,  '			 				      						</tbody>' ."\n");
		fwrite($target_file_handler_list,  '			 				      					</table>' ."\n");
		
		$template_filename = $_SERVER['DOCUMENT_ROOT'].'/template/template_screen_list_2.php';
		$file_handle = fopen($template_filename, "r") or die("Unable to open Template file: " . $template_filename);
		// echo " Opened " . $file_handle;

		while(!feof($file_handle)) {
          $tags = fgets($file_handle);
		  fwrite($target_file_handler_list, $tags);
		} //end of while
		fclose($file_handle); // CLOSE THE TEMPLATE FILE

		
		
		fclose($target_file_handler_list);	
?>		