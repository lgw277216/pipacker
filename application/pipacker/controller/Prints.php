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
	    	
	    	$pp_list =  db("Content")->paginate(4);
	    	$pp_json = $pp_list->all();
	    	// print_r($pp_list);
	    	foreach ($pp_json as $key => $value) {
	    		$tags = explode(',',$value['content_type']);
	    		$pp_json[$key]['content_type'] =$tags;
	    	}    	
	    	$json = json_encode($pp_json);
	    	$this->assign("pp_list",$pp_list);
	    	$this->assign('json_pp',$json);
	    	$this->assign("tags",$tags);
	    	return $this->fetch();
	    }
	    public function pgskill(){
	    	$pp_list =  db("Content")->paginate(4);
	    	$this->assign("pp_list",$pp_list);
	    	return $this->fetch('pgskill');
	    }
	    public function browse(){
	    	$id = input('id');
	    	$ew = input('ew');
	    	if(1==$ew){
	    		$pic = db("Content")->order('content_id desc')->where("content_id<$id")->limit(1)->find();
	    		// print_r($pic);
	    	}else if(0==$ew){
	    		$pic = db("Content")->order('content_id asc')->where("content_id>$id")->limit(1)->find();
	    	}
	    	if(!empty($pic)){	
		    	$tags = explode(',',$pic['content_type']);
		    	$pic['content_type'] = $tags;
		    	$pic['has'] = 1;
		    	return json_encode($pic);
	    	}else{
	    		$pic['has'] = 0;
	    		return json_encode($pic);
	    	}
	    }
	}
 ?>