<?php
include($_SERVER['DOCUMENT_ROOT'].'/addSession.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>Spryt</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
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

<!-- Navbar -->

	  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>
	  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php'); ?>
	  
	<!-- /Navbar -->
	<form action="add.php" method="POST" onSubmit="return Validate();">
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
									<h3>User</h3>	
								</div>                       
								<div class="span3">                                                                
									<div class="box-holder">
										
									</div>  
									<div class="box-holder">
											
											 
									</div>  
									<div class="box-holder">
										<a href="user.php">
										<div class="box"><img src="../../resources/images/e-close.png"/></br>Close</div></a>							
									</div>   
																													  
							    </div>                       
						</div>                                    
						</div>	              
					</div>
					
                </div>
				
				<div class="row"> 
					<div class="span12">							
						<div class="widget"> 
							<div class="widget-header">							
								<h3>Order</h3>												
							</div>
							<div class="widget-content">
								<div class="row">
									<div class="span4">
										<label>Order #</label>
										<input type="text" autofocus name="" maxlength="60" id="" onBlur="" class="span4">					
									</div>
									<div class="span4">
										<label>Order Date<font color="#FF0000"> *</font></label>
										<input type="text" name="" maxlength="60" id="" onBlur="" class="span4">						
									</div>	
									<div class="span3">
										<label>Order Amount<font color="#FF0000"> *</font></label>
										<input type="text" name="" maxlength="60" id="" onBlur="" class="span3">						
									</div>									
									<div class="span4">
										<label>Customer Name<font color="#FF0000"> *</font></label>
										<select class="span4"  name="" id="" onBlur="">
											<option value="">adbc</option>
											<option value="" selected>abcd</option>
										</select>										
									</div>	
									<div class="span4">
										<label>Bill To<font color="#FF0000"> *</font></label>
										<select class="span4"  name="" id="" onBlur="">
											<option value="">adbc</option>
											<option value="" selected>abcd</option>
										</select>										
									</div>									
									<div class="span3">
										<label>Ship To<font color="#FF0000"> *</font></label>
										<select class="span3"  name="" id="" onBlur="">
											<option value="">adbc</option>
											<option value="" selected>abcd</option>
										</select>	
									</div>
										<div class="span4">
										<label>Delivery Date<font color="#FF0000"> *</font></label>
										<input type="text" autofocus name="" maxlength="60" id="" onBlur="" class="span4">				
									</div>	
									<div class="span4">
										<label>Terms<font color="#FF0000"> *</font></label>
										<select class="span4"  name="" id="" onBlur="">
											<option value="">adbc</option>
											<option value="" selected>abcd</option>
										</select>										
									</div>									
									<div class="span3">
										<label>PoRef #<font color="#FF0000"> *</font></label>
										<input type="text" autofocus name="" maxlength="60" id="" onBlur="" class="span3">		
									</div>	
											
								</div>					
							</div>  
						</div>		
					</div>
						<div class="span12">
						<div class="widget-header">							
								<h3>Products</h3>	
								<span class="icon-right"><input type="submit" name="save" value="Save" class="btn pull-right"/></span>		
							</div>
					<div class="widget-content">
						<div class="tab-content">
							<div class="tab-pane active" id="demo">						  
								<table class="table demo table-bordered " data-filter="#filter" data-page-size="5"
								   data-page-previous-text="prev" data-page-next-text="next">	
									<!--<table class="table table-striped table-bordered">--> 								   
									<thead>
									   <tr>
											<th>Action</th>                                   										
											<th data-toggle="true">Sl #</th>
											<th>Product</th>
											<th data-hide="phone,tablet">Product Description</th>
											<th data-hide="phone">UOM</th>
											<th data-hide="phone">Unit Price</th>
											<th data-hide="phone">Qty</th>
											<th data-hide="phone">Delivery Date</th>
											<th data-hide="phone">Total Price</th>
											
										</tr>
									</thead>								
									<tbody id="gridvaluediv" class="mytable1">	
										<tr Style="cursor:pointer;" id="view">	
												<td class="actions">
													<a href="edit.php?id=<?php echo $row['ID']; ?>" class="btn btn-small ">
														Add
													</a>												
												</td>											
											<td><input type="text" name="" maxlength="60" id="" onBlur="" class="span1" ></td>
											<td><input type="text" name="" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" maxlength="60" id="" onBlur="" class="span2"></td>			
										</tr>
										<tr Style="cursor:pointer;" id="view">	
												<td class="actions">
													<a href="edit.php?id=<?php echo $row['ID']; ?>" class="btn btn-small ">
														Update
													</a>
<a href="edit.php?id=<?php echo $row['ID']; ?>" class="btn btn-small ">
														Del
													</a>													
												</td>											
											<td><input type="text" Disabled name="" Value="3" maxlength="60" id="" onBlur="" class="span1" ></td>
											<td><input type="text" name="" Value="Pencil" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" Value="Nut Pencil" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" Value="Each" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" Value="5.00" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" Value="10" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" Value="10-05-15" maxlength="60" id="" onBlur="" class="span2"></td>
											<td><input type="text" name="" Value="50.00" maxlength="60" id="" onBlur="" class="span2"></td>			
										</tr>
										<tr Style="cursor:pointer;" id="view">
												<td class="actions">
													<a href="edit.php?id=<?php echo $row['ID']; ?>" class="btn btn-small ">
														Edit
													</a>
													<a href="edit.php?id=<?php echo $row['ID']; ?>" class="btn btn-small ">
														Del
													</a>													
												</td>											
											<td>2</td>
											<td>Pen</td>
											<td>Hero Pen</td>
											<td>Each</td>
											<td>30.00</td>
											<td>2</td>
											<td>10-05-15</td>
											<td>60.00</td>			
										</tr>
										<tr Style="cursor:pointer;" id="view" >	
												<td class="actions">
													<a href="edit.php?id=<?php echo $row['ID']; ?>" class="btn btn-small ">
														Un Del
													</a>													
												</td>										
											<td>1</td>
											<td>Bottle</td>
											<td>Bottle</td>
											<td>Each</td>
											<td>10.00</td>
											<td>2</td>
											<td>10-05-15</td>
											<td>20.00</td>			
										</tr>
										<tr Style="cursor:pointer;" id="view">	
												<td class="actions">
													<a href="edit.php?id=<?php echo $row['ID']; ?>" class="btn btn-small ">
														Edit
													</a>
													<a href="edit.php?id=<?php echo $row['ID']; ?>" class="btn btn-small ">
														Del
													</a>													
												</td>										
											<td>1</td>
											<td>Bottle</td>
											<td>Bottle</td>
											<td>Each</td>
											<td>10.00</td>
											<td>2</td>
											<td>10-05-15</td>
											<td>20.00</td>			
										</tr>										
									</tbody>
								</table>
							</div>			
						</div>
					</div>
				</div> 
				</div>
					
				<?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>
				
					<div class="dock-wrapper">    
							 <div class="navbar navbar-fixed-bottom">
								<div class="navbar-inner">
									<div class="container">                  
											<center>
												<div class="btn-group btn-group-justified">                      
													
													
													<a href="user.php" class="btn btn-default">
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
</html>






