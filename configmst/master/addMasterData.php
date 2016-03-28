
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>SpryT</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../../resources/css/pageStyle.css">
    <!-- Google font -->
    <link href="/css/css.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>
<script type="text/javascript" src="validateMasterData.js">

</script>
<script type="text/javascript">
function makeUppercase() {
document.addForm.txtGroupName.value = document.addForm.txtGroupName.value.toUpperCase();
document.addForm.txtKeyName.value = document.addForm.txtKeyName.value.toUpperCase();
document.addForm.txtValueIdName.value = document.addForm.txtValueIdName.value.toUpperCase();
document.addForm.txtValueName.value = document.addForm.txtValueName.value.toUpperCase();

}
</script>
<body>
<style>

</style>
<!-- Navbar -->

	  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	<!-- /Navbar -->
	<form action="#" method="POST" name="addForm" onsubmit="return validateAdd();">
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
									<h3>Master Data</h3>	
								</div>                       
								<div class="span3">                                                                
									<div class="box-holder">
										
									</div>  
									<div class="box-holder">
											
											 
									</div>  
									<div class="box-holder">
										<a href="masterData.php">
										<div class="box"><img src="../../resources/images/e-close.png"/></br>Close</div></a>							
									</div>   
																													  
							    </div>                       
						</div>                                    
						</div>	              
					</div>
                </div>
				<div class="row">
                
				<?php
			include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');
			if(!empty($_POST))
			{
			//$created_By=$_SESSION['username'];
			$created_By="user";
			$group_Name=$_POST['txtGroupName'];
			$key_Name=$_POST['txtKeyName'];
			$value_Id=$_POST['txtValueIdName'];
			$value_Name=$_POST['txtValueName'];
			
		
			            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO key_value (CREATED_BY,CREATED_DATE,GROUP_NAME,KEY_NAME,VALUE_ID,VALUE_NAME) values(?, now(), ?, ?, ?, ?)";																																																																					
            $q = $pdo->prepare($sql);
            $q->execute(array($created_By,$group_Name,$key_Name,$value_Id,$value_Name));
            Database::disconnect();
			echo "<div class='alert alert-info'> Successfully Inserted. </div>";
			
				 echo '<script type="text/javascript">
						window.location.href = "masterData.php";
						</script>';
		
			}
			?>
				
				<!-- Content -->
					<div class="span12">	
						<div class="widget">
							<div class="widget-header">
								<h3>Add Master Data</h3>
								<span class="icon-right"><input type="submit" name="Add" value="Add" class="btn pull-right"/></span>
							</div>							
							<div class="widget-content">
								<div class="row">
									<div class="span4"><label>Group Name<font color="#FF0000"> *</font></label><input type="text" autofocus onkeyup="makeUppercase();" onblur="groupName()"maxlength="30" name="txtGroupName" id="txtGroupNameId" class="span4">
										<span class="errMsg" style="color:red;" id="errMsgGroupId"></span>
									</div>
									<div class="span4"><label>Key Name<font color="#FF0000"> *</font></label><input type="text" onkeyup="makeUppercase();" onblur="keyName()" maxlength="30" name="txtKeyName" id="txtKeyNameId" class="span4">
										<span class="errMsg" style="color:red;" id="errMsgKeyId"></span>
									</div>
									<div class="span3"><label>Value Id<font color="#FF0000"> *</font></label><input type="text" onkeyup="makeUppercase();" onblur="valueId()" maxlength="30" name="txtValueIdName" id="txtValueId" class="span3">
										<span class="errMsg" style="color:red;" id="errMsgValueId"></span>
									</div>
								</div>
								<div class="row">
									<div class="span11"><label>Value Name<font color="#FF0000"> *</font></label><textarea onkeyup="makeUppercase();" onblur="valueName()" maxlength="100" rows="2" name="txtValueName" id="txtValueNameId" class="span11"></textarea><span class="errMsg" style="color:red;" id="errMsgValueNameId"></span>

									</div>
                                    <!--<div class="span3"><label>&nbsp;</label><input type="submit" name="Add" value="Add" class="btn btn-success span3" /></div>-->
								</div>
								
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
													
													
													<a href="masterData.php" class="btn btn-default">
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

			