<!-- This is dashboard 1st screen of the application -->
<?php
ob_start();

?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <title>Spryt</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
   
    <!-- CSS files -->
   <link rel="stylesheet" type="text/css" href="<?php $path ?>resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="<?php $path ?>resources/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="<?php $path ?>resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="<?php $path ?>resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="<?php $path ?>resources/css/font-awesome.css">
    <!-- Google font -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>

<body>


	<!-- Navbar -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	<!-- /Navbar -->
<script type="text/javascript">

$( window ).load(function() {
  var role="<?php echo $_SESSION['row'];?>";
	if(role=="USER") 
	{
		$("#admin").hide();
		$("#user").show();
	
	}
	if(role=="ADMIN"|| role=="GUEST")
	{
		$("#admin").show();
		$("#user").hide();
	 
	}
});
</script>
	<!-- /Navbar -->
	
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
		<?php
		include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');
        $user=$_SESSION['user'];			
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $pdo->prepare("SELECT NEXT_PASSWORD_CHANGE_DATE FROM USER_INFO WHERE USER_NAME='$user'");
		$result->execute();
		$row = $result->fetch();
		$countdate=$row['NEXT_PASSWORD_CHANGE_DATE'];
		$tabledate = strtotime($countdate); 
		$currentdate=date('Y-m-d');
        $thendate = strtotime($currentdate);
		$datediff = ($tabledate - $thendate);
		$date = round($datediff / 86400);
		
		
       if(!empty($countdate))
		{
			if($date <=7)
			{
				echo "<div class='alert alert-info'> Change Your Password within $date. </div>";
			}			
			if($datediff ==0)
			{
				 echo '<script type="text/javascript">
							window.location.href = "http://127.0.0.1/spryt/login/changepwd.php";
							</script>';
			}
		}
		?>				
				<!-- Content -->
		<div class="span12">
	<?php
	
		?>
			<div id="user"><h1 class="page-title">Menu<label class="pull-right"> </label></h1></div>
			<div id="admin"><h1 class="page-title">Menu<label class="pull-right"><a href="<?php $path ?>dashBoard.php"><h5><font color="#FFFFFF">Back to Dashboard</font></h5></a> </label></h1></div>
				<div class="widget">						
					<div class="widget-content">
						<div class="box-container">
							<div class="box-holder"><a href="<?php $path ?>submenu/menu_1.php?menu_name=Configurations"><div class="box" style="height:60px;"></br>Configurations</div>
                                </a>                            
							</div> <div class="box-holder"><a href="<?php $path ?>submenu/menu_2.php?menu_name=ORDER ENTRY"><div class="box" style="height:60px;"></br>ORDER ENTRY</div>
                                </a>                            
							</div> <div class="box-holder"><a href="<?php $path ?>submenu/menu_3.php?menu_name=SOP"><div class="box" style="height:60px;"></br>SOP</div>
                                </a>                            
							</div> <div class="box-holder"><a href="<?php $path ?>submenu/menu_4.php?menu_name=SOP_STAGE"><div class="box" style="height:60px;"></br>SOP_STAGE</div>
                                </a>                            
							</div> </div><div class="box-container"><div class="box-holder"><a href="<?php $path ?>submenu/menu_6.php?menu_name=A"><div class="box" style="height:60px;"></br>A</div>
                                </a>                            
							</div> 						</div> <!-- box-container-->
					</div><!-- widget-content-->
				  </div><!-- widget-->									
		          </div><!-- span12-->
		     </div><!--row-->	
					
		         <!-- Footer -->
			 <?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>
			<!-- /Footer -->	<!-- /Content -->
	
       </div><!-- /Container -->
</div><!-- /Main content -->

	<!-- Javascript files -->
	


</body></html>