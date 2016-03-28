<?php
include($_SERVER['DOCUMENT_ROOT'].'/addSession.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>Spryt</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../../resources/css/pageStyle.css">	
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
   <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <!-- Google font -->

	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>

<body onload="onLoadFunction();">
<script>
function Validate() {
    
var m_months = {Jan: '01', Feb: '02', Mar: '03', Apr: '04', May: '05', Jun: '06',
              Jul: '07', Aug: '08', Sep: '09', Oct: '10', Nov: '11', Dec: '12'};
    var email = document.getElementById("txtUserId");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var valid = true;  
    if (!filter.test(email.value)) 
	{
    document.getElementById("errMsgUserId").innerHTML="Please Enter the Valid Email.";
	 document.getElementById("txtUserId").style.borderColor="#FF0000";
    email.focus;
    valid=false;
	 }
	 else{
	 document.getElementById("errMsgUserId").innerHTML="";
	 document.getElementById("txtUserId").style.borderColor="green";
	 
	 }
	   
    var message = '';    
      var VisitDatefrom = $("#txtStartDateId").val();     
       var arr=[];arr=VisitDatefrom.split('-')
  var day = arr[0];
  var month = arr[1];
   var mon =(month, m_months[month]); 
  var year = arr[2];
  var VisitDateto = $("#txtEndDateId").val();
        var arr=[];arr=VisitDateto.split('-');
  var days = arr[0];
  var months = arr[1]; 
   var mons =(months, m_months[months]); 
  var years = arr[2];
  if (year >= years)
   {
   if(mon >= mons)
   {
      if(day > days) {
  valid = false;
  message = message + 'Start Date must be earlier to End Date';
  }
  }
  }
  if (valid == false){
  alert(message);
  return valid;
  }
}
function onLoadFunction(){
	$("#rowhide").hide();
	$("#txtStartDateId").attr("readonly", true);
    $("#optDftPasswordChgId").attr("readonly", true);
    $("#txtEndDateId").attr("readonly", true);  
}

function selectval()
{
var answer=document.getElementById("optRoleId").value;	
 if(answer=="GUEST"){
	 $("#rowhide").show();
	 document.getElementById("txtStartDateId").value="";	
	document.getElementById("txtEndDateId").value="";
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
<!-- Navbar -->

	  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php'); ?>
	  
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
						<?php
								
									if ( !empty($_POST))
									{
										$txtUserName = $_POST['txtUserName'];
										$optRoleName = $_POST['optRoleName'];
										$optActiveFlagName = $_POST['optActiveFlagName'];
										$optDftPasswordChgName = $_POST['optDftPasswordChgName'];
										$txtStartDateName = $_POST['txtStartDateName'];
										$txtEndDateName = $_POST['txtEndDateName'];										
										$txtRemarksName = $_POST['txtRemarksName'];
										$pdo = Database::connect();
										$sql = "SELECT ID,USER_NAME,ROLE,DEFAULT_PASSWORD_CHANGED,ACTIVE_FLAG,DELETE_FLAG,REMARKS FROM USER_INFO WHERE USER_NAME = '$txtUserName'";
										$query =  $pdo->prepare( $sql );
										$query->execute();
										$rows = $query->fetch(PDO::FETCH_NUM);
									   if($rows > 0) {
												echo "<div class='alert alert-error'> User Name already exits </div>";
										 }
									  
								 	else{	
																	
		$mailto ='spryt@gaddieltech.com';
		$FromEmail =   'spryt@gaddieltech.com'; 
		$FromName  =   'Spryt Applicaiton';  // Sumith Harshan	
     
	    include($_SERVER['DOCUMENT_ROOT'].'/classes/class.phpmailer.php');
       
		 $mail = new PHPMailer();
         
         $mail->From     = $FromEmail;
         $mail->FromName = $FromName;
         
         $mail->IsSMTP(); 
         
         $mail->SMTPAuth = true;     // turn of SMTP authentication
         $mail->Username = 'spryt@gaddieltech.com';  // SMTP username  (Ex: sumithnets@yahoo.com)
         $mail->Password = 'Spryt123'; // SMTP password  (Ex: yahoo email password)
         $mail->SMTPSecure = 'ssl';
        
         $mail->Host = 'smtp.gaddieltech.com';
         $mail->Port = 465;
         $mail->SMTPKeepAlive = true;		 
		 $mail->Mailer = 'smtp';
         $mail->Sender   =  $FromEmail;// $bounce_email;
         $mail->ConfirmReadingTo  = $FromEmail;          
         $mail->AddReplyTo($FromEmail);
         $mail->IsHTML(true); //turn on to send html email
         $mail->Body = "<p>Dear $txtUserName,</P>

<p>You have been successfully registered for accessing Spryt Applicaiton.  (an agile Data Tool).</p>
<p>The application is powered by Gaddiel Technologies Private Limted.(http://gaddieltech.com)</p>
<p>Gaddiel Technologies is happy to welcome you to its family.</p>

<p>You can access the application using the following credentials.</P>
<p>Role assigned to you is : $optRoleName</p>
<p>Username  : $txtUserName</P>
<p>Password  : 54321</P>
<p>Url: http://spryt.gaddieltech.com</p>
<p>You will be prompted to change this password immediately on login. </p>
<p>The password should be not less than 8 characters and should contain atleast one capital letter, one number and one special character.</p>

<p>Regards,</P>
<p>Team Spryt.</P>		";
         $mail->Subject = "Spryt - an agile Data Tool - Appliation Account Access";
         $mail->AddAddress($txtUserName,$mailto);
		 if($mail->Send()){
		 echo "<div class='alert alert-success'>Successfully E-mail Sent</div>";   
		 }
									
										
																		
										$pdo = Database::connect();
										$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										$sql = "INSERT INTO USER_INFO (CREATED_DATE,LAST_UPDATE_DATE,DELETE_FLAG,USER_NAME,ROLE,ACTIVE_FLAG,DEFAULT_PASSWORD_CHANGED,START_DATE,END_DATE,REMARKS) values(now(), now(),'N', ?, ?, ?, ?, ?, ?, ?)";
										$q = $pdo->prepare($sql);
										$q->execute(array($txtUserName, $optRoleName, $optActiveFlagName, $optDftPasswordChgName,$txtStartDateName, $txtEndDateName, $txtRemarksName));
										echo "<div class='alert alert-info'> Successfully Inserted. </div>";
										Database::disconnect();	
										//header('Location:user.php');
										//ob_end_flush();
										//exit;
										echo '<script type="text/javascript">
												window.location.href = "user.php";
												</script>';
									
									}
										
									}
									//ob_end_flush();
		
 
						?>
				
					
						<div class="widget"> 
							<div class="widget-header">							
								<h3>Add User </h3>	
								<span class="icon-right"><input type="submit" name="Add" value="Add" class="btn pull-right"/></span>			
							</div>
							<div class="widget-content">
								<div class="row">
									<div class="span4">
										<label>User Name<font color="#FF0000"> *</font> </label>
										<input type="text" autofocus name="txtUserName" maxlength="60" id="txtUserId" onBlur="txtUserValidate()" class="span4">
										<span style="color:red" id="errMsgUserId"></span>
									</div>								
									<div class="span4">
										<label>Role<font color="#FF0000"> *</font></label>
										<select class="span4"  name="optRoleName" id="optRoleId" onchange="selectval()" onBlur="optRoleValidate()">
											<option value="ADMIN">SUPER-ADMIN</option>
											<option value="USER" selected>USER</option>
											<option value="GUEST">GUEST</option>
										</select>	
										<span style="color:red" id="errMsgRoleId"></span>										
									</div>
									<div class="span3">
										<label>Active Flag<font color="#FF0000"> *</font></label>
										<select class="span3"  name="optActiveFlagName" id="optActiveFlagId"  onBlur="optActiveFlagValidate()">
											<option value="Y">Y</option>
											<option value="N">N</option>
										</select>
										<span style="color:red" id="errMsgActiveFlagId"></span>
									</div>	
									 
								</div>	
								<div class="row" id="rowhide">									
									<div class="span4">
										<label>Start Date</label>
										<input type="text" name="txtStartDateName" id="txtStartDateId" value="0000-00-00" class="span4 datepic"></input>
									</div>					
									<div class="span4">
										<label>End Date</label>
										<input type="text"  name="txtEndDateName" id="txtEndDateId" value="0000-00-00" class="span4 datepic"></input>
									</div>    
									<div class="span3">
										<label>Default Password Changed?<font color="#FF0000"> *</font></label>
										<select class="span3"  name="optDftPasswordChgName" id="optDftPasswordChgId"  >
											<option value="Y">Y</option>
											<option value="N" selected>N</option>
										</select>	
										<span style="color:red" id="errMsgDefaultPasswordId"></span>										
									</div>							
								</div>
								<div class="row">	
									<div class="span8">
										<label>Remarks</label>
										<textarea rows="3" name="txtRemarksName" maxlength="240" id="txtRemarksId" class="span8"></textarea>
									</div>
									<div class="span3">
										<label>Delete Flag<font color="#FF0000"> *</font></label>
										<select class="span3"  name="optDeleteFlagName" id="optDeleteFlagId" disabled>
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
	</div>	
    </form>		
</body>
<script>
function txtUserValidate()
{ 
 if(document.getElementById("txtUserId").value=="")
 {   
   document.getElementById("errMsgUserId").innerHTML="Enter Valid Email As User Name";
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
function optActiveFlagValidate()
{ 
 if(document.getElementById("optActiveFlagId").value!="")
 {   
    document.getElementById("errMsgActiveFlagId").innerHTML="";
    document.getElementById("optActiveFlagId").style.borderColor="green";	
 }
}
</script>
<script>
 $(function() {

  $(".datepic").datepicker({ dateFormat: 'dd-M-y',maxDate: 0 }).bind("change",function(){
   var minValue = $(this).val();
   minValue = $.datepicker.parseDate("dd-M-y", minValue);
   minValue.setDate(minValue.getDate()+1);
   $("#to").datepicker( "option", "minDate", 0 );
  })
 });


</script>
	
	
	
</html>
