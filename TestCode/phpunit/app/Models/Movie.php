<?php

namespace App\Models;

class Movie
{
    public $movie;
    public $name;
    public $release_date;
    public $rating;
    public $plot;
    public $poster;
    public $arr=[];
    
    public function checkMovie($arr){
        $this->arr=$arr;
    }
   
    public function setName($name)
	{
		$this->name = trim($name);

	}

	public function getName()
	{
		return $this->name;
	}

    public function setReleaseDate($release_date)
	{
		$this->release_date = trim($release_date);

	}

	public function getReleaseDate()
	{
		return $this->release_date;
	}
    public function setRating($rating)
	{
		$this->rating = trim($rating);

	}

	public function getRating()
	{
		return $this->rating;
	}
	public function setPlot($plot)
	{
		$this->plot = $plot;
	}

	public function getPlot()
	{
		return $this->plot;
	}
    public function setPoster($poster)
	{
		$this->poster = $poster;
	}
    public function getPoster()
	{
		return $this->poster;
	}
    public function Movieadd($name,$release_date,$rating,$plot,$poster)
    {
        $this->name = $name;
        $this->release_date = $release_date;
        $this->rating = $rating;
        $this->plot = $plot;
        $this->poster = $poster;
        if(!empty($this->name) && !empty($this->plot) && !empty($this->poster)){
            if(!in_array($this->name, $this->arr)){
                    return 'Movie Added Successfully';
            }else{
                return 'Movie already exists';
            }
        }else{
            
            return 'please fill up properly';
        }
    }

}