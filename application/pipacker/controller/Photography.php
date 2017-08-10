<?php 
	namespace app\pipacker\controller;
	use think\Controller;
	/**
	* 
	*/
	class Photography extends Controller
	{
		
		public function index()
	    {
	    	// print_r($this) ;
	    	// 是去到view里面对应的login文件夹下面的index页面
	    	return $this->fetch();
	    }
	}
 ?>