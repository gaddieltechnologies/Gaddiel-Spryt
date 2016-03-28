
<!-- This screen to list the menu items that are setup by the users -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <title>Spyrt Application</title>
    
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
	include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');
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
SOP-->SOP										</h3>
						</div>


						<div class="span3">                                                                
							<div class="box-holder">
                                 <a href="
add_menu_3_submenu_4.php								 " onClick="newPage()">
                                 <div class="box"><img src="../../resources/images/e-add.png"/></br>New</div></a>	
                            </div>                      						
							
							 <div class="box-holder">
							   <a href="
../submenu/menu_3								">
							   <div class="box"><img src="../../resources/images/e-close.png"/></br>Close</div></a>							
                             </div>                          
						</div>

					</div>
				</div>								
			 </div>					
				<div class="span12">
					<div class="widget-content">
						<div class="tab-content">
							<div class="tab-pane active" id="demo">
               
<table class="table demo table-bordered " data-filter="#filter" data-page-size="5" data-page-previous-text="prev" data-page-next-text="next"><thead><tr class="widget-header"><th> </th><th>ID</th><th>Created Date</th><th>Update Date</th><th>Sl#</th><th>SOP Code</th><th>Description</th></tr></thead><tbody id="gridvaluediv" class="mytable1">
                                 <?php
								  	$pdo = Database::connect();
									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									$result = $pdo->prepare("SELECT id,CreatedDate_95,UpdateDate_92,Sl_53,SOPCode_10,Description_65 FROM dyn_tbl_menu_3_submenu_4");
		                            $result->execute();
		                            Database::disconnect();
		                            for($i=0; $row = $result->fetch(); $i++){
			 				      ?>
			 				      <tr Style="cursor:pointer;">
			 				      <td class="actions">
			 				      <a href="edit_menu_3_submenu_4.php?id=<?php echo $row['id']; ?>" class="btn btn-small  "><i class="icon-pencil"></i></a>
			 				      <a href="delete_menu_3_submenu_4.php?id=<?php echo $row['id']; ?>" class="btn btn-small " onclick="return confirm('Are you sure?')"><i class="icon-remove"></i></a>

			 				      </td>
<td><?php  echo $row['id'];?></td>
<td><?php  echo $row['CreatedDate_95'];?></td>
<td><?php  echo $row['UpdateDate_92'];?></td>
<td><?php  echo $row['Sl_53'];?></td>
<td><?php  echo $row['SOPCode_10'];?></td>
<td><?php  echo $row['Description_65'];?></td>
			 				      							</tr>
			 				                             <?php }?>
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
						<a href="../dashboard.php" class="btn btn-default">
                        	<img src="../../resources/images/e-close.png"/><br>Cancel</a>
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
</html>
									
			   