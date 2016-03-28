<!-- saved from url=(0057)http://wbpreview.com/previews/WB01BG165/user-account.html -->
<?php
session_start();
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <title>Spryt</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
   
	<!-- CSS files -->
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="resources/css/font-awesome.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Google font -->
    <link href="/css/css.css" rel="stylesheet" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>
<script type="text/javascript">

$( window ).load(function() {
$("#fpwd").hide();
});

function validate(){
	var valid = true;
var user=document.getElementById("txtUsernameId");
var pwd=document.getElementById("txtPasswordId").value;
if (!user.value.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
document.getElementById("userSpanId").innerHTML="Enter the Correct User Name";
document.getElementById("txtUsernameId").style.borderColor="#FF0000";
valid = false;
}
if(pwd=="")
{
	document.getElementById("txtPasswordId").style.borderColor="#FF0000";
	valid = false;
}
return valid;
}

function uservalidate(){
var user=document.getElementById("txtUsernameId");
if (!user.value.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))
    {
       document.getElementById("userSpanId").innerHTML="Enter valid email id";
	   document.getElementById("txtUsernameId").style.borderColor="#FF0000";
	   
    }
else
   {
        document.getElementById("userSpanId").innerHTML="";
		document.getElementById("txtUsernameId").style.borderColor="green";
   }
}
function pwdvalidate()
	{
		var pwd=document.getElementById("txtPasswordId").value;
		if(pwd=="")
		{
			document.getElementById("txtPasswordId").style.borderColor="#FF0000";
		}
		else
		{
		    document.getElementById("txtPasswordId").style.borderColor="green";
		}	
	}
function forgot()
	{
		
	    document.getElementById("fpwd").style.display = "block";
	}
	
	function makeUppercase() {

	document.indexName.USER_NAME.value = document.indexName.USER_NAME.value.toLowerCase();
}	
</script>
	<script type="text/javascript">
		var RecaptchaOptions = {
			theme : 'clean'
		};
	</script>
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="brand" href="#"><img src="resources/images/slogo.png" Style=" width:100px; height:35px; margin-left:50px;" align="left" alt="Spryt"/></a>
						<div class="nav-collapse">
							
						</div>
					</div>
				</div>
			</div>
<body>
	<form action="index.php" method="POST" name="indexName">
	<!-- Navbar -->
	   
	
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
				
				<!-- Content -->
		
		<div class="span12">				
				
					<div class="widget-content">
					    <div class="span5 desktop">	
							<div class="widget">	
								<div class="widget-header ">
										<h3>About Spryt</h3>
								</div>	
								
								<div class="widget-content">
								     <p class="pull-right"><b>Version :</b> 1.0</br><b>Last Modified date :</b> 23/03/15</p></br>
									 <p>&nbsp;</p>
									<p >In ‘About Spryt’ area
									Spryt is an agile data tool where in users can create Forms without any manual coding.
									Users can also create Sub Menu and related Menu and associate the Form to the Menu tree.   Menus can be rearranged to facilitate ease of use

									Also the Users can add Fields to the Forms as and when required.   The order of the columns to enter data can be rearranged.   This will help the users to enter data in a logical sequence as they wish.

									All these are done without any need of re-coding or change management.

									For further information or technical details please<a href="contact.php" >ContactUs</a>
                                 
								   </p>
								   
								</div>
										<div class="widget">				
											<div id="footer">
												<i>Powered by</i> 
												<div class="widget-content">
														
													<img src="gaddielsticker.jpg" Width="400px" />	
												</div>
											</div>
										</div>
							</div>
					    </div>
					
						<div class="span6 pull-right">			
							<div class="widget">
							    <div class="widget-content">
													
									<img src="Aplos_blk.jpg" Width="600px" />	
								</div>
								<div class="widget-header ">
									<h3>Login</h3>
								</div>
								
								<div class="widget-content">
									<form method="post" action="">
										    <div class="span1"><label>Username</label></div>
										    <div class="span4"><input type="text" name="USER_NAME" onkeyup="makeUppercase()" id="txtUsernameId" onBlur="uservalidate()" value="" placeholder="Enter user name/'email id, eg.abc@abc.com" class="span4" autofocus>
											<span style="color:red" id="userSpanId"></span></div>
										    <div class="span1"><label>Password</label></div>									  
										    <div class="span4"><input type="password" name="PASSWORD" id="txtPasswordId" onBlur="pwdvalidate()" placeholder="Enter password"  class="span4"/></div>
										 	<div class="span5">
												<div class="g-recaptcha" data-sitekey="6Lfr4_wSAAAAAOcrCEaw2QSVNw1HcOpiaZRK3wXR"></div>
										 	</div>
										    
										    <div class="span5">
										     <p class="submit"><input type="submit" name="commit" value="Login" onMouseOver="forgot()" class="btn btn-success span3"></p>
											 </div>
										  	<div class="span4 " id="fpwd" align="left" style="padding-bottom:5px">
											<a href="login/forgotPwd.php"  class="btn-link" title="To request a new password">Forgot your Password ?</a>
											</div>  	
									</form>
								</div>
								
