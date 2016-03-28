<?php
session_start();
ob_start();
$path =$_SERVER['DOCUMENT_ROOT'].'/spryt/';
if(session_destroy())
{
//header("Location:http://spryt.gaddieltech.com/index.php");
header("Location:http://127.0.0.1/spryt/index.php");
}
?>