<?php
Class Allmovies extends Controller
{
	function index()
	{
		$data['page_title'] = "Allmovies";
		$viewall = $this->loadModel("viewall");
 	 	$result = $viewall->get_all();
		$data['viewall']=$result;
		
		$this->view("allmovies",$data);
	}
	
}