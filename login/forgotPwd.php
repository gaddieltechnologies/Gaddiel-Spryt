<?php
session_start();
ob_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>Spryt</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
    <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="../resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/pageStyle.css">	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <!-- Google font -->
    <link href="/css/css.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>

<body onload="addDate();">
<style>

</style>
<script type="text/javascript">
function addDate(){
	
document.getElementById('divId').style.display = 'none';
document.getElementById("errorId").style.display = "none";
}
function validate()
{
	var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/; 
	var valid=true;
if(!document.getElementById("txtPasswordId").value.match(re))
	{
	   document.getElementById("spanCheckId").innerHTML="Enter 8 characters minimum one numeric char or one alpha char";
	   document.getElementById("txtPasswordId").style.borderColor="#FF0000";
		valid= false;
	}
if(document.getElementById("txtPasswordId").value=="")
	{
	   document.getElementById("spanCheckId").innerHTML="Please Enter the Password";
	   document.getElementById("txtPasswordId").style.borderColor="#FF0000";
		valid= false;
	}
if(document.getElementById("txtConpasswordId").value=="")
	{
	   document.getElementById("spanMatchId").innerHTML="Please Enter the Confirm Password";
	   document.getElementById("txtConpasswordId").style.borderColor="#FF0000";
		valid= false;
}
if(document.getElementById("txtPasswordId").value!=document.getElementById("txtConpasswordId").value )
	{
	   document.getElementById("spanMatchId").innerHTML="Please Enter the Correct Password";
	   document.getElementById("txtConpasswordId").style.borderColor="#FF0000";
		valid= false;
	}
 return valid;
}
function userName()
{
	
	if(document.getElementById("txtUsernameId").value=="")
	{
		document.getElementById("spanUsernameId").innerHTML="Please Enter the User Name";
		document.getElementById("txtUsernameId").style.borderColor="#FF0000";
	}
	else if(!document.getElementById("txtUsernameId").value.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))
	{
		document.getElementById("spanUsernameId").innerHTML="Please Enter the Correct User Name";
		document.getElementById("txtUsernameId").style.borderColor="#FF0000";;
	}	
	else
	{
		document.getElementById("spanUsernameId").innerHTML="";
		document.getElementById("txtUsernameId").style.borderColor="green";	
	} 
}
function firstname(){
if(document.getElementById("txtFirstId").value=="")
{
    document.getElementById("spanFirstnameId").innerHTML="Please Enter the First Question Answer";
	document.getElementById("txtFirstId").style.borderColor="#FF0000";
}
else{
    document.getElementById("spanFirstnameId").innerHTML="";
    document.getElementById("txtFirstId").style.borderColor="green";	
}
}
function secondname(){
if(document.getElementById("txtSecondId").value=="")
{
    document.getElementById("spanSecondnameId").innerHTML="Please Enter the Second Question Answer";
	document.getElementById("txtSecondId").style.borderColor="#FF0000";
}
else{
    document.getElementById("spanSecondnameId").innerHTML="";
    document.getElementById("txtSecondId").style.borderColor="green";	
}
}


function thirdname(){
if(document.getElementById("txtThirdId").value=="")
{
    document.getElementById("spanThirdnameId").innerHTML="Please Enter the Third Question Answer";
	document.getElementById("txtThirdId").style.borderColor="#FF0000";
}
else{
    document.getElementById("spanThirdnameId").innerHTML="";
    document.getElementById("txtThirdId").style.borderColor="green";	
}
}

function newpassword(){
if(document.getElementById("txtPasswordId").value=="")
{
    document.getElementById("spanCheckId").innerHTML="Please Enter the Password";
    document.getElementById("txtPasswordId").style.borderColor="#FF0000";
}
else{
    document.getElementById("spanCheckId").innerHTML="";
    document.getElementById("txtPasswordId").style.borderColor="green";	
}
}

