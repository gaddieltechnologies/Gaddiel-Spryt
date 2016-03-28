<?php

ob_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>Spryt</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
     <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="../resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/font-awesome.css">
	 <link rel="stylesheet" type="text/css" href="../resources/css/pikaday.css">	 
	<link rel="stylesheet" type="text/css" href="../resources/css/style.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/jquery_ui_datepicker.css">
	
	<script src="../resources/js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="../resources/js/jquery_ui_datepicker.js" type="text/javascript"></script>
	
	<script src="../resources/js/ui.datepicker-de.js" type="text/javascript"></script>
	<script src="../resources/js/timepicker.js" type="text/javascript"></script>
    <!-- Google font -->
    <link href="/css/css.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">

function Validate(){
	var valid = true;
	var message = '';
	var regexp_numbers = /^[0-9]+$/;  
    
	var menuName = document.getElementById("SUBMENU_NAME");
	var displayOrder = document.getElementById("DISPLAY_ORDER");
   
	
	if( menuName.value.trim() == ''){
		valid = false;
		message = message + '*Submenu Name is required' + '\n';
	}
	if(displayOrder.value.trim() == ''){
		valid = false;
		message = message + '*Display Order is required' + '\n';
	}
	
	if(!displayOrder.value.match(regexp_numbers))  
    {  
		valid = false;
		message = message + '*Enter a valid number for Display Order' + '\n';
	}
	
	if (valid == false){
		alert(message);
		return false;
	}
}

</script>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	

	
</head>

<body>
<style>

