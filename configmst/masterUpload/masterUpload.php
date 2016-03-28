<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Spryt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
   
    <!-- CSS files -->
   <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/font-awesome.css">
    <!-- Google font -->
   
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>

<body >
	<!-- Navbar --> 
	<!-- /Navbar --><style>
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
<script>
function attach()
{
var id_value = document.getElementById("fileAttachId").value;
   if (id_value != '') {
	   var valid_extensions = /(.csv)$/i;
	   if (valid_extensions.test(id_value)) {
		   
	   }
	   else {
		  document.getElementById("errMsgFileId").innerHTML="Please Choose csv";
	   }
   }   
   return true;
 }
 function Validate()
   { 
		var valid =true;
		var id_value = document.getElementById("fileAttachId").value; 
		  if(id_value=="")
	   {
			document.getElementById("errMsgFileId").innerHTML="Must be Choose file";
			valid =false;
	   }
		return valid;
   }
</script>
<body>

<!-- Navbar -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	<!-- /Navbar -->
	<form action="" enctype='multipart/form-data' method="POST"  onsubmit="return Validate(this);">
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
									<h3>Master Upload</h3>	
								</div>                       
								<div class="span3">                                                                
									<div class="box-holder">	
									</div>  
									<div class="box-holder">										 
									</div>  
									<div class="box-holder">
										<a href="../../configmst/configMst.php">
										<div class="box"><img src="../../resources/images/e-close.png"/></br>Close</div></a>							
									</div>   
							    </div>                       
						</div>                                    
						</div>	              
					</div>
                </div>
	<div class="row">
		<div class="span12">
				<!-- Content -->
						<div class="widget">
							<!--<div class="widget-header">
							</div>-->
									<div class="widget-content">
										<div class="span5"><input size='50' id="fileAttachId" type='file' name='filename' onblur="attach()" class="sapn5">
										<span style="color:red;" id="errMsgFileId"></span></div>
                                        <div class="span5"><input type='submit' name='submit' value='Upload' class="btn btn-success sapn5">Upload only csv file.</div>  
				                	</div>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');

	function call_update($file,$errmsg,$status,$i)
	{ 
		//$ProcessStage = "3.0 callUpdate";		
      //  $FileName=$file;
			try
			{
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$results = $pdo->prepare("update KEY_VALUE_INT set PROCESS_STATUS='$status',PROCESS_MESSAGE='$errmsg' where PROCESS_REC_NUMBER='$i'");
				$results->execute();
			}
			catch (Exception $e)
			{      
				//$errMsg = "Error at ProcessId = $i in $ProcessStage with $e";
				
				$error = substr($e, 0, 150);
				$error = str_replace("'", '', $error);				
				echo "<div class='alert alert-danger'>Database Error:  Please contact your system administrator and also refer UploadStatusReport related to this file.</div>";
				writeUploadStatusReport($FileName, 'E', $error);			
			}
		//$ProcessStage = "3.1 Record Status update complete";		
	}
	function writeUploadStatusReport($FileName, $status, $exceptionMsg)
	{ 
	//$ProcessStage =  "4.0 writeUploadStatusReport.\n";		
		require_once("excelwriter.class.php");
		$dt = new DateTime();
		$date = $dt->format("Y-m-d-H-i-s");
		$dte = new DateTime();
		$dated = $dte->format("d-M-y");
		$Linespace=array("","","","","","","","","","","","","","","","");

	//$ProcessStage =  "4.1 Open Error file to write.\n";		
		$excel=new ExcelWriter("UploadStatusReport_".$FileName.$date.".xls");
		if($excel==false)
		{	
			echo $excel->error;
		}	 
	//$ProcessStage =  "4.2 Write header or basic content";	/
		$Title=array("","","","MASTER DATA UPLOAD UPLOAD STATUS REPORT");
		$excel->writeLines($Title); 
		$excel->writeLine($Linespace);
		$parameterlist=array("","File Name",$FileName,"","","Report Date:",$dated);
		$excel->write($parameterlist);
		$excel->writeLine($Linespace);
		$excel->writeLine($Linespace);			
		$Title=array("","","Group Name","Key Name","Value Id","Value Name","Reject/Error Reason");
		$excel->writeLin($Title);
//	$ProcessStage =  "4.3 Fetch error records,\n";
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $pdo->prepare("select * from KEY_VALUE_INT where PROCESS_STATUS='E' and process_file_name = '$FileName'");
		$result->execute();

		for($i=0; $row = $result->fetch(); $i++)
		{		
			$Details=array("","", $row['GROUP_NAME'],$row['KEY_NAME'],$row['VALUE_ID'],$row['VALUE_NAME'],$row['PROCESS_MESSAGE']);
			$excel->writeLine($Details);
		}
	//$ProcessStage =  "4.4 After writeUploadStatusReport.\n";		
		
		echo '<script type="text/javascript">
			window.location.href = "UploadStatusReport_'.$FileName.$date.'.xls";
			</script>';	
	}

