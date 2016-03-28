
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
	<form action="add.php" id="frmCadastre" method="POST">
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
								<h3>Order & Products</h3>
								<span class="icon-right"><input type="submit" name="save" value="Save" class="btn pull-right"/></span>
							</div>
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
								<hr>

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
								<hr>
								
								 <div id="tblList" > </div>
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
													<a href="../configMst.php" class="btn btn-default">
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

<script>
function validateOrderAdd()
{
	var valid=true;
	var order=document.getElementById("OrderId").value;
	var orderdate=document.getElementById("OrderDateId").value;
	var orderamount=document.getElementById("OrderAmountId").value;
	var deliverydate=document.getElementById("DeliveryDateId").value;
	var poref=document.getElementById("txtPoRefId").value;
	
	if(order=="")
	{
		 document.getElementById("errMsgOrderId").innerHTML="Please Enter the Order #";
		 document.getElementById("OrderId").style.borderColor="#FF0000";
		valid= false;
	}
	
	if(orderdate=="")
	{
		 document.getElementById("errMsgOrderDateId").innerHTML="Please Enter the Order Date";
		 document.getElementById("OrderDateId").style.borderColor="#FF0000";
		valid= false;
	}
	if(orderamount=="")
	{
		 document.getElementById("errMsgOrderAmountId").innerHTML="Please Enter the Order Amount";
		 document.getElementById("OrderAmountId").style.borderColor="#FF0000";
		valid= false;
	}
	if(deliverydate=="")
	{
		
		 document.getElementById("errMsgDeliveryDateId").innerHTML="Please Enter the Delivery Date";
		 document.getElementById("DeliveryDateId").style.borderColor="#FF0000";
		 valid= false;
	}
	if(poref=="")
	{
		
		 document.getElementById("errMsgPoRefId").innerHTML="Please Enter the PoRef#";
		 document.getElementById("txtPoRefId").style.borderColor="#FF0000";
		 valid= false;
	}
    
	if(valid!=false){
		return AddOrder();
	}
		return valid;	
}

function validateProdAdd()
{
	var valid=true;
	var txtSl=document.getElementById("txtSlId").value;
	var txtProductDesc=document.getElementById("txtProductDescId").value;
	var txtUOM=document.getElementById("txtUOMId").value;
	var txtUnitPrice=document.getElementById("txtUnitPriceId").value;
	var txtQty=document.getElementById("txtQtyId").value;
	var txtDeliveryDate=document.getElementById("txtDeliveryDateId").value;
	var txtTotalPrice=document.getElementById("txtTotalPriceId").value;
	
	if(txtSl=="")
	{
		 document.getElementById("errMsgtxtSlId").innerHTML="Please Enter the Sl #";
		 document.getElementById("txtSlId").style.borderColor="#FF0000";
		 valid= false;
	}
	
	if(txtProductDesc=="")
	{
		 document.getElementById("errMsgtxtProductDescId").innerHTML="Please Enter the Product Description";
		 document.getElementById("txtProductDescId").style.borderColor="#FF0000";
		 valid= false;
	}
	if(txtUOM=="")
	{
		 document.getElementById("errMsgtxtUOMId").innerHTML="Please Enter the UOM";
		 document.getElementById("txtUOMId").style.borderColor="#FF0000";
		 valid= false;
	}
	if(txtUnitPrice=="")
	{
		
		 document.getElementById("errMsgtxtUnitPriceId").innerHTML="Please Enter the Unit Price";
		 document.getElementById("txtUnitPriceId").style.borderColor="#FF0000";
		 valid= false;
	}
	if(txtQty=="")
	{
		
		 document.getElementById("errMsgtxtQtyId").innerHTML="Please Enter the Qty";
		 document.getElementById("txtQtyId").style.borderColor="#FF0000";
		 valid= false;
	}
	if(txtDeliveryDate=="")
	{
		
		 document.getElementById("errMsgtxtDeliveryDateId").innerHTML="Please Enter the Delivery Date";
		 document.getElementById("txtDeliveryDateId").style.borderColor="#FF0000";
		 valid= false;
	}
	if(txtTotalPrice=="")
	{
		
		 document.getElementById("errMsgtxtTotalPriceId").innerHTML="Please Enter the Total Price";
		 document.getElementById("txtTotalPriceId").style.borderColor="#FF0000";
		 valid= false;
	}

		return valid;	
		
	
}
</script>
<STYLE>
tr.highlighted {
    -moz-box-shadow: 0px 0px 20px #333333;
    -webkit-box-shadow: 0px 0px 20px #333333;
    -o-box-shadow: 0px 0px 20px #333333;
    box-shadow: 0px 0px 20px #333333;
}
.highlighted {
    color: #261F1D;
    background-color: #E5C37E;
}
</STYLE>
<script>

    var operation = "A"; 
	var selected_index = -1; //Index of the selected list item
	var tbClients = localStorage.getItem("tbClients");//Retrieve the stored data 
	tbClients = JSON.parse(tbClients); //Converts string to object
	if(tbClients == null) //If there is no data, initialize an empty array 
	tbClients = [];
	List(); 
	
   
  function Add(){  
	  
  var client = JSON.stringify({   
  ID : $("#txtSlId").val(),
  Product : $("#txtProductId").val(),
  DescId : $("#txtProductDescId").val(),
  Uom : $("#txtUOMId").val(), 
  UnitPriceId : $("#txtUnitPriceId").val(),
  QtyId : $("#txtQtyId").val(),
  deliveryDateId : $("#txtDeliveryDateId").val(),
  Tot : $("#txtTotalPriceId").val(),
  Flag : "A"
  });
  tbClients.push(client); 
  localStorage.setItem("tbClients", JSON.stringify(tbClients));
  alert("The data was saved.");
  window.location.reload();// For Reload the Page After Save;
  return true; 
  } 
  
