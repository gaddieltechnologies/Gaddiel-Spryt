<?php
					// generate menu/menu.php using the records in menu table
					// process_template_menu1();
					
					$menu_sql="SELECT menu_id
						  FROM menu 
						  ORDER BY display_order";                   
					$menu_result=$pdo->prepare($menu_sql);
					$menu_result->execute();
					Database::disconnect();
					// echo "before menu loop";
					for($j=0; $menu_row = $menu_result->fetch(); $j++){
					
						$target_filename = $_SERVER['DOCUMENT_ROOT'].'/submenu/menu_' . $menu_row['menu_id']. ".php" ;
						$target_filename_handler  = fopen($target_filename, "w") or die("Unable to open file!");
							
						$template_filename = $_SERVER['DOCUMENT_ROOT'].'/template/template_submenu1.php';
						$file_handle = fopen($template_filename, "r") or die("Unable to open file!");
						while(!feof($file_handle)) {
							  $tags = fgets($file_handle);
							  fwrite($target_filename_handler, $tags);
						}
						fclose($file_handle);

								
						$sql="SELECT menu_id, submenu_id,  submenu_name, display_order, short_desc, long_desc
							  FROM submenu 
							  WHERE menu_id = " . $menu_row['menu_id'] . " ORDER BY display_order";                   
						$result=$pdo->prepare($sql);
						$result->execute();
						Database::disconnect();
						for($i=0; $row = $result->fetch(); $i++){						

							fwrite($target_filename_handler, '<div class="box-holder">');	
							fwrite($target_filename_handler, '<a href="../screen/list_menu_' . $row['menu_id']. '_submenu_' .$row['submenu_id']. '.php">');
							fwrite($target_filename_handler, '<div class="box" style="height:60px;"></br>' . $row['submenu_name'] . '</div>');
							fwrite($target_filename_handler, '
									</a>                            
								</div>');	
								
							if (($i+1)%4 == 0) {
								fwrite($target_filename_handler, '</div>');
								fwrite($target_filename_handler, '<div class="box-container">');
							}										
							
							$SCREEN_NAME = '../screen/list_menu_' . $row['menu_id']. '_submenu_' .$row['submenu_id']. '.php';
							if (!file_exists($SCREEN_NAME)) {
							$target_screen_filename_handler  = fopen($SCREEN_NAME, "w") or die("Unable to open file!");
							fwrite($target_screen_filename_handler, '
																		<html>
																		<body>
																		<h2> Screen has not been set up for this submenu yet.</h2> <br>
																		<h3> How to set up a Screen? </h3>
																		<ul>
																		  <li>Go to Dashboard</li>
																		  <li>Click on Setup Screen</li>
																		  <li>Save the Screen </li>
																		  <li>Come back here to see the Screen</li>
																		</ul>
																		</body>
																		</html> ');
							
							fclose($target_screen_filename_handler);
							
							}
							
						}					
						// start of process template_menu2 
						$template_filename = $_SERVER['DOCUMENT_ROOT'].'/template/template_submenu2.php';
						$file_handle = fopen($template_filename, "r") or die("Unable to open file!");
						while(!feof($file_handle)) {
							$tags = fgets($file_handle);
							fwrite($target_filename_handler, $tags);
						}
						fclose($file_handle);
						fclose($target_filename_handler);
							// end of menu.php generation
						}											
					
			
?>