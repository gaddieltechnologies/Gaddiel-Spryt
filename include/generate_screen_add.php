<?php
/******* LIST SCREEN for the Dynamic SUBMENU ************************************
 *******
 ******* Generate Dynamic screen to list the table values
 ******* Open the file
 ******* Use  the list template to list the data 
 ******* Close the file
 *******
*********************************************************************************/


	
		// Run the meta data query to prepare all the variables to generate the php file
		$sql = "SELECT REQUIRED_FLAG, DISPLAY_NAME, DB_COL_NAME, COL_LENGTH, DATA_ENTRY_TYPE, DATA_SAMPLE, LOV_SQL, HTML_INPUT_TAG, PHP_MANDATORY_CHECK, PHP_DATATYPE_CHECK 
								FROM screen 
								WHERE SYSTEM_FLAG = 'N' 
								AND   submenu_id = $SUBMENU_ID
								ORDER BY DISPLAY_ORDER, SCREEN_ID";
		// echo "select SQL: " . $sql;
		$result = $pdo->prepare($sql);
								
		$result->execute();
		
		// Populate the title of the Table & Initialize all the variable that are going to be used in the loop
		$sql_insert = 'INSERT INTO ' . $TABLE_NAME . '(insert_date, '; // insert_date has to be populated 
		$sql_update = 'UPDATE ' . $TABLE_NAME . ' SET ' ;
		$sql_select = 'SELECT ID,'; 
		$sql_insert_value_params = ""; 
		$validation_checks = "";
		$tab = "";
		$validation = "";	
		$sql_insert_value_param_vars = "";
		$html_form_input_tags = "";	
		$edit_select_db_col_name_assignment_vars  = "\n" . '$ID = $row[\'ID\'];' . "\n";		
		// Start processing the selected rows from the database
		// echo "before Fetch Loop";

		for($i=0; $row = $result->fetch(); $i++){	

			$html_input_tag = $row['HTML_INPUT_TAG'];	
			// echo "@ Switch : DATA_ENTRY_TYPE ";
			switch ($row['DATA_ENTRY_TYPE']) {
				case "TEXTBOX":
				// sprintf params: LABLE, "*"/"" IF REQUIRED_FLAG, NAME = DB_COL_NAME, ID = DB_COL_NAME
					$html_tag = sprintf($html_input_tag, $row['DISPLAY_NAME'], ($row['REQUIRED_FLAG'] == "Y") ? "<font color=\"#FF0000\"> *</font>" : "",  $row['DB_COL_NAME'],$row['DB_COL_NAME'], !empty(${$DB_COL_NAME})?${$DB_COL_NAME}:'');
					$html_form_input_tags  = $html_form_input_tags . $html_tag;
					$html_form_input_tags  = $html_form_input_tags . "\n";
					break;
				case "DROPDOWN":
					$html_form_input_tags = $html_form_input_tags . "<div class=\"span4\"><label>". $row['DISPLAY_NAME'] . "</label><select id=\"". $row['DB_COL_NAME'] . "\" name=\"" . $row['DB_COL_NAME'] . "\"> \n" ;
					$html_form_input_tags = $html_form_input_tags . "\n";
					$html_form_input_tags = $html_form_input_tags . "<?php \n";
					$html_form_input_tags = $html_form_input_tags . '$pdo = Database::connect();' . "\n";
					$html_form_input_tags = $html_form_input_tags . '$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);' . "\n";
					$html_form_input_tags = $html_form_input_tags .  '$result = $pdo->prepare("' . $row['LOV_SQL'] . '");';		
					$html_form_input_tags = $html_form_input_tags .  "\n";					
					$html_form_input_tags = $html_form_input_tags .  '$result->execute();';
					$html_form_input_tags = $html_form_input_tags .  "\n";	
					$html_form_input_tags = $html_form_input_tags .  'Database::disconnect();';
					$html_form_input_tags = $html_form_input_tags .  "\n";	
					$html_form_input_tags = $html_form_input_tags .  '  for($i=0; $row = $result->fetch(); $i++){';
					$html_form_input_tags = $html_form_input_tags .  "\n";
					// $html_form_input_tags = $html_form_input_tags .  '		echo "<option value=". $row[\'VALUE_ID\'] . ">" . $row[\'VALUE_NAME\'] . "</option>";';
				
				
					$html_form_input_tags = $html_form_input_tags .  '          echo \'<option value="\'. $row[\'VALUE_ID\'] . \'"\' ;';
					$html_form_input_tags = $html_form_input_tags .  '          if ($' . $row['DB_COL_NAME'] . ' == $row[\'VALUE_ID\']) { echo " selected" ; }';
					$html_form_input_tags = $html_form_input_tags .  '          echo ">" . $row[\'VALUE_NAME\'] . "</option>";';
		

					$html_form_input_tags = $html_form_input_tags .  "\n";
					$html_form_input_tags = $html_form_input_tags .  '  } ?> ';
					$html_form_input_tags = $html_form_input_tags .  "\n";
					$html_form_input_tags = $html_form_input_tags .  "</select></div>\n";
			}
			    
		    $sql_insert .= $row['DB_COL_NAME']. ','; // Prepare insert statement's columns
			$sql_update .= $row['DB_COL_NAME']. ' = ?,'; // prepare update statements' columns with param
			$sql_select .= $row['DB_COL_NAME']. ',';
			$sql_insert_value_params      = $sql_insert_value_params . '?,'; // For VALUE (?,?,?...) parameters
			$sql_insert_value_param_vars  = $sql_insert_value_param_vars  . '$' . $row['DB_COL_NAME'] . ','; // For value array($v1, $v2...)
			// The value of  will appear in the output file like:
			// $variable1 = $row["variable1"]; 
			// $variable2 = $row["variable2"];  etc ... 
			$edit_select_db_col_name_assignment_vars = $edit_select_db_col_name_assignment_vars .  '$' . $row['DB_COL_NAME'] . ' = $row["' .  $row['DB_COL_NAME'] . '"];' . "\n";
					
			// Prepare validation checks
		    if (!empty($row['PHP_MANDATORY_CHECK'])) {
				$validation = $validation . $row['PHP_MANDATORY_CHECK'];
				$validation = $validation . "\n";
			}
			if (!empty($row['PHP_DATATYPE_CHECK'])) {
				 $validation = $validation .  $row['PHP_DATATYPE_CHECK'];
				 $validation = $validation . "\n";
			}
		} // end of select loop

		
		$sql_insert = substr($sql_insert, 0, -1); // Get rid of the last comma
		$sql_update = substr($sql_update, 0, -1); // Get rid of the last comma
		$sql_update  = $sql_update . ' WHERE id= ?' ;
		$sql_insert_value_params = substr($sql_insert_value_params, 0, -1); // Get rid of the last comma
		$sql_select = substr($sql_select, 0, -1); // Get rid of the last comma
		$sql_select = $sql_select . ' FROM ' . $TABLE_NAME . ' WHERE id= :id' ;
		$sql_update_value_param_vars = $sql_insert_value_param_vars . '$ID';
		$sql_insert_value_param_vars = substr($sql_insert_value_param_vars, 0, -1); // Get rid of the last comma
		
		$sql_insert = $sql_insert . ") \n VALUES (now()," . $sql_insert_value_params . " )"; 
		// echo "Sql String; $sql";
		$html_form_input_tags = $html_form_input_tags . '<input name="ID" type="hidden" value="<?php echo $ID;?> ">';
		$html_form_input_tags = $html_form_input_tags . '<div class="span3"><label>&nbsp;</label><input type="submit" name="Save" value="Save" class="btn btn-success span3 "  /></div>';
		$html_form_input_tags = $html_form_input_tags . "\n </div>    \n            </div>\n					</div>\n                 </div>";	
	
	    ////////////////////////////////////////////////////////////////////////////////
	    //All the variables are built at this point. Now follow the three step process
		// Step1) open the template1 file and write into the output file
		// Step2) flush all the built variables into output file
		// Step3) open the template2 file and write into the output file
		////////////////////////////////////////////////////////////////////////////////
	
		// Start step1) 
		echo "Add file prep is starting";
		$target_filename_add   = $_SERVER['DOCUMENT_ROOT'].'/screen/add_' . $target_screen_name;
		// echo "target_filename_add: $target_filename_add";
		$target_file_handler_add   = fopen($target_filename_add, "w") or die("Unable to open file: " . $target_file_handler_add);
		// echo " Opened " . $target_filename_add;
		
		$template_filename = $_SERVER['DOCUMENT_ROOT'].'/template/template_screen_add_1.php';
		$file_handle = fopen($template_filename, "r") or die("Unable to open template file: " . $template_filename);
		// echo " Opened " . $file_handle;
		
		while(!feof($file_handle)) {
          $tags = fgets($file_handle);

			switch(trim($tags) ) { 
				case '<###1>':
					$tags = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>';
					break;
				case '<###2>':
					$tags = $SUBMENU_NAME;
					break;
				case '<###3>':
					$tags = "Add " . $SUBMENU_NAME;
					break;
			}
			fwrite($target_file_handler_add, $tags);
		} //end of while
		fclose($file_handle); // CLOSE THE TEMPLATE FILE
		
		// Build the php code to validate the generated form, insert a record & and move to the list screen
		fwrite($target_file_handler_add,"\n<?php \n");
		fwrite($target_file_handler_add,'    if ( !empty($_POST)) {' . "\n");
		fwrite($target_file_handler_add,'		$valid = true;' . "\n");
		fwrite($target_file_handler_add,'		$ID = $_POST["ID"];'. "\n");
		fwrite($target_file_handler_add, $validation); // write all the validations into the output file
		fwrite($target_file_handler_add,'		if ($valid) {' . "\n");
		fwrite($target_file_handler_add,'			$pdo = Database::connect();' . "\n");
		fwrite($target_file_handler_add,'			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);' . "\n");
		fwrite($target_file_handler_add,'//<###INSERT>' . "\n");
		fwrite($target_file_handler_add,'			$q = $pdo->prepare("' . $sql_insert . '");' . "\n");
        fwrite($target_file_handler_add,'			$q->execute(array(' .  $sql_insert_value_param_vars . '));' . "\n"); 
		fwrite($target_file_handler_add,'			Database::disconnect();' . "\n");	
		fwrite($target_file_handler_add,'			echo "<div class=\'alert alert-info\'>Entries posted successfully.</div>";' . "\n");
		fwrite($target_file_handler_add,'			header(\'Location:list_' . $target_screen_name . '\');' . "\n");
		fwrite($target_file_handler_add,'			ob_end_flush();' . "\n");
        fwrite($target_file_handler_add,'			exit;' . "\n");
		fwrite($target_file_handler_add,'		}' . "\n");
		fwrite($target_file_handler_add,'		else   {' . "\n");
		fwrite($target_file_handler_add,'           echo "<div class=\'alert alert-error\'>$ErrorMsg</div>"; ' . "\n");
		fwrite($target_file_handler_add,'           ob_end_flush();' . "\n");
		fwrite($target_file_handler_add,'		}' . "\n");
		fwrite($target_file_handler_add,'	}'  . "\n");
		fwrite($target_file_handler_add,'//<###ELSE>' . "\n");
		fwrite($target_file_handler_add,'?>' . "\n");

		// step 2) flush all the dynamically built form components into the output file
		fwrite($target_file_handler_add,$html_form_input_tags);
		
		// step 3) open template2 file and write into the output file
		$template_filename = $_SERVER['DOCUMENT_ROOT'].'/template/template_screen_add_2.php';
		$file_handle = fopen($template_filename, "r") or die("Unable to open template file: " . $template_filename);
		// echo " Opened " . $file_handle;
		
		while(!feof($file_handle)) {
          $tags = fgets($file_handle);
		  
		  		switch(trim($tags) ) { 
				case '<###1>':
					$tags = sprintf("\"list_menu_%d_submenu_%d.php\"", $MENU_ID, $SUBMENU_ID);
					break;
			}	  
		  fwrite($target_file_handler_add, $tags);
		} //end of while
		fclose($file_handle); // CLOSE THE TEMPLATE2 FILE	
		
		fclose($target_file_handler_add); // Close the output file		
?>