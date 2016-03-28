<?php
ob_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>Spyrt</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files -->
   <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap-responsive.min.css" >
    <link rel="stylesheet" type="text/css" href="../resources/css/alveolae.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/font-awesome.css">
	 <link rel="stylesheet" type="text/css" href="../resources/css/pikaday.css">	 
	<link rel="stylesheet" type="text/css" href="../resources/css/style.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/jquery_ui_datepicker.css">
	
	<script src="../resources/js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="../resources/js/jquery_ui_datepicker.js" type="text/javascript"></script>
	
	<script src="../resources/js/ui.datepicker-de.js" type="text/javascript"></script>
	<script src="../resources/js/timepicker.js" type="text/javascript"></script>
    <!-- Google font -->
    <link href="/css/css.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

function Validate(){
	var valid = true;
	var message = '';
	var regexp_numbers = /^[0-9]+$/;  
    
	var displayName = document.getElementById("DISPLAY_NAME");
	var displayOrder = document.getElementById("DISPLAY_ORDER");
	var dataType = document.getElementById("DATA_TYPE");
	var colLength = document.getElementById("COL_LENGTH");
	
	
	if( displayName.value.trim() == ''){
		valid = false;
		message = message + '*Display Name is required' + '\n';
	}
	if(displayOrder.value.trim() == ''){
		valid = false;
		message = message + '*Display Order is required' + '\n';
	}
	
	if(!displayOrder.value.match(regexp_numbers))  
    {  
		valid = false;
		message = message + '*Enter a valid number for Display Order' + '\n';
	}
	
	if (valid == false){
		alert(message);
		return false;
	}
	
if(	!(dataType.value.trim() == 'MONEY' || 
	dataType.value.trim() == 'DECIMAL' || 
	dataType.value.trim() == 'DATE') )  
	{
		if(!colLength.value.match(regexp_numbers))  
		{  
			valid = false;
			message = message + '*Enter a valid number for Field Length ' + '\n';
		}
		
		if(colLength.value < 1)  
		{  
			valid = false;
			message = message + '*Enter a number 1 or above ' + '\n';
		}
		
		
		if (valid == false){
			alert(message);
			return false;
		}
	}
}

</script>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
	



<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>   
<script type="text/javascript">   
$(document).ready(function() {   
$('#DATA_ENTRY_TYPE').change(function(){   
if($('#DATA_ENTRY_TYPE').val() === 'DROPDOWN')   
   {   
   $('#dropdownLOVLabel').show(); 
   $('#DROPDOWN_LOV').show();
   }   
else 
   {   
   $('#dropdownLOVLabel').hide(); 
      $('#DROPDOWN_LOV').hide();
   }   
});   


$('#DATA_TYPE').change(function(){   
if($('#DATA_TYPE').val() === 'MONEY' || 
   $('#DATA_TYPE').val() === 'DECIMAL' || 
   $('#DATA_TYPE').val() === 'DATE')   
   {   
		$('#COL_LENGTH').hide();
		$('#FieldLengthLabel').hide();
   }   
else 
   {   
		$('#COL_LENGTH').show();
		$('FieldLengthLabel').hide();
   }   
});


});   
</script> 


	
	
	
	
</head>

<body onload="addDate();">
<style>

</style>
<!-- Navbar -->
    
	<?php 
		include($_SERVER['DOCUMENT_ROOT'].'/include/header.php');
		include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php'); 
	?>
	<!-- /Navbar -->
	

	
	<form name="myForm" action="addScreenMetadata.php" method="POST"  onSubmit="return Validate();">





