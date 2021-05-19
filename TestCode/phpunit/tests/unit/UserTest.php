<?php

class UserTest extends \PHPUnit\Framework\TestCase
{

	protected $user;

	public function setUp() :void 
	{
		
		$this->user = new \App\Models\User;
		
	}


	public function testName()
	{
		$this->user->setName('Ani');

		$this->assertEquals($this->user->getName(), 'Ani');
	}


	public function testEmail()
	{
		$user = new \App\Models\User;

		$user->setEmail('ani@gmail.com');

		$this->assertEquals($user->getEmail(), 'ani@gmail.com');
	}
    public function testUserid()
	{
		$user = new \App\Models\User;

		$user->setUserid('ani12');

		$this->assertEquals($user->getUserid(), 'ani12');
	}
    public function testPassword()
	{
		$user = new \App\Models\User;

		$user->setPassword('123');

		$this->assertEquals($user->getPassword(), '123');
	}

    public function testDateofBirth()
	{
		$user = new \App\Models\User;

		$user->setDob('2000');

		$this->assertEquals($user->getDob(), '2000');
	}
     public function testSignin()
	{
		$user = new \App\Models\User;
        $name = 'ani';
		$userid = 'ani12';
        $email = 'ani@gmail.com';
		$pass = '123';
		$user->setName('ani');
        $user->setUserid('ani12');
        $user->setEmail('ani@gmail.com');
		$user->setPassword('123');
		$this->assertEquals($user->Signup($name,$email,$userid, $pass), 'signed up successfully.');

	}
	public function testLogin()
	{
		$user = new \App\Models\User;
		$userid = 'ani12';
		$pass = '123';
		$user->setUserid('ani12');
		$user->setPassword('123');
		$this->assertEquals($user->login($userid, $pass), 'Login Successful');

	}
    public function testIfUserLoggedIn()
	{
		$user = new \App\Models\User;
		$userid = 'ani12';
		
		$user->setUserLeggedIn('ani12');
		
		$this->assertEquals($user->getUserLeggedIn(), TRUE);

	}
    public function testLogout()
	{
		$user = new \App\Models\User;
		$userid = 'ani12';
		$user->setUserLeggedIn('ani12');
		$this->assertEquals($user->logout($userid), 'Loggedout Successfully');

	}
   
}