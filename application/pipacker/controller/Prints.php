<?php 
	namespace app\pipacker\controller;
	use think\Controller;
	/**
	* 
	*/
	class Prints extends Controller
	{
		
		public function index()
	    {
	    	return $this->fetch('pgskill');
	    }
	}
 ?>