<?php

             if ( !empty($_POST))
			{		
			
			//	echo "Inside Post" ;

				$min_ran_val = 10;
				$max_ran_val = 99; 
				$SUBMENU_ID = $_POST['SUBMENU_ID'];
				$TABLE_NAME = $_POST['TABLE_NAME'];
				$SUBMENU_NAME = $_POST['SUBMENU_NAME'];
				$MENU_NAME = $_POST['MENU_NAME'];
				$MENU_ID   = $_POST['MENU_ID'];
				$DISPLAY_NAME = $_POST['DISPLAY_NAME'];
				$DB_COL_NAME = substr(preg_replace("/[^A-Za-z0-9]/", "", $DISPLAY_NAME),0,60) . '_' . rand($min_ran_val , $max_ran_val );
				$DATA_TYPE = $_POST['DATA_TYPE'];
				$COL_NAME_DESC = $_POST['COL_NAME_DESC'];
				$COL_VALIDATION = "NULL";
				$REQUIRED_FLAG = $_POST['REQUIRED_FLAG'];
				$ACTIVE_FLAG = 'Y'; // $_POST['ACTIVE_FLAG'];
				$DISPLAY_ORDER = $_POST['DISPLAY_ORDER'];
				$COL_LENGTH = $_POST['COL_LENGTH'];
				$DATA_ENTRY_TYPE = $_POST['DATA_ENTRY_TYPE'];
				$DATA_SAMPLE = "N/A";
				$HTML_INPUT_TAG = "";
				$PHP_MANDATORY_CHECK = "";
				$PHP_DATATYPE_CHECK = "";
				$SYSTEM_FLAG = "N";
				$CATEGORY_NAME = "UNKNOWN";

				// Key_n_group has KEY AND GROUP seperated with ::. Split them into two variables.
				$KEY_N_GROUP = $_POST['DROPDOWN_LOV'];
				
				$array = explode('~',$KEY_N_GROUP); 
				$KEY_NAME = $array[0];

				$GROUP_NAME = $array[1];

				$LOV_SQL = "SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = '$GROUP_NAME' AND KEY_NAME = '$KEY_NAME'";
				
				$valid = true;
				
				// populate HTML_INPUT_TAG
				switch ($DATA_ENTRY_TYPE) {
					case "DROPDOWN":
						// $HTML_INPUT_TAG = '<option value="%s" %s>%s</option>';
						$HTML_INPUT_TAG = "";
				    break;
					case "TEXTBOX":
						$HTML_INPUT_TAG = '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($' . $DB_COL_NAME . ')?$' . $DB_COL_NAME . ':' . "''" . ';?>"  class="span4"></div>';
				    break;
				}
			
				// Populate PHP_MANDATORY_CHECK
				if ($REQUIRED_FLAG == "Y") {
					$PHP_MANDATORY_CHECK =  'if (empty($_POST["' . $DB_COL_NAME . '"])) {  $ErrorMsg .= "\n' . $DISPLAY_NAME . ' is required;<br>";  $valid = false;  } else { $' . $DB_COL_NAME . '= $_POST["' . $DB_COL_NAME . '"]; }';
				}
			
				//Using data type, enforce the data type validation by populating PHP_DATATYPE_CHECK
				switch ($DATA_TYPE) {
					case "INTEGER":
					case "DECIMAL":
					case "MONEY":
						$PHP_DATATYPE_CHECK =  'if (!is_numeric($_POST["' . $DB_COL_NAME . '"])) {  $ErrorMsg .= "\n' . $DISPLAY_NAME . ' must be a number;<br>";  $valid = false; } else { $' . $DB_COL_NAME . '= $_POST["' . $DB_COL_NAME . '"]; }';
						break;
					case "DATE":
						$PHP_DATATYPE_CHECK = '$dt = $_POST["' . $DB_COL_NAME . '"]; $array = explode("/",$dt);  $day = $array[0];  $month = $array[1];   $year = $array[2];  if(!checkdate($month, $day, $year))  {  $ErrorMsg .=  "' . $DISPLAY_NAME . '  must be in dd/mm/yyyy format;<br>";  $valid = false; } else { $' . $DB_COL_NAME . ' = $year . \'-\' . $month . \'-\' . $day; }';
					break;
					case "ALPHABET":
						$PHP_DATATYPE_CHECK =  'if (!ctype_alpha($_POST["' . $DB_COL_NAME . '"])) {  $ErrorMsg .= "\n' . $DISPLAY_NAME . ' must have only alphabets;<br>";  $valid = false; } else { $' . $DB_COL_NAME . '= $_POST["' . $DB_COL_NAME . '"]; }';					 
					break;
					case "ALPHANUMERIC":
						$PHP_DATATYPE_CHECK =  'if (!ctype_alnum($_POST["' . $DB_COL_NAME . '"])) {  $ErrorMsg .= "\n' . $DISPLAY_NAME . ' must have only alphabets and numbers;<br>";  $valid = false; } else { $' . $DB_COL_NAME . '= $_POST["' . $DB_COL_NAME . '"]; }';					 
					break;
					case "TEXT":
						$PHP_DATATYPE_CHECK = '$' . $DB_COL_NAME . '= $_POST["' . $DB_COL_NAME . '"];';
					break;
				}
				
				// Assign the right data types for DATA_TYPE
				switch ($DATA_TYPE) {
					case "INTEGER":
						if ($COL_LENGTH < 4) {
							$DATA_TYPE = "TINYINT";
						} else if ($COL_LENGTH > 3 && $COL_LENGTH <= 6) {
							$DATA_TYPE = "SMALLINT";
						}  else if ($COL_LENGTH > 6 && $COL_LENGTH <= 8) {
							$DATA_TYPE = "MEDIUMINT";
						}  else if ($COL_LENGTH > 8 && $COL_LENGTH <= 10) {
							$DATA_TYPE = "INT";
						}  else if ($COL_LENGTH > 10) {
							$DATA_TYPE = "BIGINT";
						}
					break;
					case "DECIMAL":
						if ($COL_LENGTH < 7) {
							$DATA_TYPE = "FLOAT";
						} else {
						$DATA_TYPE = "DOUBLE";
						}		
						break;
					case "MONEY":
						$DATA_TYPE = "DECIMAL(" . $COL_LENGTH . ",2)";
						break;
					case "ALPHABET":
						$DATA_TYPE = "VARCHAR(" . $COL_LENGTH . ")";
						//Set regexp for alpha
					case "ALPHANUMERIC":
						$DATA_TYPE = "VARCHAR(" . $COL_LENGTH . ")";
						//Set regexp for alphanumberic
					break;
					case "TEXT":
						$DATA_TYPE = "VARCHAR(" . $COL_LENGTH . ")";
					break;
							
					//default:
					//	echo "";
				}				
	
				// echo "Before db connect:  $DB_COL_NAME : Req_flag: $REQUIRED_FLAG  Display: $DISPLAY_ORDER Entry Type: $DATA_ENTRY_TYPE Table: $TABLE_NAME SubmenuId: $SUBMENU_ID" ;
				$pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			
                $sql = "INSERT INTO screen (
					DISPLAY_NAME
					,DB_COL_NAME
					,DATA_TYPE
					,COL_NAME_DESC
					,REQUIRED_FLAG
					,ACTIVE_FLAG
					,DISPLAY_ORDER
					,COL_VALIDATION
					,COL_LENGTH
					,DATA_ENTRY_TYPE
					,DATA_SAMPLE
					,LOV_SQL
					,HTML_INPUT_TAG
					,PHP_MANDATORY_CHECK
					,PHP_DATATYPE_CHECK
					,TABLE_NAME
					,SYSTEM_FLAG
					,CATEGORY_NAME
					,SUBMENU_ID)
					VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
					
				// echo "Before prepare" ;
                $q = $pdo->prepare($sql);
								// echo "prepare done; before exec" ;
                $q->execute(array($DISPLAY_NAME
								,$DB_COL_NAME
								,$DATA_TYPE
								,$COL_NAME_DESC
								,$REQUIRED_FLAG
								,$ACTIVE_FLAG
								,$DISPLAY_ORDER
								,$COL_VALIDATION
								,$COL_LENGTH
								,$DATA_ENTRY_TYPE
								,$DATA_SAMPLE
								,$LOV_SQL
								,$HTML_INPUT_TAG
								,$PHP_MANDATORY_CHECK
								,$PHP_DATATYPE_CHECK
								,$TABLE_NAME
								,$SYSTEM_FLAG
								,$CATEGORY_NAME
								,$SUBMENU_ID));
			
								// echo "exec done; before table exists check: " .  Database::$dbName;			
				/**  Check if table exists in the database; If not, then create the table, then alter the table with the new added column */
				$sql = "SELECT * 
				FROM information_schema.tables 
				WHERE table_schema =  '" . Database::$dbName . "' AND table_name = '" . trim($TABLE_NAME) . "'";
				
				// echo "Table exists check SQL: $sql";
				
				$query =  $pdo->prepare( $sql );
				$query->execute();
                $rows = $query->fetch(PDO::FETCH_NUM);
				if($rows == 0) {
					$sql = "create table ".$TABLE_NAME. "(insert_date DATETIME,
							update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
							id int(11) NOT NULL AUTO_INCREMENT, 
							PRIMARY KEY (id))
							";	
					// echo "Create table SQL: " . $sql;
					$result = $pdo->prepare($sql);
					$result->execute();	
                } // table is created or already exists
			
			    // Alter the table to add new column 
				$sql = "ALTER TABLE " . $TABLE_NAME . " ADD " . $DB_COL_NAME . " " . $DATA_TYPE;
				if ($REQUIRED_FLAG == "Y") {
				  $sql .= " NOT NULL";
				}
				//echo "Alter SQL: $sql";
				
                $q = $pdo->prepare($sql);
                $q->execute();

		// echo "before database connect";
		
		$target_screen_name = 'menu_' . trim($MENU_ID) . '_submenu_' . trim($SUBMENU_ID) . '.php';
		
		include($_SERVER['DOCUMENT_ROOT'].'/include/generate_screen_list.php');
		include($_SERVER['DOCUMENT_ROOT'].'/include/generate_screen_add.php');
		include($_SERVER['DOCUMENT_ROOT'].'/include/generate_screen_edit.php');
		include($_SERVER['DOCUMENT_ROOT'].'/include/generate_screen_delete.php');
				
		echo "<div class='alert alert-info'> Successfully Inserted. </div>";
			$header_var = "Location:listScreenMetadata.php?id=$SUBMENU_ID&menu_name=$MENU_NAME&submenu_name=$SUBMENU_NAME&table_name=$TABLE_NAME&menu_id=$MENU_ID";
	   		header($header_var);
			ob_end_flush();
            exit;
			ob_end_flush();

}
else // of if ( !empty($_POST))
{
		$SUBMENU_ID   = $_GET['submenu_id'];
		$TABLE_NAME   = $_GET['table_name'];
		$MENU_NAME    = $_GET['menu_name'];
		$SUBMENU_NAME = $_GET['submenu_name'];
		$MENU_ID      = $_GET['menu_id'];
} // end of post If
				

