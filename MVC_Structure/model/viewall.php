<?php
Class Viewall
{
	function get_all()
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
}