
<!-- This screen to list the menu items that are setup by the users -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <title>Spyrt</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
    <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="../resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/footable.core.css?v=2-0-1">
    <link rel="stylesheet" type="text/css" href="../resources/css/footable-demos.css">
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script src="../resources/js/footable.js?v=2-0-1"></script>
	
    <!-- Google font -->
    <script>
        if (!window.jQuery) { document.write('<script src="../resources/js/jquery-1.9.1.min.js"><\/script>'); }
    </script>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>

<body>

<?php include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php'); ?>
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

<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); 
	$SUBMENU_ID   = $_GET['id'];
	$MENU_NAME    = $_GET['menu_name'];
	$SUBMENU_NAME = $_GET['submenu_name'];
	$TABLE_NAME   = $_GET['table_name'];
	$MENU_ID      = $_GET['menu_id'];
?>
	<!-- /Navbar -->
	<form action="" method="POST" name="forms">
	<!-- Main content -->
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
						<div class="span8"><h3>
						<?php echo "Screen Set up '" . $MENU_NAME . "'->'". $SUBMENU_NAME . "'";
						?>
							</h3></div>                       
						<div class="span3">                                                                
					
							<div class="box-holder">
							
								<!-- 
										<a href="addScreenMetadata.php" onClick="newPage()">
								-->
								 <?php echo '<a href="addScreenMetadata.php?submenu_id=' . $SUBMENU_ID . '&table_name='. $TABLE_NAME . '&menu_name='. $MENU_NAME  . '&submenu_name='. $SUBMENU_NAME . '&menu_id='. $MENU_ID . '" onClick="newPage()">'; ?>
                                 <div class="box"><img src="../resources/images/e-add.png"/></br>New</div></a>	
                            </div>                      						
				
							 <div class="box-holder">
							   <a href="../dashboard.php">
							   <div class="box"><img src="../resources/images/e-close.png"/></br>Close</div></a>							
                             </div>                          
						</div>
					</div>
				</div>								
			 </div>
				<!-- /Content -->
					<div class="span12">
					    <div class="widget">					
						<div class="widget-content">
							<div class="mobile"><h3>
							Testing
							</h3></div> 													
							<div class="span3"><input type="text" autofocus class="span3" placeholder="Search by Menu" id="searchMenu" name="searchMenu"/></div>
			                <div class="span2"><input type="submit" class="btn btn-success " onClick="searchvalue()" value="Search"> <a href="#" class="btn btn-success " onClick="clearvalue()">Clear</a></div>  									              
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
										<th data-toggle="true"></th>                                        
                                        <th data-hide="phone,tablet">Display Name</th>
										<th data-hide="phone,tablet">Database Name</th>
										<th data-hide="phone,tablet">Data Type</th>
										<th data-hide="phone,tablet">Description</th>
										<th data-hide="phone,tablet">Validation</th>
										<th data-hide="phone,tablet">Required?</th>
										<th data-hide="phone,tablet">Active?</th>
										<th data-hide="phone,tablet">Display Order</th>
									</tr>		
								</thead>
                                							
								<tbody id="gridvaluediv" class="mytable1">	
                                    <?php 
								    $pdo = Database::connect();
									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									$result = $pdo->prepare("SELECT DISPLAY_NAME, DB_COL_NAME, DATA_TYPE, COL_NAME_DESC, COL_VALIDATION, REQUIRED_FLAG, ACTIVE_FLAG, DISPLAY_ORDER 
															 FROM screen
															 WHERE submenu_id = $SUBMENU_ID
															 ORDER BY DISPLAY_ORDER ");
		                            $result->execute();														
									Database::disconnect();										
									
		                            for($i=0; $row = $result->fetch(); $i++){																	
									Database::disconnect();
																	 
			 				      ?>				
									<tr Style="cursor:pointer;">
                                       <td class="actions">
											<a href="#<?php echo$row['ID']; ?>" class="btn btn-small "><i class="icon-pencil"></i></a>
											
										</td>
										<td><?php  echo $row['DISPLAY_NAME'];?></td>
										<td><?php  echo $row['DB_COL_NAME'];?></td>
										<td><?php  echo $row['DATA_TYPE'];?></td>
										<td><?php  echo $row['COL_NAME_DESC'];?></td>
										<td><?php  echo $row['COL_VALIDATION'];?></td>
										<td><?php  echo $row['REQUIRED_FLAG'];?></td>
										<td><?php  echo $row['ACTIVE_FLAG'];?></td>
										<td><?php  echo $row['DISPLAY_ORDER'];?></td>										                      
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
		
			<?php include($_SERVER['DOCUMENT_ROOT'].'/include//footer.php'); ?>
			<!-- /Footer -->
	 <!-- Navbar -->
    <div class="dock-wrapper row">    
        <div class="navbar navbar-fixed-bottom">
            <div class="navbar-inner">
                <div class="container">                         
                       <center>
                         <div class="btn-group btn-group-justified">                     						                       
						<a href="../dashboard.php" class="btn btn-default">
                        	<img src="../resources/images/e-close.png"/><br>Cancel</a>
					     </div>
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
 
 document.getElementById("searchSubmenu").value="";

}
</script>

</html>