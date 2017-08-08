<?php
namespace app\admin\controller;

use think\Controller;

class Weibo extends Controller{

    public function index()
    {
      $weibo_list =  db("detailed")->paginate(10);

      $this->assign("weibo_list",$weibo_list);
       return $this->fetch();

    }
    
}



?>