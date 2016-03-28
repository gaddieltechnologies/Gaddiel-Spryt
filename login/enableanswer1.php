<?php
session_start();
ob_start();
 include($_SERVER['DOCUMENT_ROOT'].'/include/connection.php');
 $username= $_SESSION['user'];
 $firstquestion=$_POST['firstquestion1'];
 $secondquestion=$_POST['secondquestion1'];
 $thridquestion=$_POST['thridquestion1'];	
	if(!empty($thridquestion))
{
	   
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query ="SELECT * FROM USER_INFO WHERE PASSWORD_ANSWER1='$firstquestion' AND PASSWORD_ANSWER2='$secondquestion' AND PASSWORD_ANSWER3='$thridquestion' AND USER_NAME ='$username'";
	$result = $pdo->prepare($query);
	$result->execute();
	$row = $result->fetch();
	$thirdanswer=$row['PASSWORD_ANSWER3'];				 
	if($row>0)
	    {
	        echo $thirdanswer;
	    }
	else
	   { 
           echo "error";
	   }
	Database::disconnect();	
}
?>
