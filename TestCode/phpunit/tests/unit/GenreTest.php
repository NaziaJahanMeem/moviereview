<?php

class GenreTest extends \PHPUnit\Framework\TestCase
{

	protected $genre;
    
    public function setUp() :void 
	{
		
		$this->genre = new \App\Models\Genre;
		
	}

	
	public function testGenreadd()
	{
        $genre = new \App\Models\Genre;
        $arr = array('Horror', 'Comedy');
        $genre->setGenre($arr);
        $name='Action';
		$this->assertEquals($genre->genreadd($name),'added');
	}
}