function matchpwd(){
if(document.getElementById("txtPasswordId").value!=document.getElementById("txtConpasswordId").value )
{
   document.getElementById("spanMatchId").innerHTML="Please Enter the Correct Password";
   document.getElementById("txtConpasswordId").style.borderColor="#FF0000";
}
else{
    document.getElementById("spanMatchId").innerHTML="";
    document.getElementById("txtConpasswordId").style.borderColor="green";	
}
}
$(document).ready(function() {
$("#send").click(function() {
    var userName = $('#txtUsernameId').val();
    var firstquestion = $('#txtFirstId').val();
	var secondquestion = $('#txtSecondId').val();
	var thridquestion = $('#txtThirdId').val();
   
if (userName == '' && firstquestion == '' && secondquestion =='' && thridquestion == '') {
	
	    document.getElementById("spanUsernameId").innerHTML="Please Enter the User Name";
		document.getElementById("txtUsernameId").style.borderColor="#FF0000";
		
		document.getElementById("spanFirstnameId").innerHTML="Please Enter the First Question Answer";
	    document.getElementById("txtFirstId").style.borderColor="#FF0000";
		
		document.getElementById("spanSecondnameId").innerHTML="Please Enter the Second Question Answer";
	    document.getElementById("txtSecondId").style.borderColor="#FF0000";
		
		document.getElementById("spanThirdnameId").innerHTML="Please Enter the Third Question Answer";
	    document.getElementById("txtThirdId").style.borderColor="#FF0000";
		
		}
if (!userName.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))
	{  
		document.getElementById("spanUsernameId").innerHTML="Please Enter the Correct User Name";
		document.getElementById("txtUsernameId").style.borderColor="#FF0000";;
	}
	else 
	{  
		$.post("enablediv_forpwd.php", {		
		userName1: userName,		
		firstquestion1: firstquestion,
		secondquestion1: secondquestion,
		thridquestion1: thridquestion
		}, function(data) {
       
		if(data== userName)
		{
			
			document.getElementById('divId').style.display = 'block';	
			document.getElementById("errorId").style.display = "none";
		}
		if(data=="error")
		{
			
			document.getElementById("errorId").style.display = "block";
	    }	
		});
}
});
});

</script>
<!-- Navbar -->

	  	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="#"><img src="../resources/images/slogo.png" Style=" width:100px; height:35px; margin-left:50px;" align="left" alt="Spryt"/></a>
				<div class="nav-collapse">
					
				</div>
			</div>
		</div>
	</div>
	<!-- /Navbar -->
	<form action="" method="POST" onSubmit="return validate();">
	<!-- Main content -->
