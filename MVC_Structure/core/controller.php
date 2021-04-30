<?php
Class Controller
{
	protected function view($view,$data = [])
	{
		if(file_exists("../MVC_Structure/views/". $view.".php" ))
		{
			include "../MVC_Structure/views/". $view.".php";
		}
		else {
			include "../MVC_Structure/views/404.php";
		}
	}
	protected function loadModel($model)
	{
		if(file_exists("../MVC_Structure/model/". $model.".php" ))
		{
			include "../MVC_Structure/model/". $model.".php";
			return $model= new $model();
		}
		return false;
	}
}
