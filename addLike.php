<?php

class addLike{


	public function indexAction(){
		$id = $_POST['id'];
	
		$result = addLikes($id);

		if($result){
			return json_encode(array(
					'code'=>200,
					'message'=>"+1"
				));
			}else{
				return json_encode(array(
					'code'=>400,
					'message'=>"+0"
				));
		}

	}
}




?>