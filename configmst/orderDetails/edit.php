<?php
include($_SERVER['DOCUMENT_ROOT'].'/addSession.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>Sop</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../../resources/css/pageStyle.css">	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <!-- Google font -->
    <link href="/css/css.css" rel="stylesheet" type="text/css">
	
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>

<body onload="onLoadFunction();">

<!-- Navbar -->


	<!-- /Navbar -->
	  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php'); ?>
	 
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
                                            <h3>User </h3>	
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
                
				 <?php
					$id=$_GET['id'];				
								
					$pdo = Database::connect();
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "SELECT * FROM USER_INFO WHERE ID=$id";
					 $q = $pdo->prepare($sql);
					$q->execute();
					
					for($i=0;$row=$q->fetch();$i++)
					
					{
						$txtUserVar = $row['USER_NAME'];
						$optRoleVar = $row['ROLE'];
						$optActiveFlagVar = $row['ACTIVE_FLAG'];
						$optDftPasswordChgVar = $row['DEFAULT_PASSWORD_CHANGED'];
						$txtStartDateVar = $row['START_DATE'];
						$txtEndDateVar = $row['END_DATE'];	
						$txtEndDateVar = $row['END_DATE'];						
						$optDeleteFlagVar = $row['DELETE_FLAG'];
						
					/*	echo $txtUserVar;
						echo $optRoleVar;
						echo $optActiveFlagVar;
						echo $optDftPasswordChgVar;
						echo $txtStartDateVar;
						echo $txtEndDateVar;
						echo $txtRemarksVar;*/							
					}
					 Database::disconnect();
					?> 
				
				<!-- Content -->
					<div class="span12">	
				
						<div class="widget"> 
						<?php			
						if(!empty($_POST))
								{
							
								$txtUserName = $_POST['txtUserName'];
								$optRoleName = $_POST['optRoleName'];
								$optActiveFlagName = $_POST['optActiveFlagName'];
								$optDeleteFlagName = $_POST['optDeleteFlagName'];
								$optDftPasswordChgName = $_POST['optDftPasswordChgName'];
								$txtStartDateName = $_POST['txtStartDateName'];
								$txtEndDateName = $_POST['txtEndDateName'];										
								$txtRemarksName = $_POST['txtRemarksName'];
								
															
								$pdo = Database::connect();
								$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								$sql = "UPDATE USER_INFO SET LAST_UPDATE_BY='admin@gmail.com', LAST_UPDATE_DATE=now(), USER_NAME=?, ROLE=?, ACTIVE_FLAG=?,DELETE_FLAG=?, DEFAULT_PASSWORD_CHANGED=?, START_DATE=?, END_DATE=?, REMARKS=? WHERE ID=$id";													
								$q = $pdo->prepare($sql);
								$q->execute(array($txtUserName,$optRoleName,$optActiveFlagName,$optDeleteFlagName,$optDftPasswordChgName,$txtStartDateName,$txtEndDateName,$txtRemarksName));
								Database::disconnect();
								echo "<div class='alert alert-info'> Successfully Updated. </div>";
								
									 echo '<script type="text/javascript">
											window.location.href = "user.php";
											</script>';
							
								}
								?>		
							<div class="widget-header">							
								<h3>Edit User </h3>	
								<span class="icon-right"><input type="submit" name="Update" value="Update" class="btn pull-right"/></span>			
							</div>
							<div class="widget-content">
								<div class="row">
									<div class="span4">
										<label>User Name<font color="#FF0000"> *</font> </label>
										<input type="text" autofocus name="txtUserName" maxlength="60" id="txtUserId" value="<?php echo $txtUserVar;?>" onBlur="txtUserValidate()" class="span4">
										<span style="color:red" id="errMsgUserId"></span>
									</div>								
									<div class="span4">
										<label>Role<font color="#FF0000"> *</font></label>
									
										<select class="span4"  name="optRoleName" id="optRoleId" onchange="selectval()" onBlur="optRoleValidate()">
											<option value="ADMIN"<?php if($optRoleVar=="ADMIN") echo "selected=selected";?>>SUPER-ADMIN</option>
											<option value="USER"<?php if($optRoleVar=="USER") echo 'selected=selected';?>>USER</option>
											<option value="GUEST"<?php if($optRoleVar=="GUEST") echo 'selected=selected';?>>GUEST</option>
										</select>	
										<span style="color:red" id="errMsgRoleId"></span>										
									</div>
									<div class="span3">
										<label>Active Flag<font color="#FF0000"> *</font></label>
										<select class="span3"  name="optActiveFlagName" id="optActiveFlagId"  onBlur="optActiveFlagValidate()">
											<option value="Y"<?php if($optActiveFlagVar=="Y")echo 'selected=selected';?>>Y</option>
											<option value="N"<?php if($optActiveFlagVar=="N")echo 'selected=selected';?>>N</option>
										</select>
										<span style="color:red" id="errMsgActiveFlagId"></span>
									</div>	
									 
								</div>	
								<div class="row" id="rowhide">									
									<div class="span4">
										<label>Start Date</label>
										<input type="text" name="txtStartDateName" id="txtStartDateId" value="<?php echo $txtStartDateVar;?>" class="span4"></input>
									</div>					
									<div class="span4">
										<label>End Date</label>
										<input type="text"  name="txtEndDateName" id="txtEndDateId" value="<?php echo $txtEndDateVar;?>" class="span4"></input>
									</div>    
									<div class="span3">
										<label>Default Password Changed?<font color="#FF0000"> *</font></label>
										<select class="span3"  name="optDftPasswordChgName" id="optDftPasswordChgId"  >
											<option value="Y"<?php if($optDftPasswordChgVar=="Y")echo 'selected=selected';?>>Y</option>
											<option value="N"<?php if($optDftPasswordChgVar=="N")echo 'selected=selected';?>>N</option>
										</select>	
										<span style="color:red" id="errMsgDefaultPasswordId"></span>										
									</div>							
								</div>
								<div class="row">	
									<div class="span8">
										<label>Remarks</label>
										<textarea rows="3" name="txtRemarksName" maxlength="240" id="txtRemarksId" value="<?php echo $txtRemarksVar;?>" class="span8"></textarea>
									</div>
									<div class="span3">
										<label>Delete Flag<font color="#FF0000"> *</font></label>
										<select class="span3"  name="optDeleteFlagName" id="optDeleteFlagId">
											<option value="Y"<?php if($optDeleteFlagVar=="Y")echo 'selected=selected';?>>Y</option>
											<option value="N"<?php if($optDeleteFlagVar=="N")echo 'selected=selected';?>>N</option>
										</select>  	
										<span style="color:red" id="errMsgDeleteFlagId"></span>
									</div>	
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
							
							    <a href="user.php" class="btn btn-default">
								<img src="../../resources/images/e-close.png"/><br>Close</a>		
						    </div>   
						</center> 	
				</div>     
           	</div>
		</div>
     </div>		
				
        </div>
</form>	

</body>
<script>/*
function Validate()
{
	var userName=document.getElementById("txtUserId").value;
	var check=false;
	if(userName.length!=0)
		{
			//alert("chek valid");	
			var atpos=userName.indexOf("@");
			var dotpos=userName.lastIndexOf(".");
			if(atpos<1 || dotpos<atpos+2 || dotpos+2>=userName.length)
			{
				document.getElementById("errMsgUserId").innerHTML="Please Enter the Valid email id";
				document.getElementById("txtUserId").style.borderColor="#FF0000";
				check=false;
			}
			
		}
		if(document.getElementById("txtUserId").value=="")
				{
					document.getElementById("errMsgUserId").innerHTML="Enter Valid Email As User Name";
					document.getElementById("txtUserId").style.borderColor="#FF0000";
					check=false;
				}
		
return check;
}*/
function onLoadFunction(){
	//$("#rowhide").hide();
	//$("#txtStartDateId").attr("readonly", true);
   // $("#optDftPasswordChgId").attr("readonly", true);
    //$("#txtEndDateId").attr("readonly", true);  
	
	var answer=document.getElementById("optRoleId").value;	
 if(answer=="GUEST"){
	 $("#rowhide").show();
	document.getElementById("txtStartDateId").value="<?php echo $txtStartDateVar;?>";	
	document.getElementById("txtEndDateId").value="<?php echo $txtEndDateVar;?>";
	document.getElementById("optDftPasswordChgId").value="<?php echo $optDftPasswordChgVar;?>";
   
 }
 else{
	 $("#rowhide").hide();
	//document.getElementById("txtStartDateId").value="<?php echo $txtStartDateVar;?>";	
	//document.getElementById("txtEndDateId").value="<?php echo $txtEndDateVar;?>";
	//document.getElementById("optDftPasswordChgId").value="<?php echo $optDftPasswordChgVar;?>";
   }  
}

function selectval()
{
var answer=document.getElementById("optRoleId").value;	
 if(answer=="GUEST"){
	 $("#rowhide").show();
	document.getElementById("txtStartDateId").value="";	
	document.getElementById("txtEndDateId").value="";
	document.getElementById("optDftPasswordChgId").value="Y";
   $("#txtStartDateId").attr("readonly", false);   
   $("#txtEndDateId").attr("readonly", false);
   $("#optDftPasswordChgId").attr("readonly", false);
 }
 else{
	 $("#rowhide").hide();
	document.getElementById("txtStartDateId").value="0000-00-00";	
	document.getElementById("txtEndDateId").value="0000-00-00";
	document.getElementById("optDftPasswordChgId").value="N";
   $("#txtStartDateId").attr("readonly", true);
   $("#txtEndDateId").attr("readonly", true);
   $("#optDftPasswordChgId").attr("readonly", true);
 }  
}

</script>
</html>
