<?php
//ob_start();
//session_start();
include($_SERVER['DOCUMENT_ROOT'].'/addSession.php');
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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="../../resources/css/pageStyle.css">
	<script type="text/javascript" src="../../resources/js/footable.js?v=2-0-1"></script>
	
    <!-- Google font -->
    <script>
        if (!window.jQuery) { document.write('<script src="../../resources/js/jquery-1.9.1.min.js"><\/script>'); }
    </script>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	

</head>

<body>
	<!-- Header include -->
	  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	 <?php include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php'); ?>
	<!-- Header include -->
	<!-- Main content -->
	<form action="user.php" method="POST" name="forms">
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
							<div class="span8"><h3>User</h3></div>                       
							<div class="span3">                                                                
								<div class="box-holder">
									 <a href="add.php" onClick="newPage()">
									 <div class="box"><img src="../../resources/images/e-add.png"/></br>New</div></a>	
								</div>                      						
								
								 <div class="box-holder">
								   <a href="../configMst.php">
								   <div class="box"><img src="../../resources/images/e-close.png"/></br>Close</div></a>							
								 </div>                          
							</div>
						</div>
					</div>								
				</div>
			 
				<!-- Search -->
				<div class="span12">
					<div class="widget">					
						<div class="widget-content">
						<div class="mobile"><h3>User</h3></div> 						              
							<div class="span8">
								<input type="text" autofocus class="span5" placeholder="Search by User Name"  name="txtUserName" id="txtUserNameId"/>
							</div>
							<div class="span3"> 
								<input type="submit" class="btn btn-success " onClick="searchvalue()" value="Search">
								<a href="#" class="btn btn-success " onClick="clearvalue()">Clear</a>
							</div>   					                  
						</div>
				   </div>  
				</div>  
				<!-- Search -->
			
				<!-- GridView -->
				<div class="span12">
					<div class="widget-content">
						<div class="tab-content">
							<div class="tab-pane active" id="demo">						  
								<table class="table demo table-bordered " data-filter="#filter" data-page-size="5"
								   data-page-previous-text="prev" data-page-next-text="next">	
									<!--<table class="table table-striped table-bordered">--> 								   
									<thead>
									   <tr class="widget-header">
											<th></th>                                        										
											<th data-toggle="true">User Name</th>
											<th>Role</th>
											<th data-hide="phone">Active Flag</th>
											<th data-hide="phone,tablet">Delete Flag</th>
										</tr>
									</thead>								
									<tbody id="gridvaluediv" class="mytable1">	
										<?php 
											$pdo = Database::connect();
											$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$result = $pdo->prepare("SELECT ID,USER_NAME,ROLE,ACTIVE_FLAG,DELETE_FLAG FROM USER_INFO ORDER BY ID DESC");
											$result->execute();
											Database::disconnect();
											
										if ( !empty($_POST)) {	
											$user_name = $_POST['txtUserName'];									
											$pdo = Database::connect();
											$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$sql="SELECT  ID,USER_NAME,ROLE,ACTIVE_FLAG,DELETE_FLAG FROM USER_INFO WHERE  USER_NAME LIKE :txtUserName;";
											$result=$pdo->prepare($sql);
											
											$result->bindValue(':txtUserName',$user_name.'%');
											$result->execute();
											}
											for($i=0; $row = $result->fetch(); $i++){																	
											Database::disconnect();	                                   									
										 ?>									
											<tr Style="cursor:pointer;" id="view">
												<td class="actions">
													<a href="edit.php?id=<?php echo $row['ID']; ?>" class="btn btn-small ">
														<i class="icon-pencil"></i>
													</a>												
												</td>								
												<td><?php echo  $row['USER_NAME'];?></td>
												<td><?php echo  $row['ROLE'];?></td>
												<td><?php echo  $row['ACTIVE_FLAG'];?></td>
												<td><?php echo  $row['DELETE_FLAG'];?></td>											
											</tr>
										<?php  }?>											
									</tbody>
								</table>
							</div>			
						</div>
					</div>
				</div>            
				<!-- GridView -->
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
								 <div class="btn-group btn-group-justified">                     
							   <a href="add.php" class="newenable btn btn-default" onClick="newPage()" id="newenable">
									 <img src="../../resources/images/e-add.png"/><br>New</a>                       													 
													   
								<a href="../configMst.php" class="btn btn-default">
									<img src="../../resources/images/e-close.png"/><br>Cancel</a></div>
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