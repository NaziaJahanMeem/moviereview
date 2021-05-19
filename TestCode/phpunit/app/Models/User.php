<?php

namespace App\Models;

class User
{
	public $name;

	public $userid;

	public $email;

    public $dob;
    
    public $pass;
    
    public $user_pass;
	public function setName($name)
	{
		$this->name = trim($name);

	}

	public function getName()
	{
		return $this->name;
	}


	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}
    public function setUserid($userid)
	{
		$this->userid = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}
    public function setDob($dob)
	{
		$this->dob = $dob;
	}

	public function getDob()
	{
		return $this->dob;
	}
    public function setPassword($pass)
	{
		$this->pass = $pass;
	}

	public function getPassword()
	{
		return $this->pass;
	}
	
    
    public function Signup( $name, $email, $userid, $pass ){
     
         
            $this->name = $name;
            $this->userid = $userid;
            $this->email = $email;
            $this->pass = $pass;
           
		   if(!empty($this->name) && !empty($this->userid) && !empty($this->email) && !empty($this->pass)){

                          
               return 'signed up successfully.' ;                   

            }
            else{
                return  'Fill up properly';
            } 
      
    }
     public function login($userid, $pass){
        
        
            $this->userid = $userid;
            $this->pass = $pass;

            
            if(!empty($this->userid)){

                
                if($this->pass == $this->getPassword()){
                    
                     return 'Login Successful';
                }
                else{
                    return 'Invalid password';
                }
                
            }
            else{
                return 'Fill up properly';
            }    

    }
    public function setUserLeggedIn($userid){
        
            $this->userid = $userid;
            
    }
    public function getUserLeggedIn(){
        
            
            if(!empty($this->userid)){
  
                if($this->userid==$this->getUserid()){
                    
                    return TRUE;
                }
                
            }
            else{
                return 'User Not LoggedIn';
            }
    }
    public function logout($userid){
        
        
            $this->userid = $userid;
            
            if(!empty($this->userid)){
                if($this->getUserLeggedIn()==TRUE){
                     return 'Loggedout Successfully';
                }else{
                    return 'User Not LoggedIn';
                }
                
            }
            else{
                return 'User Not LoggedIn';
            }
    }
    
}