</style>
<!-- Navbar -->


	<!-- /Navbar -->
	
	<?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	<form action="" method="POST" onSubmit="return Validate();">
	<!-- Main content -->
	<div id="main-content">
		<!-- Container -->
		<div class="container">
			<!-- Header boxes -->
			<div class="box-container">
				
			</div>
			<!-- /Header boxes -->
			
                            <div class="row">
				<!-- Sidebar -->				
				<!-- /Sidebar -->				
				<!-- Content -->
				<div class="span12 desktop">					
				    <div class="widget">                    					
					<div class="widget-content"> 
                                            <div class="span7">
                                            <h3>Submenu</h3>	
                                            </div>                       
                                               <div class="span3">                                                                
	                               <div class="box-holder">
	                                
	                               </div>  
	                               <div class="box-holder">
								        
										 
	                               </div>  
                                      <div class="box-holder">
                                           <a href="listSubmenu.php">
                                           <div class="box"><img src="../resources/images/e-close.png"/></br>Close</div></a>							
                                     </div>   
	                              	                              	                                              
	                             </div>                       
                                        </div>                                    
                                    </div>	              
                                </div>
                            </div>
				<div class="row">
                
				
				
				<!-- Content -->
					<div class="span12">
			<?php
			
			include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php'); 
			ob_start();
			if ( !empty($_POST)) {


				$SUBMENU_ID    = $_GET['id'];
				$MENU_ID       = $_POST['MENU_ID'];	
				$SUBMENU_NAME  = $_POST['SUBMENU_NAME'];
				$DISPLAY_ORDER = $_POST['DISPLAY_ORDER'];
				$SHORT_DESC    = $_POST['SHORT_DESC'];
				$LONG_DESC     = $_POST['LONG_DESC'];	
				
				$valid = true;
                $pdo = Database::connect();
				$sql = "SELECT * FROM submenu WHERE submenu_name = '$SUBMENU_NAME' and menu_id = $MENU_ID and submenu_id != $SUBMENU_ID ";
				$query =  $pdo->prepare( $sql );
				$query->execute();
                $rows = $query->fetch(PDO::FETCH_NUM);
                if($rows > 0) {
                    	echo "<script language=javascript>alert('Submenu Name: '" . $SUBMENU_NAME. "' already exits under this menu.')</script>";
						$valid = false;
                }
				else
				{
				// echo "insdie Else";
				// echo "sub menu id: $SUBMENU_ID";
					$sql = "UPDATE submenu 
							SET update_date= NOW(), submenu_name=? ,display_order=? ,short_desc=? ,long_desc=?, menu_id=?   
							WHERE submenu_id=?";
					$pdo = Database::connect();
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$q = $pdo->prepare($sql);
					$q->execute(array($SUBMENU_NAME,$DISPLAY_ORDER,$SHORT_DESC,$LONG_DESC,$MENU_ID,$SUBMENU_ID ));
					
					// echo "update complete";
					// This is to regenerate  menu/menu.php file after the update
					include($_SERVER['DOCUMENT_ROOT'].'/include/generate_submenu.php');
					
					echo "<div class='alert alert-success'> Successfully Updated. </div>"; 
			
					echo '<script type="text/javascript">
						window.location.href = "listSubmenu.php";
						</script>';
				}
				
			}	// End of Post
					$SUBMENU_ID = $_GET['id']; /** get the Menu details for the given ID **/
			        $pdo = Database::connect();
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
					$result = $pdo->prepare("SELECT MENU_ID, SUBMENU_NAME, DISPLAY_ORDER, SHORT_DESC, LONG_DESC 
											 FROM submenu 
											 WHERE submenu_id= :submenu_id");
	                $result->bindParam(':submenu_id', $SUBMENU_ID);
	                $result->execute();
					Database::disconnect();	
	                for($i=0; $row = $result->fetch(); $i++)
					{						
					?>						
						<div class="widget">
							<div class="widget-header">
								<h3>Edit Submenu</h3>
							</div>
							<div class="widget-content">	
								<div class="span7"><label>Menu<font color="#FF0000"> *</font></label>
								<?php 
											$pdo = Database::connect();
											$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$menu_result = $pdo->prepare("SELECT menu_id,menu_name FROM menu order by menu_name");
											$menu_result->execute();
											Database::disconnect();	
											// $my = "";
											echo '<select autofocus  class="span4" name="MENU_ID" id="MENU_ID">';											
											for($j=0; $menu_row = $menu_result->fetch(); $j++){																	
												echo "<option value=". $menu_row['menu_id'];

												if ($menu_row['menu_id'] == $row['MENU_ID']) { echo " selected"; }
												echo ">" . $menu_row['menu_name'] . "</option>";
												
												//$my = $my . "processing menu_id: " . $menu_row['menu_id'] . " Submenu's menu_id: " . $row['MENU_ID'];
												
											}
											echo '</select>';  
											echo $my;
								?>
								</div>							
								<div class="span4"><label>SubMenu Name<font color="#FF0000"> *</font></label><input type="text"  value="<?php echo $row['SUBMENU_NAME'];?>" name="SUBMENU_NAME"  id="SUBMENU_NAME" onblur="validateForm()"class="span4"></div>																	
								<div class="span4"><label>Display Order<font color="#FF0000"> *</font></label><input type="text" name="DISPLAY_ORDER"  value="<?php echo $row['DISPLAY_ORDER'];?>" id="DISPLAY_ORDER" onblur="validateForm()" class="span4"></div>   
								<div class="span4"><label>Short Description <font color="#FF0000"> *</font></label><input type="text" name="SHORT_DESC"  value="<?php echo $row['SHORT_DESC'];?>" id="SHORT_DESC" onblur="validateForm()" class="span4"></div>   
								<div class="span4"><label>Long Description<font color="#FF0000"> *</font></label><input type="text" name="LONG_DESC"  value="<?php echo $row['LONG_DESC'];?>" id="LONG_DESC" onblur="validateForm()" class="span4"></div>   
                                  
                               	<div class="span3"><label>&nbsp;</label><input type="submit" name="Update" value="Update" class="btn btn-success span3 " /></div>		
							</div> 
						</div>
					</div>
				<!-- /Content -->
                </div>
			
				<?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>
<div class="dock-wrapper">    
         <div class="navbar navbar-fixed-bottom">
            <div class="navbar-inner">
                <div class="container">                  
                        <center>
                            <div class="btn-group btn-group-justified">                      
							   
							    <a href="listMenu.php" class="btn btn-default">
									<img src="../resources/images/e-close.png"/><br>Close</a>		
						    </div>   
						</center> 	
				</div>     
           	</div>
		</div>
     </div>		
				
        </div>
</form>		
<?php
	}
	
?>	
</body>

</html>