?>	





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
									<h3>Field Definition Form
									</h3>
								</div>                       
								<div class="span3">                                                                
									<div class="box-holder">
											
									</div>  
									<div class="box-holder">
												
												 
									</div>  
									<div class="box-holder">
										<a href="listScreenMetadata.php">
										<div class="box"><img src="../resources/images/e-close.png"/></br>Close</div></a>							
									</div>   
																														  
								</div>                       
							</div>                                    
							</div>	              
						</div>
                </div>
				<div class="row">
               
				<!-- Content -->
					<div class="span12">	
						<div class="widget">
							<div class="widget-header">
								<?php echo "<h3>Field Definition For '" . $MENU_NAME . "'->'". $SUBMENU_NAME . "'</h3>"; ?>	
							</div>
								<div class="widget-content">		   
									<div class="span4"><label>Display Name<font color="#FF0000"> *</font></label><input type="text" value="<?php echo !empty($DISPLAY_NAME)?$DISPLAY_NAME:'';?>" name="DISPLAY_NAME" id="DISPLAY_NAME" class="span4"></div>
									<div class="span4"><label>Description</label><input type="text" value="<?php echo !empty($COL_NAME_DESC)?$COL_NAME_DESC:'';?>" name="COL_NAME_DESC" id="COL_NAME_DESC" class="span4"></div>                               

									<div class="span4"><label>Required?<font color="#FF0000"> *</font></label>
										<select class="span4" name="REQUIRED_FLAG" id="REQUIRED_FLAG">	
											<option value="N">NO</option>
											<option value="Y">YES</option>
										</select>  		
									</div>
	
									<div class="span4"><label>Master/Details?<font color="#FF0000"> *</font></label>
										<select class="span4" name="MASTER_ATTR_FLAG" id="MASTER_ATTR_FLAG">	
											<option value="Y">MASTER</option>
											<option value="N">DETAIL</option>
										</select>  		
									</div>								

									<div class="span4"><label>Display Order<font color="#FF0000"> *</font></label><input type="text" value="<?php echo !empty($DISPLAY_ORDER)?$DISPLAY_ORDER:'';?>" name="DISPLAY_ORDER" id="DISPLAY_ORDER" class="span4"></div>


								<div class="span4"><label>Data Type<font color="#FF0000"> *</font></label>
									<select class="span4" name="DATA_TYPE" id="DATA_TYPE">	
										<option value="ALPHABET">ALPHABET</option>
										<option value="ALPHANUMERIC">ALPHANUMERIC</option>
										<option value="DATE">DATE</option>
										<option value="DECIMAL">DECIMAL</option>
										<option value="INTEGER">INTEGER</option>
										<option value="MONEY">MONEY</option>
										<option value="TEXT">TEXT</option>
									</select>  		
								</div>	
								
								<div id="FieldLengthLabel" class="span4"><label>Field Length<font color="#FF0000"> *</font></label><input type="text" value="<?php echo !empty($COL_LENGTH)?$COL_LENGTH:'';?>" name="COL_LENGTH" id="COL_LENGTH" class="span4"></div>
									
								<div class="span4"><label>Entry Type<font color="#FF0000"> *</font></label>
									<select class="span4" name="DATA_ENTRY_TYPE" id="DATA_ENTRY_TYPE">	
										<option value="TEXTBOX">TEXTBOX</option>
										<option value="DROPDOWN">DROPDOWN</option>
									</select>  		
								</div>

								<div id="dropdownLOVLabel" class="span4"  style="display: none;"><label>Dropdown List of Values<font color="#FF0000"> *</font></label>
								<?php 
											$pdo = Database::connect();
											$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$result = $pdo->prepare("SELECT DISTINCT CONCAT(KEY_NAME, ' --> ' , GROUP_NAME) AS dropdown_lov , CONCAT(KEY_NAME, '~' , GROUP_NAME) AS key_n_group
																	 FROM key_value 
																	 ORDER BY CONCAT(KEY_NAME, ' --> ' , GROUP_NAME)");
											$result->execute();
											Database::disconnect();	
											
											echo '<select autofocus  class="span4" name="DROPDOWN_LOV" id="DROPDOWN_LOV" style="display: none;">';
											// echo '<option>-- SELECT --</option>';												
											for($i=0; $row = $result->fetch(); $i++){																	
												echo "<option value=\"". $row['key_n_group'] . "\">" . $row['dropdown_lov'] . "</option>";
											}
											echo '</select>';  
								?>
								</div>
								
					
									<!-- This is to preserve the $_GET variables  -->
								<input name="SUBMENU_ID" type="hidden" value="<?php echo $SUBMENU_ID;?>">
								<input name="TABLE_NAME" type="hidden" value="<?php echo $TABLE_NAME;?>">
								<input name="MENU_NAME" type="hidden" value="<?php echo $MENU_NAME;?>">								
								<input name="SUBMENU_NAME" type="hidden" value="<?php echo $SUBMENU_NAME;?>">
								<input name="MENU_ID" type="hidden" value="<?php echo $MENU_ID;?>">

				
								<div class="span3"><label>&nbsp;</label><input type="submit" name="Add" value="Add" class="btn btn-info span3" /></div>		
						</div>                
						</div>
					</div>
				<!-- /Content --> 
                </div>
				
				<?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>
					<div class="dock-wrapper">    
							 <div class="navbar navbar-fixed-bottom">
								<div class="navbar-inner">
									<div class="container">                  
											<center>
												<div class="btn-group btn-group-justified">                      
								
													<a href="listScreenMetadata.php" class="btn btn-default">
													<img src="../resources/images/e-close.png"/><br>Close</a>		
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