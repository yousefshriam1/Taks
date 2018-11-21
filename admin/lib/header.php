<?php
	$env ="dev";
	$dsn ='mysql:host=localhost;dbname=school';
	$user='root';
	$pass='';
	try{
		$db= new PDO($dsn,$user,$pass);

	}
	catch(PDOExeption $e){
		if($env=='dev'){
			echo $e->getMessage();
									}
	die;
}
require_once("students.lib.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>

