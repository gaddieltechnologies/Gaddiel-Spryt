<?php
session_start();
ob_start();
?>
<!-- Navbar -->
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span Class="desktop pull-right"><img src="resources/images/slogo.png" Style=" width:100px; height:35px; margin-left:50px;" align="left" alt="Spryt"/></span></a>
				<a class="brand" style="font-size:12px;"/><span Class="mobile pull-right"><img src="resources/images/slogo.png" Style=" width:100px; height:35px; margin-left:50px;" align="left" alt="Spryt"/></span></a>
				<div class="mobile">           		
						<ul class="nav pull-right">					
					 <li class="divider-vertical"></li>
					 <li><a href="http://127.0.0.1/spryt/logout.php"><i class="icon-unlock"></i></a></li>
					 <li class="divider-vertical"></li>
					</ul>
				</div>
				<div class="nav-collapse">
					<ul class="nav pull-right">
					 <li class="divider-vertical"></li>
					 <li><a href="http://127.0.0.1/spryt/logout.php"><i class="icon-unlock"></i>&nbsp;&nbsp;Logout</a></li>
					 <li class="divider-vertical"></li>
					</ul>
				</div>
				
			</div>
		</div>
<?php
	 
		 
	
        if(empty($_SESSION['user'])){
		header("Location: http://127.0.0.1/spryt/index.php");	
			}	
			
       
			
		 /*$_SESSION['start'] = time(); // taking now logged in time
		 
			if(!isset($_SESSION['expire'])){
					$_SESSION['expire'] = $_SESSION['start'] + (30* 60) ; // ending a session in 5 mintues
				}
				$now = time(); // checking the time now when home page starts

				if($now > $_SESSION['expire'])
				{
					session_destroy();
					echo '<script type="text/javascript">
						window.location.href = "http://127.0.0.1/lastMileCRM/index.php";
						</script>';
				}*/
				

?>
	</div>
	<!-- /Navbar -->