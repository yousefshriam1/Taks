<?php

function getAllStudent(){

	global $db,$env;
	
	$sql ="SELECT * FROM students";
	$stm= $db->prepare($sql);
	if($stm->execute()){
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}
	else{
		if($env=='dev') {
			return "Erorr excute";
		}
		return false;
	}


}
function getStudentById($id){

	global $db;
	$sql ="SELECT * FROM students WHERE id=:id";
	$data=[':id'=>$id];
	$stm= $db->prepare($sql);
	if($stm->execute($data)){
		return $stm->fetch(PDO::FETCH_ASSOC);
	}
	else{
		if($env=='dev') {
			return "Erorr excute";
		}
		return false;
	}


}
function deleteStudentById($id){

	global $db,$env;
	$sql ="DELETE FROM students WHERE id=:id";
	$data=[':id'=>$id];
	$stm= $db->prepare($sql);
	$stm->execute($data);
	if($stm->rowCount()>0){
		return header('Location: index.php');
	}
	else{
		if($env=='dev') {
			return "Erorr excute";
		}
		return false;
	}


}

function insertStudent ($f_name,$l_name,$email){

	global $db,$env;
	$sql ="INSERT INTO students(f_name,l_name,email)
			VALUES (:f_name,:l_name,:email)";


	$data=[':f_name'=>$f_name,
			'l_name'=>$l_name,
			'email'=>$email];
	$stm= $db->prepare($sql);
	if($stm->execute($data)){
		return $db->lastInsertId();
	}
	else{
		if($env=='dev') {
			return "Erorr excute";
		}
		return false;
	}


}
function updateStudent($id,$f_name,$l_name,$email){

	global $db;
	$sql ="UPDATE students 
			SET f_name=:f_name,
				l_name=:l_name,
				email=:email
				WHERE id=:id";


	$data=[':f_name'=>$f_name,
			'l_name'=>$l_name,
			'email'=>$email,
			'id'=>$id
		];
	$stm= $db->prepare($sql);
	if($stm->execute($data)){
		return true;
	}
	else{
		if($env=='dev') {
			return "Erorr excute";
		}
		return false;
	}


}

?>