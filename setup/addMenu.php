<?php
ob_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>Spyrt</title>
    
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
<script type="text/javascript">

function Validate(){
	var valid = true;
	var message = '';
	var regexp_numbers = /^[0-9]+$/;  
    
	var menuName = document.getElementById("MENU_NAME");
	var displayOrder = document.getElementById("DISPLAY_ORDER");
   
	
	if( menuName.value.trim() == ''){
		valid = false;
		message = message + '*Menu Name is required' + '\n';
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

<body onload="addDate();">
<style>

</style>
<!-- Navbar -->
    
	<?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	<!-- /Navbar -->
	<form name="myForm" action="addMenu.php" method="POST"  onSubmit="return Validate();">
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
									<h3>Menu</h3>	
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
								<h3>Add Menu</h3>
							</div>
							<div class="widget-content">							                              
                                <div class="span4"><label>Menu Name<font color="#FF0000"> *</font></label>      <input type="text" value="<?php echo !empty($MENU_NAME)?$MENU_NAME:'';?>" name="MENU_NAME"  id="MENU_NAME" class="span4"></div>								
								<div class="span4"><label>Display Order<font color="#FF0000"> *</font></label>  <input type="text" name="DISPLAY_ORDER" id="DISPLAY_ORDER" onblur="validateForm()" class="span4"></div>   
								<div class="span3"><label>Short Description<font color="#FF0000"> </font></label><input type="text" name="SHORT_DESC" id="SHORT_DESC"  class="span3"></div>
								<div class="span8"><label>Long Description<font color="#FF0000"> </font></label><input type="text"  name="LONG_DESC" id="LONG_DESC"  class="span8"></div>									 
                                  
                               	<div class="span3"><label>&nbsp;</label><input type="submit" name="Add" value="Add" class="btn btn-success span3 "  /></div>		
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
	</div>	
    </form>		
</body>


</html>
<?php
			include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php'); 
		    if ( !empty($_POST))
			{
				$MENU_NAME = $_POST['MENU_NAME'];
				$DISPLAY_ORDER = $_POST['DISPLAY_ORDER'];
				$SHORT_DESC = $_POST['SHORT_DESC'];
				$LONG_DESC = $_POST['LONG_DESC'];
					
			    $valid = true;
                $pdo = Database::connect();
				$sql = "SELECT * FROM menu WHERE menu_name = '$MENU_NAME'";
				$query =  $pdo->prepare( $sql );
				$query->execute();
                $rows = $query->fetch(PDO::FETCH_NUM);
               if($rows > 0) {
                    	echo "<script language=javascript>alert('Menu Name: '" . $MENU_NAME. "' already exits.')</script>";
                 }
			  
		    else{
				
				$pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              	$sql = "INSERT INTO menu (insert_date,update_date, menu_name, display_order, short_desc, long_desc)  
						VALUES(now(), now(),?,?,?,?)";
                $q = $pdo->prepare($sql);
                $q->execute(array($MENU_NAME,$DISPLAY_ORDER,$SHORT_DESC,$LONG_DESC));
				Database::disconnect();	
				
				// This is to regenerate  menu/menu.php file after the update
				include($_SERVER['DOCUMENT_ROOT'].'/include/generate_menu.php');
				
				echo "<div class='alert alert-info'> Successfully Inserted. </div>";
				
               	header('Location:listMenu.php');
				ob_end_flush();
                 exit;
		    }
			    
			  	
			}
			ob_end_flush();
		?>