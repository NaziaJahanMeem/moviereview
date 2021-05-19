<?php

namespace App\Models;

class Adminedit
{
    public $arr=[];
    public $user;
    public $feature;
    public $role;
    public function setUser($arr)
	{
		$this->arr = $arr;

	}
    public function getUser()
	{
		if(count($this->arr)>0){
            return TRUE;
        }else{
            return FALSE;
        }

	}
    public function setMovie($arr)
	{
		$this->arr = $arr;

	}
    public function getMovie()
	{
		if(count($this->arr)>0){
            return TRUE;
        }else{
            return FALSE;
        }

	}
    public function EditUser($user,$role)
	{
        $this->user=$user;
        $this->role=$role;
		if(!empty($this->user) && count($this->arr)>0){
            return 'User Role Changed';
        }else{
            return 'ERROR';
        }

	}
    
    public function EditFeaturedMovie($feature)
	{
        $this->feature=$feature;
		if(!empty($this->feature) && count($this->arr)>0){
            return 'Feature Changed';
        }else{
            return 'ERROR';
        }

	}
    public function DeleteMovie($movie)
	{
        $this->movie=$movie;
		if(!empty($this->movie) && !in_array($this->movie, $this->arr)){
            
            return 'Movie is deleted';
        }else{
            return 'ERROR';
        }

	}
}
