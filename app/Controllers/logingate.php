<?php namespace App\Controllers;

class logingate extends BaseController
{
	public function login()
	{
		return view ('gate/login');
    }
    
    public function fungsi_login(){
        $email= $this->request->getVar('email');
        $password= $this->request->getVar('password');
        if($email=="evania.intiha@yahoo.com"&&$password=="admin")
        {
            return redirect()->to('/');
        }else{
            return redirect()->to('/login');
        }
    }
    
    public function register(){
        return view('Gate/register');
    }
    public function admin() {
        return view('Gate/admin');
    }
}