<?php
		 include($_SERVER['DOCUMENT_ROOT'].'/spryt/connection.php');
				if ( !empty($_POST))
				{	 			
			        $recaptcha=$_POST['g-recaptcha-response'];
					if(!empty($recaptcha))
					{
					include("getCurlData.php");
					$google_url="https://www.google.com/recaptcha/api/siteverify";
					$secret='6Lfr4_wSAAAAADpyT7VGXaLhhOzFAg3BwaDLobUP';
					$ip=$_SERVER['REMOTE_ADDR'];
					$url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
					$res=getCurlData($url);
					$res= json_decode($res, true);
						
						$USER_NAME = $_POST['USER_NAME'];
						$PASSWORD = $_POST['PASSWORD'];					
						$pdo = Database::connect();
						$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$result = $pdo->prepare("SELECT * FROM USER_INFO WHERE USER_NAME='$USER_NAME' AND PASS_WORD='$PASSWORD'");
						$result->execute();
						$row = $result->fetch();
						$user = $row['USER_NAME'];
						$role= $row['ROLE'];
						$defalut_password= $row['DEFAULT_PASSWORD_CHANGED'];
						$activeflag=$row['ACTIVE_FLAG'];
						$deactiveflag=$row['DELETE_FLAG'];
						$nxtpwdchangedate=$row['NEXT_PASSWORD_CHANGE_DATE'];
						$startdate=$row['START_DATE'];
						$enddate=$row['END_DATE'];
						$id=$row['ID'];
						$_SESSION['user_id']=$id;
						$_SESSION['user']=$user;
						$_SESSION['row']=$role;
						$_SESSION['activeflag']=$activeflag;
						$_SESSION['deactiveflag']=$deactiveflag;
						
						if($row > 0) 
						{
							if($defalut_password == "Y") 
							{
								if($activeflag =="Y" && $deactiveflag=="N")
								{
									if($role=="ADMIN")
									{
										echo '<script type="text/javascript">
										window.location.href = "dashBoard.php";
										</script>';
										
										
									}							
									if($role=="USER")
									{  
									
										echo '<script type="text/javascript">
										window.location.href = "menu/menu.php";
										</script>';
									}
									
									$pdo = Database::connect();
									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									$result = $pdo->prepare("UPDATE USER_INFO SET LAST_SUCCESS_LOGIN_DATE=now() WHERE USER_NAME='$user'");
									$result->execute();
								
								}
							
								else
								{
									echo "<div class='alert alert-danger'>User is not Active</div>";
									
								}
							}
							if($defalut_password == "N")
							{
								echo '<script type="text/javascript">
									window.location.href = "login/firstLogin.php";
									</script>';	
							}
							if($role=="GUEST")
							{
								$date= date("Y-m-d");
								list($cyear,$cmonth,$cday)=explode("-", $date);
								list($syear,$smonth,$sday)=explode("-", $startdate);
								list($lyear,$lmonth,$lday)=explode("-", $enddate);
								if($cyear<$syear || $cyear>$lyear)
								{
									if($cmonth<$smonth || $cyear>$lmonth)
									{
										if($cday<$sday || $cyear>$lday)
										{
											echo '<script type="text/javascript">
											window.location.href = "dashBoard.php";
											</script>';
										}
										else
										{
											echo "<div class='alert alert-danger'>User is not Active </div>";
											
										}
									}
								}
							
							}

						}
						else
						{
							
							
							echo "<div class='alert alert-danger'>  Invalid User Name/Password </div>";
							$pdo = Database::connect();
							$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$result = $pdo->prepare("UPDATE USER_INFO SET LAST_FAILED_LOGIN_DATE=now() WHERE USER_NAME='$USER_NAME'");
							$result->execute();					
						}				
						
				    
					}
					else
					{
						echo "<div class='alert alert-danger'>  Enter capatcha code </div>";
					}
				}
			?> 		
							</div>		
                            
							
					</div>			 
				</div>
			</div>	
			
		   		
		</div>
		</br>
		
			
			<!-- Footer -->
			<div id="footer">
				<hr>
                                <p  class="pull-left" style="margin-right:15px;"><a herf="#">Terms & Conditions </a></p>
                                <p  class="pull-left" style="margin-right:15px;"><a herf="#">Security & Data Privacy </a></p>
                                 <p  class="pull-left" style="margin-right:15px;"><a herf="#"> Copy and IP Rights </a></p>
                                <p  class="pull-left" style="margin-right:15px;"><a href="contact.php" >Contact</a></p>
				<p class="pull-right"><a href="http://www.gaddieltech.com" >Gaddiel Technologies Private Limited </a> &copy; 2015</p>
			</div>
			<!-- /Footer -->
	
		</div>
		<!-- /Container -->
	</div>
	<!-- /Main content -->

	<!-- Javascript files -->
	

</form>
</body></html>