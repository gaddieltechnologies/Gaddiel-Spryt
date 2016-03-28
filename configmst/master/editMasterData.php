
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
<body>
<?php
				$id=$_GET['id'];
				
				
					include($_SERVER['DOCUMENT_ROOT'].'/spryt/connection.php');
					
					$pdo = Database::connect();
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "SELECT * FROM KEY_VALUE WHERE ID=$id ";
					 $q = $pdo->prepare($sql);
					$q->execute();
					
					for($i=0;$row=$q->fetch();$i++)
					
					{
						$groupName=$row['GROUP_NAME'];
                        $keyName=$row['KEY_NAME'];
						$valueId=$row['VALUE_ID'];
						$valueName=$row['VALUE_NAME'];			
					}
					 Database::disconnect();
					?> 
					<?php
			
			if(!empty($_POST))
			{
			//$created_By=$_SESSION['username'];
			$updated_By="user";			
			$key_Name=$_POST['txtKeyName'];
			$value_Id=$_POST['txtValueIdName'];
			$value_Name=$_POST['txtValueName'];
			
		
			            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE KEY_VALUE SET LAST_UPDATE_BY=?, LAST_UPDATE_DATE=now(), KEY_NAME=?, VALUE_ID=?, VALUE_NAME=? WHERE ID=$id";																																																																					
            $q = $pdo->prepare($sql);
            $q->execute(array($updated_By,$key_Name,$value_Id,$value_Name));
            Database::disconnect();
			echo "<div class='alert alert-info'> Successfully Updated. </div>";
			
				 echo '<script type="text/javascript">
						window.location.href = "masterData.php";
						</script>';
		
			}
			?>		
<style>

</style>
<!-- Navbar -->

	  <?php include($_SERVER['DOCUMENT_ROOT'].'/spryt/header.php'); ?>
	<!-- /Navbar -->
	<form action="#" method="POST" onsubmit="return validateAdd();">
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
                
				
				
				<!-- Content -->
					<div class="span12">	
						<div class="widget">
							<div class="widget-header">
								<h3>Edit Master Data</h3>
								<span class="icon-right"><input type="submit" name="Update" value="Update" class="btn pull-right"/></span>
							</div>
							<div class="widget-content">	
								<div class="row">
									<div class="span4"><label>Group Name</label><input type="text"  name="txtGroupName" onblur="groupName()" id="txtGroupNameId" value="<?php echo $groupName;?>" class="span4" style="text-transform:uppercase;" disabled>
										<span class="errMsg" style="color:red;" id="errMsgGroupId"></span>
									</div>
									<div class="span4"><label>Key Name<font color="#FF0000"> *</font></label><input type="text" onblur="keyName()"  name="txtKeyName" id="txtKeyNameId" value="<?php echo $keyName;?>" style="text-transform:uppercase;" class="span4" disabled>
										<span class="errMsg" style="color:red;" id="errMsgKeyId"></span>
									</div>
									<div class="span3"><label>Value Id<font color="#FF0000"> *</font></label><input type="text" onblur="valueId()" name="txtValueIdName" id="txtValueId" value="<?php echo $valueId;?>" style="text-transform:uppercase;" class="span3" disabled>
										<span class="errMsg" style="color:red;" id="errMsgValueId"></span>
									</div>
								</div>
								<div class="row">
									<div class="span11"><label>Value Name<font color="#FF0000"> *</font></label><textarea onblur="valueName()" name="txtValueName" id="txtValueNameId" style="text-transform:uppercase;" class="span11" disabled><?php echo $valueName;?></textarea><span class="errMsg" style="color:red;" id="errMsgValueNameId"></span></div>
								</div>		
                                   
                              <!--  	<div class="span3"><label>&nbsp;</label><input type="submit" name="Add" value="Update" autofocus class="btn btn-success span3" /></div>	 -->	
							</div>                
						</div>
					</div>
				<!-- /Content -->
                </div>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/spryt/footer.php'); ?>
				
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

	