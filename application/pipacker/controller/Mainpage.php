<?php 
	namespace app\pipacker\controller;
	use think\Controller;
	/**
	* 
	*/
	class Mainpage extends Controller
	{
		
		public function index()
	    {
	    	return $this->fetch('/index');
	    }
	}
 ?>