<?php

namespace App\Models;

class Genre
{
    public $genre;
    public $arr=[];
    
    public function setGenre($arr){
        $this->arr=$arr;
    }
   
    
    public function genreadd($genre)
    {
        $this->genre = $genre;
        if(!empty($this->genre)){
            if(!in_array($this->genre, $this->arr)){
                    return 'added';
            }else{
                return 'exists';
            }
        }
    }

}