<?php
	header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
	require_once("./db.php");

	
		$email = $_POST['email'];
		$content = $_POST['content'];
		$name = $_POST['name'];


		$result = saveMessage($email, $content, $name);

		if($result){
			echo json_encode(array(
				'code'=>200,
				'message'=>"we have received your message"
			));
		}else{
			echo json_encode(array(
			'code'=>400,
			'message'=>"Something wr"
			));
		}
			


?>
