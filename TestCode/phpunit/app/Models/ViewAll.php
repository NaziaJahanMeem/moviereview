<?php

namespace App\Models;

class ViewAll
{
    public $view;
    public $arr=[];
    
   
    
    public function getAllmovie($arr)
    {
        $this->arr=$arr;
        if(count($this->arr)>0){
            return $this->arr;
        }
    }

}