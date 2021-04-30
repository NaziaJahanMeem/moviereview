<?php
Class Genre
{
	function genreadd($POST)
	{
		$DB = new Database();
		$_SESSION['error']="";
		if(isset($POST['name']))
		{
			$arr['name']=$POST['name'];
			$name= $_POST['name'];
			$query ="INSERT INTO genre (name) VALUES (:name);";
			
			$data = $DB->read($query,$arr);
			if(is_array($data)==0)
			{
				
				$_SESSION['error'] = "Genre was added previously";
				
			}else{
				
				$data = $DB->write($query,$arr);
				$_SESSION['error'] = "Genre Added Successfully";
			}
		}else
		{
			
				$_SESSION['error'] = "please enter a valid genre";
				
		}
	
	}
	
}