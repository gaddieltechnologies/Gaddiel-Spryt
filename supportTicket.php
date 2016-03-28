<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>Spryt</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="resources/css/font-awesome.css">
    <!-- Google font -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>
<script type="text/javascript">
$( window ).load(function(){	
var role="<?php echo $_SESSION['row'];?>";
if(role=="USER")
{
	 $("#admin").hide();
     $("#user").show();
}
if(role=="ADMIN" || role=="GUEST")
{
	 $("#admin").show();
     $("#user").hide();
}
		});

function checkEmail(email) {
var regExp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
return regExp.test(email);	
}
 
function checkEmails(){
    var emails = document.getElementById("txtCopyEmailId").value;
	var space =/(\s)/;
	var emailArray = emails.split(";");
    var invEmails = "";
    for(i = 0; i <= (emailArray.length - 1); i++){
        if(checkEmail(emailArray[i])){
            //Do what ever with the email.
        }else{
            invEmails += emailArray[i] + "\n";
			
        }
    }
    if(invEmails != ""){
        document.getElementById("errMsgMailId").innerHTML="Please enter the Valid eMail Id";
        document.getElementById("txtCopyEmailId").style.borderColor="#FF0000";
		return false;
		
    }
	else if(eMails.match(space))		
	{
		document.getElementById("errMsgMailId").innerHTML="";
        document.getElementById("txtCopyEmailId").style.borderColor="green";
	}
	else{
		 document.getElementById("errMsgMailId").innerHTML="";
        document.getElementById("txtCopyEmailId").style.borderColor="green";
		
	}

}
</script>

<script type="text/javascript" src="supportTicket.js">
</script>

<style>
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
	<form action="supportTicket.php" method="POST" id="fileForm" name="support" enctype="multipart/form-data" onSubmit="return supportSubmit();" >
	<!-- Main content -->
	<div id="main-content">
		<!-- Container -->
		<div class="container">
			<!-- Header boxes -->
			<div class="box-container">
				
			</div>
			<!-- /Header boxes -->
			
				<div class="row">
                
				<!-- Content -->
					<div class="span12">	
						<?php	
							$username = $_SESSION['user'];
				//echo $username;		
			if(isset($_POST["submit"]))
			{
			include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');
			date_default_timezone_set("Asia/Kolkata");
						
			//$user="1";
			$sub=$_POST['optSubjectName'];
			$msg=$_POST['txtMessageName'];
			//$file=$_FILES['fileAttachName'];
			$emailTo=$_POST['txtCopyEmailName'];
			$date=date("Ymd");
			$time=date("His");
			//$ticket="STUSER" .$sub1.$date.$time;		
			$file = $_FILES['fileAttachName'];
			$file_name = $file['name'];
			$file_type = $file ['type'];
			$file_size = $file ['size'];
			$file_path = $file ['tmp_name'];
			
	if($file_name!="" && ($file_type="image/jpeg"||$file_type="application/pdf")&& $file_size<=100000000)

       if(move_uploaded_file ($file_path,'images/'.$file_name))//"images" is just a folder name here we will load the file.
	      
		//require ("classes/class.phpmailer.php");
		
		$sub=$_POST['optSubjectName'];		
				switch ($sub) {
					case "User Guide":
						$sub1="UGH";
						break;
					case "Issue in Data":
						$sub1="IID";
						break;
					case "Issue in UI":
						$sub1="IIU";
						break;
					case "Suggestion":
						$sub1="SUG";
						break;
					case "Enhancement":
						$sub1="ENH";
						break;   
				}

					$pdo = Database::connect();
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "SELECT ID FROM USER_INFO WHERE USER_NAME='$username'";
					 $q = $pdo->prepare($sql);
					$q->execute();			
				$row=$q->fetch();
							$user=$row['ID'];
		
		$msg=$_POST['txtMessageName'];			
		$date=date("Ymd");
		$time=date("His");
		$ticket="ST".$user.$sub1.$date.$time;		       
		$mailto ='spryt@gaddieltech.com';
		$FromEmail =   'spryt@gaddieltech.com'; 
		$FromName  =   'GADDIELTECH';  // Sumith Harshan	

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
         $mail->Body = "<p>Dear User,</P>					
							<p>Thank you for contacting us.</P>
							<p>This is an automated response confirming the receipt of your ticket. We will get back to you as soon as possible. </P>
							<p><i>Details of the support request are as follows</i></P>
							<table>
							<tr>
							<td><b>Support Ref#</b></td>
							<td>:</td> 
							<td>$ticket</td>
							</tr>
							<tr>
							<td><b>Subject</b></td> 
							<td>:</td>
							<td>$sub</td>
							</tr>
							<tr>							
							<td><b>Message</b></td> 
							<td>:</td> 
							<td>$msg</td>
							</tr>
							</table>
							<p>When sending us email or replying, please make sure that the <b>Support Ref#</b> given is kept in the subject line to ensure that your replies are tracked appropriately.</P>
							<br/>
							<p>Regards,</P>
							<p>Team Spryt</P>				";
			 $mail->Subject = "$ticket";
			 $addr = explode(';',$emailTo);

			foreach ($addr as $ad) {
			$mail->AddAddress( trim($ad));       
}
         $mail->AddAddress($mailto);
		 				
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO SUPPORT_TICKET (CREATED_BY,CREATED_DATE,USER_ID,SUPPORT_TICKET_NO,SUPPORT_SUBJECT,SUPPORT_MESSAGE,COPY_EMAIL_ID,FILE_ATTACHMENT) values(?, now(), ?, ?, ?, ?, ?, ?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($username,$user,$ticket,$sub,$msg,$emailTo, $file_name));
			Database::disconnect();
			//echo "<div class='alert alert-success'>  </div>";
        if($mail->Send()){
		 echo "<div class='alert alert-success'>Successfully E-mail Sent</div>";   
		 }
                
}	

