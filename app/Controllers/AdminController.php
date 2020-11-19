<?php namespace App\Controllers;

class AdminController extends BaseController{
    public function index() {

		echo view('Gate/admin');
}
}