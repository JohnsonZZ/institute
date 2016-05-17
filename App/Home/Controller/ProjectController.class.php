<?php
namespace Home\Controller;
use Think\Controller;
class ProjectController extends Controller {
    public function index(){
		$list = M('project')->order('time')->select();
		$this->assign('list',$list);
        $this->display();
	}
	public function theme(){
		$data['id'] = I('get.id');
		$list = M('project')->where($data)->find();
		$this->assign($list);
        $this->display();
	}
}