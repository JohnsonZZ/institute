<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$list = M('project')->order('time')->limit(6)->select();
		$this->assign('list',$list);
        $this->display();
	}
}