
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>SoP</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="../../resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/font-awesome.css">
	
	<link rel="stylesheet" type="text/css" href="../../resources/css/jquery-ui.css">
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/jquery-ui.js"></script>
	
    <!-- Google font -->
    <link href="/css/css.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
</head>
<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
<body>
<style>

</style>
<!-- Navbar -->

	  <?php include($_SERVER['DOCUMENT_ROOT'].'/spryt/header.php'); ?>
	<!-- /Navbar -->
	<form action="" method="POST" onSubmit="return Validate();">
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
						<div id="tabs">
						  <ul>
							<li><a href="#tabs-1">Master</a></li>
							<li><a href="#tabs-2">Detail</a></li>					
						  </ul>
						  <div id="tabs-1">				
							<div class="widget-content">
								<div class="row">
									<div class="span4">
										<label>Order #</label>
										<input type="text" autofocus name="" maxlength="60" id="OrderId" onBlur="" class="span4">	
										<span class="errMsg" style="color:red;" id="errMsgOrderId"></span>										
									</div>
									<div class="span4">
										<label>Order Date<font color="#FF0000"> *</font></label>
										<input type="text" name="" maxlength="60" id="OrderDateId" onBlur="" class="span4">
										<span class="errMsg" style="color:red;" id="errMsgOrderDateId"></span>											
									</div>	
									<div class="span3">
										<label>Order Amount<font color="#FF0000"> *</font></label>
										<input type="text" name="" maxlength="60" id="OrderAmountId" onBlur="" class="span3">
										<span class="errMsg" style="color:red;" id="errMsgOrderAmountId"></span>										
									</div>
								</div>
								<div class="row">	
									<div class="span4">
										<label>Customer Name<font color="#FF0000"> *</font></label>
										<select class="span4"  name="selCustomerName" id="selCustomerNameID" onBlur="">
											<option value="adb">adbc</option>
											<option value="abcd" selected>abcd</option>
										</select>																			
									</div>	
									<div class="span4">
										<label>Bill To<font color="#FF0000"> *</font></label>
										<select class="span4"  name="selBillToName" id="selBillToId" onBlur="">
											<option value="1213">1213</option>
											<option value="12345" selected>12345</option>
										</select>																				
									</div>									
									<div class="span3">
										<label>Ship To<font color="#FF0000"> *</font></label>
										<select class="span3"  name="selShipToName" id="selShipToId" onBlur="">
											<option value="">adbc</option>
											<option value="" selected>abcd</option>
										</select>																	
									</div>
								</div>
								<div class="row">
										<div class="span4">
										<label>Delivery Date<font color="#FF0000"> *</font></label>
										<input type="text" name="txtDeliveryDateName" maxlength="60" id="DeliveryDateId" onBlur="" class="span4">
										<span class="errMsg" style="color:red;" id="errMsgDeliveryDateId"></span>										
									</div>	
									<div class="span4">
										<label>Terms<font color="#FF0000"> *</font></label>
										<select class="span4"  name="txtTermsName" id="txtTermsId">
											<option value="mnbv">mnbv</option>
											<option value="asdfg" selected>asdfg</option>
										</select>									
									</div>									
									<div class="span3">
										<label>PoRef #<font color="#FF0000"> *</font></label>
										<input type="text" name="txtPoRefName" maxlength="60" id="txtPoRefId" onBlur="" class="span3">
										<span class="errMsg" style="color:red;" id="errMsgPoRefId"></span>										
									</div>	
											
								</div>	
								<div class="row">
									<div class="span4">										
										
									</div>
									<div class="span4">										
										
									</div>
									<div class="span3">										
										<input class="btn btn-small" id="btnOrderId" type="Button" value="Submit" onclick="return validateOrderAdd();" />
									</div>
								</div>
							</div>  
						  </div>
						  <div id="tabs-2">
							<div class="widget-content">
								<div class="row">
									<div class="span4">
										<label>Sl #</label>
										<input type="text" name="txtSlName" maxlength="60" id="txtSlId" class="span4">
										<span class="errMsg" style="color:red;" id="errMsgtxtSlId"></span>
									</div>
									<div class="span4">
										<label>Product<font color="#FF0000"> *</font></label>
										<select class="span4" name="txtProductName" id="txtProductId">
											<option value="Pen">Pen</option>
											<option value="Pencil">Pencil</option>
											<option value="Paper">Paper</option>											
										</select>	
									</div>	
									<div class="span3">
										<label>Product Description<font color="#FF0000"> *</font></label>
										<input type="text" name="txtProductDescName" maxlength="60" id="txtProductDescId" class="span3">
										<span class="errMsg" style="color:red;" id="errMsgtxtProductDescId"></span>
									</div>
								</div>
								
								<div class="row">									
									<div class="span4">
										<label>UOM<font color="#FF0000"> *</font></label>
										<input type="text" name="txtUOMName" maxlength="60" id="txtUOMId" class="span4">
										<span class="errMsg" style="color:red;" id="errMsgtxtUOMId"></span>
									</div>	
									<div class="span4">
										<label>Unit Price<font color="#FF0000"> *</font></label>
										<input type="text" name="txtUnitPriceName" maxlength="60" id="txtUnitPriceId" class="span4">
										<span class="errMsg" style="color:red;" id="errMsgtxtUnitPriceId"></span>
									</div>									
									<div class="span3">
										<label>Qty<font color="#FF0000"> *</font></label>
										<input type="text" name="txtQtyName" maxlength="60" id="txtQtyId" class="span3">
										<span class="errMsg" style="color:red;" id="errMsgtxtQtyId"></span>										
									</div>
								</div>
								<div class="row">
									<div class="span4">
										<label>Delivery Date<font color="#FF0000"> *</font></label>
										<input type="text" name="txtDeliveryDateName" maxlength="60" id="txtDeliveryDateId" class="span4">
										<span class="errMsg" style="color:red;" id="errMsgtxtDeliveryDateId"></span>
									</div>	
									<div class="span4">
										<label>Total Price<font color="#FF0000"> *</font></label>
									 <input type="text" name="txtTotalPriceName" maxlength="60" id="txtTotalPriceId" class="span4">
									 <span class="errMsg" style="color:red;" id="errMsgtxtTotalPriceId"></span>
									</div>	
																	
								</div>
								<div class="row">
									<div class="span4">										
										
									</div>	
									<div class="span4">										
										
									</div>									
									<div class="span3">										
										<input class="btn btn-small" type="button" value="Clear" onClick="window.location.reload()">
										<input class="btn btn-small" type="Button" id="btnProdSave" value="Submit" onclick="return validateProdAdd();" />
									</div>
								</div>
							</div>  
						  </div>				 
						</div>
						
					</div>
					
				</div>
				<div id="tblList" > </div>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/spryt/footer.php'); ?>
				
					<div class="dock-wrapper">    
							 <div class="navbar navbar-fixed-bottom">
								<div class="navbar-inner">
									<div class="container">                  
											<center>
												<div class="btn-group btn-group-justified">                      
													
													
													<a href="clientCategory.php" class="btn btn-default">
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

			