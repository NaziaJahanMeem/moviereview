<?php
Class Adminedit
{
	
	function get_user()
	{
		
		$query = "select * from user where role<2"; 
		$DB= new Database();
		$data=$DB->read($query);
		if(is_array($data))
		{
		
			
			return $data;
		}
		return false;
	}
	function get_movie()
	{
		
		$query = "select * from movie"; 
		$DB= new Database();
		$data=$DB->read($query);
		if(is_array($data))
		{
		
			
			return $data;
		}
		return false;
	}
	function user($POST)
	{
		$DB = new Database();
		$_SESSION['error']="";
		if(isset($POST['edit_btn']))
		{	$update=$POST['update'];
			$edit_id=$POST['edit_id'];
			
			$arr['update']=$POST['update'];
			$arr['edit_id']=$POST['edit_id'];
			$query ="UPDATE user SET role='$update' WHERE user_id='$edit_id'";
			
			$data = $DB->write($query,$arr);
			
			if($data){
				
				header("Location:". ROOT . "admin");
				die;
			}
			}else
			{
			
				header("Location:". ROOT . "admin");
				die;
			}
	}
	function movie($POST)
	{
		$DB = new Database();
		$_SESSION['error']="";
		if(isset($POST['edit_btn2']))
		{	$update2=$POST['update2'];
			$permission=$POST['permission'];
			
			$arr['update2']=$POST['update2'];
			$arr['permission']=$POST['permission'];
			$query ="UPDATE movie SET feature='$update2' WHERE name='$permission'";
			
			$data = $DB->write($query,$arr);
			
			if($data){
				
				header("Location:". ROOT . "admin");
				die;
			}
			}else
			{
			
				header("Location:". ROOT . "admin");
				die;
			}
	}
	function dlt($POST)
	{
		$DB = new Database();
		$_SESSION['error']="";
		if(isset($POST['deletebtn']))
		{	$arr['dlt'] = $_POST['delete'];
			$u = $_POST['delete'];
			$sql = "DELETE FROM movie WHERE name='$u'";
			
			$data = $DB->write($sql,$arr);
			
			if($data){
				
				header("Location:". ROOT . "admin");
				die;
			}
			}else
			{
			
				header("Location:". ROOT . "admin");
				die;
			}
	}
}