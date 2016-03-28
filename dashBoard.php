<!-- saved from url=(0057)http://wbpreview.com/previews/WB01BG165/user-account.html -->
<?php
ob_start();
?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <title>Spryt</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
   
    <!-- CSS files -->
   <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="resources/css/font-awesome.css">
    <!-- Google font -->
   

	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>

<body>
	<!-- Navbar -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	<!-- /Navbar -->

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
		$result = $pdo->prepare("SELECT * FROM USER_INFO WHERE USER_NAME='$user'");
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
	
			<h1 class="page-title">Admin Menu</h1>
				<div class="widget">						
					<div class="widget-content">
						<div class="box-container">
							
												
							<div class="box-holder">						
                                <a href="configmst/configMst.php">
								<div class="box" style="height:60px;"></br>Configuration Dashboard</div>
                                </a>                            
							</div>  
							<div class="box-holder">						
								<a href="menu/menu.php">
								<div class="box" style="height:60px;"></br>User Menu</div>
                                </a>							
							</div>						

						</div> 
					</div>
				</div>										
		</div>
				
		</div>
			
		<!-- Footer -->
			 <?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>
			<!-- /Footer -->	<!-- /Content -->
	
		</div>
		<!-- /Container -->
	</div>
	<!-- /Main content -->

	<!-- Javascript files -->
	


</body></html>