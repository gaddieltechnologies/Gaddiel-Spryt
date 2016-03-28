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
Company Data									</h3>	
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
Add Company Data								<h3>
							</div>
							<div class="widget-content">							                              
<?php 
    if ( !empty($_POST)) {
		$valid = true;
		$ID = $_POST["ID"];
if (empty($_POST["CompanyName_64"])) {  $ErrorMsg .= "\nCompany Name is required;<br>";  $valid = false;  } else { $CompanyName_64= $_POST["CompanyName_64"]; }
$CompanyName_64= $_POST["CompanyName_64"];
if (empty($_POST["RegistrationNumber_66"])) {  $ErrorMsg .= "\nRegistration Number is required;<br>";  $valid = false;  } else { $RegistrationNumber_66= $_POST["RegistrationNumber_66"]; }
$RegistrationNumber_66= $_POST["RegistrationNumber_66"];
if (empty($_POST["TAXRegn_79"])) {  $ErrorMsg .= "\nTAX Regn# is required;<br>";  $valid = false;  } else { $TAXRegn_79= $_POST["TAXRegn_79"]; }
$TAXRegn_79= $_POST["TAXRegn_79"];
if (empty($_POST["TAN_89"])) {  $ErrorMsg .= "\nTAN# is required;<br>";  $valid = false;  } else { $TAN_89= $_POST["TAN_89"]; }
$TAN_89= $_POST["TAN_89"];
if (!ctype_alpha($_POST["IncorporatedOn_36"])) {  $ErrorMsg .= "\nIncorporated On must have only alphabets;<br>";  $valid = false; } else { $IncorporatedOn_36= $_POST["IncorporatedOn_36"]; }
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//<###INSERT>
			$q = $pdo->prepare("INSERT INTO dyn_tbl_menu_1_submenu_1(insert_date, CompanyName_64,RegistrationNumber_66,TAXRegn_79,TAN_89,IncorporatedOn_36) 
 VALUES (now(),?,?,?,?,? )");
			$q->execute(array($CompanyName_64,$RegistrationNumber_66,$TAXRegn_79,$TAN_89,$IncorporatedOn_36));
			Database::disconnect();
			echo "<div class='alert alert-info'>Entries posted successfully.</div>";
			header('Location:list_menu_1_submenu_1.php');
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
<div class="span4"><label>Company Name<font color="#FF0000"> *</font></label><input type="text" name="CompanyName_64" id="CompanyName_64"  value="<?php echo !empty($CompanyName_64)?$CompanyName_64:'';?>"  class="span4"></div>
<div class="span4"><label>Registration Number<font color="#FF0000"> *</font></label><input type="text" name="RegistrationNumber_66" id="RegistrationNumber_66"  value="<?php echo !empty($RegistrationNumber_66)?$RegistrationNumber_66:'';?>"  class="span4"></div>
<div class="span4"><label>TAX Regn#<font color="#FF0000"> *</font></label><input type="text" name="TAXRegn_79" id="TAXRegn_79"  value="<?php echo !empty($TAXRegn_79)?$TAXRegn_79:'';?>"  class="span4"></div>
<div class="span4"><label>TAN#<font color="#FF0000"> *</font></label><input type="text" name="TAN_89" id="TAN_89"  value="<?php echo !empty($TAN_89)?$TAN_89:'';?>"  class="span4"></div>
<div class="span4"><label>Incorporated On</label><input type="text" name="IncorporatedOn_36" id="IncorporatedOn_36"  value="<?php echo !empty($IncorporatedOn_36)?$IncorporatedOn_36:'';?>"  class="span4"></div>
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