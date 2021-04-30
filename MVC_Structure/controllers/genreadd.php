<?php
Class Genreadd extends Controller
{
	function index()
	{
		$data['name']="Genreadd";
		if(isset($_POST['name']))
 	 	{
 	 		$genre = $this->loadModel("genre");
 	 		$genre->genreadd($_POST);

 	 	}
		$this->view("genreadd",$data);
	}
	
}