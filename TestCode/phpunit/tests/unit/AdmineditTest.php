<?php

class AdmineditTest extends \PHPUnit\Framework\TestCase
{

	protected $adminedit;
    
    public function setUp() :void 
	{
		
		$this->adminedit = new \App\Models\Adminedit;
		
	}
    public function testGetUserInfo()
	{
        $adminedit = new \App\Models\adminedit;
        $arr = array('ani', 'onee' , 'nazia');
		$this->adminedit->setUser($arr);

		$this->assertEquals($this->adminedit->getUser(), TRUE);
	}
    public function testGetMovieInfo()
	{
        $adminedit = new \App\Models\adminedit;
        $arr = array('Fight Club', 'The Godfather' , 'Whiplash');
		$this->adminedit->setMovie($arr);

		$this->assertEquals($this->adminedit->getMovie(), TRUE);
	}
    public function testIfAdminCanEditUser()
	{
        $adminedit = new \App\Models\adminedit;
        $arr = array(array('oni','1'), array('ani','0'));
        $this->adminedit->setUser($arr);
		$this->assertEquals($this->adminedit->EditUser('ani','1'), 'User Role Changed');
	}
    public function testIfAdminCanEditFeaturedMovies()
	{
        $adminedit = new \App\Models\adminedit;
        $arr = array(array('Fight Club','Yes'), array('The Godfather','No'));
        $this->adminedit->setMovie($arr);
		$this->assertEquals($this->adminedit->EditFeaturedMovie('FightClub','No'), 'Feature Changed');
	}
    public function testIfAdminCanDeleteMovies()
	{
        $adminedit = new \App\Models\adminedit;
        $arr = array('Fight Club', 'The Godfather' , 'Whiplash');
        $this->adminedit->setMovie($arr);
		$this->assertEquals($this->adminedit->DeleteMovie('FightClub'), 'Movie is deleted');
	}
}