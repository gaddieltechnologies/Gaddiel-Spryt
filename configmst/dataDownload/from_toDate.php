<?php
 
				
				//$FromIdname=$_POST['txtFromIdname'];
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$result = $pdo->prepare("SELECT table_name,table_select_sql FROM submenu WHERE submenu_name='$submenu_name'");
				$result->execute();
				$row = $result->fetch();
				$tableName=$row['table_name'];
				$columnName=$row['table_select_sql'];
				$removeSelect = 'SELECT';
				$removeFrom = 'FROM';
				$addInsertDate = 'insert_date,';
				$addUpdateDate = 'update_date,';
				$columnNameRemovSel = str_replace($removeSelect, '', $columnName);
				$columnNameRemovFrom = str_replace($removeFrom, '', $columnNameRemovSel);
				$RemovTableNam = substr($columnNameRemovFrom, 0, -24);
				$RemovTableNam =$addUpdateDate." ".$RemovTableNam;
				$RemovTableNam =$addInsertDate." ".$RemovTableNam;				
				$splitColumnName = explode(',', $RemovTableNam);
				$count=count($splitColumnName);
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);				
				$results = $pdo->prepare("SELECT * FROM ".$tableName." WHERE DATE(update_date) >= IFNULL((str_to_date('$txtFromDateNam','%d-%b-%y')), DATE('update_date') ) AND DATE(update_date) <= IFNULL((str_to_date('$txtToDateNam','%d-%b-%y')), DATE(update_date) )");				
				$results->execute();
				Database::disconnect();
				
				
				$dt = new DateTime();
				$date = $dt->format("Y-m-d-H-i-s");
				$dte = new DateTime();
				$dated = $dte->format("d-M-y");
				$fileName='dataDownload';
                $fileNames = $fileName."".$date;
				$filename = "dataDownload".$date.".csv";
				$fp = fopen('php://output', 'w');
				
			header('Content-type: application/csv');
			header('Content-Disposition: attachment; filename='.$filename);
			
				fputcsv($fp, $splitColumnName);
			$csv = array();
	
			for($i=0;$row = $results->fetch(PDO::FETCH_NUM);$i++)
			{
				array_push($csv, $row);
			}
			foreach ($csv as $row) {
				fputcsv($fp, $row);
			}
				
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO download_log (Download_date,Download_filename,Table_name,Start_Update_Date,End_Update_Date,Last_Id) values(now(), ?, ?, (str_to_date('$txtFromDateNam','%d-%b-%y')), (str_to_date('$txtToDateNam','%d-%b-%y')), ?)";
				$q = $pdo->prepare($sql);
				$q->execute(array($fileNames,$tableName,$i));
				Database::disconnect();
			exit;		
?>				