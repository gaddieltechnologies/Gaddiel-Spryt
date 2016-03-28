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
PI Entry									</h3>	
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
Add PI Entry								<h3>
							</div>
							<div class="widget-content">							                              
<?php 
    if ( !empty($_POST)) {
		$valid = true;
		$ID = $_POST["ID"];
if (empty($_POST["ProductCategory_94"])) {  $ErrorMsg .= "\nProduct Category is required;<br>";  $valid = false;  } else { $ProductCategory_94= $_POST["ProductCategory_94"]; }
$ProductCategory_94= $_POST["ProductCategory_94"];
if (empty($_POST["NoofUnits_72"])) {  $ErrorMsg .= "\nNo of Units is required;<br>";  $valid = false;  } else { $NoofUnits_72= $_POST["NoofUnits_72"]; }
if (!is_numeric($_POST["NoofUnits_72"])) {  $ErrorMsg .= "\nNo of Units must be a number;<br>";  $valid = false; } else { $NoofUnits_72= $_POST["NoofUnits_72"]; }
if (empty($_POST["ItemUOM_31"])) {  $ErrorMsg .= "\nItem UOM is required;<br>";  $valid = false;  } else { $ItemUOM_31= $_POST["ItemUOM_31"]; }
$ItemUOM_31= $_POST["ItemUOM_31"];
if (empty($_POST["Buyer_64"])) {  $ErrorMsg .= "\nBuyer is required;<br>";  $valid = false;  } else { $Buyer_64= $_POST["Buyer_64"]; }
$Buyer_64= $_POST["Buyer_64"];
if (empty($_POST["Customer_42"])) {  $ErrorMsg .= "\nCustomer is required;<br>";  $valid = false;  } else { $Customer_42= $_POST["Customer_42"]; }
$Customer_42= $_POST["Customer_42"];
if (!is_numeric($_POST["DeliverBy_45"])) {  $ErrorMsg .= "\nDeliver By must be a number;<br>";  $valid = false; } else { $DeliverBy_45= $_POST["DeliverBy_45"]; }
$DeliverBy_86= $_POST["DeliverBy_86"];
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$q = $pdo->prepare("UPDATE dyn_tbl_menu_2_submenu_2 SET ProductCategory_94 = ?,NoofUnits_72 = ?,ItemUOM_31 = ?,Buyer_64 = ?,Customer_42 = ?,DeliverBy_45 = ?,DeliverBy_86 = ? WHERE id= ?");
			$q->execute(array($ProductCategory_94,$NoofUnits_72,$ItemUOM_31,$Buyer_64,$Customer_42,$DeliverBy_45,$DeliverBy_86,$ID));
			Database::disconnect();
			echo "<div class='alert alert-info'>Entries posted successfully.</div>";
			header('Location:list_menu_2_submenu_2.php');
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
$result = $pdo->prepare("SELECT ID,ProductCategory_94,NoofUnits_72,ItemUOM_31,Buyer_64,Customer_42,DeliverBy_45,DeliverBy_86 FROM dyn_tbl_menu_2_submenu_2 WHERE id= :id");
$result->bindParam(':id', $ID);
$result->execute();
Database::disconnect();
for($i=0; $row = $result->fetch(); $i++)
{

$ID = $row['ID'];
$ProductCategory_94 = $row["ProductCategory_94"];
$NoofUnits_72 = $row["NoofUnits_72"];
$ItemUOM_31 = $row["ItemUOM_31"];
$Buyer_64 = $row["Buyer_64"];
$Customer_42 = $row["Customer_42"];
$DeliverBy_45 = $row["DeliverBy_45"];
$DeliverBy_86 = $row["DeliverBy_86"];

}
}
?>
<div class="span4"><label>Product Category<font color="#FF0000"> *</font></label><input type="text" name="ProductCategory_94" id="ProductCategory_94"  value="<?php echo !empty($ProductCategory_94)?$ProductCategory_94:'';?>"  class="span4"></div>
<div class="span4"><label>No of Units<font color="#FF0000"> *</font></label><input type="text" name="NoofUnits_72" id="NoofUnits_72"  value="<?php echo !empty($NoofUnits_72)?$NoofUnits_72:'';?>"  class="span4"></div>
<div class="span4"><label>Item UOM</label><select id="ItemUOM_31" name="ItemUOM_31"> 

<?php 
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$result = $pdo->prepare("SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = 'ITEM' AND KEY_NAME = 'UOM'");
$result->execute();
Database::disconnect();
  for($i=0; $row = $result->fetch(); $i++){
          echo '<option value="'. $row['VALUE_ID'] . '"' ;          if ($ItemUOM_31 == $row['VALUE_ID']) { echo " selected" ; }          echo ">" . $row['VALUE_NAME'] . "</option>";
  } ?> 
</select></div>
<div class="span4"><label>Buyer<font color="#FF0000"> *</font></label><input type="text" name="Buyer_64" id="Buyer_64"  value="<?php echo !empty($Buyer_64)?$Buyer_64:'';?>"  class="span4"></div>
<div class="span4"><label>Customer<font color="#FF0000"> *</font></label><input type="text" name="Customer_42" id="Customer_42"  value="<?php echo !empty($Customer_42)?$Customer_42:'';?>"  class="span4"></div>
<div class="span4"><label>Deliver By</label><input type="text" name="DeliverBy_45" id="DeliverBy_45"  value="<?php echo !empty($DeliverBy_45)?$DeliverBy_45:'';?>"  class="span4"></div>
<div class="span4"><label>Deliver By</label><input type="text" name="DeliverBy_86" id="DeliverBy_86"  value="<?php echo !empty($DeliverBy_86)?$DeliverBy_86:'';?>"  class="span4"></div>
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