function Edit(){
 tbClients[selected_index] = JSON.stringify({ 
 ID : $("#txtSlId").val(), 
 Product : $("#txtProductId").val(), 
 DescId : $("#txtProductDescId").val(),
 Uom : $("#txtUOMId").val(), 
 UnitPriceId : $("#txtUnitPriceId").val(),
 QtyId : $("#txtQtyId").val(),
 deliveryDateId : $("#txtDeliveryDateId").val(),
 Tot : $("#txtTotalPriceId").val(),
  Flag : "E"
 });//Alter the selected item on the table
 localStorage.setItem("tbClients", JSON.stringify(tbClients));
 alert("The data was edited.") 
 window.location.reload();// For Reload the Page After Save;
 operation = "A"; //Return to default value return true;
 } 
 
 function Delete(){ 
//tbClients.splice(selected_index, 1);
var cli = JSON.parse(tbClients[selected_index]);
tbClients[selected_index] = JSON.stringify({ 
 ID : cli.ID,
 Product : cli.Product, 
 DescId : cli.DescId,
 Uom : cli.Uom, 
 UnitPriceId : cli.UnitPriceId,
 QtyId : cli.QtyId,
 deliveryDateId : cli.deliveryDateId,
 Tot : cli.Tot,
 Flag : "D"
 });
 localStorage.setItem("tbClients", JSON.stringify(tbClients)); 
 alert("Client deleted."); 
 } 

function List(){
	$("#tblList").html("");	
	$("#tblList").html( 
			"<div class='tab-content'><div class='tab-pane active' id='demo'><table class='table demo table-bordered' data-filter='#filter' data-page-size='5'data-page-previous-text='prev' data-page-next-text='next'><thead><tr>	<th>Action</th><th data-toggle='true'>Sl </th><th>Product</th><th data-hide='phone,tablet'>Product Description</th><th data-hide='phone'>UOM</th><th data-hide='phone'>Unit Price</th><th data-hide='phone'>Qty</th><th data-hide='phone'>Delivery Date</th><th data-hide='phone'>Total Price</th></tr></thead><tbody id='gridvaluediv' class='mytable1'></tbody></table></div></div>"	
	);
	for(var i in tbClients){
	var cli = JSON.parse(tbClients[i]); 
	$("#tblList tbody").append("<tr Style='cursor:pointer;' id='view'>"+ 
	"<td><a href='#' alt='Edit"+i+"' class='btnEdit btn btn-small'><i class='icon-pencil'></i></a><a href='#' alt='Delete"+i+"' class='btnDelete btn btn-small'><i class='icon-remove'></i></a></td>" + 
	"	<td>"+cli.ID+"</td>" +
	"	<td>"+cli.Product+"</td>" + 
	"	<td>"+cli.DescId+"</td>" + 
	"	<td>"+cli.Uom+"</td>" +
	"	<td>"+cli.UnitPriceId+"</td>" + 
	"	<td>"+cli.QtyId+"</td>" + 
	"	<td>"+cli.deliveryDateId+"</td>" +
	" <td>"+cli.Tot+"</td>" + "</tr>"); 
	} } 
	
	
