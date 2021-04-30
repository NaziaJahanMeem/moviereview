<?php
Class Database
{
	public function db_connect() 
	{
		try{
			$string=DB_TYPE .":host=".DB_HOST.";dbname=".DB_NAME.";";
			return $db= new PDO($string,DB_USER,DB_PASS);
			
		}catch(PDOExecption $e)
		{
			die($e->getMessage());
		}
	}	
	public function read($query,$data=[]) 
	{
		$DB= $this->db_connect();
		
		$stm= $DB->prepare($query);
		if(count($data)==0)
		{
			$stm=$DB->query($query);
			$check=0;
			if($stm)
			{
				$check=1;
			}
		}else{
			$check=$stm->execute($data);
		}
		
		if($check)
		{
			$data = $stm->fetchAll(PDO::FETCH_OBJ);
			if(is_array($data) && count($data)>-1)
			{
				return $data;
			}else{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	public function write($query,$data=[]) 
	{
		$DB= $this->db_connect();
		$stm= $DB->prepare($query);
		if(count($data)==0)
		{
			$stm= $DB->query($query);
			$check=0;
			if($stm)
			{
				$check=1;
			}
		}else{
			$check=$stm->execute($data);
		}
		
		if($check)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}