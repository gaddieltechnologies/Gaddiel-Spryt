<!-- saved from url=(0057)http://wbpreview.com/previews/WB01BG165/user-account.html -->

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <title>SpryT</title>
    
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
	<script src="../../resources/js/footable.js?v=2-0-1"></script>
	
    <!-- Google font -->
    <script>
        if (!window.jQuery) { document.write('<script src="../../resources/js/jquery-1.9.1.min.js"><\/script>'); }
    </script>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
	<script type="text/javascript">
function clearform()
{
    document.getElementById('view').value="";
}

</script>

</head>

<body>

	<!-- Navbar -->
<style>
.oddtr
{
background-color:#FFFFFF;
}
.eventr
{
	background-color:#F5F5F5;
}
.trover
{
background-color: #81F781;
}
.trclick
{
	background-color: #7EC2EB;
}
	
</style>

	<!-- /Navbar -->
	
	<!-- Main content -->
	  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	<form action="" method="POST" name="forms">
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
						<div class="span8"><h3>Master Data</h3></div>                       
						<div class="span3">                                                                
							<div class="box-holder">
                                 <a href="addMasterData.php" onClick="newPage()">
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
				<!-- /Content -->
					<div class="span12">
					    <div class="widget">					
						<div class="widget-content">
							<div class="mobile"><h3>Master Data</h3></div> 						              
							<div class="span3">
								<input type="text" autofocus class="span3" placeholder="Search by Group Name"  id="txtGroupNameSearchId" name="txtGroupNameSearchName"/>
							</div>                          
							<div class="span3">
								<input type="text"  class="span3" placeholder="Search by Key Name"  id="txtKeyNameSearchId" name="txtKeyNameSearchName"/>
							</div>                          
							<div class="span3">
								<input type="text"  class="span3" placeholder="Search by Value Name"  id="txtValueNameSearchId" name="txtValueNameSearchName"/>
							</div>                          
							<div class="span2"> 
							<input type="submit" class="btn btn-success " onClick="searchvalue()" value="Search"> <a href="#" class="btn btn-success " onClick="clearvalue()">Clear</a></div>   
							
						   <!--<div class="span2"><a href="#" class="btn btn-info " onClick="searchvalue()">Search</a> <a href="#" class="btn btn-info " onClick="clearvalue()">Clear</a></div> -->                 
						</div>
					   </div>  
			  </div>  
				 <!------>
                <!-- /Content -->
				<div class="span12">
					<div class="widget-content">
						<div class="tab-content">
							<div class="tab-pane active" id="demo">
                              
							<table class="table demo table-bordered " data-filter="#filter" data-page-size="5"
							       data-page-previous-text="prev" data-page-next-text="next">
							<!--<table class="table table-striped table-bordered">-->                            
								<thead>
									   <tr class="widget-header">
										<!--<th></th> -->                                       										
										<th data-toggle="true">Group Name</th>
										<th data-hide="phone,tablet">Key Name</th>
										<th data-hide="phone,tablet">Value Id</th>
										<th data-hide="phone,tablet">Value Name</th>
									</tr>
								</thead>								
								<tbody id="gridvaluediv" class="mytable1">	
								 <?php 
								  include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');
									$pdo = Database::connect();
									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									$result = $pdo->prepare("SELECT ID,GROUP_NAME,KEY_NAME,VALUE_ID,VALUE_NAME FROM key_value ORDER BY ID DESC");
		                            $result->execute();
		                            Database::disconnect();
									
									
									/*$whereClauses = array();
												if (! empty($_POST['optGroupNameId'])) $whereClauses[] = 'optGroupNameId='.mysql_real_escape_string($_POST['optGroupNameId']);
												if (! empty($_POST['optKeyNameId'])) $whereClauses[] ='optKeyNameId='.mysql_real_escape_string($_POST['optKeyNameId']);
												if (! empty($_POST['optValueNameId'])) $whereClauses[] = 'optValueNameId='.mysql_real_escape_string($_POST['optValueNameId']);

												$where = '';
												if (count($whereClauses) > 0) {
													$where = 'WHERE '.implode(' AND ',$whereClauses);
												}

												$query = "SELECT  ID,GROUP_NAME,KEY_NAME,VALUE_ID,VALUE_NAME FROM key_value WHERE  GROUP_NAME AND KEY_NAME AND VALUE_NAME".$where;	*/
									
								if ( !empty($_POST)) {	
			                        $GROUP_NAME = $_POST['txtGroupNameSearchName'];									
			                        $KEY_NAME = $_POST['txtKeyNameSearchName'];									
			                        $VALUE_NAME = $_POST['txtValueNameSearchName'];									
									$pdo = Database::connect();
									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									$sql="SELECT  ID,GROUP_NAME,KEY_NAME,VALUE_ID,VALUE_NAME FROM key_value WHERE  GROUP_NAME LIKE :txtGroupNameSearchName AND KEY_NAME LIKE :txtKeyNameSearchName AND VALUE_NAME LIKE :txtValueNameSearchName;";
									$result=$pdo->prepare($sql);
																		
									$result->bindValue(':txtGroupNameSearchName',$GROUP_NAME.'%');
									$result->bindValue(':txtKeyNameSearchName',$KEY_NAME.'%');
									$result->bindValue(':txtValueNameSearchName',$VALUE_NAME.'%');
									$result->execute();
									}
		                            for($i=0; $row = $result->fetch(); $i++){																	
									Database::disconnect();
								
			 				      ?>
                              		 <script type="text/javascript">$('#view').hide()</script>		
									<tr Style="cursor:pointer;" id="views">
                                  <!-- <td class="actions">
											 <!--<a href="editMasterData.php?id=<?php echo $row['ID']; ?>" class="btn btn-small "><i class="icon-pencil"></i></a>
											<a href="deleteMasterData.php?id=<?php echo $row['ID']; ?>" class="btn btn-small" onclick="return confirm('Do you want to delete this Master Data?')" ><i class="icon-remove"></i></a>
										</td>-->
									
										<td style="text-transform:uppercase;"><?php echo  $row['GROUP_NAME'];?></td>
										<td style="text-transform:uppercase;"><?php echo  $row['KEY_NAME'];?></td>
										<td style="text-transform:uppercase;"><?php echo  $row['VALUE_ID'];?></td>
										<td style="text-transform:uppercase;"><?php echo  $row['VALUE_NAME'];?></td>										
										<!--<td class="actions">
											<a href="#" class="btn btn-small btn-info"><i class="icon-ok"></i></a>
											<a href="#" class="btn btn-small btn-success"><i class="icon-remove"></i></a>
										</td>-->
									</tr>
									 <?php  }?>	
								</tbody>
							</table>
							</div>			
						</div>
					</div>
				</div>            
                <!------>
			</div><!-- /row boxes -->
			
			<!-- Footer -->
			 <?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>
		
			<!-- /Footer -->
	 <!-- Navbar -->
			<div class="dock-wrapper row">    
				<div class="navbar navbar-fixed-bottom">
					<div class="navbar-inner">
						<div class="container">                         
							   <center>
								 <div class="btn-group btn-group-justified">                     
							   <a href="addMasterData.php" class="newenable btn btn-default" onClick="newPage()" id="newenable">
									 <img src="../../resources/images/e-add.png"/><br>New</a>                       													 
													   
								<a href="../configMst.php" class="btn btn-default">
									<img src="../../resources/images/e-close.png"/><br>Cancel</a></div>
						  </center>                        		
						</div>
					</div>
				</div>
			</div>
	<!-- /Navbar -->
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
 document.getElementById("txtGroupNameSearchId").value="";
 document.getElementById("txtKeyNameSearchId").value="";
 document.getElementById("txtValueNameSearchId").value="";
 }
</script>


</html>