?>



            <div id="user"><h1 class="page-title">CREATE A SUPPORT TIKCET<label class="pull-right"><a href="<?php $path ?>menu/menu.php"><h5><font color="#FFFFFF">Back to Menu</font></h5></a>  </label></h1></div>
			<div id="admin"><h1 class="page-title">CREATE A SUPPORT TIKCET<label class="pull-right"><a href="<?php $path ?>dashBoard.php"><h5><font color="#FFFFFF">Back to Dashboard</font></h5></a> </label></h1></div>
						<div class="widget">							
									<div class="widget-content">
										<div class="row">
											<div class="span12">
											
												<p>An acknowledgement eMail will be sent to you with a Support Ticket Number in the Subject Line.</p>
												<p>Updates, followup, resolution or other actions will be communicated by eMail referring to this Support Ticket Number.</p>
												<p> For Quick and Continued assistance, please ensure that your eMails contain the Support Ticket Number in the Subject Line.</p>
											</div>
										</div>	
										<div class="row">
											<div class="span8">
												<label>Subject<font color="#FF0000"> *</font></label>
												<select name="optSubjectName" id="optSubjectId" onblur="select()" class="span8">
													<option value="select">Select</option>
													<option value="User Guide">User Guide</option>
													<option value="Issue in Data">Issue in Data</option>
													<option value="Issue in UI">Issue in UI</option>
													<option value="Suggestion">Suggestion</option>
													<option value="Enhancement">Enhancement</option>
												</select><span style="color:red;font-size:12px;" id="errMsgSubId"></span>
												<label>Attachment</label> <input type="file" name="fileAttachName" accept=".pdf,.jpg" id="fileAttachId" onblur="attach()"/><span style="color:red;font-size:12px;" id="errMsgFileId"></span>
												<label>Message<font color="#FF0000"> *</font></label><textarea rows="3" name="txtMessageName" id="txtMessageId" onblur="message()" maxlength="2000" class="span8"></textarea><span style="color:red;font-size:12px;" id="errMsgMsgId"></span>
												<label>Copy Email To<font color="#FF0000"> *</font></label><input type="text" name="txtCopyEmailName" id="txtCopyEmailId" onblur="checkEmails()" placeholder="Please separate the email id using ; e.g. a@gmail.com; b@yahoo.com   " class="span8"/><span style="color:red;font-size:12px;" id="errMsgMailId"></span>										
										
												<input type="submit" name="submit" value="Submit" class="btn btn-success span8" />
																							
											</div>                
										</div>
									</div>
				<!-- /Content -->
						</div>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>
				
						
				
				
        </div>
	</div>	
    </form>		
</body>
</html>
		
	