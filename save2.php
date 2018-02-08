<?php
class save2{


	public function indexAction() {
		$email = $_POST['email'];
		$content = $_POST['content'];
		$name = $_POST['name'];


		$result = saveMessage($email, $content, $name);

		if($result){
			return json_encode(array(
				'code'=>200,
				'message'=>"we have received your message"
			));
		}else{
			return json_encode(array(
			'code'=>400,
			'message'=>"Something wrong"
			));
		}
	}
}
			


?>