<div id="main-content">
		<!-- Container -->
		<div class="container" >
		   	<div class="box-container">
				
			</div>
			<!-- Tittle Header -->
            <div class="row">
				
				<div class="span12 desktop">					
					<div class="widget">                    					
						<div class="widget-content"> 
							<div class="span7">
								<h3>Forgot Password</h3>	
							</div>                       
							<div class="span3">                                                                									
								<div class="box-holder">
									<a href="../index.php">
									<div class="box"><img src="../resources/images/e-close.png"/></br>Close</div></a>							
								</div>   
																														  
							</div>                       
						</div>                                    
					</div>	              
				</div>
            
            </div>
		<!-- /Tittle Header -->
		<!-- Body -->
		    
			<!-- /Content -->
			<div class="row">  
				<div class="span12">
                    <div class="widget" id="divUserId">				
					    <div class="widget-header">						   						       
								<h3>Forgot Password</h3>
								<span class="icon-right"><input type="button" name="check" value="Check" id="send" class="btn pull-right"/></span>						    
						</div>
						<div class="widget-content" >
						  	<div class="row">
								<div class="span11">
								    <p>Please Answer the Questions with values set at First Login</p>
								</div>	
							</div>						
						    <div class="row">
						        <div class="span4">
								    <label class="span4">User Name<span style="color:red"> *</span></label>
								</div>
								<div class="span7">
							        <input  id="txtUsernameId" name="txtUsername" onBlur="userName()"  placeholder="Enter your Username" class="span4" type="text" value=""/>
									<span style="color:red" id="spanUsernameId"></span>	
						        </div>
								
							</div>
							  <div class="row">
						        <div class="span4">
								    <label class="span4">What is your favorite color?<span style="color:red"> *</span></label>
								</div>
								<div class="span7">
							        <input  id="txtFirstId" name="txtFirstquestionName" onBlur="firstname()" placeholder="Enter your favorite color" class="span4" type="text" value=""/>
									<span style="color:red" id="spanFirstnameId"></span>	
						        </div>
							</div>
							<div class="row">							    
								<div class="span4">
								    <label class="span4">Who is your favorite hero?<span style="color:red"> *</span></label>
								</div>
								<div class="span7">
								    <input id="txtSecondId" name="txtSecondquestionName" onBlur="secondname()" placeholder="Enter your favorite hero" class="span4" type="text" value=""/>
									<span style="color:red" id="spanSecondnameId"></span>	
							    </div>
							</div>
                            <div class="row">							    
								<div class="span4">
								    <label class="span4">Who is your favorite food?<span style="color:red"> *</span></label>
								</div>
								<div class="span7">
								    <input id="txtThirdId" name="txtThirdquestionName" onBlur="thirdname()" placeholder="Enter your favorite food" class="span4" type="text" value=""/>
									<span style="color:red" id="spanThirdnameId"></span>	
							    </div>
							</div>	
						</div>
				
					</div>	
					<div class='alert alert-danger' id="errorId">Values do not match. Contact your System Administrator.</div>
					<div class="widget" id="divId">				
					    <div class="widget-header">						   						       
								<h3>Please set your security questions for changing your password.</h3>
								<span class="icon-right"><input type="submit" name="Change" value="Change" class="btn pull-right"/></span>						    
						</div>
						<div class="widget-content">
						  	<div class="row">
								<div class="span11">
								    <p>Password should:
										1)  Have Minimum 8 characters
										2)  Be Alpha-numeric
										3)  Have One upper case character
										4)  Have One Special Character
									</p>
								</div>	
							</div>					
						  
							
							<div class="row">		
								<div class="span4">
								    <label class="span4">New Password<span style="color:red"> *</span></label>
								</div>
								<div class="span7">
								    <input id="txtPasswordId"  name="txtNewPasswordName" onBlur="newpassword()" placeholder="Enter the new password" class="span4" onKeyup="passwordCheck()" type="password" type="text" value=""/>
									<span style="color:red" id="spanCheckId"></span>
								</div>	
							</div>
							<div class="row">		
								<div class="span4">
								 	<label class="span4" >Confirm Password<span style="color:red"> *</span></label>
								</div>
								<div class="span7">
								    <input id="txtConpasswordId"  name="txtConfirmPasswordName" onBlur="matchpwd()" placeholder="Re-enter the new password for confirmation" class="span4" type="password" type="text" value=""/>
									<span style="color:red" id="spanMatchId"></span>
								</div>	
							</div>	
									
						</div>
				
					</div>
                                     
				</div>
			
				<!-- /Content -->
			</div>
			<!-- /Body
		    <div id="footer">
				<hr>
				<p class="pull-right">Gaddiel Technologies Pvt Ltd &copy; 2013</p>
			</div> -->
			<?php include($_SERVER['DOCUMENT_ROOT'].'/spryt/footer.php'); ?>
			<div class="dock-wrapper">    
							 <div class="navbar navbar-fixed-bottom">
								<div class="navbar-inner">
									<div class="container">                  
											<center>
												<div class="btn-group btn-group-justified">                      
												
													<a href="../index.php" class="btn btn-default">
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
 if(isset($_POST["Change"]))
{
    $user = $_POST['txtUsername'];
	$FirstquestionName=$_POST['txtFirstquestionName'];
	$SecondquestionName=$_POST['txtSecondquestionName'];
	$ThirdquestionName=$_POST['txtThirdquestionName'];
	$NewPasswordName=$_POST['txtNewPasswordName'];
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$get =$pdo->prepare("SELECT PASS_WORD FROM USER_INFO WHERE USER_NAME='$user'");
	$get->execute();
	$row=$get->fetch();
	Database::disconnect();
	$password=$row['PASS_WORD'];
	if($password==$newpasswordName)
	   {
			echo "<div class='alert alert-info'> This Password already inserted</div>";   
	   }
	else
	   {    
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$result = $pdo->prepare("UPDATE USER_INFO SET PASS_WORD='$NewPasswordName', PASSWORD_ANSWER1='$FirstquestionName', PASSWORD_ANSWER2='$SecondquestionName', PASSWORD_ANSWER3='$ThirdquestionName', DEFAULT_PASSWORD_CHANGED='Y', ACTIVE_FLAG='Y', DELETE_FLAG='N' WHERE USER_NAME='$user'");
			$result->execute();
			 Database::disconnect();	
			 echo '<script type="text/javascript">
								window.location.href = "index.php";
								</script>';
	   }						
}
?>
			