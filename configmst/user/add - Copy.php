
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
	<link rel="stylesheet" type="text/css" href="../../resources/css/pageStyle.css">	
    <!-- Google font -->
    <link href="/css/css.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>

<body>
<style>

</style>
<!-- Navbar -->

	  <?php include($_SERVER['DOCUMENT_ROOT'].'/spryt/header.php'); ?>
	  <?php include($_SERVER['DOCUMENT_ROOT'].'/spryt/connection.php'); ?>
	<!-- /Navbar -->
	<form action="add.php" method="POST" onSubmit="return Validate();">
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
						<div class="widget"> 
							<div class="widget-header">							
								<h3>Add User </h3>	
								<span class="icon-right"><input type="submit" name="Add" value="Add" class="btn pull-right"/></span>			
							</div>
							<div class="widget-content">
								<div class="row">
									<div class="span4">
										<label>User Name<font color="#FF0000"> *</font></label>
										<input type="text" autofocus name="txtUserName" maxlength="60" id="txtUserId" onBlur="txtUserValidate()" class="span4">
										<span style="color:red" id="errMsgUserId"></span>
									</div>								
									<div class="span4">
										<label>Role<font color="#FF0000"> *</font></label>
										<select class="span4"  name="optRoleName" id="optRoleId" onBlur="optRoleValidate()">
											<option value="Admin">Admin</option>
											<option value="User">User</option>
										</select>	
										<span style="color:red" id="errMsgRoleId"></span>										
									</div>
									<div class="span3">
										<label>Default Password Changed?<font color="#FF0000"> *</font></label>
										<select class="span3"  name="optDftPasswordChgName" id="optDftPasswordChgId" onBlur="optDefaultPasswordValidate()">
											<option value="Y">Y</option>
											<option value="N" selected>N</option>
										</select>	
										<span style="color:red" id="errMsgDefaultPasswordId"></span>										
									</div> 
								</div>	
								<div class="row">									
									<div class="span4">
										<label>Start Date</label>
										<input type="text" name="txtStartDateName" disabled class="span4">
									</div>					
									<div class="span4">
										<label>End Date</label>
										<input type="text"  name="txtEndDateName" disabled class="span4">
									</div>    
									<div class="span3">
										<label>Active Flag<font color="#FF0000"> *</font></label>
										<select class="span3"  name="optDeleteFlagName" id="optDeleteFlagId" onBlur="optActiveFlagValidate()">
											<option value="Y">Y</option>
											<option value="N">N</option>
										</select>
										<span style="color:red" id="errMsgActiveFlagId"></span>
									</div>								
								</div>
								<div class="row">	
									<div class="span8">
										<label>Remarks</label>
										<textarea rows="3" name="txtRemarksName" maxlength="240" id="txtRemarksId" class="span8"></textarea>
									</div>
									<div class="span3">
										<label>Delete Flag<font color="#FF0000"> *</font></label>
										<select class="span3"  name="optActiveFlagName" id="optActiveFlagId" onBlur="optDeleteFlagValidate()">
											<option value="Y">Y</option>
											<option value="N" selected>N</option>
										</select>  	
										<span style="color:red" id="errMsgDeleteFlagId"></span>
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
<script>
function txtUserValidate()
{ 
 if(document.getElementById("txtUserId").value=="")
 {   
   document.getElementById("errMsgUserId").innerHTML="Enter User Name";
   document.getElementById("txtUserId").style.borderColor="#FF0000";
 }
 else
 {
    document.getElementById("errMsgUserId").innerHTML="";
    document.getElementById("txtUserId").style.borderColor="green";	
 }
}
function optRoleValidate()
{ 
 if(document.getElementById("optRoleId").value!="")
 {   
    document.getElementById("errMsgRoleId").innerHTML="";
    document.getElementById("optRoleId").style.borderColor="green";	
 }
}
</script>
<?php
		
		    if ( !empty($_POST))
			{
		    	$txtUserName = $_POST['txtUserName'];
				$optRoleName = $_POST['optRoleName'];	
				$optDftPasswordChgName = $_POST['optDftPasswordChgName'];					
				$optActiveFlagName = $_POST['optActiveFlagName'];	
				$optDeleteFlagName = $_POST['optDeleteFlagName'];
				$txtRemarksName = $_POST['txtRemarksName'];					
				
				     $valid = true;
    
        // 	     $valid = true;
                $pdo = Database::connect();
				$sql = "SELECT ID,USER_NAME,ROLE,DEFAULT_PASSWORD_CHANGED,ACTIVE_FLAG,DELETE_FLAG,REMARKS FROM USER_INFO WHERE USER_NAME = '$txtUserName'";
				$query =  $pdo->prepare( $sql );
				$query->execute();
                $rows = $query->fetch(PDO::FETCH_NUM);
               if($rows > 0) {
                    	echo "<script language=javascript>alert('User Name already exits.')</script>";
                 }
			  
		    else{
		    
				$pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO USER_INFO (CREATED_DATE,LAST_UPDATE_DATE,USER_NAME,ROLE,DEFAULT_PASSWORD_CHANGED,ACTIVE_FLAG,DELETE_FLAG,REMARKS) values(now(), now(), ?, ?, ?, ?, ?, ?)";
                $q = $pdo->prepare($sql);
                $q->execute(array($txtUserName, $optRoleName, $optDftPasswordChgName, $optActiveFlagName, $optDeleteFlagName, $txtRemarksName));
				echo "<div class='alert alert-info'> Successfully Inserted. </div>";
                Database::disconnect();	
               	header('Location:user.php');
				ob_end_flush();
                exit;
		    }
			    
			  	
			}
			ob_end_flush();
?>

			