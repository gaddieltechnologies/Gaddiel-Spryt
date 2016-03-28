<?php
ob_start();

 include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php'); 

		if(isset($_POST['optSubmenu_nameName']))	
	{
		$lastProcess=$_POST['optSubmenu_nameName'];
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $pdo->prepare("SELECT table_name,table_select_sql FROM submenu WHERE submenu_name='$lastProcess'");
		$result->execute();
		$row = $result->fetch();
		$tableName=$row['table_name'];
		 Database::disconnect();			
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $pdo->prepare("SELECT MAX(Last_Id) AS Last_Id FROM download_log WHERE Table_name='$tableName'");
		$result->execute();
		$row = $result->fetch();	
		$txtprocessIdNam=$row['Last_Id'];
		Database::disconnect();	
	}

if(!empty($_POST))
	{   
        require_once("excelwriter.class.php");
		$submenu_name=$_POST['optSubmenu_nameName'];
		$txtFromDateNam=$_POST['txtFromDateNam'];
		$txtToDateNam=$_POST['txtToDateNam'];
		$txtFromIdname=$_POST['txtFromIdname'];
		$txtdoIdname=$_POST['txtdoIdname'];		
		if(isset($_POST['radioAllRecord']))
			{ 
				include("checkAll.php");
			}
			if((!empty($txtFromDateNam)) && (!empty($txtToDateNam)))
			{   
		        include("from_toDate.php");
				
			}
			if((!empty($txtFromIdname)) && (!empty($txtdoIdname)))
			{   
		        include("from_toId.php");
				
			}
			if(isset($_POST['radioNewRecordName']))
			{ 
				include("newProcess.php");
			}
			
     		
	}
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <title>Spryt</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/footable.core.css?v=2-0-1">
    <link rel="stylesheet" type="text/css" href="../../resources/css/footable-demos.css">
	<link rel="stylesheet" type="text/css" href="../../resources/css/pageStyle.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
	<script type="text/javascript" src="../../resources/js/footable.js?v=2-0-1"></script>
	 <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
	 <!--<script src="http://code.jquery.com/jquery-1.10.2.js"></script>-->
	  <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
	
    <!-- Google font -->
    <script>
        if (!window.jQuery) { document.write('<script src="../../resources/js/jquery-1.9.1.min.js"><\/script>'); }
    </script>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	

</head>
<script>
var m_months = {Jan: '01', Feb: '02', Mar: '03', Apr: '04', May: '05', Jun: '06',
              Jul: '07', Aug: '08', Sep: '09', Oct: '10', Nov: '11', Dec: '12'};
function Validate(){
	   var valid = true;
	   var message = '';	   
		var formname = $("#optSubmenu_nameId").val();
		var processId = $("#optProcessIdId").val();
        var fromId= $("#txtfromId").val();		
        var doId= $("#txtdoId").val();
        var	allCheck = document.getElementById("radioAllRecordId").checked;
		var	newCheck = document.getElementById("radioNewRecordId").checked;
		var fromDateTxt = $("#fromDateTxt").val();					
       var arr=[];arr=fromDateTxt.split('-');
		var day = arr[0];
		var month = arr[1];
		 var mon =(month, m_months[month]);	
		var year = arr[2];

		var toDateTxt = $("#toDateTxt").val();
        var arr=[];arr=toDateTxt.split('-');
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
				message = message + 'Date From must be earlier to Date To';
			}
			}
			}
        
			if(formname== "-- SELECT --")
			{
				message = message + 'Select the Form Name\n';
			   valid =false;
			}
			if(((fromDateTxt== "")||(toDateTxt== ""))&&(fromId== "")&&(!allCheck)&&(!newCheck))
			{
				message = message + 'Select any one\n';
			   valid =false;
			}
			
		 if(fromId > doId)
		 {
			message = message + 'From Id must be earlier to To Id';
			valid =false;
		 }
		if (valid == false){
		alert(message);
		return false;
		}
	}
	function isNumberKey(evt)
{
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode != 46 && charCode > 31 
     && (charCode < 48 || charCode > 57))
      return false;  
   return true;
}
 $(function() {

		$(".datepic").datepicker({ dateFormat: 'dd-M-y',maxDate: 0 }).bind("change",function(){
			var minValue = $(this).val();
			minValue = $.datepicker.parseDate("dd-M-y", minValue);
			minValue.setDate(minValue.getDate()+1);
			$("#to").datepicker( "option", "minDate", minValue );
		})
	});
	function select()
	{
		var lastProcess = $('#optSubmenu_nameId').val();
		
	$.post("selectLastProcess.php", {				
		lastProcess1: lastProcess
		}, function(data) {	
		document.getElementById("txtprocessId").value=data;
		})
	}	
		/*function checkVisitDateTo(){
		
	    var fromDateTxt = $("#fromDateTxt").val();		
		var toDateTxt = $("#toDateTxt").val();
       var arr=[];arr=fromDateTxt.split('-');
		var day = arr[0];
		var month = arr[1];
         var mon =(month, m_months[month]);		
		var year = arr[2];
		
        var arr=[];arr=toDateTxt.split('-');
		var days = arr[0];
		var months = arr[1];
        var mons =(months, m_months[months]);			
		var years = arr[2];
			if (year >= years)
			{
			if(mon >= mons)
			{
	    	if(day > days) {
			alert("Date From must be earlier to Date To");
			}
			}
			}
			};*/