$("#btnProdSave").bind("click",function(){
 if(operation == "A")
 return Add();
 else 
 return Edit();
 }); 
 
$(".btnEdit").bind("click", function(){
 operation = "E"; 
 selected_index = parseInt($(this).attr("alt").replace("Edit", ""));
 var cli = JSON.parse(tbClients[selected_index]);
 $("#txtSlId").val(cli.ID); 
 $("#txtProductId").val(cli.Product); 
 var selectprod = cli.Product;
 var answer=document.getElementById("txtProductId");
 answer[answer.selectedIndex].value==selectprod
 $("#txtProductDescId").val(cli.DescId); 
 $("#txtUOMId").val(cli.Uom);
 $("#txtUnitPriceId").val(cli.UnitPriceId); 
 $("#txtQtyId").val(cli.QtyId); 
 $("#txtDeliveryDateId").val(cli.deliveryDateId);
 $("#txtTotalPriceId").val(cli.Tot); 
 }); 
 
$(".btnDelete").bind("click", function(){
 selected_index = parseInt($(this).attr("alt").replace("Delete", "")); 
 Delete(); 
 List(); 
 }); 

</script>
<script>
//Order  
	var selected_index = -1; //Index of the selected list item
	var tbOrder = localStorage.getItem("tbOrder");//Retrieve the stored data 
	tbOrder = JSON.parse(tbOrder); //Converts string to object
	if(tbOrder == null) //If there is no data, initialize an empty array 
	tbOrder = [];
	
		
	 for(var j in tbOrder){
	 var ord = JSON.parse(tbOrder[j]);
	 
	 $("#OrderId").val(ord.OrderID); 
	// alert(ord.OrderID);
	 $("#OrderDateId").val(ord.OrderDate);
    // alert(ord.OrderDate); 	 
	 $("#OrderAmountId").val(ord.OrderAmount); 
	 $("#selCustomerNameID").val(ord.CustomerName);
		 var selectcustname = ord.CustomerName;
		 var answer=document.getElementById("selCustomerNameID");
		 answer[answer.selectedIndex].value==selectcustname
	 $("#selBillToId").val(ord.BillTo); 
		 var selectbillto = ord.BillTo;
		 var answerbill=document.getElementById("selBillToId");
		 answerbill[answerbill.selectedIndex].value==selectbillto
	 $("#selShipToId").val(ord.ShipTo); 
		 var selectshipto = ord.ShipTo;
		 var answership=document.getElementById("selShipToId");
		 answership[answership.selectedIndex].value==selectshipto
	 $("#DeliveryDateId").val(ord.deliveryDate);
	 $("#txtTermsId").val(ord.Terms);
		 var selectterms = ord.Terms;
		 var answerterms=document.getElementById("txtTermsId");
		 answerterms[answerterms.selectedIndex].value==selectterms
	 $("#txtPoRefId").val(ord.PoRef); 
	 }
	  

  function AddOrder(){  	  
  var oderId=$("#OrderId").val();
  var order = JSON.stringify({   
  OrderID : $("#OrderId").val(),
  OrderDate : $("#OrderDateId").val(),
  OrderAmount : $("#OrderAmountId").val(),
  CustomerName : $("#selCustomerNameID").val(), 
  BillTo : $("#selBillToId").val(),
  ShipTo : $("#selShipToId").val(),
  deliveryDate : $("#DeliveryDateId").val(),
  Terms : $("#txtTermsId").val(),
  PoRef : $("#txtPoRefId").val(),
  Flag : "A"
  });
  tbOrder.push(order); 
  localStorage.setItem("tbOrder", JSON.stringify(tbOrder));
  window.location.reload();// For Reload the Page After Save;
  alert("The data was saved.");
  
  return true; 
  } 

	
</script>

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
  //.click(function(){$(this).siblings().removeClass('trclick');});
 
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






