<?php
ob_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>Spyrt Application</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
   <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.min.css" >
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

	</head>

<style>

</style>
<!-- Navbar -->
    
	<?php 
		include($_SERVER['DOCUMENT_ROOT'].'/include/header.php');
		include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');
	?>
	
	<!-- /Navbar -->
	<form name="myForm" action= 
<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>	method="POST"  onSubmit="return Validate();">
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
									<h3>
SOP_STAGE									</h3>	
								</div>                       
								<div class="span3">                                                                
									<div class="box-holder">
											
									</div>  
									<div class="box-holder">
												
												 
									</div>  
									<div class="box-holder">
										<a href="listMenu.php">
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
						<div class="widget">
							<div class="widget-header">
								<h3>
Add SOP_STAGE								<h3>
							</div>
							<div class="widget-content">							                              
<?php 
    if ( !empty($_POST)) {
		$valid = true;
		$ID = $_POST["ID"];
$Name_30= $_POST["Name_30"];
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//<###INSERT>
			$q = $pdo->prepare("INSERT INTO dyn_tbl_menu_4_submenu_5(insert_date, Name_30) 
 VALUES (now(),? )");
			$q->execute(array($Name_30));
			Database::disconnect();
			echo "<div class='alert alert-info'>Entries posted successfully.</div>";
			header('Location:list_menu_4_submenu_5.php');
			ob_end_flush();
			exit;
		}
		else   {
           echo "<div class='alert alert-error'>$ErrorMsg</div>"; 
           ob_end_flush();
		}
	}
//<###ELSE>
?>
<div class="span4"><label>Name</label><input type="text" name="Name_30" id="Name_30"  value="<?php echo !empty($Name_30)?$Name_30:'';?>"  class="span4"></div>
<input name="ID" type="hidden" value="<?php echo $ID;?> "><div class="span3"><label>&nbsp;</label><input type="submit" name="Save" value="Save" class="btn btn-success span3 "  /></div>
 </div>    
            </div>
					</div>
                 </div>				<?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>
					<div class="dock-wrapper">    
							 <div class="navbar navbar-fixed-bottom">
								<div class="navbar-inner">
									<div class="container">                  
											<center>
												<div class="btn-group btn-group-justified">                      
								
													<a href="listMenu.php" class="btn btn-default">
													<img src="../../resources/images/e-close.png"/><br>Close</a>		
												</div>   
											</center> 	
									</div>     
								</div>
							</div>
					</div>		
				
				
        </div>
	</div>	
    </form>		
</body>
</html>