<?php
Class User
{
	function login($POST)
	{
		$DB = new Database();
		$_SESSION['error']="";
		if(isset($POST['user_id']) && isset($POST['password']))
		{
			$arr['user_id']= $POST['user_id'];
			$arr['password']= $POST['password'];
			
			$query = "select * from user where user_id = :user_id && password = :password limit 1";
			$data = $DB->read($query,$arr);
			
			if($data)
			{
				$_SESSION['user_id'] = $data[0]->user_id;
				$_SESSION['role'] = $data[0]->role;
				
				
				header("Location:". ROOT . "home");
				die;
				
			}else
			{
				
				$_SESSION['error'] = "wrong username or password";
				header("Location:". ROOT . "login");
				die;
			}
		}else
		{
			
				$_SESSION['error'] = "please enter a valid username and password";
				header("Location:". ROOT . "login");
				die;
		}
		
	}
	function signup($POST)
	{
		$DB = new Database();
		$_SESSION['error']="";
		if(isset($POST['user_id']) && isset($POST['password']))
		{
			
			$arr['user_id']=$POST['user_id'];
			
			
			$name ="select * from user where user_id = :user_id ";
			
			$data = $DB->read($name,$arr);
			if(!$data){
				$userid= $_POST['user_id'];
				$password= $_POST['password'];
				if($userid=="" || $password="") {
					$_SESSION['error']="Username or password empty";
					header("Location:". ROOT . "signup");
					die;
				}
				$arr['name']=$POST['name'];
				$arr['email']=$POST['email'];
				$arr['dob']=$POST['dob'];
				$arr['password']= $POST['password'];
				$query ="insert into user (name,user_id,email,dob,password) values (:name,:user_id,:email,:dob,:password)";
				$data = $DB->write($query,$arr);
				if($data)
				{
					
					header("Location:". ROOT . "login");
					die;
				}
				
			}else
			{
				$_SESSION['error']="Username already exists";
				header("Location:". ROOT . "signup");
				die;
			}
		}
	}
	
	function check_login()
	{
		$DB = new Database();
		
		if(isset($_SESSION['user_id']))
		{

			$arr['user_id'] = $_SESSION['user_id'];

			$query = "select * from user where user_id = :user_id";
			$data = $DB->read($query,$arr);
			if(is_array($data))
			{
 				unset($_SESSION['role']); 
				unset($_SESSION['user_id']); 
				
				return true;
			}
		}

		return false;
	}
	function logout()
	{
		unset($_SESSION['role']);
		unset($_SESSION['user_id']);
		header("Location:". ROOT . "home");
		
	}
}