//$ProcessStage =  "0.0 BeforeonSubmit\n";
	if (isset($_POST['submit'])) 
	{
	//$ProcessStage =  "1.0 UPLOAD CSV PROCESS START \n";
						
		$dat=date("Y/m/d");
		try
		{
			try
			{
				if (is_uploaded_file($_FILES['filename']['tmp_name']))
				{	
					$file=$_FILES['filename']['name'];
				//	$ProcessStage=  "1.1 LoadFile";
				}
		//	$ProcessStage=  "1.2 OpenFile";			
		//Import uploaded file to Database
				$handle = fopen($_FILES['filename']['tmp_name'], "r");
		  
			//$ProcessStage=  "1.3 Start Load Interface Table";
			
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
				{
					$pdo = Database::connect();
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					//$pdo->beginTransaction();
				//$ProcessStage=  "1.4 Load Record in interface table.";	
					$result = $pdo->prepare("INSERT into KEY_VALUE_INT(PROCESS_DATE,PROCESS_FILE_NAME,PROCESS_MODE,PROCESS_STATUS,GROUP_NAME,KEY_NAME,VALUE_ID,VALUE_NAME) values(str_to_date('$dat','%Y/%m/%d'),'$file','$data[0]','N','$data[1]','$data[2]','$data[3]','$data[4]')");
					$result->execute();				
				}
		//	$ProcessStage=  "1.5 End Load Interface Table\n";
				echo "<div class='alert alert-success'> File:" . $_FILES['filename']['name'] ." Uploaded Successfully. .</div>";
				fclose($handle);
		//	$ProcessStage=  "1.6 File Closed\n";
			}
			catch(Exception $e)
			{
				
				$error = substr($e, 0, 150);
				$error = str_replace("'", '', $error);
				call_update($file,$error,'E',$processId);						
				echo "<div class='alert alert-danger'>Database Error:  Please contact your system administrator .</div>";
				//$pdo->rollBack();
			}
	// Process Stage 1 COMPLETE


	//  ProcessStage 2x - START VALIDATE AND INSERT TO KEY_VALUE TABLE

			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$result = $pdo->prepare("select * from KEY_VALUE_INT where PROCESS_STATUS='N'");
			$result->execute();
			for($i=0; $row = $result->fetch(); $i++)
			{	
				$groupname=$row['GROUP_NAME'];
				$keyname=$row['KEY_NAME'];
				$valueid=$row['VALUE_ID'];
				$valuename=$row['VALUE_NAME'];
				$processId=$row['PROCESS_REC_NUMBER'];
				$processMode=$row['PROCESS_MODE'];

				$groupname = strtoupper($groupname);
				$keyname= strtoupper($keyname);
				$valueid = strtoupper($valueid);
			
		//	$ProcessStage=   "2.0 Record Number = $processId ";
				if($processMode == "I")
				{
					 try
					{
				//	$ProcessStage= "2.1 Insert Mode.\n";				 
						if((preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $groupname)) || (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $keyname)))
							{
								$errmsg="Special character not allowed in Groupname or Keyname.";
								$status="E";
						//	$ProcessStage="2.1.1 Special Characters in Group Name or Key Name.   Call Update for Error.\n";				 
								call_update($file,$errmsg,$status,$processId);
							}
						else
							{
						//	$ProcessStage= "2.1.2 Check record exists.\n";
								$pdo = Database::connect();
								$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								$results = $pdo->prepare("select * from key_value where GROUP_NAME='$groupname' and KEY_NAME='$keyname'and VALUE_ID='$valueid'");
								$results->execute();
								$rows = $results->fetch();

								if($rows > 0) 
								{   
						//		$ProcessStage="2.1.3 Record exists. Call Update for Error.\n";
									call_update($file,"Record Already Exists","E",$processId);
								}
								else
								{  
						//		$ProcessStage= "2.1.4 Record not exists.\n";					
						//		$ProcessStage= "2.1.5 Set validated status.\n";						
									call_update($file,"validation success","V",$processId);
								
									$pdo = Database::connect();
									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
						//		$ProcessStage= "2.1.6  Before Insert in Key Value table.\n";
												
									$sqlq = "insert into key_value (CREATED_DATE,GROUP_NAME,KEY_NAME,VALUE_ID,VALUE_NAME) values(now(), ?, ?, ?, ?)";
									$q = $pdo->prepare($sqlq);
									$q->execute(array($groupname,$keyname,$valueid,$valuename));
									Database::disconnect();	
									call_update($file,"Interface Success","P",$processId);
								}					
						//	$ProcessStage= "2.1.7  After Insert in Key Value table.\n";		/
							}
					}
					 catch(Exception $e)
					{
						
						echo "<div class='alert alert-danger'>Database Error:  Please contact your system administrator.</div>";
                        $error = substr($e, 0, 150);
						$error = str_replace("'", '', $error);
						call_update($file,$error,'E',$processId);						
						continue;
					}
				}
				else if($processMode == "U")
				{  
					try
					{
							$pdo = Database::connect();
							$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$results = $pdo->prepare("select * from key_value where GROUP_NAME='$groupname' and KEY_NAME='$keyname'and VALUE_ID='$valueid'");
							$results->execute();
							$rows = $results->fetch();
						if($rows > 0) 
						{ 
								
					//	$ProcessStage=  "2.2 Update of Records.\n";
					//	$ProcessStage=  "2.2.1 Find exists for Update the key value table for the Group, key and value id.\n";
							$pdo = Database::connect();
							$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
							$sqlq = "update key_value SET VALUE_NAME='$valuename' WHERE GROUP_NAME='$groupname' AND KEY_NAME='$keyname' AND VALUE_ID='$valueid'";
							$q = $pdo->prepare($sqlq);
							$q->execute();
							Database::disconnect();	
					//	$ProcessStage= "2.2.2  After Update in Key Value table.\n";				
					    	call_update($file,"Update Success","P",$processId);
						}
						else
						{	
							call_update($file,"Record does not exist for Update","E",$processId);
						}	
									
					}
					catch(Exception $e)
					{
				//	$errMsg = "Error at ProcessId = $processId in $ProcessStage with $e";
					    $error = substr($e, 0, 150);
						$error = str_replace("'", '', $error);
						call_update($file,$error,'E',$processId);						
						echo "<div class='alert alert-danger'>Database Error:  Please contact your system administrator.</div>";
						continue;
					}
				}	
				else
				{  
			//	$ProcessStage=  "2.3 Incorrect Process Mode. Call error update.\n";
					call_update($file,"Incorrect Process Mode. Valid values are I(nsert) or U(pdate) only. ","E",$processId);
				}
		
			}		
			writeUploadStatusReport($file, "", "");
			try
			{
		//	$ProcessStage=  "5.0 Update Interface Process Status";		
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//	$ProcessStage=   "5.1 Set 'X' complete status of the record.\n";				
				$results = $pdo->prepare("update KEY_VALUE_INT set PROCESS_STATUS='X' where PROCESS_FILE_NAME='$file' AND PROCESS_STATUS in ('P','E')");
				$results->execute();
		//	$ProcessStage=   "5.2  'X' complete status success.\n";
			}
			catch(Exception $e)
			{	
				$error = substr($e, 0, 150);
				$error = str_replace("'", '', $error);
				call_update($file,$error,'E',$processId);						
				echo "<div class='alert alert-danger'>Database Error:  Please contact your system administrator .</div>";
				continue;
			}
		}
		catch(Exception $e)
		{	
	//	$errMsg = "$ProcessStage with $e";
		
			$error = substr($e, 0, 150);
			$error = str_replace("'", '', $error);
			call_update($file,$error,'E',$processId);
			echo "<div class='alert alert-danger'>Database Error:  Please contact your system administrator and also refer UploadStatusReport related to this file.</div>";		
		}
	}

?>		
				<!-- /Content -->
                </div>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>
				
				<div class="dock-wrapper">    
						 <div class="navbar navbar-fixed-bottom">
							<div class="navbar-inner">
								<div class="container">                  
										<center>
											<div class="btn-group btn-group-justified">                      
													<a href="../../configmst/configMst.php" class="btn btn-default">
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

			