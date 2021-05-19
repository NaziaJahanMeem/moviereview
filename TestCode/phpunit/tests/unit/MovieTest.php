<?php

class MovieTest extends \PHPUnit\Framework\TestCase
{

	protected $movie;
    
    public function setUp() :void 
	{
		
		$this->movie = new \App\Models\Movie;
		
	}
    public function testName()
	{
		$this->movie->setName('Whiplash');

		$this->assertEquals($this->movie->getName(), 'Whiplash');
	}


	public function testRating()
	{
		$this->movie->setRating('8.5/10');

		$this->assertEquals($this->movie->getRating(), '8.5/10');
	}
    public function testReleaseDate()
	{
		$this->movie->setReleaseDate('2014');

		$this->assertEquals($this->movie->getReleaseDate(), '2014');
	}
    public function testPlot()
	{
		$this->movie->setPlot('Andrew enrols in a music conservatory to become a drummer. But he is mentored by Terence Fletcher, whose unconventional training methods push him beyond the boundaries of reason and sensibility.');

		$this->assertEquals($this->movie->getPlot(), 'Andrew enrols in a music conservatory to become a drummer. But he is mentored by Terence Fletcher, whose unconventional training methods push him beyond the boundaries of reason and sensibility.');
	}
    public function testPoster()
	{
		$this->movie->setPoster('Whiplash.jpg');

		$this->assertEquals($this->movie->getPoster(), 'Whiplash.jpg');
	}
	
	public function testMovieadd()
	{
        $movie = new \App\Models\Movie;
        $arr = array('Fight Club', 'The Godfather' , 'The Lobster');
        $movie->checkMovie($arr);
        $name='Whiplash';
        $release_date='2014';
        $rating='8.5/10';
        $plot= 'Andrew enrols in a music conservatory to become a drummer. But he is mentored by Terence Fletcher, whose unconventional training methods push him beyond the boundaries of reason and sensibility.';
        $poster='whiplash.jpg';
		$this->assertEquals($movie->movieadd($name,$release_date,$rating,$plot,$poster),'Movie Added Successfully');
	}
}