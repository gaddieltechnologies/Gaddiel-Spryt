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
SOP									</h3>	
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
Add SOP								<h3>
							</div>
							<div class="widget-content">							                              
<?php 
    if ( !empty($_POST)) {
		$valid = true;
		$ID = $_POST["ID"];
$CreatedDate_95= $_POST["CreatedDate_95"];
$UpdateDate_92= $_POST["UpdateDate_92"];
if (!ctype_alpha($_POST["Sl_53"])) {  $ErrorMsg .= "\nSl# must have only alphabets;<br>";  $valid = false; } else { $Sl_53= $_POST["Sl_53"]; }
$SOPCode_10= $_POST["SOPCode_10"];
$Description_65= $_POST["Description_65"];
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$q = $pdo->prepare("UPDATE dyn_tbl_menu_3_submenu_4 SET CreatedDate_95 = ?,UpdateDate_92 = ?,Sl_53 = ?,SOPCode_10 = ?,Description_65 = ? WHERE id= ?");
			$q->execute(array($CreatedDate_95,$UpdateDate_92,$Sl_53,$SOPCode_10,$Description_65,$ID));
			Database::disconnect();
			echo "<div class='alert alert-info'>Entries posted successfully.</div>";
			header('Location:list_menu_3_submenu_4.php');
			ob_end_flush();
			exit;
		}
		else   {
           echo "<div class='alert alert-error'>$ErrorMsg</div>"; 
           ob_end_flush();
		}
	}
else {
$ID = $_GET['id'];
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$result = $pdo->prepare("SELECT ID,CreatedDate_95,UpdateDate_92,Sl_53,SOPCode_10,Description_65 FROM dyn_tbl_menu_3_submenu_4 WHERE id= :id");
$result->bindParam(':id', $ID);
$result->execute();
Database::disconnect();
for($i=0; $row = $result->fetch(); $i++)
{

$ID = $row['ID'];
$CreatedDate_95 = $row["CreatedDate_95"];
$UpdateDate_92 = $row["UpdateDate_92"];
$Sl_53 = $row["Sl_53"];
$SOPCode_10 = $row["SOPCode_10"];
$Description_65 = $row["Description_65"];

}
}
?>
<div class="span4"><label>Created Date</label><input type="text" name="CreatedDate_95" id="CreatedDate_95"  value="<?php echo !empty($CreatedDate_95)?$CreatedDate_95:'';?>"  class="span4"></div>
<div class="span4"><label>Update Date</label><input type="text" name="UpdateDate_92" id="UpdateDate_92"  value="<?php echo !empty($UpdateDate_92)?$UpdateDate_92:'';?>"  class="span4"></div>
<div class="span4"><label>Sl#</label><input type="text" name="Sl_53" id="Sl_53"  value="<?php echo !empty($Sl_53)?$Sl_53:'';?>"  class="span4"></div>
<div class="span4"><label>SOP Code</label><input type="text" name="SOPCode_10" id="SOPCode_10"  value="<?php echo !empty($SOPCode_10)?$SOPCode_10:'';?>"  class="span4"></div>
<div class="span4"><label>Description</label><input type="text" name="Description_65" id="Description_65"  value="<?php echo !empty($Description_65)?$Description_65:'';?>"  class="span4"></div>
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