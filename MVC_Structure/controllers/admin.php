<?php
Class Admin extends Controller
{
	function index()
	{
		$data['page_title'] = "Admin";
		$adminedit = $this->loadModel("adminedit");
 	 	$result1 = $adminedit->get_user();
		$result2 = $adminedit->get_movie();
		$data['adminedit']=$result1;
		$data['movieedit']=$result2;
		if(isset($_POST['edit_btn']))
 	 	{
 	 		
 	 		$adminedit->user($_POST);

 	 	}
		if(isset($_POST['edit_btn2']))
 	 	{
 	 		
 	 		$adminedit->movie($_POST);

 	 	}
		if(isset($_POST['deletebtn']))
 	 	{
 	 		
 	 		$adminedit->dlt($_POST);

 	 	}
		$this->view("admin",$data);
		
	}
	
}