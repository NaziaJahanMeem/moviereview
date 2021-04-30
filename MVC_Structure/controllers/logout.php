<?php<?php
class Logout extends Controller
{
	function index()
	{
		
 	 	$user=$this->loadModel('user');
		$user->logout();
	}
	
	
}