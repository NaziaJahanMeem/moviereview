<?php
class Movieadd extends Controller
{
	
	function index()
	{
		
		if(isset($_POST['name']) && isset($_FILES['file']))
 	 	{
 	 		$movie = $this->loadModel("movie");
 	 		$movie->movieadd($_POST,$_FILES);
			

 	 	}
		$data['name']="movieadd";
		$this->view("movieadd",$data);
	}
	
}