</script>
<body>
	<!-- Header include -->
	  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	<!-- Header include -->
	<!-- Main content -->
	<form action="dataDownload.php" method="POST" onSubmit="return Validate();">
	<div id="main-content">
		<!-- Container -->
		<div class="container">
			<!-- Header boxes -->
			<div class="box-container">
				
			</div>
			<!-- /Header boxes -->
			<!-- row boxes -->
			<div class="row">
				<div class="span12 desktop">
					<div class="widget">                     				 
						<div class="widget-content "> 
							<div class="span8"><h3>Data Download</h3></div>                       
							<div class="span3"> 								
								 <div class="box-holder">
								   <a href="../configMst.php">
								   <div class="box"><img src="../../resources/images/e-close.png"/></br>Close</div></a>							
								 </div>                          
							</div>
						</div>
					</div>								
				</div>
			 
				<!-- Search -->
			 </div>
				<div class="row">                
				<!-- Content -->
					<div class="span12">	
						<div class="widget">
							<div class="widget-header">							
								<h3>Data Download</h3>	
								<span class="icon-right"><input type="submit" name="download" value="Download" class="btn pull-right"/>
								</span>			
							</div>
							<div class="widget-content">	
								<div class="row">
									<div class="span3"><label>Form Name<font color="#FF0000"> *</font></label>
									<?php 
											
										    $pdo = Database::connect();
											$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$result = $pdo->prepare("SELECT submenu_name FROM submenu ORDER BY submenu_id DESC");
											$result->execute();

											echo '<select class="span3" onchange="select()" name="optSubmenu_nameName" maxlength="10" id="optSubmenu_nameId">';
											echo  '<option>-- SELECT --</option>';												
											for($i=0; $row = $result->fetch(); $i++){																	
												Database::disconnect();	
												
								    ?>												
											<option value="<?php  echo $row['submenu_name'];?>" ><?php  echo $row['submenu_name'];?> </option>						    
											<?php } echo '</select>';  ?>	<span id="errMsgFormNameId"/>	
									</div>
									<div class="span3"><label>From Date<font color="#FF0000"> *</font></label>
										<input type="text"  id="fromDateTxt" name="txtFromDateNam" class="span3 datepic"/>
										<span class="validatecolor" id="errMsgfrequencyseqId"/>
									</div>
									<div class="span3"><label>To Date<font color="#FF0000"> *</font></label>
										<input type="text"  id="toDateTxt" name="txtToDateNam" class="span3 datepic"/>
										<span class="validatecolor" id="errMsgfrequencyseqId"/>
									</div>
									<div class="span2"><label><font color="#FF0000">&nbsp; </font></label><input type="radio" name="radioAllRecord" id="radioAllRecordId" >&nbsp;All Records</input>									
									</div>
									
									<div class="span3"><label>From ID<font color="#FF0000"> *</font></label>
										<input type="text"  onKeyPress="return isNumberKey(event)" class="span3" name="txtFromIdname" id="txtfromId"/>
										<span class="validatecolor" id="errMsgfrequencyseqId"/>
									</div>
																		
									<div class="span3"><label>To ID<font color="#FF0000"> *</font></label>
										<input type="text" onKeyPress="return isNumberKey(event)" id="txtdoId" name="txtdoIdname" class="span3"/>
										<span class="validatecolor" id="errMsgfrequencyseqId"/>
									</div>									
									<div class="span3"><label>Last Process ID<font color="#FF0000"> *</font></label>
								
									<input type="text" disabled="disable" value="<?php $row['Last_Id'] ?>" id="txtprocessId" name="txtprocessIdNam" class="span3"/>	
									</div>
								    <div class="span2"><label><font color="#FF0000">&nbsp; </font></label><input type="radio" name="radioNewRecordName" id="radioNewRecordId" >&nbsp;New Records Only</input>									
									</div>	
								</div>
	
							</div>                
						</div>
					</div>
				<!-- /Content -->
                </div>
			<!-- row boxes -->
			
			<!-- Footer -->
			 <?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>		
			<!-- /Footer -->
			<!-- Navbar Mobile View -->
			<div class="dock-wrapper row">    
				<div class="navbar navbar-fixed-bottom">
					<div class="navbar-inner">
						<div class="container">                         
							   <center>
							   <div class="span3">
								 <div class="btn-group btn-group-justified">				  
								<a href="../configMst.php" class="btn btn-default">
									<img src="../../resources/images/e-close.png"/><br>Cancel</a></div>
								</div>
						  </center>                        		
						</div>
					</div>
				</div>
			</div>
		<!-- /Navbar  Mobile View -->
		</div>
		<!-- /Container -->
	</div>
	<!-- /Main content -->

	</form>
	
</body>
<!-- Javascript files -->
 <script type="text/javascript">
$(function(){
		//these two line adds the color to each different row
  
    $(".mytable1 tr:even").addClass("eventr");
    $(".mytable1 tr:odd").addClass("oddtr");

 	//handle the mouseover , mouseout and click event
  $(".mytable1 tr")  
  .mouseover(function() {$(this).addClass("trover");})
  .mouseout(function() {$(this).removeClass("trover");})
  //.click(function(){$(this).toggleClass("trclick");})
 // .click(function(){$(this).siblings().removeClass('trclick');});
 
 }); 
</script>
 <script type="text/javascript">
        $(function () {
            $('table').bind('footable_breakpoint', function() {
                $('table').trigger('footable_expand_first_row');
            }).footable();
        });
		
		
    </script>

<script type="text/javascript">
function clearvalue()
{
 document.getElementById("txtUserNameId").value="";
 }
</script>



</html>