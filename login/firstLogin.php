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
    <!-- Google font -->
    <link href="/css/css.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>

<body>
<style>

</style>
<script type="text/javascript">
function validate()
{
	var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/; 
	var valid=true;
if(document.getElementById("txtFirstId").value=="")
{
    document.getElementById("spanFirstnameId").innerHTML="Please Enter the First Question Answer";
	document.getElementById("txtFirstId").style.borderColor="#FF0000";
	 valid= false;
}
if(document.getElementById("txtSecondId").value=="")
{
    document.getElementById("spanSecondnameId").innerHTML="Please Enter the Second Question Answer";
	document.getElementById("txtSecondId").style.borderColor="#FF0000";
	 valid= false;
}
if(document.getElementById("txtThirdId").value=="")
{
    document.getElementById("spanThirdnameId").innerHTML="Please Enter the Third Question Answer";
	document.getElementById("txtThirdId").style.borderColor="#FF0000";
	 valid= false;
}
if(document.getElementById("txtPasswordId").value=="")
{
   document.getElementById("spanCheckId").innerHTML="Please Enter the Password";
   document.getElementById("txtPasswordId").style.borderColor="#FF0000";
    valid= false;
}
if(!document.getElementById("txtPasswordId").value.match(re))
{
   document.getElementById("spanCheckId").innerHTML="Enter 8 characters minimum one numeric char or one alpha char";
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
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/; 
var mob = /^[1-9]{1}[0-9]{9}$/;
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
/*function passwordCheck()
{


var Medium = /^(?=\S*?[a-z])(?=\S*?[0-9])\S{5,}$/; 
var StrongPass = /^(?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])\S{5,}$/; 
var VryStrongPass = /^(?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])(?=\S*?[^\w\*])\S{5,}$/;

var password1 = document.getElementById("txtPasswordId"); 

 if(VryStrongPass.test(password1.value))
    {
       document.getElementById('spanCheckId').innerHTML = '<b><span style="color:blue"> very Strong!</span>';
    }   
 else if(StrongPass.test(password1.value))
    {
        document.getElementById('spanCheckId').innerHTML = '<b><span style="color:green">Strong!</span>';
    }   
  else if(Medium.test(password1.value))
    {
        document.getElementById('spanCheckId').innerHTML = '<b><span style="color:orange"> good!</span>';
    }
  else if(WeakPass.test(password1.value))
    {
        document.getElementById('spanCheckId').innerHTML = '<b><span style="color:red">low!</span>';
    }
	else
	{
	 document.getElementById('spanCheckId').innerHTML = '';
	}
  
}*/

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
								<h3>First Login</h3>	
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
			<div class="row">  
				<div class="span12">						
					<div class="widget">				
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
								    <input id="txtPasswordId" name="txtNewPasswordName" onBlur="newpassword()" placeholder="Enter the new password" class="span4" onKeyup="passwordCheck()" type="password" type="text" value=""/>
									<span style="color:red" id="spanCheckId"></span>
								</div>	
							</div>
							<div class="row">		
								<div class="span4">
								 	<label class="span4" >Confirm Password<span style="color:red"> *</span></label>
								</div>
								<div class="span7">
								    <input id="txtConpasswordId" name="txtConfirmPasswordName" onBlur="matchpwd()" placeholder="Re-enter the new password for confirmation" class="span4" type="password" type="text" value=""/>
									<span style="color:red" id="spanMatchId"></span>
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
                                     
				</div>
			
				<!-- /Content -->
			</div>
			<!-- /Body 
		    <div id="footer">
				<hr>
				<p class="pull-right">Gaddiel Technologies Pvt Ltd &copy; 2013</p>
			</div>-->
			<?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>
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
    $user = $_SESSION['user'];
	$FirstquestionName=$_POST['txtFirstquestionName'];
	$SecondquestionName=$_POST['txtSecondquestionName'];
	$ThirdquestionName=$_POST['txtThirdquestionName'];
	$NewPasswordName=$_POST['txtNewPasswordName'];
	$ConfirmPasswordName=$_POST['txtConfirmPasswordName'];	
	$addDate= date('Y-m-d', strtotime("+180 days"));
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$result = $pdo->prepare("UPDATE USER_INFO SET PASS_WORD='$NewPasswordName', PASSWORD_ANSWER1='$FirstquestionName', PASSWORD_ANSWER2='$SecondquestionName', PASSWORD_ANSWER3='$ThirdquestionName', DEFAULT_PASSWORD_CHANGED='Y', NEXT_PASSWORD_CHANGE_DATE='$addDate', ACTIVE_FLAG='Y', DELETE_FLAG='N' WHERE USER_NAME='$user'");
	$result->execute();
	 Database::disconnect();	
	 echo '<script type="text/javascript">
						window.location.href = "http://127.0.0.1/spryt/index.php";
						</script>';
}
?>
			