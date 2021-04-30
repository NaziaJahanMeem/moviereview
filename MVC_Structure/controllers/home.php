<?php
Class Home extends Controller
{
	function index()
	{
		$data['page_title'] = "Home";
		$viewfeatured = $this->loadModel("viewfeatured");
 	 	$result = $viewfeatured->get_all();
		$data['viewfeatured']=$result;
		
		$this->view("home",$data);
	}
	
}