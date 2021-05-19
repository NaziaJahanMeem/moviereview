<?php

class ViewAllTest extends \PHPUnit\Framework\TestCase
{

	protected $viewall;
    
    
    public function setUp() :void 
	{
		
		$this->viewall = new \App\Models\ViewAll;
		
	}

	
	public function testViewAllMovies()
	{
        $viewall = new \App\Models\ViewAll;
        $arr = array('Horror', 'Comedy');
		$this->assertEquals($this->viewall->getAllmovie($arr),$arr);
	}
}