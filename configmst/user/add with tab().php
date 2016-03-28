
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>SoP</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/font-awesome.css">
	
	<link rel="stylesheet" type="text/css" href="../../resources/css/jquery-ui.css">
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/jquery-ui.js"></script>
	
    <!-- Google font -->
    <link href="/css/css.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>
<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
<body>
<style>

</style>
<!-- Navbar -->

	  <?php include($_SERVER['DOCUMENT_ROOT'].'/spryt/header.php'); ?>
	<!-- /Navbar -->
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
									<h3>User</h3>	
								</div>                       
								<div class="span3">                                                                
									<div class="box-holder">
										
									</div>  
									<div class="box-holder">
											
											 
									</div>  
									<div class="box-holder">
										<a href="user.php">
										<div class="box"><img src="../../resources/images/e-close.png"/></br>Close</div></a>							
									</div>   
																													  
							    </div>                       
						</div>                                    
						</div>	              
					</div>
                </div>
				<div class="row">                               
					<div class="span12">			
						<div id="tabs">
						  <ul>
							<li><a href="#tabs-1">Add User</a></li>
							<li><a href="#tabs-2">Detail</a></li>					
						  </ul>
						  <div id="tabs-1">				
							<div class="widget-content">
								<div class="span4">
									<label>User<font color="#FF0000"> *</font></label>
									<input type="text" autofocus name="txtUserName" id="txtUserNameId" class="span4">
								</div>
								<div class="span4">
									<label>Role</label>
									<input type="text"  name="Role"  class="span4">
								</div>
								<div class="span4">
									<label>Role</label>
									<input type="text"  name="DESCRIPTION"  class="span4">
								</div>                 								
								<div class="span2">
									<label>&nbsp;</label>
									<input type="submit" name="Add" value="Add" class="btn btn-success span2" />
								</div>					
							</div>  
						  </div>
						  <div id="tabs-2">
							<div class="widget-content">
								<div class="span4">
									<label>Order Line<font color="#FF0000"> *</font></label>
									<input type="text" autofocus name="CLIENT_CATEGORY" id="CLIENT_CATEGORY" class="span4">
								</div>
								<div class="span4">
									<label>Qty</label>
									<input type="text"  name="DESCRIPTION"  class="span4">
								</div>                 
								<div class="span2">
									<label>&nbsp;</label>
									<input type="submit" name="Add" value="Next Line" class="btn btn-success span2" />
								</div>
							
							</div>  
						  </div>				 
						</div>
					</div>
				</div>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/spryt/footer.php'); ?>
				
					<div class="dock-wrapper">    
							 <div class="navbar navbar-fixed-bottom">
								<div class="navbar-inner">
									<div class="container">                  
											<center>
												<div class="btn-group btn-group-justified">                      
													
													
													<a href="clientCategory.php" class="btn btn-default">
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

			