<?php
 include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');

 $username= $_POST['userName1'];
 $firstquestion=$_POST['firstquestion1'];
 $secondquestion=$_POST['secondquestion1'];
 $thridquestion=$_POST['thridquestion1'];	
	if(!empty($username))
{
                   
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query ="SELECT * FROM USER_INFO WHERE PASSWORD_ANSWER1='$firstquestion' AND PASSWORD_ANSWER2='$secondquestion' AND PASSWORD_ANSWER3='$thridquestion' AND USER_NAME ='$username'";
	$result = $pdo->prepare($query);
	$result->execute();
	$row = $result->fetch();
                   
	$usernames=$row['USER_NAME'];
				 
	 if($row>0){
	 echo $usernames;
	 }
	 else
	 {
		 echo "error";
	 }
	Database::disconnect();	
				
}		
	
?>
