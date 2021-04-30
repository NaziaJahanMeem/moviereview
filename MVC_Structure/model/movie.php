<?php
Class Movie
{
	function movieadd($POST,$FILES)
	{
		$DB = new Database();
		$_SESSION['error']="";
		$allowed[]="image/jpeg";
		$allowed[]="image/png";
		if(isset($POST['name']) && isset($FILES['file']))
		{
			if($FILES['file']['name']!="" && $FILES['file']['error']==0 && in_array($FILES['file']['type'],$allowed))
			{
				$folder="upload/";
				if(!file_exists($folder))
				{
					mkdir($folder,0777,true);
				}
				$destination= $folder. $FILES['file']['name']; 
				move_uploaded_file($FILES['file']['tmp_name'], $destination);
			}else
			{
				$_SESSION['error']="Details Can not be sent";
			}
			if($_SESSION['error']=="")
			{
				$arr['name']=$POST['name'];
				
				
				$arr['rating']=$POST['rating'];
					
				$arr['release_date']=$POST['release_date'];
				$arr['plot']=$POST['plot'];
				$arr['image']=$destination;
				
				$name ="INSERT INTO movie (name,rating,release_date,plot,image) VALUES (:name,:rating,:release_date,:plot,:image);";
					
				$data = $DB->write($name,$arr);
					
				if($data)
				{
					$_SESSION['error']="Movie is added successfully";
					header("Location:". ROOT . "movieadd");
					die;
				}else{
					$_SESSION['error']="Movie was added previously";
					header("Location:". ROOT . "movieadd");
					die;
				}
			}
		}
	}
}
