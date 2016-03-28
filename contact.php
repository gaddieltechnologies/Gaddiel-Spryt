
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>SpryT</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="resources/css/font-awesome.css">
    <!-- Google font -->
    <link href="/css/css.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>
<script type="text/javascript" src="contact.js">
</script>
<script type="text/javascript">

</script><style>
.mailLink:link
{
	color:black;
}

.mailLink:visited
{
	color:grey;
}

.mailLink:hover
{
	color:green;
	text-decoration:none;
	
}
</style>
<body>

<!-- Navbar -->

	  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	<!-- /Navbar -->
	<form action="" method="POST" name="feedBack" onSubmit="return validateFb();">
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
									<h3>Contact Us  </h3>	
								</div>                       
								<div class="span3">                                                                
									<div class="box-holder">
										
									</div>  
									<div class="box-holder">
											
											 
									</div>  
									<div class="box-holder">
										<a href="index.php">
										<div class="box"><img src="resources/images/e-close.png"/></br>Close</div></a>							
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
							<!--<div class="widget-header">
								
							</div>-->
							
									<div class="widget-content">
								<div class="row">
								<div class="span12">
									
										<p>For any queries or feedback please contact us in the following address or send us your feedback by filling out the form here</p>
									</div>
								</div>									
										<div class="span3">
											<h4>Gaddiel Technologies Pvt Ltd,</h4>
												<label>Door# 9/34E First Floor,</label>
													<label>DKV Complex,</label>
														<label>3rd Main Road, Renga Nagar,</label>
															<label>KK Nagar PO,  620021,</label>
																<label>Tiruchirappalli, Tamil Nadu, India.</label>
												<br/>
																<label>Latitude:</label>
															<label>Longitude:</label>
														<h5>Please do call us for any type of inquiry</h5>
													<label>Tel: +91 431 2457778</label>
												<label>VoIP: +1-347-478-6444</label>
											<h5>Email</h5>
											<label><a class="mailLink" href="mailto:spryt@gaddieltech.com">spryt@gaddieltech.com</a></label>
												
										</div>
										<div class="span4">
											<!--<table border="0">
												<tr>
													<td>Latitude</td>
													<td class="mapBorder"></td>
												</tr>
												<tr>
													<td>Longitude</td>
													<td class="mapBorder"></td>
												</tr>
												</table>-->
												
														<p><object data="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=10.767488, 78.683549&amp;aq=&amp;sll=10.813479,78.694493&amp;sspn=0.186486,0.338173&amp;t=h&amp;ie=UTF8&amp;ll=10.767488, 78.683549&amp;spn=0.025101,0.025749&amp;z=14&amp;output=embed" width="350" height="400"></object><br /> <small><a style="color: #0000ff; text-align: left;" href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=10.767488, 78.683549&amp;aq=&amp;sll=10.813479,78.694493&amp;sspn=0.186486,0.338173&amp;t=h&amp;ie=UTF8&amp;ll=10.767488, 78.683549&amp;spn=0.025101,0.025749&amp;z=14" target="_blank">View Larger Map</a></small></p>
													
											
											
										</div>
										 <div class="span3">
											<h4>Feedback Form</h4>
												<label>Name<font color="#FF0000"> *</font></label><input type="text" onkeyup="makeUppercase()"  name="txtName" class="span3" id="txtNameId" onblur="fbName()"><span style="color:red;font-size:12px;" id="errMsgNameId"></span>									
														
												<label>Email Id<font color="#FF0000"> *</font></label><input type="text"  name="txtMailName" class="span3" id="txtMailId" onblur="checkMail()"><span style="color:red;font-size:12px;" id="errMsgMailId"></span>												
												
												<label>Phone#</label><input type="text"  name="txtPhoneName" class="span3" id="txtPhoneId">														
														
												<label>Subject</label><input type="text" onkeyup="makeUppercase()" name="txtSubjectName" class="span3" id="txtSubjectId">
													
												<label>Message</label> <textarea rows="2" name="txtMessageName" maxlength="2000" class="span3" id="txtMessageId"></textarea><span id="errMsgMessage"></span> 
												<label></label>
													<input type="submit" class="btn btn-success span3" value="Submit">
												
																						
										 </div>   
										   
										<!--<div class="span3"><label>&nbsp;</label><input type="submit" name="Add" value="Add" class="btn btn-success span3" /></div>	-->	
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
													
													
													<a href="index.php" class="btn btn-default">
													<img src="resources/images/e-close.png"/><br>Close</a>		
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
			if(!empty($_POST))
			{
			//$created_By=$_SESSION['username'];
			
			$name=$_POST['txtName'];
			$mail=$_POST['txtMailName'];
			$phone=$_POST['txtPhoneName'];
			$subject=$_POST['txtSubjectName'];
			$message=$_POST['txtMessageName'];
			
		
			            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO ONLINE_FEEDBACK (CREATED_DATE,CONTACT_NAME,EMAIL_ID,PHONE_NO,FEEDBACK_SUBJECT,FEEDBACK_MESSAGE) values(now(), ?, ?, ?, ?, ?)";																																																																					
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$mail,$phone,$subject,$message));
            Database::disconnect();
			echo "<div class='alert alert-info'> Successfully Inserted. </div>";
			
				 echo '<script type="text/javascript">
						window.location.href = "contact.php";
						</script>';
		
			}
			?>
			