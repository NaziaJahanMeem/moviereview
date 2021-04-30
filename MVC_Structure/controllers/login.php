<?php
class Login extends Controller
{
	function index()
	{
		$data['name']="Login";
		if(isset($_POST['email']))
 	 	{
 	 		$user = $this->loadModel("user");
 	 		$user->signup($_POST);

 	 	}elseif(isset($_POST['user_id']) && !isset($_POST['email'])){

 	 		$user = $this->loadModel("user");
 	 		$user->login($_POST);
 	 	}
		$this->view("login",$data);
	}
	
	
}