<?php
Class Signup extends Controller
{
	function index()
	{
		$data['name']="Signup";
		
		if(isset($_POST['email']))
 	 	{
 	 		$user = $this->loadModel("user");
 	 		$user->signup($_POST);

 	 	}
		$this->view("signup",$data);
	}
	
}