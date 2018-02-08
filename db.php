<?php
function saveMessage($email, $content, $name){
	$conn = new PDO("mysql:host=localhost;dbname=project;charset=utf8mb4","root","root");
	$stmt = $conn->prepare("INSERT INTO message(email, content, name) VALUES (:email, :content, :name)");
	$result = $stmt->execute(
		array(
		":email"=>$email,
		":content"=>$content,
		":name"=>$name
		)
	);

	return $result;
}

function addLikes($id){
	$conn = new PDO("mysql:host=localhost;dbname=project;charset=utf8mb4","root","root");
	$stmt = $conn->prepare("UPDATE city SET likes = likes+1 WHere id=:id");
	$result = $stmt->execute(
		array(
		":id"=>$id	
		)
	);
	return $result;
}






?>