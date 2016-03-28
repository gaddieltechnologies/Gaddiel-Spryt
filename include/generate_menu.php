<?php
					// generate menu/menu.php using the records in menu table
					// process_template_menu1();
					
					$sql="SELECT menu_id, menu_name, display_order, short_desc, long_desc
						  FROM menu 
						  ORDER BY display_order";                   
					$result=$pdo->prepare($sql);
					$result->execute();
					Database::disconnect();
					
					// process template_page1 file 
					$target_filename = $_SERVER['DOCUMENT_ROOT'].'/menu/' . "menu.php" ;
					$target_filename_handler  = fopen($target_filename, "w") or die("Unable to open file!");
					
					$template_filename = $_SERVER['DOCUMENT_ROOT'].'/template/template_menu1.php';
					$file_handle = fopen($template_filename, "r") or die("Unable to open file!");
					while(!feof($file_handle)) {
						  $tags = fgets($file_handle);
						  fwrite($target_filename_handler, $tags);
					}
					fclose($file_handle);
					// end of template_page1 file 
					
					
					for($i=0; $row = $result->fetch(); $i++){		
										
						fwrite($target_filename_handler, '<div class="box-holder">');	
						// $submenu_filename = '../submenu/menu_' . $row['menu_id']. '.php?menu_name='.$row['menu_name'];
						$submenu_filename = '../submenu/menu_' . $row['menu_id']. '.php';					
                        fwrite($target_filename_handler, '<a href="' . $submenu_filename . '?menu_name='. $row['menu_name'] . '">');
						fwrite($target_filename_handler, '<div class="box" style="height:60px;"></br>' . $row['menu_name'] . '</div>');
						fwrite($target_filename_handler, '
                                </a>                            
							</div> ');		
						if (($i+1)%4 == 0) {
								fwrite($target_filename_handler, '</div>');
								fwrite($target_filename_handler, '<div class="box-container">');
						}

						 if (!file_exists($submenu_filename)) {
							$target_submenu_filename_handler  = fopen($submenu_filename, "w") or die("Unable to open file!");
							fwrite($target_submenu_filename_handler, '
																		<html>
																		<body>
																		<h2> Submenu has not been set up for this menu yet.</h2> <br>
																		<h3> How to set up a Submenu? </h3>
																		<ul>
																		  <li>Go to Dashboard</li>
																		  <li>Click on Setup Submenu</li>
																		  <li>Save the Submenu </li>
																		  <li>Come back here to see the Submenu</li>
																		</ul>
																		</body>
																		</html> ');
							
							fclose($target_submenu_filename_handler);
						} 
					}										  
			
					// start of process template_menu2 
					$template_filename = $_SERVER['DOCUMENT_ROOT'].'/template/template_menu2.php';
					$file_handle = fopen($template_filename, "r") or die("Unable to open file!");
					while(!feof($file_handle)) {
						  $tags = fgets($file_handle);
						  fwrite($target_filename_handler, $tags);
					}
					fclose($file_handle);
					fclose($target_filename_handler);
					// end of menu.php generation
?>