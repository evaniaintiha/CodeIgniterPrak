<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		return view('main/index/pageindex');
	}


    
    
    public function btd()
	{
		return view('main/jualan/pagejualan');
	}
	public function admin()
	{
		return view('main/layout/pageadmin');
	}
	public function about()
	{
		return view('main/about/pageabout');
	}
	
	
}
