<?php
Class Viewfeatured
{
	function get_all()
	{
		
		$query = "select * from movie where feature='YES' limit 6"; 
		$DB= new Database();
		$data=$DB->read($query);
		if(is_array($data))
		{
		
			
			return $data;
		}
		return false;
	}
}