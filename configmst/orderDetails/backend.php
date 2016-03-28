<?php
        $dataObject = $_POST['data'];
        $json = json_decode($dataObject,true);
        $i = 1;
		
			//echo "<div class='widget-content'>";
			echo "<div class='tab-content'>";
			echo "<div class='tab-pane active' id='demo'>";
			echo "<table class='table demo table-bordered' data-filter='#filter' data-page-size='5'data-page-previous-text='prev' data-page-next-text='next'>";
			echo "<thead><tr>";
			echo "<th>Action</th>";                                   										
			echo "<th data-toggle='true'>Sl #</th>";
			echo "<th>Product</th>";
			echo "<th data-hide='phone,tablet'>Product Description</th>"; 
			echo "<th data-hide='phone'>UOM</th>";
			echo "<th data-hide='phone'>Unit Price</th>";
			echo "<th data-hide='phone'>Qty</th>";
			echo "<th data-hide='phone'>Delivery Date</th>";
			echo "<th data-hide='phone'>Total Price</th>";			
			echo "</tr>";			
			echo "</thead>";
			echo "<tbody id='gridvaluediv' class='mytable1'>";
			echo "<tr Style='cursor:pointer;' id='view'>";
			echo "<td class='actions'>";
			echo "<a class='btn btn-small'><i class='icon-pencil'></i></a>";
			echo "<a class='btn btn-small' onclick='return confirm('Do you want to delete this Master Data?')'><i class='icon-remove'></i></a>";
			echo "</td>";
			
			
			foreach($json as $key => $value) {
				  print " <td> " . $value . "</td>";
				  $i++;
			}
			echo "</tr>";
			echo "</tbody>";
			echo "</table>";
			echo "</div>";
			echo "</div>";
			//echo "</div>";
			
			
?>